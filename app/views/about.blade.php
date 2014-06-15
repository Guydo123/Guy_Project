@extends('layouts.master')

@section('title')
About Us

@stop

@section('content')
<ul class="example-orbit" data-orbit data-options="animation:slide;
                  pause_on_hover: false;
                  animation_speed: 500;
                  timer_speed: 3000;
                  navigation_arrows:true;
                  bullets:true;">
    <li>
        <img class="BIg" src="img/lightbox/Lizard.gif" alt="Turtles" />
        <div class="orbit-caption">
            The Turtles
        </div>
    </li>
    <li class="active">
        <img class="BIg" src="img/lightbox/Cheetah.gif" alt="Cheetah" />
        <div class="orbit-caption">
            The Cheetah
        </div>
    </li>
    <li>
        <img class="BIg" src="img/lightbox/Horse.gif" alt="Horse" />
        <div class="orbit-caption">
            The Horse
        </div>
    </li>
    <li>
        <img class="BIg" src="img/lightbox/Bug.gif" alt="Bug" />
        <div class="orbit-caption">
            The Bug
        </div>
    </li>
</ul>
<br>
<div id="filter" class="large-12 medium-12 small-12 columns">
    <ul class="sub-nav">

        <li class="active AboutNav"><a href="./about">About Us</a></li>
        <li class="AboutNav"><a href="./family">The Family</a></li>
        <li class="AboutNav"><a href="./charities">Charities</a></li>
    </ul>
</div>

<div class="large-10 medium-10 small-12 columns">
<h2>About Us</h2>
</div>
<div class="large-6 medium-6 small-12 columns panel">
    <h3>Who we are</h3>
<p>We are a family business, with a passion for the environment. We set out on a mission to create interesting designs
    and raise awareness of the creatures in this world. We give 10% of our revenue to environmental charities, and hope
    that all those who buy our products will be inspired to help make the difference our world needs. </p>
</div>
<div class="large-6 medium-6 small-12 columns panel">
    <h3>What we do</h3>
    <p>We create designs of creatures, infusing colour and simplicity into things of beauty.
        Our designs can be found on our range of ceramics, our set for the table as well as items
        for artists and cards and canvases. We are passionate about constantly crating new designs
        to bring you that little something special for your home. We hope that you love our designs as much as we do!</p>
</div>

@stop

@section('footer')
<div class="small-12 columns panel">
    @parent
</div>
@stop