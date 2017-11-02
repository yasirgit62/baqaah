@extends('layouts.main.master')

@section('content')
<!-- Date Picker attched files -->
<title>Cart | Baaqah</title>

<!-- Google maps element -->
<div class="kl-slideshow static-content__slideshow" style="background:black; opacity:.7;"><br><br><br><br><br><br><br><br>
</div>
<!--/ Google maps element -->

<style>
    .florist h1{margin:-12px 0; font-size:18px;}
    .florist h6{margin:7px 0; font-size:18px;}
    .florist p{font-size:11px;}
    .florist p strong {font-size: 16px;}
    .text-right{text-align: right;}
    .florist i{color: #555555; font-size: 23px; margin-right: 5px;}
    .florist-products{border-top:1px solid #d8d8d8;}
    .florist h2{font-size:18px; text-transform: uppercase; margin: 0;}
    .florist-products-list{text-align: center;}
    .florist-products-list .col-xs-6{margin-bottom: 25px;}
    .florist-products-list p{color: #808182; font-size: 11px; line-height: 15px; margin: 5px auto 0; width: 151px;}
    .florist-products-list p strong{color: #4a4b4c; font-size: 15px; font-weight: normal;line-height: 22px;}
    .load-more-btn{background: #d9d9d9 none repeat scroll 0 0; border: 1px solid #c2c2c2; border-radius: 24px; color: #525252; padding: 4px 23px 5px;}
    .cart-btn{background: #d9d9d9 none repeat scroll 0 0; border: 1px solid #c2c2c2; color: #525252; padding: 4px 23px 5px;}
    .select-size input{margin-right: 5px;}
    textarea{border:1px solid #ccc;}
</style>

<div class="container florist">

    <br><br>

    <div class="row">
        <div class="col-xs-3">ٖ@if($product->images)
            <img class="kw-prodimage-img" src="{{$product->images[0]->getFullUrlAttribute()}}">
            @else
            <img class="kw-prodimage-img" src="{{url('/product_images/default.thumbnail.jpg')}}">
            @endif</div>
        <div class="col-xs-7">
            <h1>{{$product->name}}</h1>
            <h6>AED {{$product->price}}</h6>
            <p><strong>Description</strong><br>
                {{$product->description}}
                <br><br><strong>Delivery Info</strong><br>
                {{$product->delivery_time}}. @if($product->delivery_time < 2)Day Delivery @else Days Delivery @endif
            </p>
            @if($product->can_cart())
            <a href="#" class="cart-btn">ADD TO CART</a>
            @else
            @endif
        </div>
    </div>

    <br>

    <div class="row select-size">
        <div class="col-xs-12">
            <h2>1. Select Size</h2>
            @foreach($product->sizes as $size)
            <div class="col-xs-3">
                <input type="checkbox" class="pull-left">
                <p class="pull-left">{{$size->name}} AED {{$size->pivot->price}}<br>{{$size->pivot->weight}}g </p>
            </div>
            @endforeach
        </div>
    </div>    

    <div class="row">
        <div class="col-xs-12">
            <h2  class="florist-products">2. Add-Ons</h2>
        </div >
    </div>

    <div class="row florist-products-list">
        @if(count($product->gifts))
        @foreach($product->gifts as $gift)
        <div class="col-md-3 col-sm-4 col-xs-6">
            <img src="{{$gift->images[0]->getFullUrlAttribute()}}">
            <p>{{$gift->short_description}}<br> <strong>AED {{$gift->price}}</strong><br><input type="checkbox"></p>
        </div>
        @endforeach
        @endif
    </div>

    <div class="row select-size">
        <div class="col-xs-12">
            <h2>3. Deliver By</h2>
            <div class='col-sm-4 pull-left'>
                <div class="form-group">
                    <div class='input-group date' id='datetimepicker3'>
                        <input type='text' class="form-control" value="12:00" id="timepicker" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-time"></span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    @if($product->c_message =='1')
    <div class="row select-size">
        <div class="col-xs-12">
            <h2>4. Add A Message</h2>
            <textarea type="text" placeholder="150 Characters" class="pull-left col-xs-6" rows="5"></textarea>
        </div>
    </div>
    @endif
    <br><br>
</div>

<!-- Time Picker attched files -->
@endsection
@section('scripts')
<script>
    $(function () {
        $("#datepicker").datepicker();
    });
    $("#timepicker").timepicker();
</script>
@endsection
