<?php

namespace App\Http\Controllers\API\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserStatus;
use App\Models\InstagramInfo;

class ProfileController extends Controller
{
    public function verify_instagram_account (Request $request, $id)
    {
        $status = UserStatus::where('user_id', $id)->first();
        $status->instagram_verification_status = true;
        $status->save();

        $instainfo = new InstagramInfo();
        $instainfo->user_name = $request->get('user_name');
        $instainfo->followers = $request->get('followers');
        $instainfo->followings = $request->get('followings');
        $instainfo->user_id = $id;
        $instainfo->save();
    }




    public function get_instagram_username ($id)
    {
        $instainfo = InstagramInfo::where('user_id', $id)->first();

        return response(["instagram_username" => $instainfo->user_name], 200);
    }



}
