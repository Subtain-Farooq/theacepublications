<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;

class TypeController extends Controller
{

    public function index(){
        $types = Type::all()->sortBy('name');
        return view('backend.types.index')->with('types', $types);
    }

    public function create(){
        return view('backend.types.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255']
        ]);

        is_null($request->status) ? $status = 0 : $status = $request->status;

        $result = Type::create([
            'name' => $request->name,
            'status' => $status
        ]);
        if($result){
            $alert = true;
            $color = 'teal';
            $message = 'New Type created successfully.';
        }else{
            $alert = true;
            $color = 'orange';
            $message = 'Type not created.';
        }
        return $this->alert($alert, $color, $message);

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $type = Type::findorFail($id);
        return view('backend.types.edit')->with('type', $type);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255']
        ]);
        is_null($request->status) ? $status = 0 : $status = $request->status;
        $type = Type::findOrFail($id);
        $result = $type->update([
            'name' => $request->name,
            'status' => $status
        ]);
        if($result){
            $alert = true;
            $color = 'teal';
            $message = 'Type updated successfully.';
        }else{
            $alert = true;
            $color = 'orange';
            $message = 'Type not updated.';
        }
        return $this->alert($alert, $color, $message);
    }

    public function destroy($id)
    {
        $result = Type::where(['id' => $id, 'status' => 0])->delete();
        if($result){
            $alert = true;
            $color = 'teal';
            $message = 'Type deleted successfully.';
        }else{
            $alert = true;
            $color = 'orange';
            $message = 'Type not deleted.';
        }
        return $this->alert($alert, $color, $message);
    }

    public function deleted(){
        $types = Type::onlyTrashed()->get();
        return view('backend.types.deleted')->with('types', $types);
    }

    public function restore($id){
        $result = Type::onlyTrashed()->where('id', $id)->restore();
        if($result){
            $alert = true;
            $color = 'teal';
            $message = 'Type restored successfully.';
        }else{
            $alert = true;
            $color = 'orange';
            $message = 'Type not restored.';
        }
        return $this->alert($alert, $color, $message);
    }

    public function permanentDelete($id){
        $result = Type::onlyTrashed()->where('id', $id)->forceDelete();
        if($result){
            $alert = true;
            $color = 'teal';
            $message = 'Type permanently deleted successfully.';
        }else{
            $alert = true;
            $color = 'orange';
            $message = 'Type not deleted.';
        }
        return redirect()->back()->with([
            'alert' => $alert,
            'color' => $color,
            'message' => $message
        ]);
    }


    public function alert($alert, $color, $message){
        return redirect()->route('console.types')->with([
            'alert' => $alert,
            'color' => $color,
            'message' => $message
        ]);
    }
}
