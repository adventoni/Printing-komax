<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable =['item_id','item_name','buyer_id'];
    public function buyer()
    {
         return $this->belongsTo('App\Buyer');
    }
}
