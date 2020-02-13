<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class ManuscriptController extends Controller
{
    public function index($doi){
        $article = Article::where('doi', $doi)->with(['currentIssue', 'document'])->first();

        return view('frontend.manuscript.index')->with('article', $article);
    }

    public function archived($doi){
        $article = Article::where('doi', $doi)->with(['archive', 'document'])->first();

        return view('frontend.manuscript.archived')->with('article', $article);
    }
}
