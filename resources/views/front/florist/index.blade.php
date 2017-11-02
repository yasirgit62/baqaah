@extends('layouts.main.master')
@section('content')
<title>Florist | Baaqah</title>

<!-- Google maps element -->
<div class="kl-slideshow static-content__slideshow" style="background:black; opacity:.7;"><br><br><br><br><br><br><br><br>
</div>
<!--/ Google maps element -->

<style>
    .florist h1{margin:-12px 0; font-size:18px;}
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
    .sort-btn{background-color: #e2e2e3; border: 1px solid #ccc; padding: 7px 60px 7px 16px; float:right;}
</style>

<div class="container florist">

    <br><br>

    <div class="row">
        <div class="col-xs-2"><img src="{{$florist->getThumbUrlAttribute()}}"></div>
        <div class="col-xs-7">
            <h1>{{$florist->store_name}}</h1>
            <p>{{$florist->address}}</p>
            <a href="#"><i class="fa">&#xf082;</i></a>
            <a href="#"><i class="fa">&#xf081;</i></a>
            <a href="#"><i class="fa">&#xf16d;</i></a>
            <a href="#"><i class="fa">&#xf166;</i></a>
            <p>www.almahra.com<br>+971 4 236 0000<br>+971 4 236 0000</p>

        </div>
        <div class="col-xs-3 text-right">
            <p><strong>Shop Features</strong> <br> Same Day Delivery <br> Arabic & English</p>
        </div>
    </div>

    <br>

    <div class="row florist-products" style="margin:0;">
        <div class="col-xs-10" style="padding:0;">
            <h2 class="florist-products">Products</h2>
            <p style="font-size:9px;">Showing all 30 Products</p>
        </div>
        <div class="col-xs-2" style="padding:0;margin-top:11px;">
            <a class="sort-btn">Sort By..</a>
        </div>
    </div>

    <div class="row florist-products-list">				
        <ul class="products clearfix">

            <!-- Product #1 -->
            @foreach($florist->products as $product)
            @if($product->is_available())
            <div class="col-md-3 col-sm-4 col-xs-6">
                <li class="product">
                    <div class="product-list-item prod-layout-classic">
                        <!-- Badge container -->
                        <div class="zn_badge_container">
                            <span class="zn_badge_sale">SALE! -20%</span>
                        </div>
                        <!--/ Badge container -->

                        <!-- Product container link -->
                        <a href="#">
                            <!-- Image wrapper -->
                            <span class="image kw-prodimage">
                              ٖ@if($product->images)
                                <img class="kw-prodimage-img" src="{{$product->images[0]->getThumbUrlAttribute()}}">
                                @else
                                <img class="kw-prodimage-img" src="{{url('/product_images/default.thumbnail.jpg')}}">
                                @endif
                            </span>
                            <!--/ Image wrapper -->
                        </a>
                        <!-- Product container link -->

                        <!-- Actions -->
                        <div class="actions kw-actions">
                           
                            <a href="#" rel="nofollow" data-product_id="" data-product_sku="" data-quantity="1" class="actions-addtocart add_to_cart_button product_type_simple">Add to cart</a>
                            
                            <a href="{{url('/main/flower-detail',$product->id)}}" class="actions-moreinfo">MORE INFO</a>
                        </div>
                        <!--/ Actions -->
                    </div>
                    <!--/ product-list-item -->
                </li>
                <p>{{$product->name}} <br> <strong>AED {{$product->price}}</strong></p> 
            </div>
            @else
            @endif
            <!--/ Product #1 -->
            @endforeach

        </ul>
    </div>

    <br>

    <div class="row">
        <center><a href="#" class="load-more-btn">Load More</a></center>
    </div>

    <br><br>
</div>
@endsection
@section('scripts')
<script>

</script>
@endsection