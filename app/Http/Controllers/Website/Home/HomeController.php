<?php

namespace App\Http\Controllers\Website\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index ()
    {
        return view('website.pages.home.home');
    }

}
