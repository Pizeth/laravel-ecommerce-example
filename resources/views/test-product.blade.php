@extends('layouts.main-layout')
@section('custom-js')
	<script src="https://js.stripe.com/v3/"></script>
	<script src="https://www.paypalobjects.com/api/checkout.js"></script>
@stop
@section('content')
	<section class="site-content">
		<div class="container">
			<div class="breadcum-area">
				<div class="breadcum-inner">
					<h3>CLASSIC FIT SOFT-TOUCH POLO</h3>
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="http://demo.laravelcommerce.com">Home</a>
						</li>
						<li class="breadcrumb-item">
							<a href="http://demo.laravelcommerce.com/shop?category=men-s-clothing">Men&#039;s Clothing</a>
						</li>
						<li class="breadcrumb-item">
							<a href="http://demo.laravelcommerce.com/shop?category=men-polo-shirts">Men Polo shirts</a>
						</li>
						<li class="breadcrumb-item active">CLASSIC FIT SOFT-TOUCH POLO</li>
					</ol>
				</div>
			</div>
			<div class="product-detail-area">
				<div class="row">
					<div class="col-12">
						<div class="detail-area">
							<div class="row">
								<div class="col-12 col-lg-5">
									<div class="carousel slide" id="product-slider">
										<!-- main slider carousel items -->
										<div class="carousel-inner">
											<!-- default image -->
											<div class="active item carousel-item" data-slide-number="0"><img alt="img-fluid" class="img-thumbnail" src=
											"http://demo.laravelcommerce.com/resources/assets/images/product_images/1502174889.pPOLO2-26314766_standard_v400.jpg"></div>
											<div class="item carousel-item" data-slide-number="1"><img alt="img-fluid" class="img-thumbnail" src=
											"http://demo.laravelcommerce.com/resources/assets/images/product_images/1502107398.pPOLO2-26314766_alternate1_v360x480.jpg"></div>
											<div class="item carousel-item" data-slide-number="2"><img alt="img-fluid" class="img-thumbnail" src=
											"http://demo.laravelcommerce.com/resources/assets/images/product_images/1502107404.pPOLO2-26314766_alternate2_v360x480.jpg"></div>
											<div class="item carousel-item" data-slide-number="3"><img alt="img-fluid" class="img-thumbnail" src=
											"http://demo.laravelcommerce.com/resources/assets/images/product_images/1502107411.pPOLO2-26314766_alternate3_v360x480.jpg"></div>
										</div>
										<div class="carousel-indicators">
											<div class="thumbnail active" data-slide-to="0" data-target="#product-slider">
												<a id="carousel-selector-0"><img alt="img-fluid" class="img-thumbnail" src=
												"http://demo.laravelcommerce.com/resources/assets/images/product_images/1502174889.pPOLO2-26314766_standard_v400.jpg"></a>
											</div>
											<div class="thumbnail" data-slide-to="1" data-target="#product-slider">
												<a id="carousel-selector-1"><img alt="img-fluid" class="img-thumbnail" src=
												"http://demo.laravelcommerce.com/resources/assets/images/product_images/1502107398.pPOLO2-26314766_alternate1_v360x480.jpg"></a>
											</div>
											<div class="thumbnail" data-slide-to="2" data-target="#product-slider">
												<a id="carousel-selector-1"><img alt="img-fluid" class="img-thumbnail" src=
												"http://demo.laravelcommerce.com/resources/assets/images/product_images/1502107404.pPOLO2-26314766_alternate2_v360x480.jpg"></a>
											</div>
											<div class="thumbnail" data-slide-to="3" data-target="#product-slider">
												<a id="carousel-selector-1"><img alt="img-fluid" class="img-thumbnail" src=
												"http://demo.laravelcommerce.com/resources/assets/images/product_images/1502107411.pPOLO2-26314766_alternate3_v360x480.jpg"></a>
											</div>
										</div><a class="carousel-control-prev" data-slide="prev" href="#product-slider" role="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class=
										"sr-only">Previous</span></a> <a class="carousel-control-next" data-slide="next" href="#product-slider" role="button"><span aria-hidden="true" class="carousel-control-next-icon"></span>
										<span class="sr-only">Next</span></a>
									</div>
								</div>
								<div class="col-12 col-lg-7">
									<div class="product-summary">
										<div class="like-box">
											<span class="fa fa-heart-o is_liked"><span class="badge badge-secondary">9</span></span>
										</div>
										<h3 class="product-title">CLASSIC FIT SOFT-TOUCH POLO</h3>
										<div class="product-info">
											<a class="category" href="http://demo.laravelcommerce.com/shop?category=men-polo-shirts">Men Polo shirts</a>
											<div class="orders">
												12&nbsp;Order(s)
											</div>
											<div class="availbility">
												<i aria-hidden="true" class="fa fa-check"></i>&nbsp; In stock
											</div>
										</div>
										<div class="product-price">
											<!--discount_price-->
											 <span class="price change_price">$85</span>
										</div>
										<form id="add-Product-form" method="post" name="attributes">
											<input name="products_id" type="hidden" value="1"> <input id="products_price" name="products_price" type="hidden" value="85"> <input id="checkout_url" name="checkout" type="hidden" value=
											" false ">
											<div class="form-row">
												<input name="option_name[]" type="hidden" value="Colors"> <input name="option_id[]" type="hidden" value="1"> <input id="Colors" name="Colors" type="hidden" value="0">
												<div class="form-group col-sm-4">
													<label class="col-sm-12 col-form-label" for="Colors">Colors</label>
													<div class="col-sm-12">
														<select class="form-control Colors" name="1">
															<option prefix='+' value="1">
																Brown
															</option>
															<option prefix='+' value="2">
																Cream
															</option>
															<option prefix='+' value="3">
																Blue
															</option>
															<option prefix='+' value="4">
																Multi
															</option>
															<option prefix='+' value="5">
																Black
															</option>
															<option prefix='+' value="6">
																Grey
															</option>
															<option prefix='+' value="7">
																White
															</option>
															<option prefix='+' value="8">
																Purple
															</option>
															<option prefix='+' value="9">
																Navy
															</option>
														</select>
													</div>
												</div><input name="option_name[]" type="hidden" value="Size"> <input name="option_id[]" type="hidden" value="4"> <input id="Size" name="Size" type="hidden" value="0">
												<div class="form-group col-sm-4">
													<label class="col-sm-12 col-form-label" for="Size">Size</label>
													<div class="col-sm-12">
														<select class="form-control Size" name="4">
															<option prefix='+' value="29">
																Small
															</option>
															<option prefix='+' value="32">
																Medium
															</option>
															<option prefix='+' value="35">
																Large
															</option>
															<option prefix='+' value="38">
																Extra Large
															</option>
														</select>
													</div>
												</div>
											</div>
											<div class="form-inline product-box">
												<div class="form-group Qty">
													<label class="col-form-label" for="quantity">Quantity</label>
													<div class="input-group">
														<span class="input-group-btn first qtyminus"><button class="btn btn-defualt" type="button"><span class="input-group-btn first qtyminus">-</span></button></span> <input class=
														"form-control qty" max="9997" min="1" name="quantity" readonly type="text" value="1"> <span class="input-group-btn last qtyplus"><button class="btn btn-defualt" type=
														"button"><span class="input-group-btn last qtyplus">+</span></button></span>
													</div>
												</div>
												<div class="price-box">
													<span>Total Price&nbsp;:</span> <span class="total_price">$85</span>
												</div>
												<div class="buttons">
													<button class="btn btn-secondary btn-round add-to-Cart" type="button">Add to Cart</button>
												</div>
											</div>
										</form>
									</div>
								</div>
								<div class="col-12">
									<div class="product-tabs">
										<!-- Nav tabs -->
										<ul class="nav nav-pills" id="myTab" role="tablist">
											<li class="nav-item">
												<a aria-controls="product_desc" aria-selected="true" class="nav-link active" data-toggle="tab" href="#product_desc" id="product-desc-tab" role="tab">Products Description</a>
											</li>
										</ul><!-- Tab panes -->
										<div class="tab-content">
											<div aria-labelledby="product-desc-tab" class="tab-pane active" id="product_desc" role="tabpanel">
												<p class="product-description"></p>
												<p>- Classic Fit: our roomiest silhouette. Our Polo shirts also come in Slim Fit (our trimmest) and Custom Slim Fit (our second-slimmest). - Size medium has a 29&quot; body length, an
												18&quot; shoulder, and a 22&quot; chest. - Ribbed Polo collar. Three-button placket. - Short sleeves with ribbed armbands. - Even vented hem. - Multicolored signature embroidered pony at
												the left chest. - 100% cotton. - Machine washable. Imported. - Model is 6&#39;1&quot;/185 cm and wears a size medium.</p>
												<p></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="related-product-area">
							<div class="heading">
								<h2>Related Products <small class="pull-right"><a href="http://demo.laravelcommerce.com/shop?category_id=1">View All</a></small></h2>
								<hr>
							</div>
							<div class="row">
								<div class="products products-4x">
									<div class="product">
										<article>
											<div class="thumb"><img alt="POLO AVIATOR SUNGLASSES" class="img-fluid" src=
											"http://demo.laravelcommerce.com/resources/assets/images/product_images/1502193710.pPOLO2-24128696_standard_v400.jpg"></div><span class="tag text-center">Men's Clothing</span>
											<h2 class="title text-center">POLO AVIATOR SUNGLASSES</h2><!--<p class="like"> <span href="#" products_id = '23' class="fa  fa-heart-o  is_liked"></span> <span>1 Likes</span></p>-->
											<div class="price text-center">
												$229
											</div><!--                                            <button type="button" class="btn btn-cart cart" products_id="23"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                                        -->
											<div class="product-hover">
												<div class="icons">
													<div class="icon-liked">
														<span class="fa fa-heart-o is_liked"><span class="badge badge-secondary">1</span></span>
													</div><a class="fa fa-eye" href="http://demo.laravelcommerce.com/product-detail/polo-aviator-sunglasses"></a>
												</div>
												<div class="buttons">
													<button class="btn btn-block btn-secondary cart">Add to Cart</button>
												</div>
											</div>
										</article>
									</div>
									<div class="product">
										<article>
											<div class="thumb"><img alt="POLO SQUARE SUNGLASSES" class="img-fluid" src=
											"http://demo.laravelcommerce.com/resources/assets/images/product_images/1502193577.pPOLO2-24933842_standard_v400.jpg"></div><span class="tag text-center">Men's Clothing</span>
											<h2 class="title text-center">POLO SQUARE SUNGLASSES</h2><!--<p class="like"> <span href="#" products_id = '22' class="fa  fa-heart-o  is_liked"></span> <span>0 Likes</span></p>-->
											<div class="price text-center">
												$129
											</div><!--                                            <button type="button" class="btn btn-cart cart" products_id="22"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                                        -->
											<div class="product-hover">
												<div class="icons">
													<div class="icon-liked">
														<span class="fa fa-heart-o is_liked"><span class="badge badge-secondary">0</span></span>
													</div><a class="fa fa-eye" href="http://demo.laravelcommerce.com/product-detail/polo-square-sunglasses"></a>
												</div>
												<div class="buttons">
													<button class="btn btn-block btn-secondary cart">Add to Cart</button>
												</div>
											</div>
										</article>
									</div>
									<div class="product">
										<article>
											<div class="thumb"><img alt="NAUTICAL-STRIPED SUNGLASSES" class="img-fluid" src=
											"http://demo.laravelcommerce.com/resources/assets/images/product_images/1502193410.pPOLO2-19116009_standard_v400.jpg"></div><span class="tag text-center">Men's Clothing</span>
											<h2 class="title text-center">NAUTICAL-STRIPED SUNGLASSES</h2><!--<p class="like"> <span href="#" products_id = '21' class="fa  fa-heart-o  is_liked"></span> <span>1 Likes</span></p>-->
											<div class="price text-center">
												$150
											</div><!--                                            <button type="button" class="btn btn-cart cart" products_id="21"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                                        -->
											<div class="product-hover">
												<div class="icons">
													<div class="icon-liked">
														<span class="fa fa-heart-o is_liked"><span class="badge badge-secondary">1</span></span>
													</div><a class="fa fa-eye" href="http://demo.laravelcommerce.com/product-detail/nautical-striped-sunglasses"></a>
												</div>
												<div class="buttons">
													<button class="btn btn-block btn-secondary cart">Add to Cart</button>
												</div>
											</div>
										</article>
									</div>
									<div class="product">
										<article>
											<div class="thumb"><img alt="ROUND SUNGLASSES" class="img-fluid" src=
											"http://demo.laravelcommerce.com/resources/assets/images/product_images/1502192365.pPOLO2-12181663_standard_v400.jpg"></div><span class="tag text-center">Men's Clothing</span>
											<h2 class="title text-center">ROUND SUNGLASSES</h2><!--<p class="like"> <span href="#" products_id = '20' class="fa  fa-heart-o  is_liked"></span> <span>1 Likes</span></p>-->
											<div class="price text-center">
												$250
											</div><!--                                            <button type="button" class="btn btn-cart cart" products_id="20"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                                        -->
											<div class="product-hover">
												<div class="icons">
													<div class="icon-liked">
														<span class="fa fa-heart-o is_liked"><span class="badge badge-secondary">1</span></span>
													</div><a class="fa fa-eye" href="http://demo.laravelcommerce.com/product-detail/round-sunglasses"></a>
												</div>
												<div class="buttons">
													<button class="btn btn-block btn-secondary cart">Add to Cart</button>
												</div>
											</div>
										</article>
									</div>
									<div class="product">
										<article>
											<div class="thumb"><img alt="LAXMAN TECH SUEDE SNEAKER" class="img-fluid" src=
											"http://demo.laravelcommerce.com/resources/assets/images/product_images/1502192066.pPOLO2-25784541_standard_v400.jpg"></div><span class="tag text-center">Men's Clothing</span>
											<h2 class="title text-center">LAXMAN TECH SUEDE SNEAKER</h2><!--<p class="like"> <span href="#" products_id = '19' class="fa  fa-heart-o  is_liked"></span> <span>1 Likes</span></p>-->
											<div class="price text-center">
												$89
											</div><!--                                            <button type="button" class="btn btn-cart cart" products_id="19"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                                        -->
											<div class="product-hover">
												<div class="icons">
													<div class="icon-liked">
														<span class="fa fa-heart-o is_liked"><span class="badge badge-secondary">1</span></span>
													</div><a class="fa fa-eye" href="http://demo.laravelcommerce.com/product-detail/laxman-tech-suede-sneaker"></a>
												</div>
												<div class="buttons">
													<button class="btn btn-block btn-secondary cart">Add to Cart</button>
												</div>
											</div>
										</article>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@stop
@section('extra-js')
    <!-- all js scripts including custom js -->
	<!-- scripts -->
	<script src="http://demo.laravelcommerce.com/public/js/app.js">
	</script> 
	<script src="http://demo.laravelcommerce.com/public/js/jquery-ui.js">
	</script> <!-- owl carousel -->
	<script src="http://demo.laravelcommerce.com/public/js/owl.carousel.js">
	</script> <!--- google map-->
	<script src="http://maps.google.com/maps/api/js?sensor=false&libraries=geometry&key=AIzaSyCQq_d3bPGfsIAlenXUG5RtZsKZKzOmrMw" type="text/javascript">
	</script> <!--- one signal-->
	 
	<script type="application/javascript">

	   
	 jQuery(function() {
	   jQuery( "#datepicker" ).datepicker({
	     changeMonth: true,
	     changeYear: true,
	     maxDate: '0',
	   });
	 });

	jQuery( document ).ready( function () {
	   jQuery('#loader').hide();
	   
	        OneSignal.push(function () {
	     OneSignal.registerForPushNotifications();
	     OneSignal.on('subscriptionChange', function (isSubscribed) {
	      if (isSubscribed) {
	       OneSignal.getUserId(function (userId) {
	        device_id = userId;
	        //ajax request
	        jQuery.ajax({
	           url: 'http://demo.laravelcommerce.com/subscribeNotification',
	           type: "POST",
	           data: '&device_id='+device_id,          
	           success: function (res) {},
	       });
	        
	        //$scope.oneSignalCookie();
	       });
	      }
	     });
	   
	    });
	       
	   //load google map
	       
	   
	       

	   $.noConflict();
	   
	   //stripe_ajax
	   jQuery(document).on('click', '#stripe_ajax', function(e){
	       jQuery('#loader').css('display','flex');
	       jQuery.ajax({
	           url: 'http://demo.laravelcommerce.com/stripeForm',
	           type: "POST",           
	           success: function (res) {
	               if(res.trim() == "already added"){                  
	               }else{
	                   jQuery('.head-cart-content').html(res); 
	                   jQuery(parent).removeClass('cart');
	                   jQuery(parent).addClass('active');
	               }
	               message = "Product is added!";          
	               notification(message);
	               jQuery('#loader').hide();
	           },
	       });
	   }); 
	   
	   //commeents
	   jQuery(document).on('focusout','#order_comments', function(e){
	       jQuery('#loader').css('display','flex');
	       var comments = jQuery('#order_comments').val();
	       jQuery.ajax({
	           url: 'http://demo.laravelcommerce.com/commentsOrder',
	           type: "POST",
	           data: '&comments='+comments,
	           async: false,
	           success: function (res) {   
	               jQuery('#loader').hide();           
	           },
	       });     
	   });
	   
	   
	   //cash_on_delivery_button
	   jQuery(document).on('click', '#cash_on_delivery_button', function(e){   
	       jQuery('#loader').css('display','flex');
	       jQuery("#update_cart_form").submit();
	   }); 
	   
	   //shipping_mehtods_form
	   jQuery(document).on('submit', '#shipping_mehtods_form', function(e){
	       jQuery('.error_shipping').hide();       
	       var checked = jQuery(".shipping_data:checked").length > 0;
	       if (!checked){
	           jQuery('.error_shipping').show();
	           return false;
	       }               
	   });
	   
	   //update_cart
	   jQuery(document).on('click', '#update_cart', function(e){   
	       jQuery('#loader').css('display','flex');
	       jQuery("#update_cart_form").submit();
	   }); 
	   
	   //shipping_data 
	   jQuery(document).on('click', '.shipping_data', function(e){ 
	       getZonesBilling();      
	   }); 
	   
	   //billling method
	   jQuery(document).on('click', '#same_billing_address', function(e){      
	       if(jQuery(this).prop('checked') == true){
	           jQuery("#billing_firstname").val(jQuery("#firstname").val());
	           jQuery("#billing_lastname").val(jQuery("#lastname").val());
	           jQuery("#billing_company").val(jQuery("#company").val());
	           jQuery("#billing_street").val(jQuery("#street").val());
	           jQuery("#billing_city").val(jQuery("#city").val());
	           jQuery("#billing_zip").val(jQuery("#postcode").val());          
	           jQuery("#billing_countries_id").val(jQuery("#entry_country_id").val());
	           jQuery("#billing_zone_id").val(jQuery("#entry_zone_id").val());             
	           
	           jQuery(".same_address").attr('readonly','readonly');
	           jQuery(".same_address_select").attr('disabled','disabled');                     
	       }else{
	           jQuery(".same_address").removeAttr('readonly');
	           jQuery(".same_address_select").removeAttr('disabled');
	       }
	   }); 
	   
	   //apply_coupon_cart
	   jQuery(document).on('submit', '#apply_coupon', function(e){
	       jQuery('#coupon_code').remove('error');
	       jQuery('#coupon_require_error').hide();
	       jQuery('#loader').css('display','flex');
	       
	       if(jQuery('#coupon_code').val().length > 0){        
	           var formData = jQuery(this).serialize();
	           jQuery.ajax({
	               url: 'http://demo.laravelcommerce.com/apply_coupon',
	               type: "POST",
	               data: formData,
	               success: function (res) {
	                   var obj = JSON.parse(res);  
	                   var message = obj.message;
	                   jQuery('#loader').hide();
	                   if(obj.success==0){
	                       jQuery("#coupon_error").html(message).show();
	                       return false;
	                   }else if(obj.success==2){           
	                       jQuery("#coupon_error").html(message).show();
	                       return false;
	                   }else if(obj.success==1){                       
	                       window.location.reload(true);   
	                   }                   
	               },
	           });
	       }else{
	           jQuery('#loader').css('display','none');
	           jQuery('#coupon_code').addClass('error');
	           jQuery('#coupon_require_error').show();
	           return false;
	       }
	       jQuery('#loader').hide();
	       return false;
	   });
	   
	   //coupon_code
	   jQuery(document).on('keyup', '#coupon_code', function(e){
	       jQuery("#coupon_error").hide();
	       if(jQuery(this).val().length >0){           
	           jQuery('#coupon_code').removeClass('error');
	           jQuery('#coupon_require_error').hide();
	       }else{
	           jQuery('#coupon_code').addClass('error');
	           jQuery('#coupon_require_error').show();
	       }
	       
	   });
	   
	   //test
	   jQuery(document).on('click', '#myFunction', function(e){
	       var message = 'sadsad';     
	       notification(message);
	   });

	               Colors();
	   
	   function Colors(){
	       var value_price = jQuery('option:selected', ".Colors").attr('value_price');
	       jQuery("#Colors").val(value_price);
	   }
	       
	   //change_options
	   jQuery(document).on('change', '.Colors', function(e){
	       
	       var Colors = jQuery("#Colors").val();
	       
	       var value_price = jQuery('option:selected', this).attr('value_price');
	       var prefix = jQuery('option:selected', this).attr('prefix');
	       var current_price = jQuery('#products_price').val();
	       
	       if(prefix.trim() == '+' ){
	           var current_price = current_price - Colors;
	           var total_price = parseFloat(current_price) + parseFloat(value_price);
	       
	       }else if(prefix.trim() == '-' ){
	           var total_price = current_price - value_price;
	       }
	       
	       jQuery("#Colors").val(value_price);
	       jQuery('#products_price').val(total_price);
	       
	       var qty = jQuery('.qty').val();
	       var products_price = jQuery('#products_price').val();
	       var total_price = qty * products_price;
	       jQuery('.total_price').html('$'+total_price.toFixed(2));
	       
	   });
	       Size();
	   
	   function Size(){
	       var value_price = jQuery('option:selected', ".Size").attr('value_price');
	       jQuery("#Size").val(value_price);
	   }
	       
	   //change_options
	   jQuery(document).on('change', '.Size', function(e){
	       
	       var Size = jQuery("#Size").val();
	       
	       var value_price = jQuery('option:selected', this).attr('value_price');
	       var prefix = jQuery('option:selected', this).attr('prefix');
	       var current_price = jQuery('#products_price').val();
	       
	       if(prefix.trim() == '+' ){
	           var current_price = current_price - Size;
	           var total_price = parseFloat(current_price) + parseFloat(value_price);
	       
	       }else if(prefix.trim() == '-' ){
	           var total_price = current_price - value_price;
	       }
	       
	       jQuery("#Size").val(value_price);
	       jQuery('#products_price').val(total_price);
	       
	       var qty = jQuery('.qty').val();
	       var products_price = jQuery('#products_price').val();
	       var total_price = qty * products_price;
	       jQuery('.total_price').html('$'+total_price.toFixed(2));
	       
	   });
	   
	   //change language
	   function changeLanguage(locale){
	       jQuery('#loader').css('display','flex');                                
	       jQuery.ajax({           
	           url: 'http://demo.laravelcommerce.com/language',            
	           type: "POST",           
	           data: '&locale='+locale,
	           //dataType:"json",          
	                       
	           success: function (res) {   
	               window.location.reload(true);       
	           },          
	       }); 
	       
	   };
	   
	   jQuery( function() {
	       jQuery.widget( "custom.iconselectmenu", jQuery.ui.selectmenu, {
	         _renderItem: function( ul, item ) {
	           var li = jQuery( "<li>" ),
	             wrapper = jQuery( "<div>", { text: item.label } );
	    
	           if ( item.disabled ) {
	             li.addClass( "ui-state-disabled" );
	           }
	    
	           jQuery( "<span>", {
	             style: item.element.attr( "data-style" ),
	             "class": "ui-icon " + item.element.attr( "data-class" )
	           })
	             .appendTo( wrapper );
	    
	           return li.append( wrapper ).appendTo( ul );
	         }
	       });
	    

	       
	       jQuery("#change_language")
	       .iconselectmenu({
	         create: function (event, ui) {
	             var widget = jQuery(this).iconselectmenu("widget");
	             $span = jQuery('<span id="' + this.id + '_image" class="ui-selectmenu-image"> ').html("&nbsp;").appendTo(widget);
	             $span.attr("style", jQuery(this).children(":selected").data("style"));
	             
	         },                 
	         change: function (event, ui) {
	             jQuery("#" + this.id + '_image').attr("style", ui.item.element.data("style"));
	             var locale = jQuery(this).val();
	             changeLanguage(locale);
	             
	         }
	       }).iconselectmenu("menuWidget").addClass("ui-menu-icons customicons");
	       
	 } );
	 
	   jQuery( function() {
	       jQuery( "#category_id" ).selectmenu();
	       jQuery( ".attributes_data" ).selectmenu();
	   });
	   
	   //is_liked
	   jQuery(document).on('click', '.is_liked', function(e){
	       var products_id = jQuery(this).attr('products_id');
	       var selector = jQuery(this);
	       jQuery('#loader').css('display','flex');    
	       var user_count = jQuery('#wishlist-count').html();      
	       jQuery.ajax({           
	           url: 'http://demo.laravelcommerce.com/likeMyProduct',           
	           type: "POST",           
	           data: '&products_id='+products_id,          
	                       
	           success: function (res) {           
	               //jQuery('.head-cart-content').html(res);   
	               var obj = JSON.parse(res);  
	               var message = obj.message;
	               
	               if(obj.success==0){
	                   
	               }else if(obj.success==2){
	                   jQuery(selector).removeClass('fa-heart-o');
	                   jQuery(selector).addClass('fa-heart');
	                   jQuery(selector).children('span').html(obj.total_likes);
	                   jQuery('#wishlist-count').html(parseInt(user_count)+ parseInt(1));  
	                   jQuery(selector).children('.badge').html(obj.total_likes);
	               }else if(obj.success==1){
	                   jQuery(selector).removeClass('fa-heart');
	                   jQuery(selector).addClass('fa-heart-o');
	                   
	                   jQuery(selector).children('span').html(obj.total_likes);
	                   jQuery('#wishlist-count').html(user_count-1);   
	                   jQuery(selector).children('.badge').html(obj.total_likes);
	               }   
	               jQuery('#loader').hide();
	               notification(message);
	                       
	           },          
	       }); 
	       
	   });
	   
	   //wishlist_liked
	   jQuery(document).on('click', '.wishlist_liked', function(e){
	       var products_id = jQuery(this).attr('products_id');
	       var selector = jQuery(this).parents('.product').remove();
	       jQuery('#loader').css('display','flex');    
	       var user_count = jQuery('#wishlist-count').html();      
	       jQuery.ajax({           
	           url: 'http://demo.laravelcommerce.com/likeMyProduct',           
	           type: "POST",           
	           data: '&products_id='+products_id,          
	                       
	           success: function (res) {               
	               var obj = JSON.parse(res);  
	               var message = obj.message;
	               
	               if(obj.success==0){
	                   
	               }else if(obj.success==2){
	                   //jQuery(selector).children('span').html(obj.total_likes);
	                   jQuery('#wishlist-count').html(parseInt(user_count)+ parseInt(1));  
	                   //jQuery(selector).children('span').html(obj.total_likes+" Likes");
	               }else if(obj.success==1){
	                   //jQuery(selector).addClass(hidden);
	                   
	                   //jQuery(selector).children('span').html(obj.total_likes);
	                   var count = user_count-1;
	                   jQuery('#wishlist-count').html(count);
	                   
	                   if(count==0){
	                       jQuery(".loaded_content").hide();
	                       jQuery("#loaded_content_empty").show();
	                   }else{                      
	                       jQuery('.showing_record').html(count);  
	                       jQuery('.showing_total_record').html(parseInt(jQuery('.showing_total_record').html())-parseInt(1)); 
	                   }
	                   //website.product is not added to your wish list
	                   //jQuery(selector).children('span').html(obj.total_likes+" Likes");
	               }   
	               jQuery('#loader').hide();
	               notification(message);
	                       
	           },          
	       }); 
	       
	   });
	   
	           var direction = false;
	       //product slider
	   jQuery(".owl_featured").owlCarousel({
	       margin:10,
	       loop:false,
	       nav:true,
	       rtl:direction,
	       responsive:{
	           0:{
	               items:1
	           },
	           576:{
	               items:2
	           },
	           768:{
	               items:3
	           },
	           992:{
	               items:4
	           },
	           1199:{
	               items:5
	           }
	       }
	   });
	   

	   jQuery("#owl_special").owlCarousel({
	       loop:false,
	       margin:10,
	       nav:true,
	       rtl:direction,
	       responsive:{
	           0:{
	               items:1
	           },
	           576:{
	               items:2
	           },
	           768:{
	               items:3
	           },
	           992:{
	               items:4
	           },
	           1199:{
	               items:5
	           }
	       }
	   });

	   jQuery("#owl_liked").owlCarousel({
	       loop:false,
	       margin:10,
	       nav:true,
	       rtl:direction,
	       responsive:{
	           0:{
	               items:1
	           },
	           576:{
	               items:2
	           },
	           768:{
	               items:3
	           },
	           992:{
	               items:4
	           },
	           1199:{
	               items:5
	           }
	       }
	   });
	   
	   jQuery("#owl_brands").owlCarousel({
	       loop:false,
	       margin:10,
	       nav:true,
	       rtl:direction,
	       responsive:{
	           0:{
	               items:1
	           },
	           576:{
	               items:1
	           },
	           768:{
	               items:3
	           },
	           992:{
	               items:4
	           },
	           1199:{
	               items:6
	           }
	       }
	   });

	   jQuery( ".owl-prev").html('<i class="fa fa-angle-left"><\/i>');
	   jQuery( ".owl-next").html('<i class="fa fa-angle-right"><\/i>');


	//change_language
	jQuery(document).on('click', '.change_language', function(e){
	   jQuery('#loader').css('display','flex');
	   var languages_id = jQuery(this).attr('languages_id');
	   jQuery.ajax({
	       url: 'http://demo.laravelcommerce.com/change_language',
	       type: "POST",
	       data: '&languages_id='+languages_id,
	       success: function (res) {
	           jQuery('#loader').hide();
	       },
	   });
	}); 


	//sortby
	jQuery(document).on('change', '.sortby', function(e){   
	   jQuery('#loader').css('display','flex');
	   jQuery("#load_products_form").submit();
	});
	   

	//load more products
	jQuery(document).on('click', '#load_products', function(e){ 
	   jQuery('#loader').css('display','flex');
	   var page_number = jQuery('#page_number').val();
	   var total_record = jQuery('#total_record').val();
	   var formData = jQuery("#load_products_form").serialize();
	   jQuery.ajax({
	       url: 'http://demo.laravelcommerce.com/filterProducts',
	       type: "POST",
	       data: formData,
	       success: function (res) {
	           if(jQuery.trim().res==0){                       
	               jQuery('#load_products').hide();
	               jQuery('#loaded_content').show();
	           }else{
	               page_number++;
	               jQuery('#page_number').val(page_number);
	               jQuery('#listing-products').append(res);
	               var record_limit = jQuery('#record_limit').val();
	               var showing_record = page_number*record_limit;
	               if(total_record<=showing_record){
	                   jQuery('.showing_record').html(total_record);                   
	                   jQuery('#load_products').hide();
	                   jQuery('#loaded_content').show();
	               }else{
	                   jQuery('.showing_record').html(showing_record);
	               }
	           }           
	           jQuery('#loader').hide();
	       },
	   });
	});

	//sortby
	jQuery(document).on('change', '.sortbywishlist', function(e){   
	   jQuery('#loader').css('display','flex');
	   jQuery("#load_wishlist_form").submit();
	});
	   

	//load more products
	jQuery(document).on('click', '#load_wishlist', function(e){ 
	   jQuery('#loader').css('display','flex');
	   var page_number = jQuery('#page_number').val();
	   var formData = jQuery("#load_wishlist_form").serialize();
	   jQuery.ajax({
	       url: 'http://demo.laravelcommerce.com/loadMoreWishlist',
	       type: "POST",
	       data: formData,
	       success: function (res) {
	           
	           if(jQuery.trim().res==0){                       
	               jQuery('#load_wishlist').hide();
	               jQuery('#loaded_content').show();
	           }else{
	               page_number++;
	               jQuery('#page_number').val(page_number);
	               jQuery('#listing-wishlist').append(res);
	               
	               var record_limit = jQuery('#record_limit').val();
	               var total_record = jQuery('#total_record').val();
	               
	               var showing_record = page_number*record_limit;
	               if(total_record<=showing_record){
	                   jQuery('#load_wishlist').hide();
	                   jQuery('.showing_record').html(total_record);
	               }else{
	                   jQuery('.showing_record').html(showing_record);
	               }
	           }
	           jQuery('#loader').hide();
	           
	           
	           /*if(jQuery.trim().res==0){                     
	               jQuery('#load_wishlist').hide();
	               jQuery('#loaded_content').show();
	           }else{
	               page_number++;
	               jQuery('#page_number').val(page_number);
	               jQuery('#listing-wishlist').append(res);
	           }
	           jQuery('#loader').hide();*/
	       },
	   });
	});



	//sortbynews
	jQuery(document).on('change', '.sortbynews', function(e){   
	   jQuery('#loader').css('display','flex');
	   jQuery("#load_news_form").submit();
	});

	//load more news
	jQuery(document).on('click', '#load_news', function(e){ 
	   jQuery('#loader').css('display','flex');
	   var page_number = jQuery('#page_number').val();
	   var formData = jQuery("#load_news_form").serialize();
	   jQuery.ajax({
	       url: 'http://demo.laravelcommerce.com/loadMoreNews',
	       type: "POST",
	       data: formData,
	       success: function (res) {
	           if(jQuery.trim().res==0){                       
	               jQuery('#load_news').hide();
	               jQuery('#loaded_content').show();
	           }else{
	               page_number++;
	               jQuery('#page_number').val(page_number);
	               jQuery('#listing-news').append(res);
	               
	               var record_limit = jQuery('#record_limit').val();
	               var total_record = jQuery('#total_record').val();
	               //alert(record_limit);
	               var showing_record = page_number*record_limit;
	               if(total_record<showing_record){
	                   jQuery('#load_news').hide();
	                   jQuery('.showing_record').html(total_record);
	               }else{
	                   jQuery('.showing_record').html(showing_record);
	               }
	           }
	           jQuery('#loader').hide();
	       },
	   });
	});

	/*jQuery(document).on('click', '.filters_box', function(e){ 
	   if (jQuery('input:checkbox.filters_box:checked').length > 0) {
	       jQuery('#filters_applied').val(1);
	       jQuery('#apply_options_btn').removeAttr('disabled');
	   } else {
	       jQuery('#filters_applied').val(0);
	       jQuery('#apply_options_btn').attr('disabled',true);
	   }
	})
	*/
	jQuery(document).on('click', '#apply_options_btn', function(e){ 
	   if (jQuery('input:checkbox.filters_box:checked').length > 0) {
	       jQuery('#filters_applied').val(1);
	       jQuery('#apply_options_btn').removeAttr('disabled');
	   } else {
	       jQuery('#filters_applied').val(0);
	       jQuery('#apply_options_btn').attr('disabled',true);
	   }   
	   jQuery('#load_products_form').submit();
	   
	})

	//add-to-Cart with custom options
	jQuery(document).on('click', '.add-to-Cart', function(e){   
	   jQuery('#loader').css('display','flex');
	   var formData = jQuery("#add-Product-form").serialize();
	   var url = jQuery('#checkout_url').val();
	   var message;
	   jQuery.ajax({
	       url: 'http://demo.laravelcommerce.com/addToCart',
	       type: "POST",
	       data: formData,
	       
	       success: function (res) {
	           if(res.trim() == "already added"){
	               //notification
	               message = 'Product is added!';
	           }else{
	               jQuery('.head-cart-content').html(res);
	               message = 'Product is added!';
	               jQuery(parent).addClass('active');
	           }
	               if(url.trim()=='true'){
	                   window.location.href = 'http://demo.laravelcommerce.com/checkout';
	               }else{
	                   jQuery('#loader').css('display','none');
	                   //window.location.href = 'http://demo.laravelcommerce.com/viewcart';
	                   //message = "Product is added!";            
	                   //notification(message);
	               }
	       },
	   });
	});

	//update-single-Cart with
	jQuery(document).on('click', '.update-single-Cart', function(e){    
	   jQuery('#loader').css('display','flex');
	   var formData = jQuery("#add-Product-form").serialize();
	   var url = jQuery('#checkout_url').val();
	   var message;
	   jQuery.ajax({
	       url: 'http://demo.laravelcommerce.com/updatesinglecart',
	       type: "POST",
	       data: formData,
	       
	       success: function (res) {
	           if(res.trim() == "already added"){
	               //notification
	               message = 'Product is added!';
	           }else{
	               jQuery('.head-cart-content').html(res);
	               message = 'Product is added!';
	               jQuery(parent).addClass('active');
	           }
	               if(url.trim()=='true'){
	                   window.location.href = 'http://demo.laravelcommerce.com/checkout';
	               }else{
	                   jQuery('#loader').css('display','none');
	                   //window.location.href = 'http://demo.laravelcommerce.com/viewcart';
	                   //message = "Product is added!";            
	                   //notification(message);
	               }
	       },
	   });
	});

	//validate form

	jQuery(document).on('submit', '.form-validate', function(e){

	   var error = "";
	   
	   //to validate text field

	   jQuery(".field-validate").each(function() {
	       if(this.value == '') {
	           jQuery(this).closest(".form-group").addClass('has-error');
	           jQuery(this).next(".error-content").removeAttr('hidden');
	           error = "has error";
	       }else{
	           jQuery(this).closest(".form-group").removeClass('has-error');
	           jQuery(this).next(".error-content").attr('hidden', true);
	       }
	   });
	   
	   /*jQuery(".phone-validate").each(function() {
	       if(this.value == '' && isNaN(this.value)) {
	           jQuery(this).closest(".form-group").addClass('has-error');
	           jQuery(this).next(".error-content").removeAttr('hidden');
	           error = "has error";
	       }else{
	           jQuery(this).closest(".form-group").removeClass('has-error');
	           jQuery(this).next(".error-content").attr('hidden', true);
	       }
	   });*/
	   
	   
	   var check = 0;
	   jQuery(".password").each(function() {
	       var regex = "^\\s+$";
	       if(this.value.match(regex)) {
	           jQuery(this).closest(".form-group").addClass('has-error');
	           jQuery(this).next(".error-content").removeAttr('hidden');
	           error = "has error";                
	       }else{
	           if(check == 1){
	                var res = passwordMatch();

	                   if(res=='matched'){
	                       jQuery('.password').closest(".form-group").removeClass('has-error');
	                       jQuery('#re_password').closest('.re-password-content').children('.error-content-password').add('hidden');
	                   }else if(res=='error'){
	                       jQuery('.password').closest(".form-group").addClass('has-error');                       
	                       jQuery('#re_password').closest('.re-password-content').children('.error-content-password').removeAttr('hidden');                        
	                       error = "has error";
	                   }
	               }else{
	                   jQuery(this).closest(".form-group").removeClass('has-error');
	                   jQuery(this).next(".error-content").attr('hidden', true);
	               }
	                check++;
	           }

	   });
	   

	   jQuery(".number-validate").each(function() {
	       if(this.value == '' || isNaN(this.value)) {
	           jQuery(this).closest(".form-group").addClass('has-error');
	           jQuery(this).next(".error-content").removeAttr('hidden');
	           error = "has error";
	       }else{
	           jQuery(this).closest(".form-group").removeClass('has-error');
	           jQuery(this).next(".error-content").attr('hidden', true);
	       }
	   });



	   //

	   jQuery(".email-validate").each(function() {

	       var validEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;

	       if(this.value != '' && validEmail.test(this.value)) {

	           jQuery(this).closest(".form-group").removeClass('has-error');

	           jQuery(this).next(".error-content").attr('hidden', true);



	       }else{

	           jQuery(this).closest(".form-group").addClass('has-error');

	           jQuery(this).next(".error-content").removeAttr('hidden');

	           error = "has error";

	       }

	   });

	   
	   jQuery(".checkbox-validate").each(function() {
	       
	       if(jQuery(this).prop('checked') == true){
	           jQuery(this).closest(".form-group").removeClass('has-error');
	           jQuery(this).closest('.checkbox-parent').children('.error-content').attr('hidden', true);                       
	       }else{
	           jQuery(this).closest(".form-group").addClass('has-error');
	           jQuery(this).closest('.checkbox-parent').children('.error-content').removeAttr('hidden');

	           error = "has error";
	       }

	   });



	   if(error=="has error"){

	       return false;

	   }



	});



	//focus form field

	jQuery(document).on('keyup focusout change', '.field-validate', function(e){
	   if(this.value == '') {      
	       jQuery(this).closest(".form-group").addClass('has-error');
	       jQuery(this).next(".error-content").removeAttr('hidden');
	   }else{
	       jQuery(this).closest(".form-group").removeClass('has-error');
	       jQuery(this).next(".error-content").attr('hidden', true);
	   }
	});



	//focus form field
	jQuery(document).on('keyup', '.number-validate', function(e){
	   if(this.value == '' || isNaN(this.value)) {
	       jQuery(this).closest(".form-group").addClass('has-error');
	       jQuery(this).next(".error-content").removeAttr('hidden');
	   }else{
	       jQuery(this).closest(".form-group").removeClass('has-error');
	       jQuery(this).next(".error-content").attr('hidden', true);
	   }
	});

	//match password
	jQuery(document).on('keyup focusout', '.password', function(e){
	   var regex = "^\\s+$";
	   if(this.value.match(regex)) {           
	       jQuery(this).closest(".form-group").addClass('has-error');
	       jQuery(this).next(".error-content").removeAttr('hidden');
	   }else{
	       jQuery(this).closest(".form-group").removeClass('has-error');
	       jQuery(this).next(".error-content").attr('hidden', true);
	   }
	});



	jQuery(document).on('keyup focusout', '.email-validate', function(e){

	   var validEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;

	   if(this.value != '' && validEmail.test(this.value)) {
	       jQuery(this).closest(".form-group").removeClass('has-error');
	       jQuery(this).next(".error-content").attr('hidden', true);
	   }else{
	       jQuery(this).closest(".form-group").addClass('has-error');
	       jQuery(this).next(".error-content").removeAttr('hidden');
	       error = "has error";
	   }

	});


	   

	   //sorting grid/list
	   jQuery(document).on('click','#list',function(){     
	       if (!jQuery(this).hasClass('active')) {
	           jQuery('#listing-products, .load-more-area').hide();        
	           jQuery( '#listing-products' ).removeClass( 'products-3x' );
	           jQuery( '#listing-products' ).addClass( 'products-list' );
	           jQuery( '#grid' ).removeClass( 'active' );
	           jQuery( this ).addClass( 'active' );        
	           jQuery('#listing-products, .load-more-area').fadeIn(1000);  
	       }
	   });

	   jQuery(document).on('click','#grid',function(){ 
	       if (!jQuery(this).hasClass('active')){      
	           jQuery('#listing-products, .load-more-area').hide();    
	           jQuery( '#listing-products' ).removeClass( 'products-list' );
	           jQuery( '#listing-products' ).addClass( 'products-3x' );
	           jQuery( '#list' ).removeClass( 'active' );
	           jQuery( this ).addClass( 'active' );
	           jQuery('#listing-products, .load-more-area').fadeIn(1000);
	       }
	   });

	   //sorting grid/list
	   jQuery(document).on('click','#list_wishlist',function(){        
	       if (!jQuery(this).hasClass('active')) {
	           jQuery('#listing-wishlist, .load-more-area').hide();        
	           jQuery( '#listing-wishlist' ).removeClass( 'products-3x' );
	           jQuery( '#listing-wishlist' ).addClass( 'products-list' );
	           jQuery( '#grid_wishlist' ).removeClass( 'active' );
	           jQuery( this ).addClass( 'active' );        
	           jQuery('#listing-wishlist, .load-more-area').fadeIn(1000);  
	       }
	   });

	   jQuery(document).on('click','#grid_wishlist',function(){    
	       if (!jQuery(this).hasClass('active')){      
	           jQuery('#listing-wishlist, .load-more-area').hide();    
	           jQuery( '#listing-wishlist' ).removeClass( 'products-list' );
	           jQuery( '#listing-wishlist' ).addClass( 'products-3x' );
	           jQuery( '#list_wishlist' ).removeClass( 'active' );
	           jQuery( this ).addClass( 'active' );
	           jQuery('#listing-wishlist, .load-more-area').fadeIn(1000);
	       }
	   });
	   
	   //sorting grid/list
	   jQuery(document).on('click','#list_news',function(){        
	       if (!jQuery(this).hasClass('active')) {
	           jQuery('#listing-news, .load-more-area').hide();        
	           jQuery( '#listing-news' ).removeClass( 'blogs-4x' );
	           jQuery( '#listing-news' ).addClass( 'blogs-list' );
	           jQuery( '#grid_news' ).removeClass( 'active' );
	           jQuery( this ).addClass( 'active' );        
	           jQuery('#listing-news, .load-more-area').fadeIn(1000);  
	       }
	   });

	   jQuery(document).on('click','#grid_news',function(){    
	       if (!jQuery(this).hasClass('active')){      
	           jQuery('#listing-news, .load-more-area').hide();    
	           jQuery( '#listing-news' ).removeClass( 'blogs-list' );
	           jQuery( '#listing-news' ).addClass( 'blogs-4x' );
	           jQuery( '#list_news' ).removeClass( 'active' );
	           jQuery( this ).addClass( 'active' );
	           jQuery('#listing-news, .load-more-area').fadeIn(1000);
	       }
	   });
	   
	   /*$(".show_commentsandnotes_container").click(function () {
	       $('.commentsandnotes_bg').fadeIn(1000, function() {
	          $('.commentsandnotes_bg').addClass('show');
	       });
	       $('.commentsandnotes_container').fadeIn(1000, function() {
	          $('.commentsandnotes_container').addClass('show');
	       });
	   });
	   $(".commentsandnotes_bg").click(function () {
	       $('.commentsandnotes_bg').fadeOut(1000, function() { 
	          $('.commentsandnotes_bg').removeClass('show');
	       });
	       $('.commentsandnotes_container').fadeOut(1000, function() { 
	          $('.commentsandnotes_container').removeClass('show'); 
	       });
	   });*/
	   

	   
	   // This button will increment the value
	   jQuery('.qtyplus').click(function(e){
	       // Stop acting like a button
	       e.preventDefault();
	       // Get the field name
	       fieldName = jQuery(this).attr('field');
	       // Get its current value
	       var currentVal = parseInt(jQuery(this).prev('.qty').val());
	       // If is not undefined
	       if (!isNaN(currentVal)) {
	                           
	           if(currentVal < 9997 ){
	               // Increment
	               jQuery(this).prev('.qty').val(currentVal + 1);                  
	           }               
	           
	       } else {
	           // Otherwise put a 0 there
	           jQuery(this).prev('.qty').val(0);
	       }
	       
	       var qty = jQuery('.qty').val();
	       var products_price = jQuery('#products_price').val();
	       var total_price = parseFloat(qty) * parseFloat(products_price); 
	       jQuery('.total_price').html('$'+total_price.toFixed(2));
	   });

	   // This button will decrement the value till 0

	   jQuery(".qtyminus").click(function(e) {
	       
	       // Stop acting like a button
	       e.preventDefault();
	       
	       // Get the field name
	       fieldName = jQuery(this).attr('field');

	       // Get its current value
	       var currentVal = parseInt(jQuery(this).next('.qty').val());
	       // If it isn't undefined or its greater than 0
	       if (!isNaN(currentVal) && currentVal > 1) {
	           // Decrement one
	           jQuery(this).next('.qty').val(currentVal - 1);
	       } else {
	           
	           // Otherwise put a 0 there
	           jQuery(this).next('.qty').val(1);

	       }
	       
	       var qty = jQuery('.qty').val();
	       var products_price = jQuery('#products_price').val();
	       var total_price = parseFloat(qty) * parseFloat(products_price); 
	       jQuery('.total_price').html('$'+total_price.toFixed(2));

	   });

	   
	   //cart page
	       
	jQuery(document).on('focusout','.qty',function(){
	   var minimum = '1';
	   var maximum = jQuery(this).attr('max');
	   var current = jQuery(this).val();   
	   
	   if( parseInt(current) > parseInt(maximum)){
	       jQuery(this).val(maximum);
	   }
	   
	   if(current<minimum){
	       jQuery(this).val(minimum);
	   }   
	   
	   var products_price = jQuery('#products_price').val();   
	   var total_price = parseFloat(jQuery(this).val()) * parseFloat(products_price);
	   jQuery('.total_price').html('$'+total_price.toFixed(2));
	   
	});

	   function cart_item_price(){
	       
	       var subtotal = 0;
	       jQuery(".cart_item_price").each(function() {
	           subtotal= parseFloat(subtotal) + parseFloat(jQuery(this).val());                
	       });
	       jQuery('#subtotal').html('$'+subtotal);
	       
	       var discount = 0;           
	       jQuery(".discount_price_hidden").each(function() {
	           discount =  parseFloat(discount) - parseFloat(jQuery(this).val());              
	       });
	       
	       jQuery('.discount_price').val(Math.abs(discount));
	       
	       jQuery('#discount').html('$'+Math.abs(discount));
	       
	       //total value
	       var total_price = parseFloat(subtotal) - parseFloat(discount);
	       jQuery('#total_price').html('$'+total_price);
	   };
	   
	   //default_address
	   jQuery(document).on('click', '.default_address', function(e){
	       jQuery('#loader').css('display','flex');
	       var address_id = jQuery(this).attr('address_id');
	       jQuery.ajax({
	           url: 'http://demo.laravelcommerce.com/myDefaultAddress',
	           type: "POST",
	           data: '&address_id='+address_id,
	           
	           success: function (res) {
	                window.location = 'shipping-address?action=default';
	           },

	       });

	   });

	   

	   //deleteMyAddress
	   jQuery(document).on('click', '.deleteMyAddress', function(e){
	       jQuery('#loader').css('display','flex');
	       var address_id = jQuery(this).attr('address_id');
	       jQuery.ajax({
	           url: 'http://demo.laravelcommerce.com/delete-address',
	           type: "POST",
	           data: '&address_id='+address_id,
	           
	           success: function (res) {
	               window.location = 'shipping-address?action=detele';
	           },
	       });
	   });

	jQuery('.slide-toggle').on('click', function(event){
	jQuery('.color-panel').toggleClass('active');
	});

	    jQuery( function() {        
	     var maximum_price = jQuery( ".maximum_price" ).val();
	     jQuery( "#slider-range" ).slider({
	       range: true,
	       min: 0,
	       max: maximum_price,
	       values: [ 0, maximum_price ],
	       slide: function( event, ui ) {
	           jQuery('#min_price').val(ui.values[ 0 ] );
	           jQuery('#max_price').val(ui.values[ 1 ] );
	          
	           jQuery('#min_price_show').val( ui.values[ 0 ] );
	           jQuery('#max_price_show').val( ui.values[ 1 ] );
	       },
	       create: function(event, ui){
	           jQuery(this).slider('value',20);
	       }
	      });     
	      jQuery( "#min_price_show" ).val( jQuery( "#slider-range" ).slider( "values", 0 ) );     
	      jQuery( "#max_price_show" ).val(jQuery( "#slider-range" ).slider( "values", 1 ) );
	      //jQuery( "#slider-range" ).slider( "option", "max", 50 );
	    });
	    
	   
	       

	//tooltip enable
	jQuery(function () {
	 jQuery('[data-toggle="tooltip"]').tooltip()
	});     

	function initialize(location){  
	           var address = 'Latitude, Longitude';
	       var map = new google.maps.Map(document.getElementById('googleMap'), {
	       mapTypeId: google.maps.MapTypeId.TERRAIN,
	       zoom: 13
	   });
	   var geocoder = new google.maps.Geocoder();
	   geocoder.geocode({
	       'address': address
	   }, 
	   function(results, status) {
	       if(status == google.maps.GeocoderStatus.OK) {
	        new google.maps.Marker({
	           position: results[0].geometry.location,
	           map: map
	        });
	        map.setCenter(results[0].geometry.location);
	       }
	   });
	  }
	 
	//default product cart
	jQuery(document).on('click', '.cart', function(e){  
	   var parent = jQuery(this);
	   var products_id = jQuery(this).attr('products_id');
	   var message ;
	   jQuery.ajax({
	       url: 'http://demo.laravelcommerce.com/addToCart',
	       type: "POST",
	       data: '&products_id='+products_id,      
	       success: function (res) {
	           if(res.trim() == "already added"){                          
	           }else{
	               jQuery('.head-cart-content').html(res);             
	               jQuery(parent).removeClass('cart');
	               jQuery(parent).addClass('active');
	               jQuery(parent).html("Added!");
	           }
	           message = "Product is added!";          
	           notification(message);
	       },
	   });

	});

	  
	  
	});


	//ready doument end
	jQuery('.dropdown-menu').on('click', function(event){
	   // The event won't be propagated up to the document NODE and 
	   // therefore delegated events won't be fired
	   event.stopPropagation();
	});
	jQuery(".alert.fade").fadeTo(2000, 500).slideUp(500, function(){
	   jQuery(".alert.fade").slideUp(500);
	});

	function delete_cart_product(cart_id){
	   jQuery('#loader').css('display','flex');
	   var id = cart_id;
	   jQuery.ajax({
	       url: 'http://demo.laravelcommerce.com/deleteCart',
	       type: "GET",
	       data: '&id='+id+'&type=header cart',        
	       success: function (res) {
	           window.location.reload(true);
	       },
	   });
	};

	//paymentMethods
	function paymentMethods(){
	   //jQuery('#loader').css('display','flex');
	   var payment_method = jQuery(".payment_method:checked").val();
	   jQuery(".payment_btns").hide();
	   
	   jQuery("#"+payment_method+'_button').show();
	   
	   jQuery.ajax({
	       url: 'http://demo.laravelcommerce.com/paymentComponent',
	       type: "POST",
	       data: '&payment_method='+payment_method,            
	       success: function (res) {
	           //jQuery('#loader').hide();
	       },
	   });
	}

	//notification
	function notification(message) {
	   jQuery('#message_content').html(message);
	   var x = document.getElementById("message_content");
	   x.className = "show";
	   setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
	}

	function passwordMatch(){
	   
	   var password = jQuery('#password').val();
	   var re_password = jQuery('#re_password').val(); 
	   
	   if(password == re_password){
	       return 'matched';
	   }else{
	       return 'error';
	   }
	}

	function getZones() {
	   jQuery('#loader').css('display','flex');
	   var country_id = jQuery('#entry_country_id').val();
	   jQuery.ajax({
	       url: 'http://demo.laravelcommerce.com/ajaxZones',
	       type: "POST",
	       //data: '&country_id='+country_id,
	        data: {'country_id': country_id},
	       
	       success: function (res) {
	           var i;
	           var showData = [];
	           for (i = 0; i < res.length; ++i) {
	               var j = i + 1; 
	               showData[i] = "<option value='"+res[i].zone_id+"'>"+res[i].zone_name+"<\/option>"; 
	           }
	           showData.push("<option value='Other'>Other<\/option>");
	           jQuery("#entry_zone_id").html(showData);
	           jQuery('#loader').hide();
	       },
	   });

	};

	function getBillingZones() {
	   console.log('here');
	   jQuery('#loader').css('display','flex');
	   var country_id = jQuery('#billing_countries_id').val();
	   jQuery.ajax({
	       url: 'http://demo.laravelcommerce.com/ajaxZones',
	       type: "POST",
	        data: {'country_id': country_id},
	       
	       success: function (res) {
	           var i;
	           var showData = [];
	           for (i = 0; i < res.length; ++i) {
	               var j = i + 1; 
	               showData[i] = "<option value='"+res[i].zone_id+"'>"+res[i].zone_name+"<\/option>"; 
	           }
	           showData.push("<option value='Other'>Other<\/option>");
	           jQuery("#billing_zone_id").html(showData);
	           jQuery('#loader').hide();
	       },
	   });

	};

	function getZonesBilling() {
	   var field_name = jQuery('.shipping_data:checked');
	   var mehtod_name = jQuery(field_name).attr('method_name');
	   var shipping_price = jQuery(field_name).attr('shipping_price');
	   jQuery("#mehtod_name").val(mehtod_name);
	   jQuery("#shipping_price").val(shipping_price);
	}

	'use strict';
	function showPreview(objFileInput) {
	   if (objFileInput.files[0]) {
	       var fileReader = new FileReader();
	       fileReader.onload = function (e) {
	           jQuery("#uploaded_image").html('<img src="'+e.target.result+'" width="150px" height="150px" class="upload-preview" />');
	           jQuery("#uploaded_image").css('opacity','1.0');
	           jQuery(".upload-choose-icon").css('opacity','0.8');
	       }
	       fileReader.readAsDataURL(objFileInput.files[0]);
	   }
	}

	jQuery(document).ready(function() {
	 /******************************
	     BOTTOM SCROLL TOP BUTTON
	  ******************************/

	 // declare variable
	 var scrollTop = jQuery(".floating-top");

	 jQuery(window).scroll(function() {
	   // declare variable
	   var topPos = jQuery(this).scrollTop();

	   // if user scrolls down - show scroll to top button
	   if (topPos > 150) {
	     jQuery(scrollTop).css("opacity", "1");

	   } else {
	     jQuery(scrollTop).css("opacity", "0");
	   }

	 }); 

	 //Click event to scroll to top
	 jQuery(scrollTop).click(function() {
	   jQuery('html, body').animate({
	     scrollTop: 0
	   }, 800);
	   return false;

	 });
	});


	jQuery('body').on('mouseenter mouseleave','.dropdown.open',function(e){
	 var _d=jQuery(e.target).closest('.dropdown');
	 _d.addClass('show');
	 setTimeout(function(){
	   _d[_d.is(':hover')?'addClass':'removeClass']('show');   
	   
	 },300);
	 jQuery('.dropdown-menu', _d).attr('aria-expanded',_d.is(':hover'));
	});
	 
	 
	 
	jQuery('.nav-index').on('show.bs.tab', function (e) {
	     console.log('fire');
	     e.target // newly activated tab
	     e.relatedTarget // previous active tab
	     jQuery('.overlay').show();   
	})
	 jQuery('.nav-index').on('hidden.bs.tab', function (e) {
	     console.log('expire');
	     e.target // newly activated tab
	     e.relatedTarget // previous active tab
	     jQuery('.overlay').hide();   
	})
	</script> 
@stop