<?php

namespace App\Http\Controllers\Website\Earning;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EarningController extends Controller
{
    public function earning ()
    {
        return view('website.pages.earning.earning');
    }
}
