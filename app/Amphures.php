<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Amphures extends Model
{
    protected $fillable = [
        'code',
        'name_th',
        'name_en',
        'province_id'
    ];
}
