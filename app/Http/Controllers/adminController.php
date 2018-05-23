<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function dashboard()
    {
        die('ini halaman dashboard');
    }
    public function barkod()
    {
        return view('app/barkode_jepang');
    }
    public function buyer()
    {
        return view('app/buyer');
    }
    public function bucomp()
    {
        return view('app/bucomp');
    }
    public function company()
    {
        return view('app/company');
    }
    public function country()
    {
        return view('app/country');
    }
    public function item()
    {
        return view('app/item');
    }
    public function member()
    {
        return view('app/member');
    }
    public function add_buyer()
    {
        return view('app/aksi/add_buyer');
    }
    public function edit_buyer()
    {
        return view('app/aksi/edit_buyer');
    }
    public function add_bucomp()
    {
        return view('app/aksi/add_bucomp');
    }
    public function edit_bucomp()
    {
       return view('app/aksi/edit_bucomp');
    }
    public function add_company()
    {
       return view('app/aksi/add_company');
    }
    public function edit_company()
    {
       return view('app/aksi/edit_company');
    }
    public function add_country()
    {
       return view('app/aksi/add_country');
    }
    public function edit_country()
    {
       return view('app/aksi/edit_country');
    }
    public function add_item()
    {
       return view('app/aksi/add_item');
    }
    public function edit_item()
    {
       return view('app/aksi/edit_item');
    }
    public function add_member()
    {
       return view('app/aksi/add_member');
    }
    public function edit_member()
    {
       return view('app/aksi/edit_member');
    }
    public function report()
    {
       return view('app/report');
    }
}
