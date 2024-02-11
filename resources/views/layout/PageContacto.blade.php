@extends('welcome')

@section('title', 'Contacto')
@section('content')
<link href="{{ asset('css/layout/PageContacto.css') }}" rel="stylesheet">
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
            <h1>Contacto</h1>
    </div>
</div>
@endsection
