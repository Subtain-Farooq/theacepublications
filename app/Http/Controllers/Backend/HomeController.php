<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Editor;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Journal;
use App\Models\Article;

class HomeController extends Controller
{

    public function index()
    {
        $all = User::count();
        $active = User::where('status', 1)->count();
        $disabled = User::where('status', 0)->count();
        $verified = User::where('status', 1)->whereNotNull('email_verified_at')->count();
        $unverified = User::where('status', 1)->whereNull('email_verified_at')->count();
        $categories_active = Category::where('status', 1)->count();
        $categories_disabled = Category::where('status', 0)->count();
        $journal_published = Journal::where('status', 'published')->count();
        $journal_draft = Journal::where('status', 'draft')->count();
        $current_issue = Article::select('id')->with('currentIssue')->get();
        $archived_issue = Article::select('id')->with('archive')->get();
        $active_editors = Editor::where('status', 1)->count();
        $disabled_editors = Editor::where('status', 0)->count();


        $all_categories = $categories_active + $categories_disabled;
        $all_journal = $journal_published + $journal_draft;
        $all_editors = $active_editors + $disabled_editors;
        return view('backend.home.index')->with([
            'all' => $all,
            'active' => $active,
            'disabled' => $disabled,
            'verified' => $verified,
            'unverified' => $unverified,
            'categories_active' => $categories_active,
            'categories_disabled' => $categories_disabled,
            'all_categories' => $all_categories,
            'journal_published' => $journal_published,
            'journal_draft' => $journal_draft,
            'all_journal' => $all_journal,
            'current_issue' => $current_issue,
            'archived_issue' => $archived_issue,
            'active_editors' => $active_editors,
            'disabled_editors' => $disabled_editors,
            'all_editors' => $all_editors

        ]);
    }



}
