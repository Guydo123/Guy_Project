@extends('layouts.master')

@section('title')
Designs - Farm
@stop

@section('content')

<h2>Designs</h2>

<div id="filter" class="large-12 medium-12 small-12 columns">
    <ul class="sub-nav">

        <li class="DesNav"><a href="./designs">Africa</a></li>
        <li class="DesNav"><a href="./designsTwo">Bugz</a></li>
        <li class="active DesNav"><a href="./designsThree">Farm</a></li>
        <li class="DesNav"><a href="./designsFour">Reptilez</a></li>
        <li class="DesNav"><a class="DesNavA" href="./designsFive">Other</a></li>
    </ul>
</div>

<div class="columns panel">
    <h2>Farm Collection</h2>
    <div class="row">
    <div class="large-6 medium-6 columns">
        <a class="single_image"  href="img/lightbox/Horse.gif" title="The Horse - Farm Collection.">
            <img src="img/thumbs/Horsethumb.gif" alt="horse" />
        </a>
        <p>The Horse</p></div>
    <div class="large-6 medium-6 columns">
        <a class="single_image"  href="img/lightbox/Bull.gif" title="The Bull - Farm Collection.">
            <img src="img/thumbs/Bullthumb.gif" alt="Bull" />
        </a>
        <p>The Bull</p></div>
        </div>
        <div class="row">
    <div class="large-6 medium-6 columns">
        <a class="single_image"  href="img/lightbox/Cockerel.gif" title="The Cockerel - Farm Collection.">
            <img src="img/thumbs/Cockerelthumb.gif" alt="Cockerel" />
        </a>
        <p>The Cockerel</p></div>
    <div class="large-6 medium-6 columns">
        <a class="single_image"  href="img/lightbox/Pig.gif" title="The Pig - Farm Collection.">
            <img src="img/thumbs/Pigthumb.gif" alt="pig" />
        </a>
        <p>The Pig</p></div>
            </div>
            <div class="row">
    <p>More to be added...</p>
</div>

</div>


@stop

@section('footer')
<div class="small-12 columns panel">
    @parent
</div>
@stop