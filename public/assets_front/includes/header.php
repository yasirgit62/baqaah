<?php include('../../settings.php'); ?>

<!doctype html>
<html class="no-js" lang="en-US">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1">
	<meta name="keywords" content="baaqah," />
	<meta name="description" content="Baaqah Website">

	<link rel="icon" type="image/png" href="<?=IMG.'logo.png'?>" sizes="16x16">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400italic,400,600,600italic,700,800,800italic" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?=CSS.'custom.css'?>" type="text/css" />
	<script type="text/javascript" src="<?=JS.'modernizr.min.css'?>"></script>
	<script type="text/javascript" src="<?=JS.'jquery.css'?>"></script>
</head>

<body>   

	<!-- Page Wrapper -->
	<div id="page_wrapper">
		<!-- Header style 1 -->
		<header id="header" class="site-header style1 cta_button">
			<!-- header bg -->
			<div class="kl-header-bg"></div>
			<!--/ header bg -->

			<!-- siteheader-container -->
			<div class="container siteheader-container">
				<!-- top-header -->
				<div class="kl-top-header clearfix">
					<!-- HEADER ACTION -->
					<div class="header-links-container ">
						<ul class="topnav navRight topnav">
							<!-- Support panel trigger -->
							<li>
								<label for="support_p" class="spanel-label">
		                    		<i class="glyphicon glyphicon-info-sign icon-white support-info visible-xs xs-icon"></i>
									<span class="hidden-xs">LIST YOUR BUSINESS</span>
								</label>
							</li>
							<!--/ Support panel trigger -->

							<!-- Login trigger -->
							<li>
								<a class="popup-with-form" href="#login_panel">
									<i class="glyphicon glyphicon-log-in visible-xs xs-icon"></i>
									<span class="hidden-xs">LOGIN</span>
								</a>
							</li>
							<!--/ Login trigger -->			
						</ul>

						<!-- Languages -->
						<ul class="topnav navLeft topnav--lang">
							<li class="languages drop">
								<a href="#">
									<span class="hidden-xs">FAVOURITES</span>
								</a>
							</li>
						</ul>
						<!--/ Languages -->

						<!-- header search -->
						<div id="search" class="header-search">
							<a href="#" class="searchBtn "><span class="glyphicon glyphicon-search icon-white"></span></a>
							<div class="search-container">
								<form id="searchform" class="header-searchform" action="https://www.google.ro/search" method="get" target="_blank">
								<input type="hidden" id="q" name="q"/>
									<input name="s" maxlength="20" class="inputbox" type="text" size="20" value="SEARCH ..." onblur="if (this.value=='') this.value='SEARCH ...';" onfocus="if (this.value=='SEARCH ...') this.value='';">
									<button type="submit" id="searchsubmit" class="searchsubmit glyphicon glyphicon-search icon-white"></button>
								</form>
							</div>
						</div>
						<!--/ header search -->
					</div>
					<!--/ HEADER ACTION -->

					<!-- HEADER ACTION left -->
					<div class="header-leftside-container ">
						<!-- Header Social links -->
						<ul class="social-icons sc--clean topnav navRight">
							<li><a href="#" target="_self" class="icon-facebook" title="Facebook"></a></li>
							<li><a href="#" target="_self" class="icon-twitter" title="Twitter"></a></li>	
							<li><a href="#" target="_self" class="icon-pinterest" title="Pinterest"></a></li>
							<li><a href="#" target="_blank" class="icon-gplus" title="Google Plus"></a></li>
						</ul>
						<!--/ Header Social links -->

						<div class="clearfix visible-xxs">
						</div>

						<!-- header contact text -->
						<span class="kl-header-toptext">QUESTIONS? CALL: <a href="#" class="fw-bold">0900 800 900</a></span>
						<!--/ header contact text -->
					</div>
					<!--/ HEADER ACTION left -->
				</div>
				<!--/ top-header -->
				
				<!-- separator -->
				<div class="separator"></div>
				<!--/ separator -->

				<!-- left side -->
				<!-- logo container-->
				<div class="logo-container hasInfoCard logosize--yes">
					<!-- Logo -->
					<h1 class="site-logo logo" id="logo">
						<a href="index.html" title="">
							<img src="<?=IMG.'white-logo.png'?>" class="logo-img" alt="" title="" />
						</a>
					</h1>
					<!--/ Logo -->
				</div>
				<!--/ logo container-->

				<!-- separator -->
				<div class="separator visible-xxs"></div>
				<!--/ separator -->

				<!-- responsive menu trigger -->
				<div id="zn-res-menuwrapper">
					<a href="#" class="zn-res-trigger zn-header-icon"></a>
				</div>
				<!--/ responsive menu trigger -->

				<!-- main menu -->
				<div id="main-menu" class="main-nav zn_mega_wrapper ">
					<ul id="menu-main-menu" class="main-menu zn_mega_menu">
						<li class="menu-item-has-children menu-item-mega-parent active"><a href="<?=URL.'index.php'?>">HOME</a></li>
						<li class="menu-item-has-children menu-item-mega-parent"><a href="<?=URL.'florist/'?>">FLORISTS</a>
							<ul class="hg_mega_container container clearfix">
								<li class="menu-item-has-children col-sm-3"><a href="#" class="zn_mega_title">Presentation Oriented</a>
									<ul class="clearfix">
										<li><a href="sliders-ios-slider-default.php">IOS SLIDER (DEFAULT)</a></li>
										<li><a href="sliders-ios-slider-alternative.php">IOS SLIDER (ALTERNATIVE)</a></li>
										<li><a href="sliders-ios-slider-mood.php">IOS SLIDER - MOOD</a></li>
									</ul>
								</li>
								<li class="menu-item-has-children col-sm-3"><a href="#" class="zn_mega_title">Portfolio Oriented</a>
									<ul class="clearfix">
										<li><a href="sliders-css3-panels.php">CSS3 PANELS</a></li>
										<li><a href="sliders-css3-panels-alternative.php">CSS3 PANELS (ALTERNATIVE)</a></li>
										<li><a href="sliders-portfolio-frames.php">PORTFOLIO FRAMES</a></li>
									</ul>
								</li>
								<li class="menu-item-has-children col-sm-3"><a href="#" class="zn_mega_title">Shop Oriented</a>
									<ul class="clearfix">
										<li><a href="sliders-shop-slider-revolution.php">SHOP SLIDER (PART 1)</a></li>
									</ul>
								</li>
								<li class="menu-item-has-children col-sm-3"><a href="#" class="zn_mega_title">Others</a>
									<ul class="clearfix">
										<li><a href="sliders-simple-n-classic.php">SIMPLE N’ CLASSIC</a></li>
										<li><a href="sliders-nivo-slider.php">NIVO SLIDER</a></li>
									</ul>
								</li>
								<li class="menu-item-has-children col-sm-3 cleft"><a href="#" class="zn_mega_title">Based on Revolution Slider</a>
									<ul class="clearfix">
										<li><a href="__rev-slider_agency-website-header.php">AGENCY WEBSITE HEADER</a></li>
										<li><a href="__rev-slider_agency-website-header1.php">AGENCY WEBSITE HEADER 1</a></li>
										<li><a href="__rev-slider_app-landing.php">APP LANDING</a></li>
									</ul>
								</li>
								<li class="menu-item-has-children col-sm-3"><a href="#" class="zn_mega_title zn_mega_title_hide v-hidden">Revolution Slider</a>
									<ul class="clearfix">
										<li><a href="__rev-slider_creative-frontpage.php">CREATIVE FRONTPAGE</a></li>
										<li><a href="__rev-slider_duotone1.php">DUOTONE</a></li>
									</ul>
								</li>
								<li class="menu-item-has-children col-sm-3"><a href="#" class="zn_mega_title zn_mega_title_hide v-hidden">Revolution Slider</a>
									<ul class="clearfix">
										<li><a href="__rev-slider_inspiration-header.php">INSPIRATION HEADER</a></li>
										<li><a href="__rev-slider_levano-restaurant-bar.php">RESTAURANT BAR</a></li>
										<li><a href="__rev-slider_magazine-posts.php">MAGAZINE POSTS</a></li>
									</ul>
								</li>
								<li class="menu-item-has-children col-sm-3"><a href="#" class="zn_mega_title zn_mega_title_hide v-hidden">Revolution Slider</a>
									<ul class="clearfix">
										<li><a href="__rev-slider_scroll-effect1.php">SCROLL EFFECT</a></li>
										<li><a href="__rev-slider_showcase-carousel.php">SHOWCASE CAROUSEL</a></li>
										<li><a href="__rev-slider_sleek-landing-page.php">SLEEK LANDING PAGE</a></li>
									</ul>
								</li>
							</ul>	
						</li>
						<li class="menu-item-has-children"><a href="<?=URL.'about/'?>">ABOUT</a>
							<ul class="sub-menu clearfix">
								<li><a href="<?=URL.'favorites/'?>">FAVORITES</a></li>
								<li><a href="<?=URL.'flowers-list/'?>">FLOWERS LIST</a></li>
								<li><a href="<?=URL.'confirmation/'?>">CONFIRMATION</a></li>
								<li><a href="<?=URL.'cart/'?>">CART</a></li>
							</ul>
						</li>
						<li class="menu-item-has-children menu-item-mega-parent"><a href="<?=URL.'contact/'?>">CONTACT</a></li>
					</ul>
				</div>
				<!--/ main menu -->

				<!-- right side -->	
				<!-- Call to action ribbon Free Quote -->
				<a href="#" id="ctabutton" class="ctabutton kl-cta-ribbon" title="GET A FREE QUOTE" target="_self"><strong><i class="glyphicon glyphicon-shopping-cart icon-white flipX-icon xs-icon" data-count="1"></i></strong>CHECKOUT<svg version="1.1" class="trisvg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" preserveaspectratio="none" width="14px" height="5px" viewbox="0 0 14.017 5.006" enable-background="new 0 0 14.017 5.006" xml:space="preserve"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.016,0L7.008,5.006L0,0H14.016z"></path></svg></a>
				<!--/ Call to action ribbon Free Quote -->

			</div>
			<!--/ siteheader-container -->
		</header>
		<!-- / Header style 1 -->