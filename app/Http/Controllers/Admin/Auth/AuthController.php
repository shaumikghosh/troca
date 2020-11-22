<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Mail\SendEmail;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\UserStatus;
use Illuminate\Support\Facades\Session;
use App\Models\GmailOTP;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    /**
     *  get method for admin login page
     */

     public function userLogin ()
     {
         return view('website.pages.auth.login');
     }


     public function loginAttempt (Request $request)
     {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember') ? true : false;

        if (Auth::attempt($credentials, $remember)) {
            switch(Auth::user()->user_type) {
                case 'admin':
                    return Redirect()->route('dashboard');
                case 'user':
                    return Redirect()->route('user.profile');
            }
        }

        return Redirect()->route('user.login')->with(['message' => 'Invalid credentials provided!']);
     }



     public function userRegister ()
     {
        return view('website.pages.auth.register');
     }


    public function attemptRegister (Request $request)
    {

        $request->validate([
            'full_name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'min:8|required_with:confirm_password|same:confirm_password',
            'confirm_password' => 'min:8|required'
        ]);

        $user = new User();

        $user->full_name = $request->input('full_name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->user_type = 'user';

        $saved = $user->save();

        if ( $saved ) {

            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {

                $user_status = new UserStatus();
                $user_status->user_id = Auth::user()->id;
                $saved = $user_status->save();

                if ( $saved ) {
                    switch(Auth::user()->user_type) {
                        case 'admin':
                            return Redirect()->route('dashboard');
                        case 'user':
                            return Redirect()->route('user.profile');
                    }
                }
            }
        }

        return Redirect()->route('user.login')->with(['message' => '500 Internal server error! try again later.']);

    }




    public function logout ()
    {
        Session::flush();
        Auth::logout();
        return Redirect()->route('user.login');
    }



    public function forgot_password_template ()
    {
        return view('website.pages.fp.forgot_password');
    }


    public function generate_otp (Request $request)
    {
        $email = $request->input('email');
        $user = User::where('email', $email)->first();

        if (!empty($user)) {
            $otp_code = rand(1000000, 1000);
            $otp = new GmailOTP();
            $otp->email = $email;
            $otp->otp = $otp_code;
            $otp_saved = $otp->save();

            if ($otp_saved) {
                $data = [
                    'body' => "Your 6 Digit secret OPT code is: $otp_code",
                    'name' => "$user->full_name"
                ];

                Mail::to($email)->send(new SendEmail($data));
            }
            Cookie::queue('password_reset_email', $email);
            return Redirect()->route('user.otp_template')->with(["para"=> "Enter the 6 digit otp from your email!"]);
        }else{
            return Redirect()->route('user.forgot_password')->with(["message"=> "No such email found in our system!"]);
        }
    }


    public function otp_template (Request $request)
    {
        return view('website.pages.fp.otp_template');
    }



    public function check_otp (Request $request)
    {
        $otp_code = $request->input('otp_code');
        $user = GmailOTP::orderBy('created_at', 'DESC')->where('email', Cookie::get('password_reset_email'))->first();

        if ($user->email === Cookie::get('password_reset_email')) {
            if ((int)$user->otp === (int)$otp_code){
                return Redirect()->route('user.password_reset_template');
            }else{
                return Redirect()->route('user.otp_template')->with(['message' => 'OTP code verification failed!']);
            }
        }else{
            return Redirect()->route('user.otp_template')->with(['message' => 'Email verification failed!']);
        }
    }



    public function password_reset_template ()
    {
        return view('website.pages.fp.update_password_template');
    }


    public function update_password (Request $request)
    {
        $password = $request->input('password');
        $confirm_password = $request->input('confirm_password');

        if (!empty($password) && !empty($confirm_password)) {
            if ($password === $confirm_password) {
                $user = User::where('email', Cookie::get('password_reset_email'))->first();
                $user->password = Hash::make($password);
                $user->save();

                return Redirect()->route('user.login')->with(['password_reset_success' => 'Password successfully updated, login now!']);
            }else{
                return Redirect()->route('user.password_reset_template')->with(['message' => 'Password confirmation failed!']);
            }
        }else {
            return Redirect()->route('user.password_reset_template')->with(['message' => 'All fields are required!']);
        }
    }

}
