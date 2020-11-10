<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstagramInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_name', 'followers', 'followings', 'verification_id'
    ];
}
