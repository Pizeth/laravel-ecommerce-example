@extends('layouts.main-layout')
@section('extra-css')
	<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' rel='stylesheet' type='text/css'>
	<link href="{{ asset('css/opencart/owl.carousel.css') }}" media="screen" rel="stylesheet">
	<!-- <link href="{{ asset('css/opencart/bootstrap.min.css') }}" media="screen" rel="stylesheet"> -->
	<link href="{{ asset('css/opencart/stylesheet.css') }}" rel="stylesheet">
	<link href="{{ asset('css/opencart/ttblogstyle.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/opencart/ttcountdown.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/opencart/category-feature.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/opencart/animate.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/opencart/newsletter.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/opencart/lightbox.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/opencart/magnific-popup.css') }}" media="screen" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/opencart/bootstrap-datetimepicker.min.css') }}" media="screen" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/opencart/swiper.min.css') }}" media="screen" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/opencart/opencart.css') }}" media="screen" rel="stylesheet" type="text/css">
@stop
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

	<div class="container product-product" id="product-product">
		<ul class="breadcrumb">
			<li>
				<a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=common/home"><i class="fa fa-home"></i></a>
			</li>
			<li>
				<a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/product&amp;product_id=42">aliquam quaerat voluptatem</a>
			</li>
		</ul>
		<div class="row">
			<!-- <aside class="col-sm-3 hidden-xs" id="column-left">
				<div class="main-category-list left-main-menu col-sm-3">
					<div class="cat-menu">
						<div class="TT-panel-heading">
							<span>Categories</span>
						</div>
						<div class="menu-category">
							<ul class="dropmenu">
								<li class="TT-Sub-List dropdown">
									<a class="TT-Category-List" href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/category&amp;path=20">Electronics</a> <span class="active_menu"></span>
									<div class="dropdown-menu">
										<div class="dropdown-inner">
											<ul class="list-unstyled childs_1 mega-dropdown-menu columns-2" style="width: 360px;">
												<li class="dropdown first" style="width: 50%;">
													<a class="single-dropdown" href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/category&amp;path=20_26">Mobiles</a>
													<div class="dropdown-menu">
														<div class="dropdown-inner">
															<ul class="list-unstyled childs_2">
																<li>
																	<a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/category&amp;path=26_59">PC-01</a>
																</li>
																<li>
																	<a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/category&amp;path=26_60">PC-02</a>
																</li>
																<li>
																	<a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/category&amp;path=26_61">PC-03</a>
																</li>
																<li>
																	<a href=""></a>
																</li>
															</ul>
														</div>
													</div>
												</li>
												<li class="dropdown first" style="width: 50%;">
													<a class="single-dropdown" href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/category&amp;path=20_27">laptop</a>
													<div class="dropdown-menu">
														<div class="dropdown-inner">
															<ul class="list-unstyled childs_2">
																<li>
																	<a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/category&amp;path=27_62">Mac-01</a>
																</li>
																<li>
																	<a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/category&amp;path=27_63">Mac-02</a>
																</li>
																<li>
																	<a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/category&amp;path=27_64">Mac-03</a>
																</li>
																<li>
																	<a href=""></a>
																</li>
															</ul>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li class="TT-Sub-List dropdown">
									<a class="TT-Category-List" href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/category&amp;path=25">Lenovo</a> <span class="active_menu"></span>
									<div class="dropdown-menu">
										<div class="dropdown-inner">
											<ul class="list-unstyled childs_1 single-dropdown-menu">
												<li class="dropdown" style="width: 100%;">
													<a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/category&amp;path=25_29">Barbet</a>
												</li>
												<li class="dropdown" style="width: 100%;">
													<a class="single-dropdown" href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/category&amp;path=25_28">Basenji</a>
													<div class="dropdown-menu">
														<div class="dropdown-inner">
															<ul class="list-unstyled childs_2">
																<li>
																	<a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/category&amp;path=28_35">test 1</a>
																</li>
																<li>
																	<a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/category&amp;path=28_36">test 2</a>
																</li>
																<li>
																	<a href=""></a>
																</li>
															</ul>
														</div>
													</div>
												</li>
												<li class="dropdown" style="width: 100%;">
													<a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/category&amp;path=25_30">Beagle</a>
												</li>
												<li class="dropdown" style="width: 100%;">
													<a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/category&amp;path=25_31">Boerboel</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li class="TT-Sub-List dropdown">
									<a class="TT-Category-List" href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/category&amp;path=65">HTC</a> <span class="active_menu"></span>
									<div class="dropdown-menu">
										<div class="dropdown-inner">
											<ul class="list-unstyled childs_1 single-dropdown-menu">
												<li class="dropdown" style="width: 100%;">
													<a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/category&amp;path=65_82">ice cream</a>
												</li>
												<li class="dropdown" style="width: 100%;">
													<a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/category&amp;path=65_81">waffles</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li class="TT-Sub-List dropdown">
									<a class="TT-Category-List" href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/category&amp;path=66">Media Players</a> <span class="active_menu"></span>
									<div class="dropdown-menu">
										<div class="dropdown-inner">
											<ul class="list-unstyled childs_1 single-dropdown-menu">
												<li class="dropdown" style="width: 100%;">
													<a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/category&amp;path=66_75">ketchup</a>
												</li>
												<li class="dropdown" style="width: 100%;">
													<a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/category&amp;path=66_76">Paper Goods</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/category&amp;path=67">Home Audio</a>
									<div class="dropdown-menu">
										<div class="dropdown-inner">
											<ul class="list-unstyled childs_1 single-dropdown-menu"></ul>
										</div>
									</div>
								</li>
								<li class="TT-Sub-List dropdown">
									<a class="TT-Category-List" href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/category&amp;path=68">Telephones</a> <span class="active_menu"></span>
									<div class="dropdown-menu">
										<div class="dropdown-inner">
											<ul class="list-unstyled childs_1 single-dropdown-menu">
												<li class="dropdown" style="width: 100%;">
													<a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/category&amp;path=68_79">soda</a>
												</li>
												<li class="dropdown" style="width: 100%;">
													<a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/category&amp;path=68_80">sugar</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/category&amp;path=69">GPS &amp; Accessories</a>
									<div class="dropdown-menu">
										<div class="dropdown-inner">
											<ul class="list-unstyled childs_1 single-dropdown-menu"></ul>
										</div>
									</div>
								</li>
								<li class="TT-Sub-List dropdown">
									<a class="TT-Category-List" href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/category&amp;path=70">portable battery</a> <span class=
									"active_menu"></span>
									<div class="dropdown-menu">
										<div class="dropdown-inner">
											<ul class="list-unstyled childs_1 single-dropdown-menu">
												<li class="dropdown" style="width: 100%;">
													<a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/category&amp;path=70_77">hand soap</a>
												</li>
												<li class="dropdown" style="width: 100%;">
													<a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/category&amp;path=70_78">pork</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/category&amp;path=71">Cameras</a>
									<div class="dropdown-menu">
										<div class="dropdown-inner">
											<ul class="list-unstyled childs_1 single-dropdown-menu"></ul>
										</div>
									</div>
								</li>
								<li>
									<a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/category&amp;path=72">laptop stand</a>
									<div class="dropdown-menu">
										<div class="dropdown-inner">
											<ul class="list-unstyled childs_1 single-dropdown-menu"></ul>
										</div>
									</div>
								</li>
								<li>
									<a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/category&amp;path=73">Tablets</a>
									<div class="dropdown-menu">
										<div class="dropdown-inner">
											<ul class="list-unstyled childs_1 single-dropdown-menu"></ul>
										</div>
									</div>
								</li>
								<li>
									<a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/category&amp;path=74">Speakers</a>
									<div class="dropdown-menu">
										<div class="dropdown-inner">
											<ul class="list-unstyled childs_1 single-dropdown-menu"></ul>
										</div>
									</div>
								</li>
								<li>
									<a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=information/tt_blog/blogs"><span data-hover="Blogs">Blogs</span></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="swiper-viewport">
					<div class="swiper-container" id="banner0">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<a href="#"><img alt="Left-Banner" class="img-responsive" src="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/image/cache/catalog/demo/banners/left-banner-300x430.jpg"></a>
							</div>
						</div>
					</div>
				</div>
				<script type="text/javascript">
				// 
				// $('#banner0').swiper({
				// effect: 'fade',
				// autoplay: 2500,
				// autoplayDisableOnInteraction: false
				// });
				// 
				</script>
				<div class="featured-carousel products-list">
					<div class="box-heading">
						<h3>Featured</h3>
					</div>
					<div class="featured-items products-carousel row">
						<div class="product-layouts">
							<div class="product-thumb transition">
								<div class="image">
									<a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/product&amp;product_id=43"><img alt="perspiciatis unde omnis" class="image_thumb" src=
									"http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/image/cache/catalog/demo/product/09-70x91.jpg" title="perspiciatis unde omnis"> <img alt="perspiciatis unde omnis" class=
									"image_thumb_swap" src="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/image/cache/catalog/demo/product/12-70x91.jpg" title="perspiciatis unde omnis"></a>
									<div class="sale-icon">
										Sale
									</div><span class="percent">-50%</span>
								</div>
								<div class="thumb-description">
									<div class="caption">
										<h4><a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/product&amp;product_id=43">perspiciatis unde omnis</a></h4>
										<div class="price">
											<span class="price-new">$8.00</span> <span class="price-old">$14.00</span> <span class="price-tax">Ex Tax: $5.00</span>
										</div>
									</div>
									<div class="button-group">
										<button class="btn-cart" onclick="cart.add('43');" title="Add to Cart" type="button"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to
										Cart</span></button> <button class="btn-wishlist" onclick="wishlist.add('43');" title="Add to Wish List" type="button"><i class="fa fa-heart"></i></button> <button class="btn-compare"
										onclick="compare.add('43');" title="Add to compare" type="button"><i class="fa fa-exchange"></i></button> <button class="btn-quickview" onclick=
										"tt_quickview.ajaxView('http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/product&amp;product_id=43')" title="Quick View" type="button"><i class=
										"fa fa-eye"></i></button>
									</div>
								</div>
							</div>
						</div>
						<div class="product-layouts">
							<div class="product-thumb transition">
								<div class="image">
									<a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/product&amp;product_id=40"><img alt="voluptate velit esse" class="image_thumb" src=
									"http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/image/cache/catalog/demo/product/19-70x91.jpg" title="voluptate velit esse"> <img alt="voluptate velit esse" class=
									"image_thumb_swap" src="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/image/cache/catalog/demo/product/11-70x91.jpg" title="voluptate velit esse"></a>
									<div class="sale-icon">
										Sale
									</div><span class="percent">-11%</span>
								</div>
								<div class="thumb-description">
									<div class="caption">
										<h4><a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/product&amp;product_id=40">voluptate velit esse</a></h4>
										<div class="price">
											<span class="price-new">$110.00</span> <span class="price-old">$123.20</span> <span class="price-tax">Ex Tax: $90.00</span>
										</div>
									</div>
									<div class="button-group">
										<button class="btn-cart" onclick="cart.add('40');" title="Add to Cart" type="button"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to
										Cart</span></button> <button class="btn-wishlist" onclick="wishlist.add('40');" title="Add to Wish List" type="button"><i class="fa fa-heart"></i></button> <button class="btn-compare"
										onclick="compare.add('40');" title="Add to compare" type="button"><i class="fa fa-exchange"></i></button> <button class="btn-quickview" onclick=
										"tt_quickview.ajaxView('http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/product&amp;product_id=40')" title="Quick View" type="button"><i class=
										"fa fa-eye"></i></button>
									</div>
								</div>
							</div>
						</div>
						<div class="product-layouts">
							<div class="product-thumb transition">
								<div class="image">
									<a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/product&amp;product_id=42"><img alt="aliquam quaerat voluptatem" class="image_thumb" src=
									"http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/image/cache/catalog/demo/product/01-70x91.jpg" title="aliquam quaerat voluptatem"> <img alt="aliquam quaerat voluptatem" class=
									"image_thumb_swap" src="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/image/cache/catalog/demo/product/20-70x91.jpg" title="aliquam quaerat voluptatem"></a>
								</div>
								<div class="thumb-description">
									<div class="caption">
										<h4><a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/product&amp;product_id=42">aliquam quaerat voluptatem</a></h4>
										<div class="rating">
											<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class=
											"fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span> <span class="fa fa-stack"><i class=
											"fa fa-star off fa-stack-2x"></i></span>
										</div>
										<div class="price">
											$122.00 <span class="price-tax">Ex Tax: $100.00</span>
										</div>
									</div>
									<div class="button-group">
										<button class="btn-cart" onclick="cart.add('42');" title="Add to Cart" type="button"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to
										Cart</span></button> <button class="btn-wishlist" onclick="wishlist.add('42');" title="Add to Wish List" type="button"><i class="fa fa-heart"></i></button> <button class="btn-compare"
										onclick="compare.add('42');" title="Add to compare" type="button"><i class="fa fa-exchange"></i></button> <button class="btn-quickview" onclick=
										"tt_quickview.ajaxView('http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/product&amp;product_id=42')" title="Quick View" type="button"><i class=
										"fa fa-eye"></i></button>
									</div>
								</div>
							</div>
						</div>
						<div class="product-layouts">
							<div class="product-thumb transition">
								<div class="image">
									<a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/product&amp;product_id=30"><img alt="aliquam quaerat voluptem" class="image_thumb" src=
									"http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/image/cache/catalog/demo/product/02-70x91.jpg" title="aliquam quaerat voluptem"> <img alt="aliquam quaerat voluptem" class=
									"image_thumb_swap" src="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/image/cache/catalog/demo/product/01-70x91.jpg" title="aliquam quaerat voluptem"></a>
								</div>
								<div class="thumb-description">
									<div class="caption">
										<h4><a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/product&amp;product_id=30">aliquam quaerat voluptem</a></h4>
										<div class="price">
											$122.00 <span class="price-tax">Ex Tax: $100.00</span>
										</div>
									</div>
									<div class="button-group">
										<button class="btn-cart" onclick="cart.add('30');" title="Add to Cart" type="button"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to
										Cart</span></button> <button class="btn-wishlist" onclick="wishlist.add('30');" title="Add to Wish List" type="button"><i class="fa fa-heart"></i></button> <button class="btn-compare"
										onclick="compare.add('30');" title="Add to compare" type="button"><i class="fa fa-exchange"></i></button> <button class="btn-quickview" onclick=
										"tt_quickview.ajaxView('http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/product&amp;product_id=30')" title="Quick View" type="button"><i class=
										"fa fa-eye"></i></button>
									</div>
								</div>
							</div>
						</div>
						<div class="product-layouts">
							<div class="product-thumb transition">
								<div class="image">
									<a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/product&amp;product_id=28"><img alt="aspetur autodit autfugit" class="image_thumb" src=
									"http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/image/cache/catalog/demo/product/04-70x91.jpg" title="aspetur autodit autfugit"> <img alt="aspetur autodit autfugit" class=
									"image_thumb_swap" src="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/image/cache/catalog/demo/product/05-70x91.jpg" title="aspetur autodit autfugit"></a>
								</div>
								<div class="thumb-description">
									<div class="caption">
										<h4><a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/product&amp;product_id=28">aspetur autodit autfugit</a></h4>
										<div class="price">
											$122.00 <span class="price-tax">Ex Tax: $100.00</span>
										</div>
									</div>
									<div class="button-group">
										<button class="btn-cart" onclick="cart.add('28');" title="Add to Cart" type="button"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to
										Cart</span></button> <button class="btn-wishlist" onclick="wishlist.add('28');" title="Add to Wish List" type="button"><i class="fa fa-heart"></i></button> <button class="btn-compare"
										onclick="compare.add('28');" title="Add to compare" type="button"><i class="fa fa-exchange"></i></button> <button class="btn-quickview" onclick=
										"tt_quickview.ajaxView('http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/product&amp;product_id=28')" title="Quick View" type="button"><i class=
										"fa fa-eye"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="sidebar panel panel-default information-list">
					<div class="panel-heading">
						Information
					</div>
					<div class="list-group">
						<a class="list-group-item" href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=information/information&amp;information_id=4">About Us</a> <a class="list-group-item"
						href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=information/information&amp;information_id=6">Delivery Information</a> <a class="list-group-item" href=
						"http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=information/information&amp;information_id=3">Privacy Policy</a> <a class="list-group-item" href=
						"http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=information/information&amp;information_id=5">Terms &amp; Conditions</a> <a class="list-group-item" href=
						"http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=information/contact">Contact Us</a> <a class="list-group-item" href=
						"http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=information/sitemap">Site Map</a>
					</div>
				</div>
			</aside> -->
			<div class="col-sm-9" id="content">
				<h1 class="page-title">aliquam quaerat voluptatem</h1><!-- Product row START -->
				<div class="row">
					<div class="product-block">
						<div class="col-sm-5 product-images">
							<!-- Product Image thumbnails START -->
							<div class="thumbnails">
								<div class="product-image">
									<a class="thumbnail" title="aliquam quaerat voluptatem"><img alt="aliquam quaerat voluptatem" data-zoom-image=
									"http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/image/cache/catalog/demo/product/01-800x1040.jpg" src=
									"http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/image/cache/catalog/demo/product/01-570x741.jpg" title="aliquam quaerat voluptatem"></a>
								</div>
								<div class="additional-images-container">
									<div class="additional-images">
										<div class="image-additional"><img alt="aliquam quaerat voluptatem" data-image="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/image/cache/catalog/demo/product/20-570x741.jpg"
										data-zoom-image="" src="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/image/cache/catalog/demo/product/20-90x110.jpg" title="aliquam quaerat voluptatem"></div>
										<div class="image-additional"><img alt="aliquam quaerat voluptatem" data-image="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/image/cache/catalog/demo/product/05-570x741.jpg"
										data-zoom-image="" src="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/image/cache/catalog/demo/product/05-90x110.jpg" title="aliquam quaerat voluptatem"></div>
										<div class="image-additional"><img alt="aliquam quaerat voluptatem" data-image="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/image/cache/catalog/demo/product/04-570x741.jpg"
										data-zoom-image="" src="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/image/cache/catalog/demo/product/04-90x110.jpg" title="aliquam quaerat voluptatem"></div>
										<div class="image-additional"><img alt="aliquam quaerat voluptatem" data-image="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/image/cache/catalog/demo/product/03-570x741.jpg"
										data-zoom-image="" src="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/image/cache/catalog/demo/product/03-90x110.jpg" title="aliquam quaerat voluptatem"></div>
										<div class="image-additional"><img alt="aliquam quaerat voluptatem" data-image="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/image/cache/catalog/demo/product/02-570x741.jpg"
										data-zoom-image="" src="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/image/cache/catalog/demo/product/02-90x110.jpg" title="aliquam quaerat voluptatem"></div>
									</div>
								</div><!-- Product Image thumbnails END -->
							</div>
						</div>
						<script type="text/javascript">
						$(".additional-images").owlCarousel({
						items: 3,
						itemsDesktop: [1199,2],
						itemsDesktopSmall: [991,2],
						itemsTablet: [767,3],
						itemsMobile: [480,2],
						autoPlay: false,
						navigation: true,
						pagination: false
						});

						// Custom Navigation Events
						$(".additional-next").click(function(){
						$(".additional-images").trigger('owl.next');
						})
						$(".additional-prev").click(function(){
						$(".additional-images").trigger('owl.prev');
						})
						$(".additional-images-container .customNavigation").addClass('owl-navigation');

						</script>
						<div class="col-sm-7 product-details">
							<h1 class="product-name">aliquam quaerat voluptatem</h1>
							<table class="product-info">
								<tr>
									<td>Brands</td>
									<td class="product-info-value">
										<a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/manufacturer/info&amp;manufacturer_id=8">Apple</a>
									</td>
								</tr>
								<tr>
									<td>Product Code:</td>
									<td class="product-info-value">Product 15</td>
								</tr>
								<tr>
									<td>Reward Points:</td>
									<td class="product-info-value">100</td>
								</tr>
								<tr>
									<td>Availability:</td>
									<td class="product-info-value">In Stock</td>
								</tr>
							</table><!-- Product Rating START -->
							<div class="rating">
								<div class="product-rating">
									<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class=
									"fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star off fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star off fa-stack-1x"></i></span>
								</div><a class="product-total-review" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;"><i class="fa fa-comment"></i>1 reviews</a> <a class=
								"product-write-review" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;"><i class="fa fa-pencil"></i>Write a review</a>
							</div><!-- Product Rating END -->
							<ul class="list-unstyled product-price">
								<li>
									<h2>$122.00</h2>
								</li>
								<li class="product-tax">Ex Tax: $100.00</li>
								<li class="product-reward-points">Price in reward points: 400</li>
								<li>
									<ul class="product-discounts">
										<li>10 or more $107.60</li>
										<li>20 or more $94.40</li>
										<li>30 or more $81.20</li>
									</ul>
								</li>
							</ul><!-- Product Options START -->
							<div class="product-options" id="product">
								<h3>Available Options</h3>
								<div class="form-group required">
									<label class="control-label">Radio</label>
									<div id="input-option218">
										<div class="radio">
											<label><input name="option[218]" type="radio" value="5"> Small (+$12.00)</label>
										</div>
										<div class="radio">
											<label><input name="option[218]" type="radio" value="6"> Medium (+$24.00)</label>
										</div>
										<div class="radio">
											<label><input name="option[218]" type="radio" value="7"> Large (+$36.00)</label>
										</div>
									</div>
								</div>
								<div class="form-group required">
									<label class="control-label">Checkbox</label>
									<div id="input-option223">
										<div class="checkbox">
											<label><input name="option[223][]" type="checkbox" value="8"> Checkbox 1 (+$12.00)</label>
										</div>
										<div class="checkbox">
											<label><input name="option[223][]" type="checkbox" value="9"> Checkbox 2 (+$24.00)</label>
										</div>
										<div class="checkbox">
											<label><input name="option[223][]" type="checkbox" value="10"> Checkbox 3 (+$36.00)</label>
										</div>
										<div class="checkbox">
											<label><input name="option[223][]" type="checkbox" value="11"> Checkbox 4 (+$48.00)</label>
										</div>
									</div>
								</div>
								<div class="form-group required">
									<label class="control-label" for="input-option208">Text</label> <input class="form-control" id="input-option208" name="option[208]" placeholder="Text" type="text" value="test">
								</div>
								<div class="form-group required">
									<label class="control-label" for="input-option217">Select</label> <select class="form-control" id="input-option217" name="option[217]">
										<option value="">
											--- Please Select ---
										</option>
										<option value="4">
											Red (+$4.80)
										</option>
										<option value="3">
											Blue (+$3.60)
										</option>
										<option value="1">
											Green (+$1.20)
										</option>
										<option value="2">
											Yellow (+$2.40)
										</option>
									</select>
								</div>
								<div class="form-group required">
									<label class="control-label" for="input-option209">Textarea</label> 
									<textarea class="form-control" id="input-option209" name="option[209]" placeholder="Textarea" rows="5"></textarea>
								</div>
								<div class="form-group required">
									<label class="control-label">File</label> <button class="btn btn-default btn-block" data-loading-text="Loading..." id="button-upload222" type="button"><i class="fa fa-upload"></i> Upload
									File</button> <input id="input-option222" name="option[222]" type="hidden" value="">
								</div>
								<div class="form-group required">
									<label class="control-label" for="input-option219">Date</label>
									<div class="input-group date">
										<input class="form-control" data-date-format="YYYY-MM-DD" id="input-option219" name="option[219]" type="text" value="2011-02-20"> <span class="input-group-btn"><button class=
										"btn btn-default" type="button"><span class="input-group-btn"><i class="fa fa-calendar"></i></span></button></span>
									</div>
								</div>
								<div class="form-group required">
									<label class="control-label" for="input-option221">Time</label>
									<div class="input-group time">
										<input class="form-control" data-date-format="HH:mm" id="input-option221" name="option[221]" type="text" value="22:25"> <span class="input-group-btn"><button class="btn btn-default" type=
										"button"><span class="input-group-btn"><i class="fa fa-calendar"></i></span></button></span>
									</div>
								</div>
								<div class="form-group required">
									<label class="control-label" for="input-option220">Date &amp; Time</label>
									<div class="input-group datetime">
										<input class="form-control" data-date-format="YYYY-MM-DD HH:mm" id="input-option220" name="option[220]" type="text" value="2011-02-20 22:25"> <span class="input-group-btn"><button class=
										"btn btn-default" type="button"><span class="input-group-btn"><i class="fa fa-calendar"></i></span></button></span>
									</div>
								</div>
								<div class="form-group product-quantity">
									<label class="control-label" for="input-quantity">Qty</label> <input class="form-control" id="input-quantity" name="quantity" size="2" type="text" value="2"> <input name="product_id" type=
									"hidden" value="42"> <button class="btn btn-primary btn-lg btn-block" data-loading-text="Loading..." id="button-cart" type="button">Add to Cart</button>
								</div>
								<div class="alert alert-info">
									<i class="fa fa-info-circle"></i> This product has a minimum quantity of 2
								</div>
							</div><!-- Product Options END -->
							<!-- Product Wishlist Compare START -->
							<div class="btn-group">
								<button class="btn btn-default" onclick="wishlist.add('42');" title="Add to Wish List" type="button"><i class="fa fa-heart"></i> Add to Wish List</button> <button class="btn btn-default"
								onclick="compare.add('42');" title="Add to compare" type="button"><i class="fa fa-exchange"></i> Add to compare</button>
							</div><!-- Product Wishlist Compare END -->
							<!-- AddThis Button BEGIN -->
							<div class="addthis_toolbox addthis_default_style" data-url="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/product&amp;product_id=42">
								<a class="addthis_button_facebook_like"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_pinterest_pinit"></a> <a class="addthis_counter addthis_pill_style"></a>
							</div>
							<script src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e" type="text/javascript">
							</script> <!-- AddThis Button END -->
						</div><!-- Product option details END -->
					</div>
				</div><!-- Product row END -->
				<!-- Product nav Tabs START -->
				<div class="col-sm-12 product-tabs">
					<ul class="nav nav-tabs">
						<li class="active">
							<a data-toggle="tab" href="#tab-description">Description</a>
						</li>
						<li>
							<a data-toggle="tab" href="#tab-specification">Specification</a>
						</li>
						<li class="li-tab-review">
							<a data-toggle="tab" href="#tab-review">Reviews (1)</a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab-description">
							<p><font face="helvetica,geneva,arial" size="2"><font face="Helvetica" size="2">The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600 pixel resolution. Designed specifically for
							the creative professional, this display provides more space for easier access to all the tools and palettes needed to edit, format and composite your work. Combine this display with a Mac
							Pro, MacBook Pro, or PowerMac G5 and there's no limit to what you can achieve.<br>
							<br></font> <font face="Helvetica" size="2">The Cinema HD features an active-matrix liquid crystal display that produces flicker-free images that deliver twice the brightness, twice the
							sharpness and twice the contrast ratio of a typical CRT display. Unlike other flat panels, it's designed with a pure digital interface to deliver distortion-free images that never need
							adjusting. With over 4 million digital pixels, the display is uniquely suited for scientific and technical applications such as visualizing molecular structures or analyzing geological
							data.<br>
							<br></font> <font face="Helvetica" size="2">Offering accurate, brilliant color performance, the Cinema HD delivers up to 16.7 million colors across a wide gamut allowing you to see subtle
							nuances between colors from soft pastels to rich jewel tones. A wide viewing angle ensures uniform color from edge to edge. Apple's ColorSync technology allows you to create custom profiles
							to maintain consistent color onscreen and in print. The result: You can confidently use this display in all your color-critical applications.<br>
							<br></font> <font face="Helvetica" size="2">Housed in a new aluminum design, the display has a very thin bezel that enhances visual accuracy. Each display features two FireWire 400 ports and
							two USB 2.0 ports, making attachment of desktop peripherals, such as iSight, iPod, digital and still cameras, hard drives, printers and scanners, even more accessible and convenient. Taking
							advantage of the much thinner and lighter footprint of an LCD, the new displays support the VESA (Video Electronics Standards Association) mounting interface standard. Customers with the
							optional Cinema Display VESA Mount Adapter kit gain the flexibility to mount their display in locations most appropriate for their work environment.<br>
							<br></font> <font face="Helvetica" size="2">The Cinema HD features a single cable design with elegant breakout for the USB 2.0, FireWire 400 and a pure digital connection using the industry
							standard Digital Video Interface (DVI) interface. The DVI connection allows for a direct pure-digital connection.<br></font></font></p>
							<h3>Features:</h3>
							<p>Unrivaled display performance</p>
							<ul>
								<li>30-inch (viewable) active-matrix liquid crystal display provides breathtaking image quality and vivid, richly saturated color.</li>
								<li>Support for 2560-by-1600 pixel resolution for display of high definition still and video imagery.</li>
								<li>Wide-format design for simultaneous display of two full pages of text and graphics.</li>
								<li>Industry standard DVI connector for direct attachment to Mac- and Windows-based desktops and notebooks</li>
								<li>Incredibly wide (170 degree) horizontal and vertical viewing angle for maximum visibility and color performance.</li>
								<li>Lightning-fast pixel response for full-motion digital video playback.</li>
								<li>Support for 16.7 million saturated colors, for use in all graphics-intensive applications.</li>
							</ul>
							<p>Simple setup and operation</p>
							<ul>
								<li>Single cable with elegant breakout for connection to DVI, USB and FireWire ports</li>
								<li>Built-in two-port USB 2.0 hub for easy connection of desktop peripheral devices.</li>
								<li>Two FireWire 400 ports to support iSight and other desktop peripherals</li>
							</ul>
							<p>Sleek, elegant design</p>
							<ul>
								<li>Huge virtual workspace, very small footprint.</li>
								<li>Narrow Bezel design to minimize visual impact of using dual displays</li>
								<li>Unique hinge design for effortless adjustment</li>
								<li>Support for VESA mounting solutions (Apple Cinema Display VESA Mount Adapter sold separately)</li>
							</ul>
							<h3>Technical specifications</h3>
							<p><b>Screen size (diagonal viewable image size)</b></p>
							<ul>
								<li>Apple Cinema HD Display: 30 inches (29.7-inch viewable)</li>
							</ul>
							<p><b>Screen type</b></p>
							<ul>
								<li>Thin film transistor (TFT) active-matrix liquid crystal display (AMLCD)</li>
							</ul>
							<p><b>Resolutions</b></p>
							<ul>
								<li>2560 x 1600 pixels (optimum resolution)</li>
								<li>2048 x 1280</li>
								<li>1920 x 1200</li>
								<li>1280 x 800</li>
								<li>1024 x 640</li>
							</ul>
							<p><b>Display colors (maximum)</b></p>
							<ul>
								<li>16.7 million</li>
							</ul>
							<p><b>Viewing angle (typical)</b></p>
							<ul>
								<li>170° horizontal; 170° vertical</li>
							</ul>
							<p><b>Brightness (typical)</b></p>
							<ul>
								<li>30-inch Cinema HD Display: 400 cd/m2</li>
							</ul>
							<p><b>Contrast ratio (typical)</b></p>
							<ul>
								<li>700:1</li>
							</ul>
							<p><b>Response time (typical)</b></p>
							<ul>
								<li>16 ms</li>
							</ul>
							<p><b>Pixel pitch</b></p>
							<ul>
								<li>30-inch Cinema HD Display: 0.250 mm</li>
							</ul>
							<p><b>Screen treatment</b></p>
							<ul>
								<li>Antiglare hardcoat</li>
							</ul>
							<p><b>User controls (hardware and software)</b></p>
							<ul>
								<li>Display Power,</li>
								<li>System sleep, wake</li>
								<li>Brightness</li>
								<li>Monitor tilt</li>
							</ul>
							<p><b>Connectors and cables</b><br>
							Cable</p>
							<ul>
								<li>DVI (Digital Visual Interface)</li>
								<li>FireWire 400</li>
								<li>USB 2.0</li>
								<li>DC power (24 V)</li>
							</ul>
							<p>Connectors</p>
							<ul>
								<li>Two-port, self-powered USB 2.0 hub</li>
								<li>Two FireWire 400 ports</li>
								<li>Kensington security port</li>
							</ul>
							<p><b>VESA mount adapter</b><br>
							Requires optional Cinema Display VESA Mount Adapter (M9649G/A)</p>
							<ul>
								<li>Compatible with VESA FDMI (MIS-D, 100, C) compliant mounting solutions</li>
							</ul>
							<p><b>Electrical requirements</b></p>
							<ul>
								<li>Input voltage: 100-240 VAC 50-60Hz</li>
								<li>Maximum power when operating: 150W</li>
								<li>Energy saver mode: 3W or less</li>
							</ul>
							<p><b>Environmental requirements</b></p>
							<ul>
								<li>Operating temperature: 50° to 95° F (10° to 35° C)</li>
								<li>Storage temperature: -40° to 116° F (-40° to 47° C)</li>
								<li>Operating humidity: 20% to 80% noncondensing</li>
								<li>Maximum operating altitude: 10,000 feet</li>
							</ul>
							<p><b>Agency approvals</b></p>
							<ul>
								<li>FCC Part 15 Class B</li>
								<li>EN55022 Class B</li>
								<li>EN55024</li>
								<li>VCCI Class B</li>
								<li>AS/NZS 3548 Class B</li>
								<li>CNS 13438 Class B</li>
								<li>ICES-003 Class B</li>
								<li>ISO 13406 part 2</li>
								<li>MPR II</li>
								<li>IEC 60950</li>
								<li>UL 60950</li>
								<li>CSA 60950</li>
								<li>EN60950</li>
								<li>ENERGY STAR</li>
								<li>TCO '03</li>
							</ul>
							<p><b>Size and weight</b><br>
							30-inch Apple Cinema HD Display</p>
							<ul>
								<li>Height: 21.3 inches (54.3 cm)</li>
								<li>Width: 27.2 inches (68.8 cm)</li>
								<li>Depth: 8.46 inches (21.5 cm)</li>
								<li>Weight: 27.5 pounds (12.5 kg)</li>
							</ul>
							<p><b>System Requirements</b></p>
							<ul>
								<li>Mac Pro, all graphic options</li>
								<li>MacBook Pro</li>
								<li>Power Mac G5 (PCI-X) with ATI Radeon 9650 or better or NVIDIA GeForce 6800 GT DDL or better</li>
								<li>Power Mac G5 (PCI Express), all graphics options</li>
								<li>PowerBook G4 with dual-link DVI support</li>
								<li>Windows PC and graphics card that supports DVI ports with dual-link digital bandwidth and VESA DDC standard for plug-and-play setup</li>
							</ul>
						</div>
						<div class="tab-pane" id="tab-specification">
							<table class="table table-bordered">
								<thead>
									<tr>
										<td colspan="2"><strong>Processor</strong></td>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Clockspeed</td>
										<td>100mhz</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="tab-pane" id="tab-review">
							<form class="form-horizontal" id="form-review" name="form-review">
								<div id="review"></div>
								<h2>Write a review</h2>
								<div class="form-group required">
									<div class="col-sm-12">
										<label class="control-label" for="input-name">Name</label> <input class="form-control" id="input-name" name="name" type="text" value="">
									</div>
								</div>
								<div class="form-group required">
									<div class="col-sm-12">
										<label class="control-label" for="input-review">Your Review</label> 
										<textarea class="form-control" id="input-review" name="text" rows="5"></textarea>
										<div class="help-block">
											<span class="text-danger">Note:</span> HTML is not translated!
										</div>
									</div>
								</div>
								<div class="form-group required">
									<div class="col-sm-12">
										<label class="control-label">Rating</label> &nbsp;&nbsp;&nbsp; Bad&nbsp; <input name="rating" type="radio" value="1"> &nbsp; <input name="rating" type="radio" value="2"> &nbsp;
										<input name="rating" type="radio" value="3"> &nbsp; <input name="rating" type="radio" value="4"> &nbsp; <input name="rating" type="radio" value="5"> &nbsp;Good
									</div>
								</div>
								<div class="buttons clearfix">
									<div class="pull-right">
										<button class="btn btn-primary" data-loading-text="Loading..." id="button-review" type="button">Continue</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div><!-- Product tab END -->
				<!-- Related products START -->
				<div class="related-carousel products-list">
					<div class="box-heading">
						<h3>Related Products</h3>
					</div>
					<div class="related-items products-carousel row">
						<div class="product-layouts">
							<div class="product-thumb transition">
								<div class="image">
									<a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/product&amp;product_id=28"><img alt="aspetur autodit autfugit" class="img-responsive" src=
									"http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/image/cache/catalog/demo/product/04-270x351.jpg" title="aspetur autodit autfugit"></a>
								</div>
								<div class="thumb-description">
									<div class="caption">
										<h4><a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/product&amp;product_id=28">aspetur autodit autfugit</a></h4>
										<p class="description">HTC Touch - in High Definition. Watch music videos and streaming content in awe-inspiring high defin..</p>
										<div class="price">
											$122.00 <span class="price-tax">Ex Tax: $100.00</span>
										</div>
									</div>
									<div class="button-group">
										<button class="btn-cart" onclick="cart.add('28','1');" title="Add to Cart" type="button"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to
										Cart</span></button> <button class="btn-wishlist" onclick="wishlist.add('28');" title="Add to Wish List"><i class="fa fa-heart"></i> <span title="Add to Wish List">Add to Wish
										List</span></button> <button class="btn-compare" onclick="compare.add('28');" title="Add to compare"><i class="fa fa-exchange"></i> <span title="Add to compare">Add to
										compare</span></button> <button class="btn-quickview" onclick=
										"tt_quickview.ajaxView('http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/product&amp;product_id=28')" title="Quick View" type="button"><i class=
										"fa fa-eye"></i> <span title="Quick View">Quick View</span></button>
									</div>
								</div>
							</div>
						</div>
						<div class="product-layouts">
							<div class="product-thumb transition">
								<div class="image">
									<a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/product&amp;product_id=30"><img alt="aliquam quaerat voluptem" class="img-responsive" src=
									"http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/image/cache/catalog/demo/product/02-270x351.jpg" title="aliquam quaerat voluptem"></a>
								</div>
								<div class="thumb-description">
									<div class="caption">
										<h4><a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/product&amp;product_id=30">aliquam quaerat voluptem</a></h4>
										<p class="description">Canon's press material for the EOS 5D states that it 'defines (a) new D-SLR category', while we're n..</p>
										<div class="price">
											$122.00 <span class="price-tax">Ex Tax: $100.00</span>
										</div>
									</div>
									<div class="button-group">
										<button class="btn-cart" onclick="cart.add('30','1');" title="Add to Cart" type="button"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to
										Cart</span></button> <button class="btn-wishlist" onclick="wishlist.add('30');" title="Add to Wish List"><i class="fa fa-heart"></i> <span title="Add to Wish List">Add to Wish
										List</span></button> <button class="btn-compare" onclick="compare.add('30');" title="Add to compare"><i class="fa fa-exchange"></i> <span title="Add to compare">Add to
										compare</span></button> <button class="btn-quickview" onclick=
										"tt_quickview.ajaxView('http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/product&amp;product_id=30')" title="Quick View" type="button"><i class=
										"fa fa-eye"></i> <span title="Quick View">Quick View</span></button>
									</div>
								</div>
							</div>
						</div>
						<div class="product-layouts">
							<div class="product-thumb transition">
								<div class="image">
									<a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/product&amp;product_id=36"><img alt="neque porro quisquam" class="img-responsive" src=
									"http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/image/cache/catalog/demo/product/06-270x351.jpg" title="neque porro quisquam"></a>
								</div>
								<div class="thumb-description">
									<div class="caption">
										<h4><a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/product&amp;product_id=36">neque porro quisquam</a></h4>
										<p class="description">Video in your pocket. Its the small iPod with one very big idea: video. The worlds most popula..</p>
										<div class="price">
											$122.00 <span class="price-tax">Ex Tax: $100.00</span>
										</div>
									</div>
									<div class="button-group">
										<button class="btn-cart" onclick="cart.add('36','1');" title="Add to Cart" type="button"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to
										Cart</span></button> <button class="btn-wishlist" onclick="wishlist.add('36');" title="Add to Wish List"><i class="fa fa-heart"></i> <span title="Add to Wish List">Add to Wish
										List</span></button> <button class="btn-compare" onclick="compare.add('36');" title="Add to compare"><i class="fa fa-exchange"></i> <span title="Add to compare">Add to
										compare</span></button> <button class="btn-quickview" onclick=
										"tt_quickview.ajaxView('http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/product&amp;product_id=36')" title="Quick View" type="button"><i class=
										"fa fa-eye"></i> <span title="Quick View">Quick View</span></button>
									</div>
								</div>
							</div>
						</div>
						<div class="product-layouts">
							<div class="product-thumb transition">
								<div class="image">
									<a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/product&amp;product_id=40"><img alt="voluptate velit esse" class="img-responsive" src=
									"http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/image/cache/catalog/demo/product/19-270x351.jpg" title="voluptate velit esse"></a>
									<div class="sale-icon">
										Sale
									</div><span class="percent">-11%</span>
								</div>
								<div class="thumb-description">
									<div class="caption">
										<h4><a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/product&amp;product_id=40">voluptate velit esse</a></h4>
										<p class="description">iPhone is a revolutionary new mobile phone that allows you to make a call by simply tapping a name o..</p>
										<div class="price">
											<span class="price-new">$110.00</span> <span class="price-old">$123.20</span> <span class="price-tax">Ex Tax: $90.00</span>
										</div>
									</div>
									<div class="button-group">
										<button class="btn-cart" onclick="cart.add('40','1');" title="Add to Cart" type="button"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to
										Cart</span></button> <button class="btn-wishlist" onclick="wishlist.add('40');" title="Add to Wish List"><i class="fa fa-heart"></i> <span title="Add to Wish List">Add to Wish
										List</span></button> <button class="btn-compare" onclick="compare.add('40');" title="Add to compare"><i class="fa fa-exchange"></i> <span title="Add to compare">Add to
										compare</span></button> <button class="btn-quickview" onclick=
										"tt_quickview.ajaxView('http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/product&amp;product_id=40')" title="Quick View" type="button"><i class=
										"fa fa-eye"></i> <span title="Quick View">Quick View</span></button>
									</div>
								</div>
							</div>
						</div>
						<div class="product-layouts">
							<div class="product-thumb transition">
								<div class="image">
									<a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/product&amp;product_id=41"><img alt="magni dolores eosquies" class="img-responsive" src=
									"http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/image/cache/catalog/demo/product/05-270x351.jpg" title="magni dolores eosquies"></a>
								</div>
								<div class="thumb-description">
									<div class="caption">
										<h4><a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/product&amp;product_id=41">magni dolores eosquies</a></h4>
										<div class="rating">
											<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class=
											"fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
										</div>
										<p class="description">Just when you thought iMac had everything, now there´s even more. More powerful Intel Core 2 Duo pro..</p>
										<div class="price">
											$122.00 <span class="price-tax">Ex Tax: $100.00</span>
										</div>
									</div>
									<div class="button-group">
										<button class="btn-cart" onclick="cart.add('41','1');" title="Add to Cart" type="button"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to
										Cart</span></button> <button class="btn-wishlist" onclick="wishlist.add('41');" title="Add to Wish List"><i class="fa fa-heart"></i> <span title="Add to Wish List">Add to Wish
										List</span></button> <button class="btn-compare" onclick="compare.add('41');" title="Add to compare"><i class="fa fa-exchange"></i> <span title="Add to compare">Add to
										compare</span></button> <button class="btn-quickview" onclick=
										"tt_quickview.ajaxView('http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/product&amp;product_id=41')" title="Quick View" type="button"><i class=
										"fa fa-eye"></i> <span title="Quick View">Quick View</span></button>
									</div>
								</div>
							</div>
						</div>
						<div class="product-layouts">
							<div class="product-thumb transition">
								<div class="image">
									<a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/product&amp;product_id=42"><img alt="aliquam quaerat voluptatem" class="img-responsive" src=
									"http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/image/cache/catalog/demo/product/01-270x351.jpg" title="aliquam quaerat voluptatem"></a>
								</div>
								<div class="thumb-description">
									<div class="caption">
										<h4><a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/product&amp;product_id=42">aliquam quaerat voluptatem</a></h4>
										<div class="rating">
											<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class=
											"fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span> <span class="fa fa-stack"><i class=
											"fa fa-star off fa-stack-2x"></i></span>
										</div>
										<p class="description">The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600 pixel resolution. Designed speci..</p>
										<div class="price">
											$122.00 <span class="price-tax">Ex Tax: $100.00</span>
										</div>
									</div>
									<div class="button-group">
										<button class="btn-cart" onclick="cart.add('42','2');" title="Add to Cart" type="button"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to
										Cart</span></button> <button class="btn-wishlist" onclick="wishlist.add('42');" title="Add to Wish List"><i class="fa fa-heart"></i> <span title="Add to Wish List">Add to Wish
										List</span></button> <button class="btn-compare" onclick="compare.add('42');" title="Add to compare"><i class="fa fa-exchange"></i> <span title="Add to compare">Add to
										compare</span></button> <button class="btn-quickview" onclick=
										"tt_quickview.ajaxView('http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/product&amp;product_id=42')" title="Quick View" type="button"><i class=
										"fa fa-eye"></i> <span title="Quick View">Quick View</span></button>
									</div>
								</div>
							</div>
						</div>
						<div class="product-layouts">
							<div class="product-thumb transition">
								<div class="image">
									<a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/product&amp;product_id=47"><img alt="aliquam quat voluptatem" class="img-responsive" src=
									"http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/image/cache/catalog/demo/product/03-270x351.jpg" title="aliquam quat voluptatem"></a>
								</div>
								<div class="thumb-description">
									<div class="caption">
										<h4><a href="http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/product&amp;product_id=47">aliquam quat voluptatem</a></h4>
										<p class="description">Stop your co-workers in their tracks with the stunning new 30-inch diagonal HP LP3065 Flat Panel Mon..</p>
										<div class="price">
											$122.00 <span class="price-tax">Ex Tax: $100.00</span>
										</div>
									</div>
									<div class="button-group">
										<button class="btn-cart" onclick="cart.add('47','1');" title="Add to Cart" type="button"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to
										Cart</span></button> <button class="btn-wishlist" onclick="wishlist.add('47');" title="Add to Wish List"><i class="fa fa-heart"></i> <span title="Add to Wish List">Add to Wish
										List</span></button> <button class="btn-compare" onclick="compare.add('47');" title="Add to compare"><i class="fa fa-exchange"></i> <span title="Add to compare">Add to
										compare</span></button> <button class="btn-quickview" onclick=
										"tt_quickview.ajaxView('http://demo.templatetrip.com/Opencart/OPC05/OPC135/OPC01/index.php?route=product/product&amp;product_id=47')" title="Quick View" type="button"><i class=
										"fa fa-eye"></i> <span title="Quick View">Quick View</span></button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- Related products END -->
			</div><!-- id content END -->
		</div>
	</div>	
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