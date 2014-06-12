@extends('layouts.master')

@section('title')
Designs - Misc
@stop

@section('content')

<h2>Designs</h2>
<div id="filter" class="large-12 medium-12 small-12 columns">
    <ul class="sub-nav">

        <li class="DesNav"><a href="./designs">Africa</a></li>
        <li class="DesNav"><a href="./designsTwo">Bugz</a></li>
        <li class="DesNav"><a href="./designsThree">Farm</a></li>
        <li class="DesNav"><a href="./designsFour">Reptilez</a></li>
        <li class="active DesNav"><a class="DesNavA" href="./designsFive">Other</a></li>
    </ul>
</div>
<div class="columns panel">
    <h2>Coming Soon...</h2>


</div>


@stop

@section('footer')
<div class="small-12 columns panel">
    @parent
</div>
@stop