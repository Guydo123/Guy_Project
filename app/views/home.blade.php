@extends('layouts.master')

@section('title')
Welcome to Bugz &amp; Beastiez
@stop

@section('content')
<ul class="example-orbit" data-orbit data-options="animation:slide;
                  pause_on_hover: false;
                  animation_speed: 500;
                  timer_speed: 3000;
                  navigation_arrows:true;
                  bullets:true;">

    <li>
        <img class="BIg" src="img/lightbox/Turtles.gif" alt="Turtles" />
        <div class="orbit-caption">
            The Turtles
        </div>
    </li>
    <li>
        <img class="BIg" src="img/lightbox/Warthog.gif" alt="warthog" />
        <div class="orbit-caption">
            The Warthog
        </div>
    </li>
    <li class="active">
        <img class="BIg" src="img/lightbox/Bull.gif" alt="bull" />
        <div class="orbit-caption">
            The Bull
        </div>
    </li>
    <li>
        <img class="BIg" src="img/lightbox/Bee.gif" alt="bee" />
        <div class="orbit-caption">
            The Bee
        </div>
    </li>
</ul>


<h2>Welcome to Bugz and Beastiez</h2>
<div class="columns panel">

<div class="large-6 medium-6 columns ">

<p> We are a family business of 4 siblings who set out as a
    team on a fun mission to constantly create exciting ideas to bring warmth
    and freshness to you with our cutting edge designs.

   Each and every design has been inspired by African art and
    fused with a British sentiment to create something refreshing
    yet warming for your home.
</p>
</div>

<div class="large-6 medium-6 columns">

    <p>
        We have a huge amount of fun carefully designing the sets to give you warm yet modern homeware, however, should you prefer a different colour scheme
        then please call our artist Ish for a discussion about
        your perfect choice of colours. Why not see some of our
        suggestions!</p>
</div>
</div>

<div class="productsHome">
<h3>Products</h3>
    <div class="row">
        <div class="Large-12 medium-12 columns panel">
<div class="large-3 medium-3 small-6 columns panel">
    <a href="./productsHome">
        <h4>Ceramics</h4>

        <div class="cycle-slideshow">
            <img class="homeProd" src="img/thumbs/Mug2.gif" alt="Dummy" />
            <img class="homeProd" src="img/thumbs/Mug2.gif" alt="Dummy" />
            <img class="homeProd" src="img/thumbs/Mug2.gif" alt="Dummy" />
            </div>

        <p class="caption">Brighten up your dining with
            our collection of plates, mugs and bowles.</p></a>

</div>
<div class="large-3 medium-3 small-6 columns panel">
    <a href="index.php/comingSoon">
        <h4>Tableware</h4>
        <div class="cycle-slideshow">
            <img class="homeProd" src="img/thumbs/Mug2.gif" alt="Dummy" />
            <img class="homeProd" src="img/thumbs/Mug2.gif" alt="Dummy" />
            <img class="homeProd" src="img/thumbs/Mug2.gif" alt="Dummy" />
          </div>

    <p class="caption">Our tableware collection of coasters, mats, napkins, and aprons.</p></a>

</div>
<div class="large-3 medium-3 small-6 columns panel">
    <a href="index.php/comingSoon">
    <h4>For Artists</h4>

        <div class="cycle-slideshow">
            <img class="homeProd" src="img/thumbs/Mug2.gif" alt="Dummy" />
            <img class="homeProd" src="img/thumbs/Mug2.gif" alt="Dummy" />
            <img class="homeProd" src="img/thumbs/Mug2.gif" alt="Dummy" />
       </div>


    <p class="caption">Inspire yourself with or range of art products; for all you creatives!</p></a>

</div>

        <div class="large-3 medium-3 small-6 columns panel">
            <a href="index.php/comingSoon">
                <h4>Canvas</h4>
                <div class="cycle-slideshow">
                    <img class="homeProd" src="img/thumbs/Mug2.gif" alt="Dummy" />
                    <img class="homeProd" src="img/thumbs/Mug2.gif" alt="Dummy" />
                    <img class="homeProd" src="img/thumbs/Mug2.gif" alt="Dummy" />
                </div>



            <p class="caption">Click here to see our range of canvas paintings, posters and cards!</p></a>

        </div>

</div>
    </div>
</div>

<div>
<h3>News</h3>

    @foreach($news as $item)
    <div class="small-6 columns panel">
        <h3>{{ $item->headline }}</h3>
        <p>{{ $item->info }}</p>
    </div>
    @endforeach

</div>

@stop

@section('footer')
<div class="small-12 columns panel">
@parent
</div>
@stop