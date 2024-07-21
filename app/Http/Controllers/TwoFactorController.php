<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TwoFactorController extends Controller
{
    public function __invoke(){
        return view('dashboard.two-factor');
    }
}
