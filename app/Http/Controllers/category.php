<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class category extends Controller
{
    public function index()
    {
        return view('postCategory');
    }
}
