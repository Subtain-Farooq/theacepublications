<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Manuscript;

class ManuscriptController extends Controller
{

    public function index($status = null)
    {
        if(is_null($status)){
            $manuscripts = Manuscript::all()->sortByDesc('created_at');
        }else{
            $manuscripts = Manuscript::where('status', $status)->orderByDesc('created_at')->get();
        }

        return view('backend.manuscripts.index')->with('manuscripts', $manuscripts);
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $manuscript = Manuscript::with(['user', 'journal', 'type', 'files'])->findOrFail($id);
        return view('backend.manuscripts.show')->with('manuscript', $manuscript);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $manuscript = Manuscript::findOrFail($id);
        $result = $manuscript->update(['status' => $request->status]);

        if($result){
            $alert = true;
            $color = 'teal';
            $message = 'Status of Manuscript updated successfully.';
        }else{
            $alert = true;
            $color = 'orange';
            $message = 'Status of Manuscript not updated.';
        }
        return $this->alert($alert, $color, $message);

    }

    public function alert($alert, $color, $message){
        return redirect()->route('console.manuscripts')->with([
            'alert' => $alert,
            'color' => $color,
            'message' => $message
        ]);
    }
}
