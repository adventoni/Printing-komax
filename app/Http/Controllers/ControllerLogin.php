<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerLogin extends Controller
{
    public function getLogin()
    {
        return view('login.form_login');
    }
}
