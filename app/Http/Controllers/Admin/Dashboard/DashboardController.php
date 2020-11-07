<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * 
     * get method for user dashboard
     */
    public function dashboard()
    {
        return view('admin.pages.home.dashboard');
    }
}
