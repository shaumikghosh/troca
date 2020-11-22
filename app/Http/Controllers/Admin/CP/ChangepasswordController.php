<?php

namespace App\Http\Controllers\Admin\CP;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ChangepasswordController extends Controller
{
    public function change_password ()
    {
        return view('admin.pages.cp.change_password');
    }


    public function update_password (Request $request)
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
