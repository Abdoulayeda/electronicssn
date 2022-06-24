<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcouteurController extends Controller
{
    public function ecouteurs()
    {
        return view('ecouteurs');
    }
}
