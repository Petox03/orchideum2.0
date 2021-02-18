@extends('layouts.plantilla')

@section('title', 'probando ' . $prueba)

@section('src')
    <!-- web page styles -->
    <link rel="stylesheet" href="../../css/style.css">

    <!-- Frameworks y librerías -->
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../node_modules/animate.css/animate.min.css">
    <link rel="stylesheet" href="../../node_modules/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../../node_modules/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
@endsection

@section('content')
    <h1 class="color-title">{{$prueba}}</h1>
@endsection