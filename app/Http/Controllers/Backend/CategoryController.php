<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all()->sortBy("name");;
        return view('backend.categories.index')->with('categories', $categories);
    }


    public function create()
    {
        return view('backend.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255']
        ]);

        if(is_null($request->status)){
            $status = 0;
        }else{
            $status = $request->status;
        }

       Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'status' => $status
        ]);
        return redirect()->route('console.categories')->with([
            'alert' => true,
            'color' => 'green',
            'message' => 'New category added successfully.'
        ]);
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('backend.categories.edit')->with('category', $category);
    }

   public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255']
        ]);

        is_null($request->status) ? $status = 0 : $status = $request->status;

        $category = Category::findOrFail($id);
        $result = $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'status' => $status
        ]);
        if($result){
            $alert = true;
            $color = 'green';
            $message = 'Category updated successfully.';
        }else{
            $alert = true;
            $color = 'orange';
            $message = 'Category not updated.';
        }
        return $this->alert($alert, $color, $message);

    }

    public function destroy($id)
    {
       $result = Category::where(['id' => $id, 'status' => 0])->delete();
       if($result){
           $alert = true;
           $color = 'green';
           $message = 'Category deleted successfully.';
       }else{
           $alert = true;
           $color = 'orange';
           $message = 'Category not deleted.';
       }
        return $this->alert($alert, $color, $message);
    }

    public function deleted(){
        $categories = Category::onlyTrashed()->get();
        return view('backend.categories.deleted')->with('categories', $categories);

    }

    public function restore($id){
        $result = Category::onlyTrashed()->where('id' , $id)->restore();
        if($result){
            $alert = true;
            $color = 'teal';
            $message = 'Category recovered successfully.';
        }else{
            $alert = true;
            $color = 'orange';
            $message = 'Category not recovered.';
        }
        return $this->alert($alert, $color, $message);
    }

    public function permanentDelete($id){

        $result = Category::onlyTrashed()->where('id' , $id)->forceDelete();
        if($result){
            $alert = true;
            $color = 'green';
            $message = 'Category permanently deleted successfully.';
        }else{
            $alert = true;
            $color = 'orange';
            $message = 'Category not deleted.';
        }
        return redirect()->back()->with([
            'alert' => $alert,
            'color' => $color,
            'message' => $message
        ]);
    }



    public function alert($alert, $color, $message){
        return redirect()->route('console.categories')->with([
            'alert' => $alert,
            'color' => $color,
            'message' => $message
        ]);
    }

}
