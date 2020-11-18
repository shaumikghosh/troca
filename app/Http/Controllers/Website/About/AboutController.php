<?php

namespace App\Http\Controllers\Website\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about ()
    {
        return view('website.pages.about.about');
    }
}
