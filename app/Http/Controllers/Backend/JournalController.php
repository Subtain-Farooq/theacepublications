<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\File;
use Illuminate\Http\Request;
use App\Models\Journal;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use App\Models\Backend\Issue;

class JournalController extends Controller
{

    public function index()
    {
        $journals = Journal::with('currentIssue')->orderByDesc('id')->get();
        foreach($journals as $journal){
            if(!is_null($journal->currentIssue) && date('Y') != $journal->currentIssue->created_at->format('Y')){
                $journal->currentIssue->update([
                    'issue_status' => 0
                ]);
            }
        }

        $journals = Journal::with('currentIssue')->orderByDesc('id')->get();
        return view('backend.journals.index')->with('journals', $journals);
    }

    public function create()
    {
        $categories = Category::where('status', 1)->get();
        return view('backend.journals.create')->with([
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'category' => ['required'],
            'name' => ['required', 'string', 'max:255'],
            'issn' => ['required', 'string', 'max:60', 'unique:journals'],
            'frequency' => ['required', 'numeric', 'max:4'],
            'language' => ['required', 'string', 'max:60'],
            'description' => ['required', 'string'],
            'image' => ['required', 'image', 'max:512'],
        ]);

        $journal = Journal::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'issn' => $request->issn,
            'frequency' => $request->frequency,
            'language' => $request->language,
            'description' => $request->description,
            'status' => $request->save
        ]);

        $image = $request->file('image');

        if($request->hasFile('image') && $image->isValid()){
            $path = 'public/journals/images';
            $public_path = 'storage/journals/images/';
            $size = $image->getSize();

            $filename = Str::slug($request->name).'.'.$image->getClientOriginalExtension();
            $image->storeAs($path, $filename);

            $data = new File([
                'title' => $request->name,
                'name' => $filename,
                'path' => $public_path,
                'alt' => $request->name,
                'size' => $size
            ]);

            $journal->image()->save($data);
            $journal->categories()->attach($request->category);
        }

        return redirect()->route('console.journals')->with([
            'alert' => true,
            'color' => 'green',
            'message' => 'New journal added successfully.'
        ]);
    }

    public function show($id)
    {
        $journal = Journal::findOrFail($id);
        return view('backend.journals.show')->with('journal', $journal);
    }

    public function edit($id)
    {
        $categories = Category::where('status', 1)->get();
        $journal = Journal::with('categories')->findOrFail($id);
        return view('backend.journals.edit')->with([
            'journal' => $journal,
            'categories' => $categories
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'issn' => ['required', 'string', 'max:60', Rule::unique('journals')->ignore($id)],
            'frequency' => ['required', 'numeric', 'max:4'],
            'language' => ['required', 'string', 'max:60'],
            'description' => ['required', 'string'],
            'image' => ['image', 'max:512'],
        ]);

        ($request->status != 'published') ? $status = 'draft' : $status = $request->status;

        $journal = Journal::findOrFail($id);

        $result = $journal->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'issn' => $request->issn,
            'frequency' => $request->frequency,
            'language' => $request->language,
            'description' => $request->description,
            'status' => $status
        ]);

        $image = $request->file('image');

        if($request->hasFile('image') && $image->isValid()){

            $path = 'public/journals/images';
            $public_path = 'storage/journals/images/';
            $size = $image->getSize();
            $filename = Str::slug($request->name).'.'.$image->getClientOriginalExtension();

            if(isset($journal->image->name)){
                $old_file = $path.'/'.$journal->image->name;
                if(Storage::exists($old_file)){
                    Storage::delete($old_file);
                }
                $journal->image()->update([
                    'name' => $filename,
                    'path' => $public_path,
                    'size' => $size
                ]);
            }
            $image->storeAs($path, $filename);
    }

        return redirect()->route('console.journals')->with([
            'alert' => true,
            'color' => 'green',
            'message' => 'Journal updated successfully.'
        ]);
    }

    public function editJournalCategory($id){
        $categories = Category::all();
        $journal = Journal::where('id', $id)->with('categories')->first();

        return view('backend.journals.assign')->with([
            'categories' => $categories,
            'journal' => $journal
        ]);
    }

    public function journalCategory(Request $request, $id){

        $journal = Journal::where(['id' => $id])->first();

         if(!is_null($journal)){
             $result =  $journal->categories()->sync($request->categories);
         }else{
             $result = false;
         }

          if($result){
              $alert = true;
              $color = 'teal';
              $message = 'Journal categories updated successfully.';
          }else{
              $alert = true;
              $color = 'orange';
              $message = 'Unable to update journal categories';
          }
          return $this->alert($alert, $color, $message);
     }

    public function destroy($id)
    {
        $result = Journal::where(['id' => $id, 'status' => 'draft'])->delete();
        if($result){
            $alert = true;
            $color = 'green';
            $message = 'Journal deleted successfully.';
        }else{
            $alert = true;
            $color = 'orange';
            $message = 'Published journal cannot delete.';
        }
        return $this->alert($alert, $color, $message);
    }

    public function deleted(){
        $journals = Journal::onlyTrashed()->get();
        return view('backend.journals.deleted')->with('journals', $journals);
    }

    public function restore($id){
        $result = Journal::onlyTrashed()->where('id', $id)->restore();
        if($result){
            $alert = true;
            $color = 'teal';
            $message = 'Journal restored successfully.';
        }else{
            $alert = true;
            $color = 'orange';
            $message = 'Journal not restored.';
        }
        return $this->alert($alert, $color, $message);
    }

    public function currentIssue($id){
        $journal = Journal::where(['id' => $id])->with('currentIssue')->first();

        if(!is_null($journal->currentIssue) && date('Y') != $journal->currentIssue->created_at->format('Y')){
            $journal->currentIssue->update([
                'issue_status' => 0
            ]);
        }

        $journal = Journal::where(['id' => $id])->with('currentIssue')->first();

        return view('backend.journals.current-issue')->with([
            'journal' => $journal
        ]);
    }

    public function changeCurrentIssue(Request $request, $id){

        $request->validate([
            'issue' => 'required|numeric'
        ]);

        //$current_issue_no = Issue::where(['journal_id' => 2, 'issue_status' => 1])->first();
       // $vol = Issue::where('journal_id', $id)->select('year')->get();
        $vol = Issue::where('journal_id', $id)->select(['year', 'issue_number'])->get();
        $volume = $vol->unique('year')->count();


/*        if(!$vol->contains('issue_number', $request->issue) AND !$vol->contains('year', date('Y'))){
            return 'aaaa';
        }else{
            return 'dsdsdsds';
        }*/



        $journal = Journal::where('id', $id)->with('currentIssue')->first();

        if(is_null($journal->currentIssue)){
            $volume+=1;
            $journal->currentIssue()->create([
                'issue_number' => 1,
                'volume' => $volume,
                'issue_status' => 1,
                'year' => date("Y")
            ]);
            $result = 1;
        }else{

            if(!$vol->contains('issue_number', $request->issue) OR !$vol->contains('year', date('Y'))){
                $journal->currentIssue->update([
                    'issue_status' => 0
                ]);

                $journal->currentIssue()->create([
                    'issue_number' => $request->issue,
                    'volume' => $volume,
                    'issue_status' => 1,
                    'year' => date("Y")
                ]);
                $result = 1;
            }else{
                $result = 2;
            }

        }

        if($result == 1){
            $alert = true;
            $color = 'teal';
            $message = 'Issue assigned successfully.';
        }elseif ($result == 2){
            $alert = true;
            $color = 'orange';
            $message = 'Unable to assign issue this issue previously assigned in current year.';
        }
        else{
            $alert = true;
            $color = 'orange';
            $message = 'Unable to assign issue.';
        }
        return $this->alert($alert, $color, $message);


    }


    public function alert($alert, $color, $message){
        return redirect()->route('console.journals')->with([
            'alert' => $alert,
            'color' => $color,
            'message' => $message
        ]);
    }
}
