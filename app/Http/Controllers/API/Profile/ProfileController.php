<?php

namespace App\Http\Controllers\API\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserStatus;
use App\Models\InstagramInfo;
use App\Models\EmailVerifyOTP;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

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




    public function generate_email_verification_code (Request $request)
    {
        return Auth::user();
        // $otp_code = $request->get('otp_code');
        // $user_id = $request->get('user_id');

        // $otp = new EmailVerifyOTP();
        // $otp->email_verify_otp = $otp_code;
        // $otp->user_id = $user_id;
        // $otp_saved = $otp->save();

        // if ($otp_saved) {
        //     $data = [
        //         'body' => "Your email verification otp OPT code is: $otp_code",
        //         'name' => "{{Auth::user()->full_name}}"
        //     ];

        //     Mail::to('shaumik.gh@gmail.com')->send(new SendEmail($data));
        // }
        // return response(["message"=> "success"], 200);
    }



}
