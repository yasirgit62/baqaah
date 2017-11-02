ٖ@extends('layouts.main.master')
@section('content')
<title>Flowers-List | Baaqah</title>

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
</style>

<div class="container florist">
    <br>
    <div class="col-sm-3"><br><br>
        <div id="sidebar-widget" class="sidebar">
            <!-- Widget -->
            <div class="widget">
                <!-- Title -->
                <h3 class="widgettitle title">PRODUCT SEARCH</h3>

                <!-- Search widget -->
                <div class="widget_search">
                    <!-- Search wrapper -->
                    <div class="search gensearch__wrapper">
                        <form id="searchform" class="gensearch__form" action="http://www.google.com/search" method="get" onsubmit="Gsitesearch(this)" target="_blank">
                            <input id="s" name="s" maxlength="20" class="inputbox gensearch__input" size="20" value="SEARCH ..." onblur="if (this.value == '')
                                        this.value = 'SEARCH ...';" onfocus="if (this.value == 'SEARCH ...')
                                                    this.value = '';" type="text"><button type="submit" id="searchsubmit" value="go" class="gensearch__submit glyphicon glyphicon-search"></button>
                        </form>
                    </div>
                    <!-- Search wrapper -->
                </div>
                <!--/ Search widget -->
            </div>
            <!--/ Search widget -->

            <!-- Price filter widget -->
            <div id="kl-store_price_filter-2" class="widget kl-store widget_price_filter">
                <!-- Title -->
                <h3 class="widgettitle title">FILTER BY PRICE</h3>
                <form method="get" action="#">
                    <div class="price-range">
                        <div class="price-range-slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false">
                            <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 15%; width: 45%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 15%;"></a><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 60%;"></a></div>
                        <button type="submit" class="button">Filter</button>
                        <div class="pr-result">
                            <span>Price: </span>
                            <input class="price-result" data-currency="£" type="text">
                        </div>				
                    </div>
                </form>
            </div>
            <!--/ Price filter widget -->
            <!-- yasir filter widget -->
            <div id="kl-store_price_filter-2" class="widget kl-store widget_price_filter">
                <!-- Title -->
                <h3 class="widgettitle title">Yasir FILTER</h3>
                <form method="post" action="{{url('main/all_products')}}">
                    {!! Form::token() !!}
                    <select class="form-control  select2" name="florist_id" placeholder= 'Select Florist Name' > 
                        <option value="">Select Florist Name </option>
                        @if(count($florists))
                         @foreach($florists as $florist)                                                                                                     each($florists as $florist)
                        <option value="{{$florist->id}}">{{$florist->store_name}}</option>
                        @endforeach
                        @endif
                    </select>
                    <br>
                    <input class="form-control input-circle" type="text" placeholder="Enter Price" name="price">
                    <br>
                    <input name="time"  id="timepicker" type="text" class="form-control " >
                    <br>
                    <input name="date"  id="datepicker" type="text" class="form-control " required > 
                    <br>
                    <select class="form-control  select2" name="area_id" placeholder= 'Select Your Area' > 
                        <option value="">Plz Select Your Area </option>
                        @if(count($areas))
                        @foreach($areas as $area)
                        <option value="{{$area->id}}">{{$area->name}}</option>
                        @endforeach
                        @endif
                    </select>
                    <br>
                    <input type="submit" value="press">


                </form>
            </div>
            <!--/ Price filter widget -->
            <!-- Widget -->
            <div class="widget">
                <!-- Title -->
                <h3 class="widgettitle title">Filter By Date</h3>

                <!-- date widget -->
                <div class="widget_search">
                    <!-- Search wrapper -->
                    <div class="search gensearch__wrapper">
                        <form id="searchform" class="gensearch__form" action="http://www.google.com/search" method="get" onsubmit="Gsitesearch(this)" target="_blank">
                            <input id="s" name="s" maxlength="20" class="inputbox gensearch__input" size="20" value="DATE ..." onblur="if (this.value == '')
                                        this.value = 'SEARCH ...';" onfocus="if (this.value == 'SEARCH ...')
                                                    this.value = '';" type="text"><button type="submit" id="searchsubmit" value="go" class="gensearch__submit glyphicon glyphicon-search"></button>
                        </form>
                    </div>
                    <!-- date wrapper -->
                </div>
                <!--/ date widget -->
            </div>
            <!--/ date widget -->

            <!-- Widget -->
            <div class="widget">
                <!-- Title -->
                <h3 class="widgettitle title">Filter By Location</h3>

                <!-- Location widget -->
                <div class="widget_search">
                    <!-- Location wrapper -->
                    <div class="search gensearch__wrapper">
                        <form id="searchform" class="gensearch__form" action="http://www.google.com/search" method="get" onsubmit="Gsitesearch(this)" target="_blank">
                            <input id="s" name="s" maxlength="20" class="inputbox gensearch__input" size="20" value="Location ..." onblur="if (this.value == '')
                                        this.value = 'SEARCH ...';" onfocus="if (this.value == 'SEARCH ...')
                                                    this.value = '';" type="text"><button type="submit" id="searchsubmit" value="go" class="gensearch__submit glyphicon glyphicon-search"></button>
                        </form>
                    </div>
                    <!-- Location wrapper -->
                </div>
                <!--/ Location widget -->
            </div>
            <!--/ Location widget -->

            <!-- Widget -->
            <div class="widget">
                <!-- Title -->
                <h3 class="widgettitle title">Filter By florist</h3>

                <!-- florist widget -->
                <div class="widget_search">
                    <!-- florist wrapper -->
                    <div class="search gensearch__wrapper">
                        <form id="searchform" class="gensearch__form" action="http://www.google.com/search" method="get" onsubmit="Gsitesearch(this)" target="_blank">
                            <input id="s" name="s" maxlength="20" class="inputbox gensearch__input" size="20" value="FLORIST ..." onblur="if (this.value == '')
                                        this.value = 'SEARCH ...';" onfocus="if (this.value == 'SEARCH ...')
                                                    this.value = '';" type="text"><button type="submit" id="searchsubmit" value="go" class="gensearch__submit glyphicon glyphicon-search"></button>
                        </form>
                    </div>
                    <!-- florist wrapper -->
                </div>
                <!--/ florist widget -->
            </div>
            <!--/ florist widget -->

        </div>
    </div>

    <br><br>			

    <div class="col-sm-9 florist-products-list">
        @if(count($products))
            @foreach($products as $product)
                @if($product->is_available())
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <li class="product">
                        <div class="product-list-item prod-layout-classic">
                            <!-- Badge container -->
                            <div class="zn_badge_container">
                                <span class="zn_badge_sale">SALE! -20%</span>
                            </div>
                            <a href="#">
                                <!-- Image wrapper -->
                                <span class="image kw-prodimage">
                                    ٖ@if($product->images)
                                    <img class="kw-prodimage-img" src="{{$product->images[0]->getThumbUrlAttribute()}}">
                                    @else
                                    <img class="kw-prodimage-img" src="{{url('/product_images/default.thumbnail.jpg')}}">
                                    @endif
                                </span>
                            </a>
                            <div class="actions kw-actions">
                                <a href="#" rel="nofollow" data-product_id="" data-product_sku="" data-quantity="1" class="actions-addtocart add_to_cart_button product_type_simple">Add to cart</a>
                                <a href="{{url('/main/flower-detail',$product->id)}}" class="actions-moreinfo">MORE INFO</a>
                            </div>
                        </div>
                    </li>
                    <p>{{$product->name}} <br> <strong>AED {{$product->price}}</strong></p> 
                </div>
                @else
                @endif
            @endforeach
        @endif

    </div>

    <br><br>
</div>

@endsection
@section('scripts')



<script>
    $(function () {
        $("#datepicker").datepicker();
        $("#timepicker").timepicker();
    });

</script>
<script>
    $(function () {
        $('.select2').select2();
    });

</script>
@endsection