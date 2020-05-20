<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Journal;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Article;
use App\Models\File;
use App\Models\Backend\Issue;

class ArticleController extends Controller
{

    public function index()
    {
        $articles = Article::with(['currentIssue', 'archive'])->get();
        return view('backend.articles.index')->with('articles', $articles);
    }

    public function create()
    {
        $journals = Journal::where('status', 'published')->with('currentIssue')->get();

        return view('backend.articles.create')->with('journals', $journals);
    }

    public function store(Request $request)
    {
        $request->validate([
            'journal' => ['required'],
            'title' => ['required', 'string'],
            'code' => ['required', 'string'],
            'authors' => ['required', 'string'],
            'doi' => ['string'],
            'doi_link' => ['string'],
            'pages' => ['required', 'string'],
            'abstract' => ['required', 'string'],
            'cite' => ['required', 'string'],
            'document' => 'required|file|max:10240',
            'document.*' => 'mimetypes:application/pdf'
        ]);

        $journal = Journal::where('id', $request->journal)->with('currentIssue')->first();

        $str =  str_shuffle("ZAQWSXCDERFVBGTYHNMJUIKLOP");
        $code = substr($str, 22).'-'.rand(555,10000);

        if ($request->hasFile('document') && $request->file('document')->isValid()) {

            $article = Article::create([
                'issue_id' => $journal->currentIssue->id,
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'code' => $request->code,
                'doi' => $request->doi,
                'doi_link' => $request->doi_link,
                'authors' => $request->authors,
                'pages' => $request->pages,
                'abstract' => $request->abstract,
                'cite' => $request->cite,
                'status' => $request->save
            ]);




            $path = 'public/documents/articles';
            $public_path = 'storage/documents/articles/';
            $file = $request->file('document');

            $size = $file->getSize();

            $filename = $code.'-'. time() .rand().'.' . $file->getClientOriginalExtension();
            $document_path = $file->storeAs($path, $filename);

            $data = new File([
                'name' => $filename,
                'path' => $public_path,
                'size' => $size
            ]);

            $article->document()->save($data);

        }else{
            return redirect()->route('console.articles.create')->with([
                'alert' => true,
                'color' => 'red',
                'message' => 'File format is not correct'
            ]);
        }

        return redirect()->route('console.articles')->with([
            'alert' => true,
            'color' => 'green',
            'message' => 'New Article added successfully.'
        ]);
    }

    public function show($id)
    {
        $article = Article::where('id', $id)->with(['currentIssue', 'archive', 'document'])->first();
        return view('backend.articles.show')->with('article', $article);
    }


    public function edit($id)
    {
        $journals = Journal::where('status', 'published')->with('currentIssue')->get();
        $article = Article::where('id', $id)->with(['currentIssue', 'archive', 'document'])->first();
        return view('backend.articles.edit')->with([
            'article' => $article,
            'journals' => $journals
        ]);

    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'journal' => ['required'],
            'title' => ['required', 'string'],
            'code' => ['required', 'string'],
            'authors' => ['required', 'string'],
            'doi' => ['string'],
            'doi_link' => ['string'],
            'pages' => ['required', 'string'],
            'abstract' => ['required', 'string'],
            'cite' => ['required', 'string'],
        ]);




        $article = Article::findOrFail($id);


            if(is_null($request->status)){
                $status = 'draft';
            }else{
                $status = 'published';
            }


            $result = $article->update([
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'code' => $request->code,
                'doi' => $request->doi,
                'doi_link' => $request->doi_link,
                'authors' => $request->authors,
                'pages' => $request->pages,
                'abstract' => $request->abstract,
                'cite' => $request->cite,
                'status' => $status
            ]);




            if ($request->hasFile('document') && $request->file('document')->isValid()) {

                $document =  $request->file('document');

                $str =  str_shuffle("ZAQWSXCDERFVBGTYHNMJUIKLOP");
                $code = substr($str, 22).'-'.rand(555,10000);

                $path = 'public/documents/articles';
                $public_path = 'storage/documents/articles/';
                $file = $request->file('document');

                $size = $file->getSize();

                $filename = $code.'-'. time() .rand().'.' . $file->getClientOriginalExtension();

                if(isset($article->document->name)){
                    $old_file = $path.'/'.$article->document->name;
                    if(Storage::exists($old_file)){
                        Storage::delete($old_file);
                    }
                    $article->document()->update([
                        'name' => $filename,
                        'path' => $public_path,
                        'size' => $size
                    ]);
                }
                $document->storeAs($path, $filename);

                $data = new File([
                    'name' => $filename,
                    'path' => $public_path,
                    'size' => $size
                ]);

                $result = $article->document()->save($data);

            }

        if($result){
            $alert = true;
            $color = 'teal';
            $message = 'Article updated successfully.';
        }else{
            $alert = true;
            $color = 'orange';
            $message = 'Published or archived article can not be updated.';
        }
        return $this->alert($alert, $color, $message);

    }


    public function destroy($id)
    {
        //
    }

    public function alert($alert, $color, $message){
        return redirect()->route('console.articles')->with([
            'alert' => $alert,
            'color' => $color,
            'message' => $message
        ]);
    }
}
