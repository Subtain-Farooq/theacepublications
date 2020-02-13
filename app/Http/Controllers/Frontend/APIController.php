<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Journal;

class APIController extends Controller
{
    public function getCategories(){
        $data = Category::where('status', 1)->get();
        return response()->json($data);
    }

    public function getJournals($id){
        $data = Category::where(['id' => $id ,'status' => 1])->with('journals')->first();
        //$data = Journal::where('status', 1)->with('categories')->get();
        return response()->json($data->journals);
    }
}
