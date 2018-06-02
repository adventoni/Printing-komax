<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Buyer;
use Illuminate\Http\RedirectResponse;

class AksiController extends Controller
{
   public function index()
   {
       $buyers = Buyer::all();
       return view('app/buyer',['$buyers => $buyers']);
   }
}
