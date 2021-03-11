<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinces extends Model
{
    protected $fillable = [
        'code',
        'name_th',
        'name_en',
        'geography_id'
    ];
}
