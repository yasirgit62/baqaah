@extends('layouts.main.master')

@section('content')
	<!-- Date Picker attched files -->
	

	
	<!-- Date Picker attched files -->
<title>Baaqah</title>
<style>
h2{padding:33px 0 0;}	
h2 center{padding-bottom:15px;}
h2 span{border-top: 2px solid; display: table; margin:0 auto;}
.home-categories ul{padding:0;}
.home-categories ul li{float:left; list-style-type:none; text-align: center; margin-bottom: 33px; color: #2B2C2E; font-size: 18px;}
.kl-iosslide-caption{margin-top:0 !important;}
.kl-iosslide-caption h2{color: white;}
.kl-iosslide-caption input{ border: medium none; border-radius: 3px; margin: 0 2px; padding:5px 20px;}
.kl-iosslide-caption select{ border: medium none; border-radius: 3px; margin: 0 2px; padding:6px 20px;}
.kl-iosslide-caption a{background-color: black; border-radius: 3px; padding: 5px;}
</style>
<!-- Home Start -->

	<!-- Slideshow - iOS Slider element with animateme scroll efect, custom height and bottom mask style 2 -->
	<div class="kl-slideshow iosslider-slideshow uh_light_gray maskcontainer--shadow_ud iosslider--custom-height scrollme">

		<!-- iOS Slider wrapper with animateme scroll efect -->
		<div class="iosSlider kl-slideshow-inner animateme" data-trans="6000" data-autoplay="1" data-infinite="true" data-when="span" data-from="0" data-to="0.75" data-translatey="300" data-easing="linear">
			<!-- Slides -->
			<div class="kl-iosslider hideControls">
				<!-- Slide 2 -->
				<div class="item iosslider__item" style="background-color:rgba(4,43,135,0.45); background-image:<?php url('/assets_front/images/home/homeslider.jpg')?>; background-repeat:no-repeat;">
					<!-- Video background container -->
					<div class="kl-video-container">
						<!-- Video wrapper -->
						<div class="kl-video-wrapper video-grid-overlay">
							<!-- Self Hosted Video Source -->
							<div class="kl-video valign halign" style="width: 100%; height: 100%;" data-setup='{ 
								"position": "absolute", 
								"loop": true, 
								"autoplay": true, 
								"muted": true, 
								"mp4": "videos/Working-Space.mp4", 
								"poster": "videos/Working-Space.jpg", 
								"video_ratio": "1.7778" }'>
							</div>
							<!--/ Self Hosted Video Source -->
						</div>
						<!--/ Video wrapper -->
					</div>
					<!--/ Video background container -->

					<!-- Color overlay -->
					<div class="kl-slide-overlay"> <!--style="background-color:rgba(4,43,135,0.45);"-->
					</div>
					<!--/ Color overlay -->

					<!-- Captions container -->
					<div class="container kl-iosslide-caption kl-ioscaption--style5 fromleft klios-alignleft kl-caption-posv-middle">
						<center><h2>One Platform 40 Shops, 200 Bouqets</h2><br><br><br>
						<input type="text" class="col-sm-4" placeholder="Enter Keyword">
						<select class="col-sm-3">
							<option value="" placeholder="Select Date Range">Select Occasion</option>
							<option value="">1</option>
							<option value="">2</option>
							<option value="">3</option>
						</select>
						<input type='text' class="col-sm-3" id="datepicker" placeholder="Select Date Range" />												
						<a class="col-sm-1">
							<span class="glyphicon glyphicon-search icon-white"></span>
						</a>
						</center>							
					</div>
					<!--/ Captions container -->

					<!-- Image boxes -->
					<div class="klios-imageboxes fromleft klios-alignleft middle ">
						<!-- Image boxes wrapper -->
						<div class="kl-imgbox-inner">
							<!-- Box #1 -->
							<div class="kl-imgbox kl-imgbox--1">
								<a href="#" title="" class="kl-imgbox--link" style="background-image:<?php url('/assets_front/images/sliders/Banner-4.png')?>;"></a>
							</div>
							<!--/ Box #1 -->

							<!-- Box #2 -->
							<div class="kl-imgbox kl-imgbox--2">
								<a href="#" title="" class="kl-imgbox--link" style="background-image:<?phpurl('/assets_front/images/sliders/Banner-3.png')?>;"></a>
							</div>
							<!--/ Box #2 -->

							<!-- Box #3 -->
							<div class="kl-imgbox kl-imgbox--3">
								<a href="#" title="" class="kl-imgbox--link" style="background-image:<?php url('/assets_front/images/sliders/Banner-1.png')?>;"></a>
							</div>
							<!--/ Box #3 -->
						</div>
						<!--/ Image boxes wrapper -->
					</div>
					<!--/ Image boxes -->
				</div>
				<!--/ Slide 2 -->
			
			</div>
			<!--/ Slides -->

			<!-- Navigation Controls - Prev -->
			<div class="kl-iosslider-prev">
				<!-- Arrow -->
				<span class="thin-arrows ta__prev"></span>
				<!--/ Arrow -->

				<!-- Label - prev -->
				<div class="btn-label">
					PREV
				</div>
				<!--/ Label - prev -->
			</div>
			<!--/ Navigation Controls - Prev -->

			<!-- Navigation Controls - Next -->
			<div class="kl-iosslider-next">
				<!-- Arrow -->
				<span class="thin-arrows ta__next"></span>
				<!--/ Arrow -->

				<!-- Label - next -->
				<div class="btn-label">
					NEXT
				</div>
				<!--/ Label - next -->
			</div>
			<!--/ Navigation Controls - Prev -->
		</div>
		<!--/ iOS Slider wrapper with animateme scroll efect -->

	</div>
	<!--/ Slideshow - iOS Slider element with animateme scroll efect, custom height and bottom mask style 2 -->

	<div style="background-color:black; width:100%; padding:22px 0; color:white;">
		<div class="container">
			<div class="col-xs-6" style="padding:3px 0;">Want to be updated with our latest offers?</div>
			<div class="col-xs-6">
				<a href="#" class="pull-right" style="border:1px solid white; padding:4px 18px 5px; color:white;">Join Our Newsletter</a>
			</div>
		</div>
	</div>

<!-- FEATURED / LATEST / BEST SELLING Carousels section Start -->
	<section class="hg_section">
	<div class="container">
	<div class="row">
	<div class="col-md-12 col-sm-12">
	<div class="shop-latest">
	<div class="spp-products-rows">	

		<div class="row" style="margin:0; padding:0;">

			<h2><center>FLORISTS</center><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></h2>

			<div class="col-sm-12">
				<!-- Shop latest carousel -->
				<div class="shop-latest-carousel">
					<!-- Featured products list -->
					<ul class="featured_products">
						<!-- Product #1 -->
						<li><div class="product-list-item prod-layout-classic">
						<a href="#">
							<span class="image kw-prodimage">
								<img class="kw-prodimage-img" src="{{url('/assets_front/images/florists/1.jpg')}}" />
								<p><center>Arpan Flower</center></p>
							</span>
						</a>
						</div></li>
						<!--/ Product #1 -->

						<!-- Product #2 -->
						<li><div class="product-list-item prod-layout-classic">
						<a href="#">
							<span class="image kw-prodimage">
								<img class="kw-prodimage-img" src="{{url('/assets_front/images/florists/2.jpg')}}" />
								<p><center>Arpan Flower</center></p>
							</span>
						</a>
						</div></li>
						<!--/ Product #2 -->

						<!-- Product #3 -->
						<li><div class="product-list-item prod-layout-classic">
						<a href="#">
							<span class="image kw-prodimage">
								<img class="kw-prodimage-img" src="{{url('/assets_front/images/florists/3.jpg')}}" />
								<p><center>Arpan Flower</center></p>
							</span>
						</a>
						</div></li>
						<!--/ Product #3 -->

						<!-- Product #4 -->
						<li><div class="product-list-item prod-layout-classic">
						<a href="#">
							<span class="image kw-prodimage">
								<img class="kw-prodimage-img" src="{{url('/assets_front/images/florists/2.jpg')}}" />
								<p><center>Arpan Flower</center></p>
							</span>
						</a>
						</div></li>
						<!--/ Product #4 -->
                                                <li><div class="product-list-item prod-layout-classic">
						<a href="#">
							<span class="image kw-prodimage">
								<img class="kw-prodimage-img" src="{{url('/assets_front/images/florists/2.jpg')}}" />
								<p><center>Arpan Flower</center></p>
							</span>
						</a>
						</div></li>
						<!-- Product #5 -->
						<li><div class="product-list-item prod-layout-classic">
						<a href="#">
							<span class="image kw-prodimage">
								<img class="kw-prodimage-img" src="{{url('/assets_front/images/florists/2.jpg')}}" />
								<p><center>Arpan Flower</center></p>
							</span>
						</a>
						</div></li>
						<!--/ Product #5 -->
					</ul>
					<!--/ Featured products list -->

					<!-- Navigation controls -->
					<div class="th-controls controls">
						<a href="#" class="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
						</a>
						<a href="#" class="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</div>
					<!--/ Navigation controls -->
				</div>
				<!--/ Shop latest carousel -->
			</div> <!--/ col-sm-12 -->
			
		</div><!--/ row -->

		<div class="row" style="margin:0; padding:0;">

			<h2><center>CATEGORIES</center><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></h2>

			<div class="col-sm-12">
				<!-- Shop latest carousel -->
				<div class="shop-latest-carousel">
					<!-- Featured products list -->
					<ul class="featured_products">
						<!-- Product #1 -->
						<li><div class="product-list-item prod-layout-classic">
						<a href="#">
							<span class="image kw-prodimage">
								<img class="kw-prodimage-img" src="{{url('/assets_front/images/categories/2.jpg')}}" />
								<p><center>Arpan Flower</center></p>
							</span>
						</a>
						</div></li>
						<!--/ Product #1 -->

						<!-- Product #2 -->
						<li><div class="product-list-item prod-layout-classic">
						<a href="#">
							<span class="image kw-prodimage">
								<img class="kw-prodimage-img" src="{{url('/assets_front/images/categories/2.jpg')}}" />
								<p><center>Arpan Flower</center></p>
							</span>
						</a>
						</div></li>
						<!--/ Product #2 -->

						<!-- Product #3 -->
						<li><div class="product-list-item prod-layout-classic">
						<a href="#">
							<span class="image kw-prodimage">
								<img class="kw-prodimage-img" src="{{url('/assets_front/images/categories/2.jpg')}}" />
								<p><center>Arpan Flower</center></p>
							</span>
						</a>
						</div></li>
						<!--/ Product #3 -->

						<!-- Product #4 -->
						<li><div class="product-list-item prod-layout-classic">
						<a href="#">
							<span class="image kw-prodimage">
								<img class="kw-prodimage-img" src="{{url('/assets_front/images/categories/2.jpg')}}" />
								<p><center>Arpan Flower</center></p>
							</span>
						</a>
						</div></li>
						<!--/ Product #4 -->
                                                <li><div class="product-list-item prod-layout-classic">
						<a href="#">
							<span class="image kw-prodimage">
								<img class="kw-prodimage-img" src="{{url('/assets_front/images/categories/2.jpg')}}" />
								<p><center>Arpan Flower</center></p>
							</span>
						</a>
						</div></li>
						<!-- Product #5 -->
						<li><div class="product-list-item prod-layout-classic">
						<a href="#">
							<span class="image kw-prodimage">
								<img class="kw-prodimage-img" src="{{url('/assets_front/images/categories/2.jpg')}}" />
								<p><center>Arpan Flower</center></p>
							</span>
						</a>
						</div></li>
						<!--/ Product #5 -->
					</ul>
					<!--/ Featured products list -->

					<!-- Navigation controls -->
					<div class="th-controls controls">
						<a href="#" class="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
						</a>
						<a href="#" class="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</div>
					<!--/ Navigation controls -->
				</div>
				<!--/ Shop latest carousel -->
			</div> <!--/ col-sm-12 -->
			
		</div><!--/ row -->
		
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
<!-- FEATURED / LATEST / BEST SELLING Carousels section End -->

		

	<div style="background-color:#464748; width:100%; padding:22px 0; color:white;">
		<div class="container">
			<div class="col-xs-6" style="padding:3px 0;">Want to showcase your flowers on Baaqah?</div>
			<div class="col-xs-6">
				<a href="#" class="pull-right" style="border:1px solid white; padding:4px 18px 5px; color:white;">List Your Business</a>
			</div>
		</div>
	</div>

@endsection

@section('scripts')
<script type="text/javascript">
$( function() {
	$( "#datepicker" ).datepicker();
	} );
 
</script>

@endsection