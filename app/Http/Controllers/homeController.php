<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function __invoke()
    {
        /* return view('welcome'); */
        return view('home');
    }
}
