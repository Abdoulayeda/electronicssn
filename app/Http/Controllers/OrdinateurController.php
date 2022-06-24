<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdinateurController extends Controller
{
    public function ordinateurs()
    {
        return view('ordinateurs');
    }
}
