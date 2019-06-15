@extends('layouts.bestprices')
@section('section-video')
<div class="col-12 text-center mt-4 "style="position: absolute;z-index: 2;top: 15vw; color: white !important;">
        <h2 class="  titulo">¡Bienvenido a Bestprices! <br>
        <small class="mt-2">Haz tu primera compra</small></h2>
       <a href="./login.html">
        <button class="col-sm-6 mt-2 btn btn-primary btn-header ">Ingresa Aqui</button>
      </a> 
      
      </div>
      <div class="hero-video">
      <video playsinline='playsinline' autoplay='autoplay'  muted='muted' class='w-100' id='video-hero' loop='loop'><source src='./img/video-hero.mp4' type='video/mp4'></video>
      </div>
        @endsection
@section('content')

@endsection