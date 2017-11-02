@extends('layouts.main.master')
@section('content')
<title>Favorites | Baaqah</title>
		

		<!-- Google maps element -->
		<div class="kl-slideshow static-content__slideshow" style="background:black; opacity:.7;"><br><br><br><br><br><br><br><br>
		</div>
		<!--/ Google maps element -->

		<div class="container favorites">
			<h2><center><br>Favorites<br><br></center></h2>

			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-3">
					<img src="{{url('/assets_front/images/favorites.png')}}">
					<center><p>Our mailing list you will always be update with the latest news</p></center>
				</div>
				<div class="col-sm-3">
					<img src="{{url('/assets_front/images/favorites.png')}}">
					<center><p>Our mailing list you will always be update with the latest news</p></center>
				</div>
				<div class="col-sm-3"></div>
			</div>

			<style>
			.favorites ul{padding: 0;}
			.favorites ul li{list-style-type: none; padding: 15px 0 35px; border: 1px solid #c1c1c1;}
			.favorites ul .fill{background: #ccc;}
			</style>

			<br><br>

			<div class="row">
				<ul>
					<li>
						<div class="col-xs-4">Store Name</div>
						<div class="col-xs-4">Al Mahra Flowers</div>
						<div class="col-xs-4">Flowers United</div>
					</li>
					<li class="fill">
						<div class="col-xs-4">Price</div>
						<div class="col-xs-4">AED 500</div>
						<div class="col-xs-4">AED 450</div>
					</li>
					<li>
						<div class="col-xs-4">Delivery</div>
						<div class="col-xs-4">1 Day</div>
						<div class="col-xs-4">1 Day</div>
					</li>
					<li class="fill">
						<div class="col-xs-4">Category</div>
						<div class="col-xs-4">Birthday</div>
						<div class="col-xs-4">Sympathy</div>
					</li>
					<li>
						<div class="col-xs-4">Main Color</div>
						<div class="col-xs-4">Red</div>
						<div class="col-xs-4">Blue</div>
					</li>
					<li class="fill">
						<div class="col-xs-4">Size</div>
						<div class="col-xs-4">xyz</div>
						<div class="col-xs-4">xyz</div>
					</li>
				</ul>
			</div>

			<br>

		</div>


@endsection
@section('scripts')
<script>
 
</script>
@endsection