@extends('layouts.master')

@section('title')
FAQ
@stop

@section('content')
<ul class="example-orbit" data-orbit data-options="animation:slide;
                  pause_on_hover: false;
                  animation_speed: 500;
                  timer_speed: 3000;
                  navigation_arrows:true;
                  bullets:true;"

    >
    <li>
        <img class="BIg" src="img/lightbox/Turtles.gif" alt="Turtles" />
        <div class="orbit-caption">
            The Turtles
        </div>
    </li>
    <li class="active">
        <img class="BIg" src="img/lightbox/rhino-True.gif" alt="rhino" />
        <div class="orbit-caption">
            The Rhino
        </div>
    </li>
    <li>
        <img class="BIg" src="img/lightbox/Pig.gif" alt="pig" />
        <div class="orbit-caption">
            The Pig
        </div>
    </li>
    <li>
        <img class="BIg" src="img/lightbox/Caterpillar-True.gif" alt="caterpillar" />
        <div class="orbit-caption">
            The Caterpillar
        </div>
    </li>
</ul>
<h2>Asked Questions</h2>
<dl>
    <dt onclick="showItem('one'),hideItems('span','showanswer1')"><p class="faqParagraph">Can I change the colours of the designs?</p><span class="showanswer1"></span></dt>
    <dd class="hide answers" id="one"><p>Yes! Just call us or send us a message to discuss which colours you would like our designs painted in.</p></dd>
    <dt onclick="showItem('two'),hideItems('span','showanswer1')"><p class="faqParagraph">Can I order a certain animal to be designed by you?</p><span class="showanswer1"></span></dt>
    <dd class="hide answers" id="two"><p>Yes! We can design any animal. We would be delighted and inspired to design a unique animal for you</p></dd>
</dl>
@stop

@section('footer')
<div class="small-12 columns panel">
    @parent
</div>
@stop
