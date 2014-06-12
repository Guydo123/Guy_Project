@extends('layouts.master')

@section('title')
Designs - Bugz
@stop

@section('content')

<h2>Designs</h2>
<div id="filter" class="large-12 medium-12 small-12 columns">
    <ul class="sub-nav">

        <li class="DesNav"><a class="desLink" href="./designs">Africa</a></li>
        <li class="active DesNav"><a class="desLink" href="./designsTwo">Bugz</a></li>
        <li class="DesNav"><a class="desLink" href="./designsThree">Farm</a></li>
        <li class="DesNav"><a class="desLink" href="./designsFour">Reptilez</a></li>
        <li class="DesNav"><a class="DesNavA" href="./designsFive">Other</a></li>
    </ul>
</div>
<div class="columns panel">
    <h2>Bugz Collection</h2>
    <div class="row">
    <div class="large-6 medium-6 columns">
        <a class="single_image"  href="img/lightbox/Bee.gif" title="The Bee - Bugz Collection.">
            <img src="img/thumbs/Beethumb.gif" alt="bee" />
        </a>
        <p>The Bee</p></div>
    <div class="large-6 medium-6 columns">
        <a class="single_image"  href="img/lightbox/Butterfly.gif" title="The Butterfly - Bugz Collection.">
            <img src="img/thumbs/Butterflythumb.gif" alt="butterfly" />
        </a>
        <p>The Butterfly</p></div>
        </div>
        <div class="row">
    <div class="large-6 medium-6 columns">
        <a class="single_image"  href="img/lightbox/Termite.gif" title="The Termite - Bugz Collection.">
            <img src="img/thumbs/Termitethumb.gif" alt="Termite" />
        </a>
        <p>The Termite</p></div>
    <div class="large-6 medium-6 columns">
        <a class="single_image"  href="img/lightbox/Bug.gif" title="The Bug - Bugz Collection.">
            <img src="img/thumbs/Bugthumb.gif" alt="bug" />
        </a>
        <p>The Bug</p></div>
            </div>
            <div class="row">
    <div class="large-6 medium-6 columns">
        <a class="single_image"  href="img/lightbox/Caterpillar-True.gif" title="The Caterpillar - Bugz Collection.">
            <img src="img/thumbs/Caterpillarthumb2.gif" alt="caterpillar" />
        </a>
        <p>The Caterpillar</p></div>
    <div class="large-6 medium-6 columns">
        <a class="single_image"  href="img/lightbox/Moth.gif" title="The Moth - Bugz Collection.">
            <img src="img/thumbs/Moththumb.gif" alt="moth" />
        </a>
        <p>The Moth</p></div>
</div>

</div>


@stop

@section('footer')
<div class="small-12 columns panel">
    @parent
</div>
@stop