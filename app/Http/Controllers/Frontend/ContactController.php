<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMailable;

class ContactController extends Controller
{

    public function contact()
    {
        return view('frontend.pages.contact.index');
    }

    public function sendEmail(Request $request)
    {
        $data = $request->validate([
            'subject' => ['required', 'string', 'max:191'],
            'name' => ['required', 'string', 'max:191'],
            'email' => ['required', 'email', 'max:191'],
            'message' => ['required', 'string']
        ]);
        Mail::to('subtainfrq@gmail.com')->send(new ContactMailable($data));

        return redirect()->back()->with([
            'alert' => true,
            'message' => 'Your message send successfully.'
        ]);
    }

}
