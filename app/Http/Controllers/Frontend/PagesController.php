<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('frontend.pages.home.index');
    }

    public function about(){
        return view('frontend.pages.about.index');
    }

    public function ethics(){
        return view('frontend.pages.ethics.index');
    }

    public function authors(){
        return view('frontend.pages.authors.index');
    }

    public function subscribers(){
        return view('frontend.pages.subscribers.index');
    }

    public function contactUs(){
        return view('frontend.pages.contact.index');
    }

    public function siteMap(){
        return view('frontend.pages.site-map.index');
    }

    public function privacyPolicy(){
        return view('frontend.pages.privacy-policy.index');
    }

    public function termsAndConditions(){
        return view('frontend.pages.terms-conditions.index');
    }

    public function openAccess(){
        return view('frontend.pages.open-access.index');
    }

    public function forEditors(){
        return view('frontend.pages.editors.for-editors');
    }

    public function forReviewers(){
        return view('frontend.pages.reviewers.for-reviewers');
    }

    public function publicationEthics(){
        return view('frontend.pages.ethics.publication-ethics');
    }

    public function editorialProcess(){
        return view('frontend.pages.editors.editorial-process');
    }

    public function authorship(){
        return view('frontend.pages.authorship.index');
    }

    public function correction(){
        return view('frontend.pages.correction.index');
    }

    public function copyrights(){
        return view('frontend.pages.copyrights.index');
    }
    public function transparency(){
        return view('frontend.pages.transperancy.index');
    }
    public function articleProcessing(){
        return view('frontend.pages.article.index');
    }
}
