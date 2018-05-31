<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Buyer;
use Illuminate\Http\RedirectResponse;

class AksiController extends Controller
{
    public function buyer(): View
    {
        $buyers = Buyer::orderBy('created_at', 'DESC');
        return view('app.buyer', compact('buyers'));
    }
    public function add_buyer(): View
    {
        return view('app/aksi.add_buyer');
    }
    public function upload(Request $request): RedirectResponse
    {
         
    }
}
