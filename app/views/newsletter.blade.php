@extends('layouts.master')

@section('title')
Newsletter
@stop

@section('content')
<ul class="example-orbit" data-orbit data-options="animation:slide;
                  pause_on_hover: false;
                  animation_speed: 500;
                  timer_speed: 3000;
                  navigation_arrows:true;
                  bullets:false;">
    <li>
        <img class="BIg" src="img/lightbox/Turtles.gif" alt="Turtles" />
        <div class="orbit-caption">
            The Turtles
        </div>
    </li>
    <li class="active">
        <img class="BIg" src="img/lightbox/Spring_Bok.jpg" alt="springbok" />
        <div class="orbit-caption">
            The Spring Bok
        </div>
    </li>
    <li>
        <img class="BIg" src="img/lightbox/Cockerel.gif" alt="cockerel" />
        <div class="orbit-caption">
            The Cockerel
        </div>
    </li>
    <li>
        <img class="BIg" src="img/lightbox/Termite.gif" alt="termite" />
        <div class="orbit-caption">
            The Termite
        </div>
    </li>
</ul>
@if(isset($feedback))
<h1>{{ $feedback }}</h1>
@endif
<h3>You are now on our Newsletter list! We will keep you up to date with lots of tasty info about Bugz &amp; Beastiez and the world!</h3>

@stop

@section('footer')
<div class="small-12 columns panel">
    @parent
</div>
@stop