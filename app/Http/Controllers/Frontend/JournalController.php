<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Issue;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Journal;
use App\Models\Article;

class JournalController extends Controller
{

    public function index()
    {

        $all_categories = Category::where('status', 1)->get();
        $categories = Category::where('status', 1)->with(['journals' => function($request){
            $request->where('status', 'published')->with('image');
        }])->get();

        $issues = Article::select('title', 'code', 'authors')->where('status', 'published')->with('currentIssue')->get();
        $journals = Journal::where('status', 'published')->with('currentIssue')->get();

        return view('frontend.journals.all-journals')->with([
            'all_categories' => $all_categories,
            'categories' => $categories,
            'issues' => $issues,
            'journals' => $journals
        ]);

    }

    public function bySubject($id)
    {
        $all_categories = Category::where('status', 1)->get();

        $category = Category::where(['status' => 1, 'id' => $id])->with(['journals' => function($query){
            $query->where('status', 'published')->with('image');
        }])->first();

        return view('frontend.journals.by-subject')->with([
            'all_categories' => $all_categories,
            'category' => $category
        ]);
    }
    public function singleJournal($id)
    {
        $all_categories = Category::where('status', 1)->get();

        $journal = Journal::where(['id' => $id, 'status' => 'published'])->with(['image', 'categories'])->first();

        return view('frontend.journals.single.index')->with([
            'all_categories' => $all_categories,
            'journal' => $journal
        ]);
    }

    public function singleJournalGuide($id)
    {
        $all_categories = Category::where('status', 1)->get();
        $journal = Journal::where(['id' => $id, 'status' => 'published'])->with('image')->first();
        return view('frontend.journals.single.guide')->with([
            'all_categories' => $all_categories,
            'journal' => $journal
        ]);
    }
    public function singleJournalEditors($id)
    {
        $all_categories = Category::where('status', 1)->get();
        $journal = Journal::where(['id' => $id, 'status' => 'published'])->with(['image', 'editors'])->first();

        return view('frontend.journals.single.editors')->with([
            'all_categories' => $all_categories,
            'journal' => $journal
        ]);
    }
    public function singleJournalCurrentIssues($id){

        $all_categories = Category::where('status', 1)->get();

        $journal = Journal::where(['id' => $id, 'status' => 'published'])->with(['image', 'editors', 'currentIssue'])->first();

        return view('frontend.journals.single.current-issues')->with([
            'all_categories' => $all_categories,
            'journal' => $journal
        ]);
    }

    public function singleJournalArchive($id){
        $all_categories = Category::where('status', 1)->get();
        $journal = Journal::where(['id' => $id, 'status' => 'published'])->with(['image', 'editors', 'archives'])->first();
        return view('frontend.journals.single.archive')->with([
            'all_categories' => $all_categories,
            'journal' => $journal,
        ]);
    }


}
