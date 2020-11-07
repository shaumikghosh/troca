<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\UserStatus;
use Illuminate\Support\Facades\Session;

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
}
