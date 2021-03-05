<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QAddUser extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'passport_id',
        'password',
        'address',
        'province',
        'district',
        'sub_district',
        'post_office',
        'tel',
    ];
}
