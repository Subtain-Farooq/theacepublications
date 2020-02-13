<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\File;
use App\Models\Reviewer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewerController extends Controller
{

    public function index()
    {

    }

    public function create()
    {
        $countries = Country::all();
        return view('frontend.reviewers.index')->with('countries', $countries);
    }

    public function store(Request $request)
    {

        $data = $request->validate([
            'country' => 'required|integer',
            'name' => 'required|string',
            'email' => 'required|email|unique:reviewers',
            'contact_number' => 'string|max:30',
            'job_type' => 'string|max:255',
            'degree' => 'string|max:255',
            'keywords' => 'string|max:255',
            'identifier' => 'string|nullable|max:255;',
            'address' => 'string|max:255',
            'cv' => 'required|max:10240',
            'cv.*' => 'mimetypes:application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/pdf,application/msword'
        ]);

        if($request->hasFile('cv') AND $request->file('cv')->isValid()){

            $str =  str_shuffle("ZAQWSXCDERFVBGTYHNMJUIKLOP");
            $code = substr($str, 22).'-'.rand(555,10000);

            $reviewer = Reviewer::create([
                'name' => $data['name'],
                'country_id' => $data['country'],
                'email' => $data['email'],
                'contact_number' => $data['contact_number'],
                'job_type' => $data['job_type'],
                'degree' => $data['degree'],
                'keywords' => $data['keywords'],
                'identifier' => $data['identifier'],
                'address' => $data['address']
            ]);

            $path = 'public/documents/cv';
            $public_path = 'storage/documents/cv/';
            $file = $request->file('cv');
            $size = $file->getSize();

            $filename = $code.'-'. time() .rand().'.' . $file->getClientOriginalExtension();
            $document_path = $file->storeAs($path, $filename);

            $file_data = new File([
                'name' => $filename,
                'path' => $public_path,
                'size' => $size
            ]);

            $reviewer->cv()->save($file_data);
            $alert = 'green';
            $message = 'Your application submitted successfully.';

        }else{
            $alert = 'red';
            $message = 'There is some error in file.';
        }

        return redirect()->back()->with([
            'alert' => $alert,
            'message' => $message,
        ]);
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
