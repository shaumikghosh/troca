<?php

namespace App\Http\Controllers\Admin\CP;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChangepasswordController extends Controller
{
    public function change_password ()
    {
        return view('admin.pages.cp.change_password');
    }
}
