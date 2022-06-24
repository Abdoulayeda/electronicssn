<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortableController extends Controller
{
    public function portables()
    {
        return view('portables');
     }
}
