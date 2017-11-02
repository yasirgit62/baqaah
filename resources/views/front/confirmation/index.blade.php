@extends('layouts.main.master')
@section('content')

<title>Confirmation | Baaqah</title>

		<!-- Google maps element -->
		<div class="kl-slideshow static-content__slideshow scontent__maps" style="height:65vh;">	
			
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462565.2024153384!2d54.9468741391624!3d25.075084030975418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43496ad9c645%3A0xbde66e5084295162!2sDubai+-+United+Arab+Emirates!5e0!3m2!1sen!2s!4v1505127702647" width="100%" height="100%" frameborder="0" style="border:0; opacity:.5;" allowfullscreen></iframe>
    		 
		</div>
		<!-- Google maps element -->		

        <!-- Checkout content page -->
        <section id="content" class="hg_section ptop-60">          
			<div class="container">
				<div class="row">
					<div class="right_sidebar col-sm-5">
						<!-- Page title & subtitle -->
						
						<div class="text_box">
							<div class="kl-store">
								
								<form name="checkout" method="post" class="checkout kl-store-checkout" action="#" enctype="multipart/form-data">
									<div class="col2-set" id="customer_details">
										<div class="">
											<div class="kl-store-billing-fields">
												<h3>Billing Details</h3>
												<p class="form-row form-row form-row-first validate-required" id="billing_first_name_field">
													<label for="billing_first_name" class="">First Name <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder="" value="">
												</p>
												<p class="form-row form-row form-row-last validate-required" id="billing_last_name_field">
													<label for="billing_last_name" class="">Last Name <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="billing_last_name" id="billing_last_name" placeholder="" value="">
												</p>
												<div class="clear">
												</div>
												<p class="form-row form-row form-row-wide" id="billing_company_field">
													<label for="billing_company" class="">Company Name</label><input type="text" class="input-text " name="billing_company" id="billing_company" placeholder="" value="">
												</p>
												<p class="form-row form-row form-row-first validate-required validate-email" id="billing_email_field">
													<label for="billing_email" class="">Email Address <abbr class="required" title="required">*</abbr></label><input type="email" class="input-text " name="billing_email" id="billing_email" placeholder="" value="">
												</p>
												<p class="form-row form-row form-row-last validate-required validate-phone" id="billing_phone_field">
													<label for="billing_phone" class="">Phone <abbr class="required" title="required">*</abbr></label><input type="tel" class="input-text " name="billing_phone" id="billing_phone" placeholder="" value="">
												</p>
												<div class="clear">
												</div>
												<p class="form-row form-row form-row-wide address-field validate-required" id="billing_address_1_field">
													<label for="billing_address_1" class="">Address <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="billing_address_1" id="billing_address_1" placeholder="Street address" value="">
												</p>
												<p class="form-row form-row form-row-wide address-field" id="billing_address_2_field">
													<input type="text" class="input-text " name="billing_address_2" id="billing_address_2" placeholder="Apartment, suite, unit etc. (optional)" value="">
												</p>
												<p class="form-row form-row form-row-wide address-field validate-required" id="billing_city_field" data-o_class="form-row form-row form-row-wide address-field validate-required">
													<label for="billing_city" class="">Emirates <abbr class="required" title="required">*</abbr></label>
													<select>
													<option value="">DUBAI</option>
													<option value="">ABU DHABI</option>
													<option value="">QATTAR</option>
													</select>
												</p>
												<!--<p class="form-row form-row form-row-first address-field validate-state" id="billing_state_field" data-o_class="form-row form-row form-row-first address-field validate-state">
													<label for="billing_state" class="">State / County</label><input type="text" class="input-text " value="" placeholder="" name="billing_state" id="billing_state">
												</p>
												<p class="form-row form-row form-row-last address-field validate-required validate-postcode" id="billing_postcode_field" data-o_class="form-row form-row form-row-last address-field validate-required validate-postcode">
													<label for="billing_postcode" class="">Postcode / Zip <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="billing_postcode" id="billing_postcode" placeholder="Postcode / Zip" value="">
												</p>-->
												<div class="clear">
												</div>
											</div>
										</div>
										
										<div class="col-xs-12" style="padding-left:0;">
											<div class="kl-store-shipping-fields col-xs-12" style="padding-left:0;">
												<h4 id="ship-to-different-address">
												<label for="ship-to-different-address-checkbox" class="checkbox pull-left">Is it a surprise?</label>
												<input id="ship-to-different-address-checkbox" class="input-checkbox pull-right" type="checkbox" name="ship_to_different_address" value="1" style="margin-top:25px;">
												</h4>
											</div>
										</div>

									</div>
								</form>
							</div>
						</div>
					</div>
					<!--/  -->

					<div class="col-sm-2"></div>

					<!-- Sidebar -->
					<div class="col-sm-5">
						<div class="text_box">
							<div class="kl-store">
								
								<form name="checkout" method="post" class="checkout kl-store-checkout" action="#" enctype="multipart/form-data">
									<div class="col2-set" id="customer_details">
										<div class="">
											<div class="kl-store-billing-fields">
												<h3>Receiver Details</h3>
												<p class="form-row form-row form-row-first validate-required" id="billing_first_name_field">
													<label for="billing_first_name" class="">First Name <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder="" value="">
												</p>
												<p class="form-row form-row form-row-last validate-required" id="billing_last_name_field">
													<label for="billing_last_name" class="">Last Name <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="billing_last_name" id="billing_last_name" placeholder="" value="">
												</p>
												<div class="clear">
												</div>
												<p class="form-row form-row form-row-wide" id="billing_company_field">
													<label for="billing_company" class="">Company Name</label><input type="text" class="input-text " name="billing_company" id="billing_company" placeholder="" value="">
												</p>
												<p class="form-row form-row form-row-first validate-required validate-email" id="billing_email_field">
													<label for="billing_email" class="">Email Address <abbr class="required" title="required">*</abbr></label><input type="email" class="input-text " name="billing_email" id="billing_email" placeholder="" value="">
												</p>
												<p class="form-row form-row form-row-last validate-required validate-phone" id="billing_phone_field">
													<label for="billing_phone" class="">Phone <abbr class="required" title="required">*</abbr></label><input type="tel" class="input-text " name="billing_phone" id="billing_phone" placeholder="" value="">
												</p>
												<div class="clear">
												</div>
												<p class="form-row form-row form-row-wide address-field validate-required" id="billing_address_1_field">
													<label for="billing_address_1" class="">Address <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="billing_address_1" id="billing_address_1" placeholder="Street address" value="">
												</p>
												<p class="form-row form-row form-row-wide address-field" id="billing_address_2_field">
													<input type="text" class="input-text " name="billing_address_2" id="billing_address_2" placeholder="Apartment, suite, unit etc. (optional)" value="">
												</p>
												<p class="form-row form-row form-row-wide address-field validate-required" id="billing_city_field" data-o_class="form-row form-row form-row-wide address-field validate-required">
													<label for="billing_city" class="">Area <abbr class="required" title="required">*</abbr></label><select>
													<option value="">1</option>
													<option value="">2</option>
													<option value="">3</option>
													</select>
												</p>
												<div class="clear">
												</div>
											</div>
										</div>

									</div>
								</form>
							</div>
						</div>
					</div>	
					<!--/ Sidebar -->
				</div>
				<!--/ row -->

				<div class="row">
					<div class="right_sidebar col-xs-12">
						<!-- Page title & subtitle -->
						
						<div class="text_box">
							<div class="kl-store">
								
								<form name="checkout" method="post" class="checkout kl-store-checkout" action="#" enctype="multipart/form-data">
									
									<h3 id="order_review_heading">Your order</h3>
									<div id="order_review" class="kl-store-checkout-review-order">
										<table class="shop_table kl-store-checkout-review-order-table">
										<thead>
										<tr>
											<th class="product-name">
												Product
											</th>
											<th class="product-total">
												Total
											</th>
										</tr>
										</thead>
										<tbody>
										<tr class="cart_item">
											<td class="product-name">
												 Black Kaviar Longline Shirt&nbsp; <strong class="product-quantity">× 1</strong>
												<dl class="variation">
													<dt class="variation-color">color:</dt>
													<dd class="variation-color">
													<p>
														Green
													</p>
													</dd>
												</dl>
											</td>
											<td class="product-total">
												<span class="amount">£20.00</span>
											</td>
										</tr>
										<tr class="cart_item">
											<td class="product-name">
												 Hoodie With Patch Logo&nbsp; <strong class="product-quantity">× 1</strong>
												<dl class="variation">
													<dt class="variation-color">color:</dt>
													<dd class="variation-color">
													<p>
														Blue
													</p>
													</dd>
												</dl>
											</td>
											<td class="product-total">
												<span class="amount">£30.00</span>
											</td>
										</tr>
										</tbody>
										<tfoot>
										<tr class="cart-subtotal">
											<th>
												Subtotal
											</th>
											<td>
												<span class="amount">£50.00</span>
											</td>
										</tr>
										<tr class="shipping">
											<th>
												Shipping
											</th>
											<td>
												 Free Shipping <input type="hidden" name="shipping_method[0]" data-index="0" id="shipping_method_0" value="free_shipping" class="shipping_method">
											</td>
										</tr>
										<tr class="order-total">
											<th>
												Total
											</th>
											<td>
												<strong><span class="amount">£50.00</span></strong>
											</td>
										</tr>
										</tfoot>
										</table>
										<div id="payment" class="kl-store-checkout-payment">
											<ul class="payment_methods methods">
												<li class="payment_method_cheque">
												<input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="cheque" checked="checked" data-order_button_text="">
												<label for="payment_method_cheque">
												Cash on delivery </label>
												<div class="payment_box payment_method_cheque">
													<p>
														Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.
													</p>
												</div>
												</li>
												<li class="payment_method_paypal">
												<input id="payment_method_paypal" type="radio" class="input-radio" name="payment_method" value="paypal" data-order_button_text="Proceed to PayPal">
												<label for="payment_method_paypal">
												PayPal <img src="https://www.paypalobjects.com/webstatic/mktg/Logo/AM_mc_vs_ms_ae_UK.png" alt="PayPal Acceptance Mark"><a href="https://www.paypal.com/gb/webapps/mpp/paypal-popup" class="about_paypal" onclick="javascript:window.open('https://www.paypal.com/gb/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;" title="What is PayPal?">What is PayPal?</a></label>
												<div class="payment_box payment_method_paypal" style="display:none;">
													<p>
														Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.
													</p>
												</div>
												</li>
											</ul>
											<div class="form-row place-order">
												<noscript>
												Since your browser does not support JavaScript, or it is disabled, please ensure you click the &lt;em&gt;Update Totals&lt;/em&gt; button before placing your order. You may be charged more than the amount stated above if you fail to do so.&lt;br/&gt;&lt;input type="submit" class="button alt" name="kl-store_checkout_update_totals" value="Update totals" /&gt;
												</noscript>
												<input type="submit" class="button alt" name="kl-store_checkout_place_order" id="place_order" value="Place order" data-value="Place order">
											</div>
											<div class="clear">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ container -->
		</section>
		<!--/ Checkout  content page -->

@endsection
@section('scripts')
<script>
 
</script>
@endsection