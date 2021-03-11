<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Districts extends Model
{
    protected $fillable = [
        'zip_code',
        'name_th',
        'name_en',
        'amphure_id'
    ];
}
