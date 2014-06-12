@extends('layouts.master')

@section('title')
Designs - Reptilez
@stop

@section('content')

<h2>Designs</h2>
<div id="filter" class="large-12 medium-12 small-12 columns">
    <ul class="sub-nav">

        <li class="DesNav"><a href="./designs">Africa</a></li>
        <li class="DesNav"><a href="./designsTwo">Bugz</a></li>
        <li class="DesNav"><a href="./designsThree">Farm</a></li>
        <li class="active DesNav"><a href="./designsFour">Reptilez</a></li>
        <li class="DesNav"><a class="DesNavA" href="./designsFive">Other</a></li>
    </ul>
</div>
<div class="columns panel">
    <h2>Reptilez Collection</h2>
    <div class="row">
    <div class="large-6 medium-6 columns">
        <a class="single_image"  href="img/lightbox/Lizard.gif" title="The Lizard - Reptilez Collection.">
            <img src="img/thumbs/Lizardthumb.gif" alt="Lizard" />
        </a>
        <p>The Lizard</p></div>
    <div class="large-6 medium-6 columns">
        <a class="single_image"  href="img/lightbox/Turtles.gif" title="The Turtles - Reptilez Collection.">
            <img src="img/thumbs/Turtlesthumb.gif" alt="turtles" />
        </a>
        <p>The Turtles</p></div>
        </div>

    <p>More designs coming soon...</p>

</div>


@stop

@section('footer')
<div class="small-12 columns panel">
    @parent
</div>
@stop