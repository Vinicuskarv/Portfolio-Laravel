@extends('welcome')

@section('content')
<link href="{{ asset('css/home/home.css') }}" rel="stylesheet">
<div class="container-home">
    <label>Olá pessoas,</label>
    <h1 class="texth1">I'M VINICIUS CARVALHO</h1>
    <label>Bem-vindo ao meu portfólio</label><br><br>
    <a href="{{ route('about') }}" class="btn-master">Me conheça um pouco mais</a>
    <a href="{{ route('about') }}" class="btn-master"><i class="fa-regular fa-file-pdf"></i></a>
    <br><br>
    <div class="icons">
        <i class="fa-brands fa-github"></i>
        <i class="fa-brands fa-linkedin"></i>
        <i class="fa-brands fa-whatsapp"></i>
        <i class="fa-regular fa-envelope"></i>        
    </div>

</div>

@endsection