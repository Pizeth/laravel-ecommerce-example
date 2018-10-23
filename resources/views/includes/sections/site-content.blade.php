<section class="site-content">
    <div class="container">
        <div class="group-banners en">
            <div class="row">
                <div class="col-12 col-sm-4">
                    <div class="banner-image">
                        <a title="Banner Image" href="http://demo.laravelcommerce.com/shop"><img class="img-fluid" src="{{ asset('img/ecom/banner_1_en.jpg') }}" alt="Banner Image"></a>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="banner-image">
                        <a title="Banner Image" href="http://demo.laravelcommerce.com/shop"><img class="img-fluid" src="{{ asset('img/ecom/banner_2_en.jpg') }}" alt="Banner Image"></a>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="banner-image">
                        <a title="Banner Image" href="http://demo.laravelcommerce.com/shop"><img class="img-fluid" src="{{ asset('img/ecom/banner_3_en.jpg') }}" alt="Banner Image"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="group-banners ar">
            <div class="row">
                <div class="col-12 col-sm-4">
                    <div class="banner-image">
                        <a title="Banner Image" href="http://demo.laravelcommerce.com/shop"><img class="img-fluid" src="{{ asset('img/ecom/banner_1_ar.jpg') }}" alt="Banner Image"></a>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="banner-image">
                        <a title="Banner Image" href="http://demo.laravelcommerce.com/shop"><img class="img-fluid" src="{{ asset('img/ecom/banner_2_ar.jpg') }}" alt="Banner Image"></a>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="banner-image">
                        <a title="Banner Image" href="http://demo.laravelcommerce.com/shop"><img class="img-fluid" src="{{ asset('img/ecom/banner_3_ar.jpg') }}" alt="Banner Image"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- dynamic content -->
        <div class="products-area">
            <div class="row">
                <div class="col-md-12">
                    <div class="nav nav-pills" role="tablist">
                        <a aria-controls="featured" aria-selected="true" class="nav-link nav-item nav-index active" data-toggle="pill" href="#featured" id="featured-tab" role="tab">Top Sales</a> 
                        <a aria-controls="special" aria-selected="false" class="nav-link nav-item nav-index" data-toggle="pill" href="#special" id="special-tab" role="tab">Special</a> 
                        <a aria-controls="liked" aria-selected="false" class="nav-link nav-item nav-index" data-toggle="pill" href="#liked" id="liked-tab" role="tab">Most Liked</a>
                    </div>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="overlay" style="display:none;">
                            <img src="{{ asset('img/ecom/loader.gif') }}">
                        </div>
                        <div aria-labelledby="featured-tab" class="tab-pane fade show active" id="featured" role="tabpanel">
                            <div class="owl-carousel owl_featured" id="owl_featured">
                                @foreach ($products as $product)
                                    <div class="product">
                                        <article>
                                            <div class="thumb"> 
                                                <img class="img-fluid" src="{{ productImage($product->image) }}" alt="{{ $product->name }}">
                                            </div>
                                            <span class="tag text-center">Men's Clothing</span> {{ $product->image }}
                                            <h2 class="title text-center">{{ $product->name }}</h2>
                                            <div class="price text-center">{{ $product->presentPrice() }}</div>
                                            <div class="product-hover">
                                                <div class="icons">
                                                    <div class="icon-liked">
                                                        <span products_id="1" class="far fa-heart  is_liked">
                                                            <span class="badge badge-secondary">8</span>
                                                        </span>
                                                    </div>
                                                    <a href="{{ route('shop.show', $product->slug) }}" class="fa fa-eye"></a>
                                                </div>
                                                <div class="buttons">
                                                    <button class="btn btn-block btn-secondary cart" products_id="1">Add to Cart</button>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                @endforeach
                                <!-- <div class="product">
                                    <article>
                                        <div class="thumb"> 
                                            <img class="img-fluid" src="{{ asset('img/ecom/1502174889.pPOLO2-26314766_standard_v400.jpg') }}" alt="CLASSIC FIT SOFT-TOUCH POLO">
                                        </div>
                                        <span class="tag text-center">Men's Clothing</span>
                                        <h2 class="title text-center">CLASSIC FIT SOFT-TOUCH POLO</h2>
                                        <div class="price text-center">$85</div>
                                        <div class="product-hover">
                                            <div class="icons">
                                                <div class="icon-liked">
                                                    <span products_id="1" class="far fa-heart  is_liked">
                                                        <span class="badge badge-secondary">8</span>
                                                    </span>
                                                </div>
                                                <a href="http://demo.laravelcommerce.com/product-detail/classic-fit-soft-touch-polo" class="fa fa-eye"></a>
                                            </div>
                                            <div class="buttons">
                                                <button class="btn btn-block btn-secondary cart" products_id="1">Add to Cart</button>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="product">
                                    <article>
                                        <div class="thumb"> 
                                            <img class="img-fluid" src="{{ asset('img/ecom/1502181584.pPOLO2-26008953_standard_v400.jpg') }}" alt="STANDARD FIT COTTON POPOVER">
                                        </div>
                                        <span class="tag text-center">Men's Clothing</span>
                                        <h2 class="title text-center">STANDARD FIT COTTON POPOVER</h2>
                                        <div class="price text-center">$125.5</div>
                                        <div class="product-hover">
                                            <div class="icons">
                                                <div class="icon-liked">
                                                    <span products_id="8" class="far fa-heart  is_liked">
                                                        <span class="badge badge-secondary">5</span>
                                                    </span>
                                                </div>
                                                <a href="http://demo.laravelcommerce.com/product-detail/standard-fit-cotton-popover" class="fa fa-eye"></a>
                                            </div>
                                            <div class="buttons">
                                                <button class="btn btn-block btn-secondary cart" products_id="8">Add to Cart</button>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="product">
                                    <article>
                                        <div class="thumb"> 
                                            <img class="img-fluid" src="{{ asset('img/ecom/1502190187.pPOLO2-26315541_standard_v400.jpg') }}" alt="HAMPTON STRAIGHT FIT JEAN">
                                        </div>
                                        <span class="tag text-center">Men's Clothing</span>
                                        <h2 class="title text-center">HAMPTON STRAIGHT FIT JEAN</h2>
                                        <div class="price text-center"> $125</div>
                                        <div class="product-hover">
                                            <div class="icons">
                                                <div class="icon-liked">
                                                    <span products_id="13" class="far fa-heart  is_liked">
                                                        <span class="badge badge-secondary">6</span>
                                                    </span>
                                                </div>
                                                <a href="http://demo.laravelcommerce.com/product-detail/hampton-straight-fit-jean" class="fa fa-eye"></a>
                                            </div>
                                            <div class="buttons">
                                                <button class="btn btn-block btn-secondary cart" products_id="13">Add to Cart</button>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="product">
                                    <article>
                                        <div class="thumb"> 
                                            <img class="img-fluid" src="{{ asset('img/ecom/1502174364.pPOLO2-26314826_standard_v400.jpg') }}" alt="CLASSIC FIT COTTON POLO SHIRT">
                                        </div>
                                        <span class="tag text-center">Men's Clothing</span>
                                        <h2 class="title text-center">CLASSIC FIT COTTON POLO SHIRT</h2>
                                        <div class="price text-center">$85</div>
                                        <div class="product-hover">
                                            <div class="icons">
                                                <div class="icon-liked">
                                                    <span products_id="4" class="far fa-heart  is_liked">
                                                        <span class="badge badge-secondary">4</span>
                                                    </span>
                                                </div>
                                                <a href="http://demo.laravelcommerce.com/product-detail/classic-fit-cotton-polo-shirt" class="fa fa-eye"></a>
                                            </div>
                                            <div class="buttons">
                                                <button class="btn btn-block btn-secondary cart" products_id="4">Add to Cart</button>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="product">
                                    <article>
                                        <div class="thumb"> 
                                            <img class="img-fluid" src="{{ asset('img/ecom/1502366105.pPOLO2-26091049_alternate1_v400.jpg') }}" alt="PLEATED MADRAS SKIRT">
                                        </div>
                                        <span class="tag text-center">Girl's Clothing</span>
                                        <h2 class="title text-center">PLEATED MADRAS SKIRT</h2>
                                        <div class="price text-center">$56.5</div>
                                        <div class="product-hover">
                                            <div class="icons">
                                                <div class="icon-liked">
                                                    <span products_id="77" class="far fa-heart  is_liked">
                                                        <span class="badge badge-secondary">4</span>
                                                    </span>
                                                </div>
                                                <a href="http://demo.laravelcommerce.com/product-detail/pleated-madras-skirt" class="fa fa-eye"></a>
                                            </div>
                                            <div class="buttons">
                                                    <button class="btn btn-block btn-secondary cart" products_id="77">Add to Cart</button>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="product">
                                    <article>
                                        <div class="thumb"> 
                                            <img class="img-fluid" src="{{ asset('img/ecom/1502366686.pPOLO2-25207761_standard_v400.jpg') }}" alt="RUFFLED COTTON CARDIGAN">
                                        </div>
                                        <span class="tag text-center">Girl's Clothing</span>
                                        <h2 class="title text-center">RUFFLED COTTON CARDIGAN</h2>
                                        <div class="price text-center">$49.5</div>
                                        <div class="product-hover">
                                            <div class="icons">
                                                <div class="icon-liked">
                                                    <span products_id="81" class="far fa-heart  is_liked">
                                                        <span class="badge badge-secondary">6</span>
                                                    </span>
                                                </div>
                                                <a href="http://demo.laravelcommerce.com/product-detail/ruffled-cotton-cardigan" class="fa fa-eye"></a>
                                            </div>
                                            <div class="buttons">
                                                <button class="btn btn-block btn-secondary cart" products_id="81">Add to Cart</button>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="product">
                                    <article>
                                        <div class="thumb"> 
                                            <img class="img-fluid" src="{{ asset('img/ecom/1502114036.pPOLO2-26316336_standard_v400.jpg') }}" alt="HAMPTON CLASSIC FIT SHIRT">
                                        </div>
                                        <span class="tag text-center">Men's Clothing</span>
                                        <h2 class="title text-center">HAMPTON CLASSIC FIT SHIRT</h2>
                                        <div class="price text-center">$98.5</div>
                                        <div class="product-hover">
                                            <div class="icons">
                                                <div class="icon-liked">
                                                    <span products_id="2" class="far fa-heart  is_liked">
                                                        <span class="badge badge-secondary">5</span>
                                                    </span>
                                                </div>
                                                <a href="http://demo.laravelcommerce.com/product-detail/hampton-classic-fit-shirt" class="fa fa-eye"></a>
                                            </div>
                                            <div class="buttons">
                                                <button class="btn btn-block btn-secondary cart" products_id="2">Add to Cart</button>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="product">
                                    <article>
                                        <div class="thumb"> 
                                            <img class="img-fluid" src="{{ asset('img/ecom/1502176579.pPOLO2-26316348_standard_v400.jpg') }}" alt="CUSTOM SLIM FIT COTTON SHIRT">
                                        </div>
                                        <span class="tag text-center">Men's Clothing</span>
                                        <h2 class="title text-center">CUSTOM SLIM FIT COTTON SHIRT</h2>
                                        <div class="price text-center">$98.5</div>
                                        <div class="product-hover">
                                            <div class="icons">
                                                <div class="icon-liked">
                                                    <span products_id="5" class="far fa-heart  is_liked">
                                                        <span class="badge badge-secondary">3</span>
                                                    </span>
                                                </div>
                                                <a href="http://demo.laravelcommerce.com/product-detail/custom-slim-fit-cotton-shirt" class="fa fa-eye"></a>
                                            </div>
                                            <div class="buttons">
                                                <button class="btn btn-block btn-secondary cart" products_id="5">Add to Cart</button>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="product">
                                    <article>
                                        <div class="thumb"> 
                                            <img class="img-fluid" src="{{ asset('img/ecom/1502177321.pPOLO2-26314634_standard_v400.jpg') }}" alt="CUSTOM SLIM FIT WEATHERED POLO">
                                        </div>
                                        <span class="tag text-center">Men's Clothing</span>
                                        <h2 class="title text-center">CUSTOM SLIM FIT WEATHERED POLO</h2>
                                        <div class="price text-center">$89.5</div>
                                        <div class="product-hover">
                                            <div class="icons">
                                                <div class="icon-liked">
                                                    <span products_id="6" class="far fa-heart  is_liked">
                                                        <span class="badge badge-secondary">3</span>
                                                    </span>
                                                </div>
                                                <a href="http://demo.laravelcommerce.com/product-detail/custom-slim-fit-weathered-polo" class="fa fa-eye"></a>
                                            </div>
                                            <div class="buttons">
                                                <button class="btn btn-block btn-secondary cart" products_id="6">Add to Cart</button>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="product">
                                    <article>
                                        <div class="thumb"> 
                                            <img class="img-fluid" src="{{ asset('img/ecom/1502180946.pPOLO2-26008917_standard_v400.jpg') }}" alt="STANDARD FIT COTTON SHIRT">
                                        </div>
                                        <span class="tag text-center">Men's Clothing</span>
                                        <h2 class="title text-center">STANDARD FIT COTTON SHIRT</h2>
                                        <div class="price text-center"> $98.5</div>
                                        <div class="product-hover">
                                            <div class="icons">
                                                <div class="icon-liked">
                                                    <span products_id="7" class="far fa-heart  is_liked">
                                                        <span class="badge badge-secondary">1</span>
                                                    </span>
                                                </div>
                                                <a href="http://demo.laravelcommerce.com/product-detail/standard-fit-cotton-shirt" class="fa fa-eye"></a>
                                            </div>
                                            <div class="buttons">
                                                <button class="btn btn-block btn-secondary cart" products_id="7">Add to Cart</button>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="product">
                                    <article>
                                        <div class="thumb"> 
                                            <img class="img-fluid" src="{{ asset('img/ecom/1502182426.pPOLO2-26008935_standard_v400.jpg') }}" alt="STANDARD FIT MADRAS POPOVER">
                                        </div>
                                        <span class="tag text-center">Men's Clothing</span>
                                        <h2 class="title text-center">STANDARD FIT MADRAS POPOVER</h2>
                                        <div class="price text-center">$89.5</div>
                                        <div class="product-hover">
                                            <div class="icons">
                                                <div class="icon-liked">
                                                    <span products_id="9" class="far fa-heart  is_liked">
                                                        <span class="badge badge-secondary">4</span>
                                                    </span>
                                                </div>
                                                <a href="http://demo.laravelcommerce.com/product-detail/standard-fit-madras-popover" class="fa fa-eye"></a>
                                            </div>
                                            <div class="buttons">
                                                <button class="btn btn-block btn-secondary cart" products_id="9">Add to Cart</button>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="product">
                                    <article>
                                        <div class="thumb"> 
                                            <img class="img-fluid" src="{{ asset('img/ecom/1502186978.pPOLO2-26315018_standard_v400.jpg') }}" alt="STANDARD FIT COTTON WORKSHIRT">
                                        </div>
                                        <span class="tag text-center">
                                        Men's Clothing                        </span>
                                        <h2 class="title text-center">STANDARD FIT COTTON WORKSHIRT</h2>
                                        <div class="price text-center">$165</div>
                                        <div class="product-hover">
                                            <div class="icons">
                                                <div class="icon-liked">
                                                    <span products_id="10" class="far fa-heart  is_liked">
                                                        <span class="badge badge-secondary">0</span>
                                                    </span>
                                                </div>
                                                <a href="http://demo.laravelcommerce.com/product-detail/standard-fit-cotton-workshirt" class="fa fa-eye"></a>
                                            </div>
                                            <div class="buttons">
                                                <button class="btn btn-block btn-secondary cart" products_id="10">Add to Cart</button>
                                            </div>
                                        </div>
                                    </article>
                                </div> -->
                                <div class="product last-product">
                                    <article>
                                        <a href="http://demo.laravelcommerce.com/shop?type=topseller" class="buttons">
                                            <span class="fa fa-angle-right"></span>
                                            <span class="btn btn-secondary">View All</span>
                                        </a>
                                    </article>
                                </div>    
                                <!-- <div class="owl-nav">
                                    <div class="owl-prev disabled"><i class="fa fa-angle-left"></i></div>
                                    <div class="owl-next"><i class="fa fa-angle-right"></i></div>
                                </div>
                                <div class="owl-dots">
                                    <div class="owl-dot active"><span></span></div>
                                    <div class="owl-dot"><span></span></div>
                                    <div class="owl-dot"><span></span></div>
                                </div> -->
                            </div>
                            <!-- 1st tab -->
                        </div>
                        <div aria-labelledby="special-tab" class="tab-pane fade" id="special" role="tabpanel">
                            <div class="owl-carousel" id="owl_special">
                                @foreach ($products as $product)
                                    <div class="product">
                                        <article>
                                            <div class="thumb"> 
                                                <img class="img-fluid" src="{{ productImage($product->image) }}" alt="{{ $product->name }}">
                                            </div>
                                            <span class="tag text-center">Men's Clothing</span>
                                            <h2 class="title text-center">{{ $product->name }}</h2>
                                            <div class="price text-center">{{ $product->presentPrice() }}</div>
                                            <div class="product-hover">
                                                <div class="icons">
                                                    <div class="icon-liked">
                                                        <span products_id="1" class="far fa-heart  is_liked">
                                                            <span class="badge badge-secondary">8</span>
                                                        </span>
                                                    </div>
                                                    <a href="{{ route('shop.show', $product->slug) }}" class="fa fa-eye"></a>
                                                </div>
                                                <div class="buttons">
                                                    <button class="btn btn-block btn-secondary cart" products_id="1">Add to Cart</button>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                @endforeach                            
                                <!-- <div class="product">
                                    <article>
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('img/ecom/1502366586.pPOLO2-25834797_standard_v400.jpg') }}" alt="FLAG COMBED COTTON SWEATER">
                                        </div>
                                        <span class="discount-tag">20%</span>                     
                                        <span class="tag text-center">Girl's Clothing</span>
                                        <h2 class="title text-center">FLAG COMBED COTTON SWEATER</h2>
                                        <div class="price text-center">
                                            $125
                                            <span>$99.99</span>
                                        </div>
                                        <div class="product-hover">
                                            <div class="icons">
                                                <div class="icon-liked">
                                                    <span products_id="80" class="far fa-heart  is_liked">
                                                        <span class="badge badge-secondary">3</span>
                                                    </span>
                                                </div>
                                                <a href="http://demo.laravelcommerce.com/product-detail/flag-combed-cotton-sweater" class="fa fa-eye"></a>
                                            </div>
                                            <div class="buttons">
                                                    <button class="btn btn-block btn-secondary cart" products_id="80">Add to Cart</button>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="product">
                                    <article>
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('img/ecom/1502364697.pPOLO2-23643008_standard_v400.jpg') }}" alt="COTTON CHINO BELTED SHIRTDRESS">
                                        </div>
                                        <span class="discount-tag">57%</span>                     
                                        <span class="tag text-center"> Girl's Clothing</span>
                                        <h2 class="title text-center">COTTON CHINO BELTED SHIRTDRESS</h2>
                                        <div class="price text-center">
                                            $55
                                            <span>$23.5</span>
                                        </div>
                                        <div class="product-hover">
                                            <div class="icons">
                                                <div class="icon-liked">
                                                    <span products_id="73" class="far fa-heart  is_liked">
                                                        <span class="badge badge-secondary">4</span>
                                                    </span>
                                                </div>
                                                <a href="http://demo.laravelcommerce.com/product-detail/cotton-chino-belted-shirtdress" class="fa fa-eye"></a>
                                            </div>
                                            <div class="buttons">
                                                <button class="btn btn-block btn-secondary cart" products_id="73">Add to Cart</button>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="product">
                                    <article>
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('img/ecom/1502363119.pPOLO2-25464682_standard_v400.jpg') }}" alt="PROPELL II SNEAKER">
                                        </div>
                                        <span class="discount-tag">46%</span>                     
                                        <span class="tag text-center">Boy's Clothing</span>
                                        <h2 class="title text-center">PROPELL II SNEAKER</h2>
                                        <div class="price text-center">
                                            $45
                                            <span>$23.99</span>
                                        </div>
                                        <div class="product-hover">
                                            <div class="icons">
                                                <div class="icon-liked">
                                                    <span products_id="70" class="far fa-heart  is_liked">
                                                        <span class="badge badge-secondary">4</span>
                                                    </span>
                                                </div>
                                                <a href="http://demo.laravelcommerce.com/product-detail/propell-ii-sneaker" class="fa fa-eye"></a>
                                            </div>
                                            <div class="buttons">
                                                <button class="btn btn-block btn-secondary cart" products_id="70">Add to Cart</button>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="product">
                                    <article>
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('img/ecom/1502362089.pPOLO2-14689748_standard_v400.jpg') }}" alt="POLO I WOOL TWILL SUIT">
                                        </div>
                                        <span class="discount-tag">19%</span>                     
                                        <span class="tag text-center">Boy's Clothing</span>
                                        <h2 class="title text-center">POLO I WOOL TWILL SUIT</h2>
                                        <div class="price text-center">
                                            $550
                                            <span>$445</span>
                                        </div>
                                        <div class="product-hover">
                                            <div class="icons">
                                                <div class="icon-liked">
                                                    <span products_id="67" class="far fa-heart  is_liked">
                                                        <span class="badge badge-secondary">3</span>
                                                    </span>
                                                </div>
                                                <a href="http://demo.laravelcommerce.com/product-detail/polo-i-wool-twill-suit" class="fa fa-eye"></a>
                                            </div>
                                            <div class="buttons">
                                                <button class="btn btn-block btn-secondary cart" products_id="67">Add to Cart</button>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="product">
                                    <article>
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('img/ecom/1502353123.pPOLO2-10531663_standard_v400.jpg') }}" alt="SLIM MOTT-WASH JEAN">
                                        </div>
                                        <span class="discount-tag">47%</span>                     
                                        <span class="tag text-center">Boy's Clothing</span>
                                        <h2 class="title text-center">SLIM MOTT-WASH JEAN</h2>
                                        <div class="price text-center">
                                            $45
                                            <span>$23.5</span>
                                        </div>
                                        <div class="product-hover">
                                            <div class="icons">
                                                <div class="icon-liked">
                                                    <span products_id="65" class="far fa-heart  is_liked">
                                                        <span class="badge badge-secondary">3</span>
                                                    </span>
                                                </div>
                                                <a href="http://demo.laravelcommerce.com/product-detail/slim-mott-wash-jean" class="fa fa-eye"></a>
                                            </div>
                                            <div class="buttons">
                                                <button class="btn btn-block btn-secondary cart" products_id="65">Add to Cart</button>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="product">
                                    <article>
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('img/ecom/1502351882.pPOLO2-24921004_standard_v400.jpg') }}" alt="COTTON MESH WORKSHIRT">
                                        </div>
                                        <span class="discount-tag">59%</span>                     
                                        <span class="tag text-center">Boy's Clothing</span>
                                        <h2 class="title text-center">COTTON MESH WORKSHIRT</h2>
                                        <div class="price text-center">
                                            $55
                                            <span>$22.2</span>
                                        </div>
                                        <div class="product-hover">
                                            <div class="icons">
                                                <div class="icon-liked">
                                                    <span products_id="62" class="far fa-heart  is_liked">
                                                        <span class="badge badge-secondary">3</span>
                                                    </span>
                                                </div>
                                                <a href="http://demo.laravelcommerce.com/product-detail/cotton-mesh-workshirt" class="fa fa-eye"></a>
                                            </div>
                                            <div class="buttons">
                                                <button class="btn btn-block btn-secondary cart" products_id="62">Add to Cart</button>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="product">
                                    <article>
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('img/ecom/1502274870.pPOLO2-25426585_alternate7_v360x480.jpg') }}" alt="RL Bowery Sateen Duvet Cover">
                                        </div>
                                        <span class="discount-tag">4%</span>                     
                                        <span class="tag text-center">Household Merchandises</span>
                                        <h2 class="title text-center">RL Bowery Sateen Duvet Cover</h2>
                                        <div class="price text-center">
                                            $470
                                            <span>$450</span>
                                        </div>
                                        <div class="product-hover">
                                            <div class="icons">
                                                <div class="icon-liked">
                                                    <span products_id="48" class="far fa-heart  is_liked">
                                                        <span class="badge badge-secondary">2</span>
                                                    </span>
                                                </div>
                                                <a href="http://demo.laravelcommerce.com/product-detail/rl-bowery-sateen-duvet-cover" class="fa fa-eye"></a>
                                            </div>
                                            <div class="buttons">
                                                <button class="btn btn-block btn-secondary cart" products_id="48">Add to Cart</button>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="product">
                                    <article>
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('img/ecom/1502268706.pPOLO2-25240665_standard_v400.jpg') }}" alt="RUFFLED FLORAL DRESS &amp; BLOOMER">
                                        </div>
                                        <span class="discount-tag">57%</span>                     
                                        <span class="tag text-center">Baby &amp; Mother</span>
                                        <h2 class="title text-center">RUFFLED FLORAL DRESS &amp; BLOOMER</h2>
                                        <div class="price text-center">
                                            $55.5
                                            <span>$23.55</span>
                                        </div>
                                        <div class="product-hover">
                                            <div class="icons">
                                                <div class="icon-liked">
                                                    <span products_id="44" class="far fa-heart  is_liked">
                                                        <span class="badge badge-secondary">3</span>
                                                    </span>
                                                </div>
                                                <a href="http://demo.laravelcommerce.com/product-detail/ruffled-floral-dress-bloomer" class="fa fa-eye"></a>
                                            </div>
                                            <div class="buttons">
                                                <button class="btn btn-block btn-secondary cart" products_id="44">Add to Cart</button>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="product">
                                    <article>
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('img/ecom/1502268005.pPOLO2-25655666_standard_v400.jpg') }}" alt="STRIPED POLO DRESS &amp; BLOOMER">
                                        </div>
                                        <span class="discount-tag">37%</span>                     
                                        <span class="tag text-center">Baby &amp; Mother</span>
                                        <h2 class="title text-center">STRIPED POLO DRESS &amp; BLOOMER</h2>
                                        <div class="price text-center">
                                            $35
                                            <span>$21.99</span>
                                        </div>
                                        <div class="product-hover">
                                            <div class="icons">
                                                <div class="icon-liked">
                                                    <span products_id="43" class="far fa-heart  is_liked">
                                                        <span class="badge badge-secondary">4</span>
                                                    </span>
                                                </div>
                                                <a href="http://demo.laravelcommerce.com/product-detail/striped-polo-dress-bloomer" class="fa fa-eye"></a>
                                            </div>
                                            <div class="buttons">
                                                <button class="btn btn-block btn-secondary cart" products_id="43">Add to Cart</button>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="product">
                                    <article>
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('img/ecom/1502264917.pPOLO2-21465903_lifestyle_v400.jpg') }}" alt="STRIPED COTTON HENLEY COVERALL">
                                        </div>
                                        <span class="discount-tag">5%</span>                     
                                        <span class="tag text-center">Baby &amp; Mother</span>
                                        <h2 class="title text-center">STRIPED COTTON HENLEY COVERALL</h2>
                                        <div class="price text-center">
                                            $29.5
                                            <span>$27.85</span>
                                        </div>
                                        <div class="product-hover">
                                            <div class="icons">
                                                <div class="icon-liked">
                                                    <span products_id="39" class="far fa-heart  is_liked">
                                                        <span class="badge badge-secondary">2</span>
                                                    </span>
                                                </div>
                                                <a href="http://demo.laravelcommerce.com/product-detail/striped-cotton-henley-coverall" class="fa fa-eye"></a>
                                            </div>
                                            <div class="buttons">
                                                <button class="btn btn-block btn-secondary cart" products_id="39">Add to Cart</button>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="product">
                                    <article>
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('img/ecom/1502195102.pPOLO2-25759495_alternate1_v400.jpg') }}" alt="MADRAS FIT-AND-FLARE DRESS">
                                        </div>
                                        <span class="discount-tag">41%</span>                     
                                        <span class="tag text-center">Women's Clothing</span>
                                        <h2 class="title text-center">MADRAS FIT-AND-FLARE DRESS</h2>
                                        <div class="price text-center">
                                            $258
                                            <span>$150</span>
                                        </div>
                                        <div class="product-hover">
                                            <div class="icons">
                                                <div class="icon-liked">
                                                    <span products_id="25" class="far fa-heart  is_liked">
                                                        <span class="badge badge-secondary">0</span>
                                                    </span>
                                                </div>
                                                <a href="http://demo.laravelcommerce.com/product-detail/madras-fit-and-flare-dress" class="fa fa-eye"></a>
                                            </div>
                                            <div class="buttons">
                                                <button class="btn btn-block btn-secondary cart" products_id="25">Add to Cart</button>
                                            </div>
                                        </div>
                                    </article>
                                </div> -->
                                <div class="product last-product">
                                    <article>
                                        <a href="http://demo.laravelcommerce.com/shop?type=special" class="buttons">
                                            <span class="fa fa-angle-right"></span>
                                            <span class="btn btn-secondary">View All</span>
                                        </a>
                                    </article>
                                </div>
                                    
                                <!-- <div class="owl-nav">
                                    <div class="owl-prev disabled"><i class="fa fa-angle-left"></i></div>
                                    <div class="owl-next"><i class="fa fa-angle-right"></i></div>
                                </div>
                                <div class="owl-dots">
                                    <div class="owl-dot active"><span></span></div>
                                    <div class="owl-dot"><span></span></div>
                                    <div class="owl-dot"><span></span></div>
                                </div> -->
                            </div>
                        </div>
                        <div aria-labelledby="liked-tab" class="tab-pane fade" id="liked" role="tabpanel">
                            <div class="owl-carousel" id="owl_liked">
                                @foreach ($products as $product)
                                    <div class="product">
                                        <article>
                                            <div class="thumb"> 
                                                <img class="img-fluid" src="{{ productImage($product->image) }}" alt="{{ $product->name }}">
                                            </div>
                                            <span class="tag text-center">Men's Clothing</span>
                                            <h2 class="title text-center">{{ $product->name }}</h2>
                                            <div class="price text-center">{{ $product->presentPrice() }}</div>
                                            <div class="product-hover">
                                                <div class="icons">
                                                    <div class="icon-liked">
                                                        <span products_id="1" class="far fa-heart  is_liked">
                                                            <span class="badge badge-secondary">8</span>
                                                        </span>
                                                    </div>
                                                    <a href="{{ route('shop.show', $product->slug) }}" class="fa fa-eye"></a>
                                                </div>
                                                <div class="buttons">
                                                    <button class="btn btn-block btn-secondary cart" products_id="1">Add to Cart</button>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                @endforeach                             
                                <!-- <div class="product">
                                    <article>
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('img/ecom/1502174889.pPOLO2-26314766_standard_v400.jpg') }}" alt="CLASSIC FIT SOFT-TOUCH POLO">
                                        </div>
                                        <span class="tag text-center">Men's Clothing</span>
                                        <h2 class="title text-center">CLASSIC FIT SOFT-TOUCH POLO</h2>
                                        <div class="price text-center">$85</div>
                                        <div class="product-hover">
                                            <div class="icons">
                                                <div class="icon-liked">
                                                    <span products_id="1" class="far fa-heart  is_liked">
                                                        <span class="badge badge-secondary">8</span>
                                                    </span>
                                                </div>
                                                <a href="http://demo.laravelcommerce.com/product-detail/classic-fit-soft-touch-polo" class="fa fa-eye"></a>
                                            </div>
                                            <div class="buttons">
                                                <button class="btn btn-block btn-secondary cart" products_id="1">Add to Cart</button>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="product">
                                    <article>
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('img/ecom/1502366342.pPOLO2-26090785_standard_v400.jpg') }}" alt="CABLE-KNIT CASHMERE SWEATER">
                                        </div>
                                        <span class="tag text-center">Girl's Clothing</span>
                                        <h2 class="title text-center">CABLE-KNIT CASHMERE SWEATER</h2>
                                        <div class="price text-center">$195 </div>
                                        <div class="product-hover">
                                            <div class="icons">
                                                <div class="icon-liked">
                                                    <span products_id="78" class="far fa-heart  is_liked">
                                                        <span class="badge badge-secondary">8</span>
                                                    </span>
                                                </div>
                                                <a href="http://demo.laravelcommerce.com/product-detail/cable-knit-cashmere-sweater" class="fa fa-eye"></a>
                                            </div>
                                            <div class="buttons">
                                                <button class="btn btn-block btn-secondary cart" products_id="78">Add to Cart</button>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="product">
                                    <article>
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('img/ecom/1502365515.pPOLO2-26091862_alternate1_v400.jpg') }}" alt="FLORAL SKIRT">
                                        </div>
                                        <span class="tag text-center">Girl's Clothing</span>
                                        <h2 class="title text-center">FLORAL SKIRT</h2>
                                        <div class="price text-center">$49.5</div>
                                        <div class="product-hover">
                                            <div class="icons">
                                                <div class="icon-liked">
                                                    <span products_id="76" class="far fa-heart  is_liked">
                                                        <span class="badge badge-secondary">7</span>
                                                    </span>
                                                </div>
                                                <a href="http://demo.laravelcommerce.com/product-detail/floral-skirt" class="fa fa-eye"></a>
                                            </div>
                                            <div class="buttons">
                                                <button class="btn btn-block btn-secondary cart" products_id="76">Add to Cart</button>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="product">
                                    <article>
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('img/ecom/1502190187.pPOLO2-26315541_standard_v400.jpg') }}" alt="HAMPTON STRAIGHT FIT JEAN">
                                        </div>
                                        <span class="tag text-center">Men's Clothing</span>
                                        <h2 class="title text-center">HAMPTON STRAIGHT FIT JEAN</h2>
                                        <div class="price text-center">$125</div>
                                        <div class="product-hover">
                                            <div class="icons">
                                                <div class="icon-liked">
                                                    <span products_id="13" class="far fa-heart  is_liked">
                                                        <span class="badge badge-secondary">6</span>
                                                    </span>
                                                </div>
                                                <a href="http://demo.laravelcommerce.com/product-detail/hampton-straight-fit-jean" class="fa fa-eye"></a>
                                            </div>
                                            <div class="buttons">
                                                <button class="btn btn-block btn-secondary cart" products_id="13">Add to Cart</button>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="product">
                                    <article>
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('img/ecom/1502191568.pPOLO2-26256404_standard_v400.jpg') }}" alt="DILLIAN II SUEDE CHELSEA BOOT">
                                        </div>
                                        <span class="tag text-center">Men's Clothing</span>
                                        <h2 class="title text-center">DILLIAN II SUEDE CHELSEA BOOT</h2>
                                        <div class="price text-center">$275</div>
                                        <div class="product-hover">
                                            <div class="icons">
                                                <div class="icon-liked">
                                                    <span products_id="17" class="far fa-heart  is_liked">
                                                        <span class="badge badge-secondary">6</span>
                                                    </span>
                                                </div>
                                                <a href="http://demo.laravelcommerce.com/product-detail/dillian-ii-suede-chelsea-boot" class="fa fa-eye"></a>
                                            </div>
                                            <div class="buttons">
                                                <button class="btn btn-block btn-secondary cart" products_id="17">Add to Cart</button>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="product">
                                    <article>
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('img/ecom/1502366686.pPOLO2-25207761_standard_v400.jpg') }}" alt="RUFFLED COTTON CARDIGAN">
                                        </div>
                                        <span class="tag text-center">Girl's Clothing</span>
                                        <h2 class="title text-center">RUFFLED COTTON CARDIGAN</h2>
                                        <div class="price text-center">$49.5</div>
                                        <div class="product-hover">
                                            <div class="icons">
                                                <div class="icon-liked">
                                                    <span products_id="81" class="far fa-heart  is_liked">
                                                        <span class="badge badge-secondary">6</span>
                                                    </span>
                                                </div>
                                                <a href="http://demo.laravelcommerce.com/product-detail/ruffled-cotton-cardigan" class="fa fa-eye"></a>
                                            </div>
                                            <div class="buttons">
                                                <button class="btn btn-block btn-secondary cart" products_id="81">Add to Cart</button>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="product">
                                    <article>
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('img/ecom/1502114036.pPOLO2-26316336_standard_v400.jpg') }}" alt="HAMPTON CLASSIC FIT SHIRT">
                                        </div>
                                        <span class="tag text-center">Men's Clothing</span>
                                        <h2 class="title text-center">HAMPTON CLASSIC FIT SHIRT</h2>
                                        <div class="price text-center">$98.5</div>
                                        <div class="product-hover">
                                            <div class="icons">
                                                <div class="icon-liked">
                                                    <span products_id="2" class="far fa-heart  is_liked">
                                                        <span class="badge badge-secondary">5</span>
                                                    </span>
                                                </div>
                                                <a href="http://demo.laravelcommerce.com/product-detail/hampton-classic-fit-shirt" class="fa fa-eye"></a>
                                            </div>
                                            <div class="buttons">
                                                <button class="btn btn-block btn-secondary cart" products_id="2">Add to Cart</button>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="product">
                                    <article>
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('img/ecom/1502181584.pPOLO2-26008953_standard_v400.jpg') }}" alt="STANDARD FIT COTTON POPOVER">
                                        </div>
                                        <span class="tag text-center">Men's Clothing</span>
                                        <h2 class="title text-center">STANDARD FIT COTTON POPOVER</h2>
                                        <div class="price text-center">$125.5</div>
                                        <div class="product-hover">
                                            <div class="icons">
                                                <div class="icon-liked">
                                                    <span products_id="8" class="far fa-heart  is_liked">
                                                        <span class="badge badge-secondary">5</span>
                                                    </span>
                                                </div>
                                                <a href="http://demo.laravelcommerce.com/product-detail/standard-fit-cotton-popover" class="fa fa-eye"></a>
                                            </div>
                                            <div class="buttons">
                                                <button class="btn btn-block btn-secondary cart" products_id="8">Add to Cart</button>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="product">
                                    <article>
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('img/ecom/1502174364.pPOLO2-26314826_standard_v400.jpg') }}" alt="CLASSIC FIT COTTON POLO SHIRT">
                                        </div>
                                        <span class="tag text-center">Men's Clothing</span>
                                        <h2 class="title text-center">CLASSIC FIT COTTON POLO SHIRT</h2>
                                        <div class="price text-center">$85</div>
                                        <div class="product-hover">
                                            <div class="icons">
                                                <div class="icon-liked">
                                                    <span products_id="4" class="far fa-heart  is_liked">
                                                        <span class="badge badge-secondary">4</span>
                                                    </span>
                                                </div>
                                                <a href="http://demo.laravelcommerce.com/product-detail/classic-fit-cotton-polo-shirt" class="fa fa-eye"></a>
                                            </div>
                                            <div class="buttons">
                                                <button class="btn btn-block btn-secondary cart" products_id="4">Add to Cart</button>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="product">
                                    <article>
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('img/ecom/1502182426.pPOLO2-26008935_standard_v400.jpg') }}" alt="STANDARD FIT MADRAS POPOVER">
                                        </div>
                                        <span class="tag text-center">Men's Clothing</span>
                                        <h2 class="title text-center">STANDARD FIT MADRAS POPOVER</h2>
                                        <div class="price text-center">$89.5</div>
                                        <div class="product-hover">
                                            <div class="icons">
                                                <div class="icon-liked">
                                                    <span products_id="9" class="far fa-heart  is_liked">
                                                        <span class="badge badge-secondary">4</span>
                                                    </span>
                                                </div>
                                                <a href="http://demo.laravelcommerce.com/product-detail/standard-fit-madras-popover" class="fa fa-eye"></a>
                                            </div>
                                            <div class="buttons">
                                                <button class="btn btn-block btn-secondary cart" products_id="9">Add to Cart</button>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="product">
                                    <article>
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('img/ecom/1502268005.pPOLO2-25655666_standard_v400.jpg') }}" alt="STRIPED POLO DRESS &amp; BLOOMER">
                                        </div>
                                        <span class="discount-tag">37%</span>                    
                                        <span class="tag text-center">Baby &amp; Mother</span>
                                        <h2 class="title text-center">STRIPED POLO DRESS &amp; BLOOMER</h2>
                                        <div class="price text-center">$21.99 <span>$35</span></div>
                                        <div class="product-hover">
                                            <div class="icons">
                                                <div class="icon-liked">
                                                    <span products_id="43" class="far fa-heart  is_liked">
                                                        <span class="badge badge-secondary">4</span>
                                                    </span>
                                                </div>
                                                <a href="http://demo.laravelcommerce.com/product-detail/striped-polo-dress-bloomer" class="fa fa-eye"></a>
                                            </div>
                                            <div class="buttons">
                                                <button class="btn btn-block btn-secondary cart" products_id="43">Add to Cart</button>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="product">
                                    <article>
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{ asset('img/ecom/1502363119.pPOLO2-25464682_standard_v400.jpg') }}" alt="PROPELL II SNEAKER">
                                        </div>
                                        <span class="discount-tag">46%</span>                    
                                        <span class="tag text-center">Boy's Clothing</span>
                                        <h2 class="title text-center">PROPELL II SNEAKER</h2>
                                        <div class="price text-center">$23.99 <span>$45</span></div>
                                        <div class="product-hover">
                                            <div class="icons">
                                                <div class="icon-liked">
                                                    <span products_id="70" class="far fa-heart  is_liked">
                                                        <span class="badge badge-secondary">4</span>
                                                    </span>
                                                </div>
                                                <a href="http://demo.laravelcommerce.com/product-detail/propell-ii-sneaker" class="fa fa-eye"></a>
                                            </div>
                                            <div class="buttons">
                                                <button class="btn btn-block btn-secondary cart" products_id="70">Add to Cart</button>
                                            </div>
                                        </div>
                                    </article>
                                </div> -->
                                <div class="product last-product">
                                    <article>
                                        <a href="http://demo.laravelcommerce.com/shop?type=mostliked" class="buttons">
                                            <span class="fa fa-angle-right"></span>
                                            <span class="btn btn-secondary">View All</span>
                                        </a>
                                    </article>
                                </div>
                                    
                                <!-- <div class="owl-nav">
                                    <div class="owl-prev disabled"><i class="fa fa-angle-left"></i></div>
                                    <div class="owl-next"><i class="fa fa-angle-right"></i></div>
                                </div>
                                <div class="owl-dots">
                                    <div class="owl-dot active"><span></span></div>
                                    <div class="owl-dot"><span></span></div>
                                    <div class="owl-dot"><span></span></div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ./end of dynamic content -->
    </div>
</section>