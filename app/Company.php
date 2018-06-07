<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable =['company_id', 'company_name', 'company_address','company_city','id_country','created_at','updated_at'];
    public function country()
    {
         return $this->belongsTo('App\Country');
    }
}
