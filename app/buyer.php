<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buyer extends Model
{
    protected $fillable = [
        'name_buyer',
        'images_buyer'
    ];
}
