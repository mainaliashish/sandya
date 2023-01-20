<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function password()
    {
        $user = User::first();
        return view('backend.settings.change-password', compact('user'));
    }

    public function updateAccountPassword(Request $request)
    {
        $user = User::first();

        $this -> validate($request, [
        	'new-password_confirmation' => 'required',
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
       ]);

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
        	session()->flash("error","Your current password does not matches with the password you provided. Please try again.");
            return redirect()->back();
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
        	session()->flash("error","New Password cannot be same as your current password. Please choose a different password.");
            return redirect()->back();
        }

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        session()->flash("success","Password updated successfully!");
        return redirect()->back();
    }

    public function profile()
    {
        $user = User::first();
        return view('backend.settings.update-profile', compact('user'));
    }

    public function updateAccountProfile(Request $request)
    {
        $user = User::first();

        $input = $request->only(['name', 'email']);

        $image = $request->file('profile_image');

        $input['profile_image'] = updateNewImageOrKeepOld($image, $user->profile_image,'settings', 100, 100);
        $result = $user->update($input);

        if($result) {
             session()->flash('success', 'Profile Updated Successfully!');
        } else {
             session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> back();
    }
}
