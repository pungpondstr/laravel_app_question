<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QUser extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'passport_id',
        'password',
        'email',
        'tel',
        'user_role',
        'passport_images'
    ];
}
