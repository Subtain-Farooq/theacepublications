<?php

namespace App\Http\Controllers\Frontend\Dashboard;

use App\Notifications\ManuscriptUploaded;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;
use App\Models\File;
use App\Models\Journal;
use Illuminate\Support\Facades\Auth;
use App\Models\Manuscript;
use App\Notifications\FilesUploaded;
use Illuminate\Notifications\Notifiable;
use App\Models\Backend\ConsoleUser;

class ManuscriptController extends Controller
{

    public function index()
    {
        return view('frontend.dashboard.manuscript.manage');
    }

    public function create()
    {
        $manuscript_types = Type::where('status', 1)->get();
        $journals = Journal::where('status', 'published')->get();

        return view('frontend.dashboard.manuscript.submit')->with([
            'journals' => $journals,
            'manuscript_types' => $manuscript_types
        ]);
    }


    public function store(Request $request)
    {

        $request->validate([
            'journal' => 'required|numeric',
            'title' => 'required|string|max:255',
            'manuscript_type' => 'required|numeric',
            'authors' => 'required|string',
            'abstract' => 'required|string|max:255',
            'documents' => 'required|max:10240',
            'documents.*' => 'mimetypes:application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/pdf,application/msword'

        ]);
        $str =  str_shuffle("ZAQWSXCDERFVBGTYHNMJUIKLOP");
        $code = substr($str, 22).'-'.rand(555,10000);

        $manuscript = Manuscript::create([
            'user_id' => Auth::id(),
            'journal_id' => $request->journal,
            'type_id' => $request->manuscript_type,
            'title' => $request->title,
            'code' => $code,
            'authors' => $request->authors,
            'abstract' => $request->abstract,
            'status' => 'submitted'
        ]);

        if ($request->hasFile('documents')) {
            $path = 'public/documents';
            $public_path = 'storage/documents/';

           // return dd($request->file('documents'));

            foreach($request->file('documents') as $file){
                if($file->isValid()){
                    $size = $file->getSize();

                    /*$document_path = $file->store($path);*/
                    $filename = $code.'-'. time() .rand().'.' . $file->getClientOriginalExtension();
                    $document_path = $file->storeAs($path, $filename);

                    /*$document_path = Storage::putFile($path, $file);*/

                    $data = new File([
                        'user_id' => Auth::id(),
                        'name' => $filename,
                        'path' => $public_path,
                        'size' => $size
                    ]);

                    $manuscript->files()->save($data);

                    Auth::user()->notify(new FilesUploaded($manuscript));
                    $manuscript->forceFill(['email' => 'acepublicationsdxb@gmail.com'])->notify(new ManuscriptUploaded($manuscript));

                    /*File::create([
                        'user_id' => Auth::id(),
                        'name' => $document_path,
                        'path' => $document_path,
                        'size' => $size
                    ]);*/
                }
            }
        }

        return redirect()->route('manuscript.manage')->with([
            'alert' => 'green',
            'message' => 'Your manuscript submitted successfully.'
        ]);

    }

    public function show($id)
    {
        $manuscript = Manuscript::findOrFail($id);
        return view('frontend.dashboard.manuscript.manuscript')->with('manuscript', $manuscript);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
