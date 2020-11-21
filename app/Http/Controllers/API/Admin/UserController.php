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

        // return response(["user_id"=>$id, "user_status"=>$status]);

        $user = User::find($id);
        $user->status = $status;
        $user->save();

        return response(['success_message' => 'Action successfully performed!'], 200);
    }
}
