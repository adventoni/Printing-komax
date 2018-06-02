<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Buyer extends Model
{
    // use SoftDeletes;
    // protected $dates = ['deleted_at'];
    protected $fillable =['id_buyer','name_buyer','images_buyer','created_at','updated_at'];
}
