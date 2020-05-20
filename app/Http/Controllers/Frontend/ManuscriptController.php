<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class ManuscriptController extends Controller
{
    public function index($code){
        $article = Article::where('code', $code)->with(['currentIssue', 'document'])->first();

        return view('frontend.manuscript.index')->with('article', $article);
    }

    public function archived($code){
        $article = Article::where('code', $code)->with(['archive', 'document'])->first();

        return view('frontend.manuscript.archived')->with('article', $article);
    }
}
