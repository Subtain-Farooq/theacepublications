<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reviewer;

class ReviewerController extends Controller
{

    public function index()
    {
        $reviewers = Reviewer::with('country')->get();
        return view('backend.reviewers.index')->with([
            'reviewers' => $reviewers
        ]);
    }


    public function show($id)
    {
        $reviewer = Reviewer::where('id', $id)->with(['country', 'cv'])->first();
        return view('backend.reviewers.show')->with([
            'reviewer' => $reviewer
        ]);
    }

    public function edit($id)
    {
        $reviewer = Reviewer::where('id', $id)->with(['country', 'cv'])->first();
        return view('backend.reviewers.edit')->with([
            'reviewer' => $reviewer
        ]);
    }

    public function update(Request $request, $id)
    {

        if($request->status){
            $status = $request->status;
        }else{
            $status = 0;
        }
        $reviewer = Reviewer::findOrFail($id);
        $result = $reviewer->update([
            'status' => $status,
        ]);

        if($result){
            $alert = true;
            $color = 'teal';
            $message = 'Reviewer updated successfully.';
        }else{
            $alert = true;
            $color = 'orange';
            $message = 'Unable to disable the Reviewer.';
        }
        return $this->alert($alert, $color, $message);
    }

    public function destroy($id)
    {
        $result = Reviewer::destroy($id);

        if($result){
            $alert = true;
            $color = 'teal';
            $message = 'Reviewer deleted successfully.';
        }else{
            $alert = true;
            $color = 'orange';
            $message = 'Unable to delete the Reviewer.';
        }
        return $this->alert($alert, $color, $message);
    }

    public function alert($alert, $color, $message){
        return redirect()->route('console.reviewer')->with([
            'alert' => $alert,
            'color' => $color,
            'message' => $message
        ]);
    }
}
