@extends('layouts.master')

@section('title')
Procucts
@stop
@section('content')
<br>
<h1>Products</h1>
<br>



    <nav style="opacity: 0.8;" id="productNav" class="top-bar" data-topbar>
<form action="./productsHome" method="get">

    <div class="noMargin large-3 medium-3 small-3 columns">
    <select name="id_category">
        @foreach($categories as $category)
        <option value="{{ $category->id_category }}">{{ $category->category }}</option>
        @endforeach
    </select>
    </div>
    <div class="noMargin large-3 medium-3 small-3 columns">
    <select name="style_id">
        @foreach($styles as $style)
        <option value="{{ $style->style_id }}">{{ $style->style }}</option>
        @endforeach
    </select>
        </div>
    <div class="noMargin large-3 medium-3 small-3 columns">
    <select name="type_id">
        @foreach($types as $type)
        <option value="{{ $type->type_id }}">{{ $type->type }}</option>
        @endforeach
    </select>
        </div>
        <div class="noMargin large-3 medium-3 small-3 columns">

    <button id="choose" name="submit">Choose</button>
            </div>
</form>
        </nav>


@foreach($products as $product)
<div class="large-4 medium-4 small-12 columns panel">
<p>
    <a href="./products?product_id={{ $product->product_id }}">

        <img src="img/thumbs/{{ $product->pic }}" alt="{{ $product->title }}" width="300px"/>
        <h4>{{ $product->title }}</h4><br />
        <h4>£{{ $product->price }}</h4>

    </a>
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
</p>
</div>

@endforeach
@stop
@section('footer')
<div class="small-12 columns panel">
    @parent
</div>
@stop