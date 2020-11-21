<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function users ()
    {
        $users = User::all();
        return view('admin.pages.users.users', ['users' => $users]);
    }
}
