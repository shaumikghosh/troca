<?php

namespace App\Http\Controllers\Website\Profile;

use App\Http\Controllers\Controller;
use App\Models\UserStatus;
use Illuminate\Http\Request;

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

}
