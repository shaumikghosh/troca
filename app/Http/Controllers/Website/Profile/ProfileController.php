<?php

namespace App\Http\Controllers\Website\Profile;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{


    public function profile ()
    {
        $user_status = UserStatus::all();
        return view('profile.pages.profile.home', ['user_status' => $user_status]);
    }



    public function profileVerfication ()
    {
        return view('profile.pages.verify_profile.verify_profile');
    }


    public function buyFolowers () 
    {
        return view('profile.pages.buy_followers.buy');
    }


    public function setting ()
    {
        return view('profile.pages.profile.setting');
    }



    public function change_password (Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required'
        ]);

        $db_password = Auth::user()->password;
        $old_password = $request->input('old_password');
        $new_password = $request->input('new_password');
        $confirm_password = $request->input('confirm_password');
        $user_id = Auth::user()->id;

        if (Hash::check($old_password, $db_password)){
            if ( $new_password === $confirm_password ) {
                User::find($user_id)->update([
                    'password' => Hash::make($new_password),
                ]);
    
                return Redirect()->route('user.setting')->with(['message_success' => 'Password successfully chaged!']);
            } else {
                return Redirect()->route('user.setting')->with(['message_error' => 'New password confirmation failed!']);
            }
        } 
        else {
            return Redirect()->route('user.setting')->with(['message_error' => 'Old password verification failed!']);
        }
    }

}
