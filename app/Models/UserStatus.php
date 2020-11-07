<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserStatus extends Model
{
    protected $fillable = [
        'email_verification_status', 'instagram_verification_status'
    ];


}
