@extends('layouts.master')

@section('title')
products
@stop
@section('content')
<h1>Products</h1>
@foreach($product as $product)
<div class="columns panel">
    <div class="large-6 medium-6 small-12 columns panel">
<h3>{{ $product->title }}</h3>
        <div>
        <a class="single_image"  href="img/lightbox/{{ $product->pic }}" title="{{ $product->title }}">
<p><img src="img/thumbs/{{ $product->pic }}" alt="{{ $product->title }}" width="400" /></p>
            </a></div>
    </div>
    <div class="large-6 medium-6 small-12 columns">
        <p>{{ $product->description }}</p>
        <h2>£{{ $product->price }}</h2>
        <form target="paypal" action="http://www.paypal.com/cgi-bin/webscr" method="post">
            <input type="hidden" name="cmd" value="_cart">
            <input type="hidden" name="business" value="your@email.com">
            <input type="hidden" name="lc" value="GB">
            <input type="hidden" name="item_name" value="{{ $product->title }}">
            <input type="hidden" name="item_number" value="{{ $product->product_id }}">
            <input type="hidden" name="amount" value="{{ $product->price }}">
            <input type="hidden" name="currency_code" value="GBP">
            <input type="hidden" name="button_subtype" value="products">
            <input type="hidden" name="no_note" value="0">
            <input type="hidden" name="add" value="1">
            <input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">
            <input type="image" src="http://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="Paypal - The safer, easier way to pay online!">
            <img alt="" border="0" src="http://paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>
    </div>
</div>

@endforeach
@stop
@stop

@section('footer')
<div class="small-12 columns panel">
    @parent
</div>
@stop