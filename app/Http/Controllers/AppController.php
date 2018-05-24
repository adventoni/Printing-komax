<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AppController extends Controller
{
    public function index()
    {
        return view('login/form_login');
    }
    
}
