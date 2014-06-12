@extends('layouts.master')

@section('title')
Charities
@stop

@section('content')
<ul class="example-orbit" data-orbit data-options="animation:slide;
                  pause_on_hover: false;
                  animation_speed: 500;
                  timer_speed: 3000;
                  navigation_arrows:true;
                  bullets:true;">

    <li>
        <img class="slide" src="img/slideshow/manta!!!3.gif" alt="manta" />
        <div class="orbit-caption">
            The Manta in our seas.
        </div>
    </li>
    <li class="active">
        <img class="slide" src="img/slideshow/elephant.5.gif" alt="elephantInAfrica" />
        <div class="orbit-caption">
            The Elephants of Africa.
        </div>
    </li>
    <li>
        <img class="slide" src="img/slideshow/DIVING2.gif" alt="OurSea" />
        <div class="orbit-caption">
            Our ocean corals.
        </div>
    </li>

</ul>
<div class="large-12 medium-12 small-12 columns">
    <ul class="sub-nav">

        <li class="AboutNav"><a href="./about">About Us</a></li>
        <li class="AboutNav"><a href="./family">The Family</a></li>
        <li class="active AboutNav"><a href="./charities">Charities</a></li>
    </ul>
</div>
<h2>Charities</h2>
<div class="columns panel">
<div class="columns panel">
<div class="large-4 medium-4 columns">
    <img src="img/orrangutan.jpg" alt="orrangutan" />
</div>
<div class="large-8 medium-8 columns">
<p>This is the ServicesThis is the ServicesThis is the ServicesThis is the ServicesThis is the Servicesv
    This is the ServicesThis is the ServicesThis is the ServicesThis is the ServicesThis is the Services
    This is the ServicesThis is the ServicesThis is the ServicesThis is the ServicesThis is the Services</p>
</div>
</div>
    </div>
@stop

@section('footer')
<div class="small-12 columns panel">
    @parent
</div>
@stop