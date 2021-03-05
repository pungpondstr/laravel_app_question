<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QQuestion extends Model
{
    protected $fillable = [
        'user_id',
        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j',

    ];
}
