<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('backend.users.index')->with('users', $users);
    }



    public function show($id)
    {
        $user = User::where('id', $id)->with(['country', 'manuscripts'])->first();
        return view('backend.users.show')->with('user', $user);
    }


    public function edit($id)
    {
        $user = User::where('id', $id)->with(['country', 'manuscripts'])->first();
        return view('backend.users.edit')->with('user', $user);
    }


    public function update(Request $request, $id)
    {
        if($request->status){
            $status = $request->status;
        }else{
            $status = 0;
        }
        $user = User::findOrFail($id);
        $result = $user->update([
            'status' => $status
        ]);

        if($result){
            $alert = true;
            $color = 'teal';
            $message = 'User disabled successfully.';
        }else{
            $alert = true;
            $color = 'orange';
            $message = 'Unable to disable the user.';
        }
        return $this->alert($alert, $color, $message);
    }


    public function destroy($id)
    {

        $result = User::destroy($id);

        if($result){
            $alert = true;
            $color = 'teal';
            $message = 'User deleted successfully.';
        }else{
            $alert = true;
            $color = 'orange';
            $message = 'Unable to delete the user.';
        }
        return $this->alert($alert, $color, $message);
    }

    public function alert($alert, $color, $message){
        return redirect()->route('console.users')->with([
            'alert' => $alert,
            'color' => $color,
            'message' => $message
        ]);
    }
}
