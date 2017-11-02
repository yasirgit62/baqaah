@extends('layouts.main.master')
@section('content')
<title>Contact | Baaqah</title>
		

		<!-- Google maps element 
		<div class="kl-slideshow static-content__slideshow scontent__maps">
		
			
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462565.2024153384!2d54.9468741391624!3d25.075084030975418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43496ad9c645%3A0xbde66e5084295162!2sDubai+-+United+Arab+Emirates!5e0!3m2!1sen!2s!4v1505127702647" width="100%" height="700" frameborder="0" style="border:0; opacity:.5;" allowfullscreen></iframe>
    		 
		</div>
	Google maps element -->

	<br><br><br><br><br><br><br>

		<!-- Contact form & details section -->
		<section class="hg_section ptop-80 pbottom-80">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-sm-9">
						<!-- Contact form -->
						<div class="contactForm">
							<form action="php_helpers/_contact-process.php" method="post" class="contact_form row" enctype="multipart/form-data">
								<div class="cf_response"></div>
								<p class="col-sm-6 kl-fancy-form">
									<input type="text" name="name" id="cf_name" class="form-control" placeholder="Please enter your first name" value="" tabindex="1" maxlength="35" required>
									<label class="control-label">FIRSTNAME</label>
								</p>
								<p class="col-sm-6 kl-fancy-form">
									<input type="text" name="lastname" id="cf_lastname" class="form-control" placeholder="Please enter your first last name" value="" tabindex="1" maxlength="35" required>
									<label class="control-label">LASTNAME</label>
								</p>
								<p class="col-sm-12 kl-fancy-form">
									<input type="text" name="email" id="cf_email" class="form-control h5-email" placeholder="Please enter your email address" value="" tabindex="1" maxlength="35" required>
									<label class="control-label">EMAIL</label>
								</p>
								<p class="col-sm-12 kl-fancy-form">
									<input type="text" name="subject" id="cf_subject" class="form-control" placeholder="Enter the subject message" value="" tabindex="1" maxlength="35" required>
									<label class="control-label">SUBJECT</label>
								</p>
								<p class="col-sm-12 kl-fancy-form">
									<textarea name="message" id="cf_message" class="form-control" cols="30" rows="10" placeholder="Your message" tabindex="4" required></textarea>
									<label class="control-label">MESSAGE</label>
								</p>

								<!-- Google recaptcha required site-key -->
								<div class="g-recaptcha" data-sitekey="xxxx"></div>

								<p class="col-sm-12">
									<button class="btn btn-fullcolor" type="submit">Send</button>
								</p>
								
							</form>
						</div>
						<!--/ Contact form -->
					</div>
					<!--/ col-md-9 col-sm-9 -->

					<div class="col-md-3 col-sm-3">
						<!-- Contact details -->
						<div class="text_box">
							<h3 class="text_box-title text_box-title--style2">CONTACT INFO</h3>
							<h4>Mulberry St, New York, NY 10012, USA</h4>
							<p>
								1.900.256.332<br>
								 1.900.256.334
							</p>
							<p>
								<a href="mailto:#">hello@yourwebsite.com</a><br>
								<a href="http://www.hogash.com/">www.hogash.com</a>
							</p>
						</div>
						<!--/ Contact details -->
					</div>
					<!--/ col-md-3 col-sm-3 -->
				</div>
				<!--/ .row -->
			</div>
			<!--/ .container -->
		</section>
		<!--/ Contact form & details section -->
		
@endsection
@section('scripts')
<script>
 
</script>
@endsection