<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function caisse()
    {
        return view('caisse');
    }
}
