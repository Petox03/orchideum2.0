@extends('layouts.plantilla')

@section('title', 'Probando')

@section('content')
    <?php
    $a = DB::table('users')->where('user', 'Petox03')->first();

    echo'
    <h1>funciona '.$a->name ." ". $a->lastname.'</h1>
    ';
    ?>
@endsection