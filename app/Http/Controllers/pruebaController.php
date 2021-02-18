<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pruebaController extends Controller
{
    public function index(){
        return view('pruebas.index');
    }
    public function create(){
        return view('pruebas.create');
    }
    public function prueba($prueba){
        return view('pruebas.pito', compact('prueba'));
    }
}
