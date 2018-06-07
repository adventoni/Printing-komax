<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'country_id', 'country_name', 'num_code','alpha_code','code_iso'
    ];
    public function company()
    {
        return $this->belongsTo('App\Company');
    }
}
