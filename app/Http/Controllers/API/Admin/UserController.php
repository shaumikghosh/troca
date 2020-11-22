<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function change_user_sttaus (Request $request)
    {
        $id = $request->get('user_id');
        $status = $request->get('user_status');

        $user = User::find($id);
        $user->status = $status;
        $user->save();

        $message = null;

        if ($status === 'active' ) {
            $message = "User successfully reactivated!";
        }else {
            $message = "User successfully deactivated!";
        }

        return response(['success_message' => $message], 200);
    }
}
