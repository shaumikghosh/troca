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
        $instainfo->total_posts = $request->get('total_posts');
        $instainfo->user_id = $id;

        if ( $request->get('followers') >= 50000 && $request->get('total_posts') >= 50 ) {
            $instainfo->user_rating = 5;
        }
        elseif ( $request->get('followers') >= 10000 && $request->get('total_posts') >= 50 ) {
            $instainfo->user_rating = 4;
        }
        elseif ( $request->get('followers') >= 1000 && $request->get('total_posts') >= 25 ) {
            $instainfo->user_rating = 3;
        }
        elseif ( $request->get('followers') >= 500 && $request->get('total_posts') >= 20 ) {
            $instainfo->user_rating = 2;
        }else {
            $instainfo->user_rating = 1;
        }

        $instainfo->save();


    }




    public function get_instagram_username ($id)
    {
        $instainfo = InstagramInfo::where('user_id', $id)->first();

        return response(["instagram_username" => $instainfo->user_name], 200);
    }



}
