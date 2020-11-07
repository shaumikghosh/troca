<?php

namespace App\Http\Controllers\API\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserStatus;

class ProfileController extends Controller
{
    public function verify_instagram_account (Request $request)
    {
        $status = new UserStatus();
        $status->instagram_verification_status = true;
        $status->save();
    }
}
