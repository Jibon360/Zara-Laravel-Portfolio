<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function indexprofile()
    {
        $data = Auth::user()->id;
        $user = User::findOrFail($data);
        return view('backend.pages.profile.profile_show', compact('user'));
    }

    public function editprofile($id)
    {
        $$id = Auth::user()->id;
        $user = User::findOrFail($id);
        return view('backend.pages.profile.edit_profile', compact('user'));
    }

    public function updateprofile(Request $request)
    {
        $profileeditid = $request->profileeditid;
        if ($request->file('image')) {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => 'required|string|max:255|email|unique:users,email,' . $profileeditid,
                // 'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class,].$profileeditid,
                'image' => 'required',
                'updated_at' => Carbon::now(),
            ]);

            $data = User::findOrFail($profileeditid);

            $image = $request->file('image');
            $filename = $request->email . '.' . $image->getClientOriginalExtension();
            $fileurl = "upload/Profile/" . $filename;
            $request->image->move(public_path("upload/Profile"), $filename);


            if (File::exists($data->image)) {
                unlink($data->image);
            }


            User::findOrFail($profileeditid)->update([
                'name' => $request->name,
                'email' => $request->email,
                'image' => $fileurl,
                'updated_at' => Carbon::now(),
            ]);
        } else {

            $request->validate([
                'name' => 'required',
                'email' => 'required',
            ]);


            User::findOrFail($profileeditid)->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);
        }

        Toastr::success('Porifle Information update success!!');
        return redirect()->route('profile.index')->with('message', 'Porifle Information update Success!!!');
    }
}
