@extends('welcome')

@section('title', 'About')
@section('content')
<link href="{{ asset('css/layout/PageAbout.css') }}" rel="stylesheet">

<div class="body-top">
    <div>
        <div class="frame1">
            <img src="{{ asset('img/circle-design1.png') }}" alt="circle-design">
        </div>
        <div class="frame2">
            <img src="{{ asset('img/circle-design2.png') }}" alt="circle-design">
        </div>
        <div class="frame3">
            <img src="{{ asset('img/circle-design3.png') }}" alt="circle-design">
        </div>
    </div>
    <div>
        @include('../../components/navbar')
        <div class="container dashbord">
            @include('../../about/head')
        </div>
    </div>
</div>
<div class="body-middle">
    <div class="bar-info">
        <p><i class="fa-solid fa-gear"></i>+10 TECNOLOGIAS</p>
        <p><i class="fa-solid fa-book"></i>CURSOS</p>
        <p><i class="fa-solid fa-truck-fast"></i>+40 PROJETOS</p>
        <p><i class="fa-solid fa-shield-halved"></i>EXPERIÊNCIA</p>
    </div>
    <div class="container-about-master">
        @include('../../about/body')
    </div>
</div>

@endsection
