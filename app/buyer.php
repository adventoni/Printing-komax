<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    public function bucomp()
    {
        return $this->belongsTo('App\Bucomp');
    }
    public function item()
    {
        return $this->belongsTo('App\Item');
    }
}
