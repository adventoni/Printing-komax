<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bucomp extends Model
{
    protected $fillable =['kode_bucomp','bucomp_name','city','address','buyer_id','created_at','updated_at'];
    public function buyer()
    {
         return $this->belongsTo('App\Buyer');
    }
    
}
