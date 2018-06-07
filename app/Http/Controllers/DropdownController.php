<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buyer;
class DropdownController extends Controller
{
    public function pilihan()
    {
        $buyers = Buyer::all();
        return view('app/aksi/pilihan',compact('buyers'));
    }
}
