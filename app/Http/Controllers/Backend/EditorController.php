<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Editor;
use App\Models\Journal;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class EditorController extends Controller
{

    public function index()
    {
        $editors = Editor::with('journals')->get();
        return view('backend.editors.index')->with([
            'editors' => $editors
        ]);
    }


    public function create()
    {
        $countries = Country::all();
        return view('backend.editors.create')->with([
            'countries' => $countries
        ]);
    }


    public function store(Request $request){

        $request->validate([
            'country' => 'required|numeric',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:editors',
            'contact_number' => 'required|string|max:60|unique:editors',
            'departmental_address' => 'string|required',
        ]);

        is_null($request->status) ? $status = 0 : $status = $request->status;

        $result = Editor::create([
            'country_id' => $request->country,
            'name' => $request->name,
            'email' => $request->email,
            'contact_number' => $request->contact_number,
            'departmental_address' => $request->departmental_address,
            'status' => $status,
        ]);

        if($result){
            $alert = true;
            $color = 'teal';
            $message = 'New Editord Added successfully.';
        }else{
            $alert = true;
            $color = 'orange';
            $message = 'Editor not added';
        }
        return $this->alert($alert, $color, $message);


    }

    public function show($id)
    {
        $editor = Editor::with(['journals', 'country'])->findOrFail($id);
        return view('backend.editors.show')->with([
            'editor' => $editor
        ]);

    }


    public function edit($id)
    {
        $journals = Journal::all();
        $countries = Country::all();
        $editor = Editor::where('id', $id)->with('journals')->first();

        return view('backend.editors.edit')->with([
            'countries' => $countries,
            'editor' => $editor,

        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'country' => ['required', 'numeric'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('editors')->ignore($id)],
            'contact_number' => ['required', 'string', 'max:60',  Rule::unique('editors')->ignore($id)],
            'departmental_address' => 'string|required',
        ]);

        is_null($request->status) ? $status = 0 : $status = $request->status;

        $editor = Editor::findOrFail($id);
        $result = $editor->update([
            'country_id' => $request->country,
            'name' => $request->name,
            'email' => $request->email,
            'contact_number' => $request->contact_number,
            'departmental_address' => $request->departmental_address,
            'status' => $status,
        ]);

        if($result){
            $alert = true;
            $color = 'teal';
            $message = 'Editor updated successfully.';
        }else{
            $alert = true;
            $color = 'orange';
            $message = 'Editor not updated';
        }
        return $this->alert($alert, $color, $message);
    }

    public function editEditorJournal($id){
        $journals = Journal::all();
        $editor = Editor::where('id', $id)->with('journals')->first();

        return view('backend.editors.assign')->with([
            'editor' => $editor,
            'journals' => $journals
        ]);
    }

    public function editorJournal(Request $request, $id){

       $editor = Editor::where(['id' => $id, 'status' => 1])->first();

       if(!is_null($editor)){
           $result =  $editor->journals()->sync($request->journals);
       }else{
           $no_user_find = true;
           $result = false;
       }

        if($result){
            $alert = true;
            $color = 'teal';
            $message = 'Journals assigned to editor successfully.';
        }elseif($no_user_find){

            $alert = true;
            $color = 'red';
            $message = 'Unable to assign journals to disabled editor. Journals can be assigned to only active editors.';

        }else{
            $alert = true;
            $color = 'orange';
            $message = 'Unable to assign journals to editor';
        }
        return $this->alert($alert, $color, $message);
    }

    public function destroy($id)
    {
        $result = Editor::where(['id' => $id, 'status' => 0])->delete();
        if($result){
            $alert = true;
            $color = 'green';
            $message = 'Editor deleted successfully.';
        }else{
            $alert = true;
            $color = 'orange';
            $message = 'Editor not deleted.';
        }
        return $this->alert($alert, $color, $message);
    }

    public function deleted(){
        $editors = Editor::onlyTrashed()->get();
        return view('backend.editors.deleted')->with('editors', $editors);
    }

    public function restore($id){
        $result = Editor::onlyTrashed()->where('id', $id)->restore();
        if($result){
            $alert = true;
            $color = 'teal';
            $message = 'Editor restored successfully.';
        }else{
            $alert = true;
            $color = 'orange';
            $message = 'Editor not restored.';
        }
        return $this->alert($alert, $color, $message);
    }

    public function permanentDelete($id){
        $result = Editor::onlyTrashed()->where('id', $id)->forceDelete();
        if($result){
            $alert = true;
            $color = 'teal';
            $message = 'Editor permanently deleted successfully.';
        }else{
            $alert = true;
            $color = 'orange';
            $message = 'Editor not deleted.';
        }
        return redirect()->back()->with([
            'alert' => $alert,
            'color' => $color,
            'message' => $message
        ]);
    }

    public function alert($alert, $color, $message){
        return redirect()->route('console.editors')->with([
            'alert' => $alert,
            'color' => $color,
            'message' => $message
        ]);
    }
}
