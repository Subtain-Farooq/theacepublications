<?php

namespace App\Http\Controllers\Frontend\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\User;
use App\Http\Requests\UpdateProfile;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{

    public function edit()
    {
        $countries = Country::all();
        return view('frontend.dashboard.profile.edit')->with('countries', $countries);
    }


    public function update(UpdateProfile $request)
    {
        $user = User::where(['id'=>Auth::id(), 'status' => 1])->first();

        $user->update([
            'title' => $request->title,
            'name' => $request->name,
            'mobile_number' => $request->mobile_number,
            'fax_number' => $request->fax_number,
            'live_dna' => $request->live_dna,
            'scopus' => $request->scopus,
        ]);

        if($request->hasFile('avatar') && $request->file('avatar')->isValid()){
            $file = $request->file('avatar');
            $path = 'public/avatar';
            $public_path = 'storage/avatar/';
            $size = $file->getSize();
            $filename = 'profile-photo-' . time() . '.' . $file->getClientOriginalExtension();
            $document_path = $file->storeAs($path, $filename);

            if(isset($user->image->name)){
                $old_file = $path.'/'.$user->image->name;
                if(Storage::exists($old_file)){
                    Storage::delete($old_file);
                }
                $user->image()->update([
                    'name' => $filename,
                    'path' => $public_path,
                    'size' => $size
                ]);
            }

            $avatar = new File([
                'name' => $filename,
                'path' => $public_path,
                'size' => $size
            ]);

            $user->image()->save($avatar);

            /*File::create([
                'user_id' => Auth::id(),
                'name' => $document_path,
                'path' => $document_path,
                'size' => $size
            ]);*/
        }

        return redirect()->route('dashboard.profile')->with([
            'alert' => 'green',
            'message' => 'Your data updated successfully.'
        ]);
    }


    public function destroy($id)
    {
        //
    }
}
