@extends('E-com.layouts.master')
@Section('content')

<form name="addtoCart" method="post" action="{{url('/add-cart')}}">{{csrf_field()}}
	<!-- Main Container  -->
    @if(Session::has('flash_message_error'))
    <div class="alert alert-sm alert-danger alert-block" role="alert">
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
       </button>
       <strong>{!! session('flash_message_error') !!}</strong>
    </div>
    @endif
    
    @if(Session::has('flash_message_success'))
    <div class="alert alert-sm alert-success alert-block" role="alert">
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
       </button>
       <strong>{!! session('flash_message_success') !!}</strong>
    </div>
    @endif

	<div class="main-container container">
		
		<div class="row">
			<!--Middle Part Start-->
			<div id="content" class="col-md-12 col-sm-12">
				
				<div class="product-view row">
					<div class="left-content-product col-lg-10 col-xs-12">
						<div class="row">
							<div class="content-product-left class-honizol col-sm-6 col-xs-12 ">
								<div class="large-image  ">
									<img itemprop="image" class="product-image-zoom" src="{{asset('/uploads/products/'.$productDetails->image)}}" data-zoom-image="image/demo/shop/product/J9.jpg" title="Bint Beef" alt="Bint Beef">
								</div>

								
                                <div id="thumb-slider" class="owl-theme owl-loaded owl-drag full_slider">
								@foreach($ProductsAltImages as $product)	
                                <a data-index="0" class="img thumbnail " data-image="image/demo/shop/product/J9.jpg" title="Bint Beef">
									
                                    <img src="{{asset('/uploads/products/'.$product->image)}}" title="Bint Beef" alt="Bint Beef">
									</a>
                                    @endforeach
								</div>
								
							</div>
                            <input type="hidden" value="{{$productDetails->id}}" name="product_id">
                            <input type="hidden" value="{{$productDetails->name}}" name="product_name">
                            <input type="hidden" value="{{$productDetails->code}}" name="product_code">
                            <input type="hidden" id="price" value="{{$productDetails->price}}" name="price">

							<div class="content-product-right col-sm-6 col-xs-12">
								<div class="title-product">
									<h1>{{$productDetails->name}}</h1>
								</div>
								<!-- Review ---->



								<div class="product-label form-group">
									<div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
										<span class="price-new" name="price" itemprop="price">{{$productDetails->price}}</span>
										
									</div>
                                    
								</div>

								<div class="product-box-desc">
									<div class="inner-box-desc">
										<div class="reward"><span>Price in reward points:</span> 400</div>
										<div class="brand"><span>Brand:</span><a href="#">Apple</a>		</div>
										<div class="model"><span>Product Code:</span> Product 15</div>
										<div class="reward"><span>Reward Points:</span> 100</div>
									</div>
								</div>
                                <div class="form-group size-st">
                                        <label class="size-label">Size</label>
                                        <select id="selSize" name="size" class="selectpicker show-tick form-control">
                                
                                @foreach($productDetails->attributes as $sizes)
                                        <option value="{{$productDetails->id}}-{{$sizes->size}}">{{$sizes->size}}</option>
                                @endforeach
								</select>
                                </div>


								<div id="product">
									<h4>Available Options</h4>
                                    <div class="form-group size-st">
                                        <label class="size-label">Color</label>
                                        <select id="color" name="color" class="selectpicker show-tick form-control">
                                
                                @foreach($productDetails->attributes as $color)
                                        <option value="{{$productDetails->id}}-{{$color->color}}">{{$color->color}}</option>
                                @endforeach
								</select>
                                </div>
									
									<div class="form-group box-info-product">
										<div class="option quantity">
											<div class="input-group quantity-control" unselectable="on" style="-webkit-user-select: none;">
												<label>Qty</label>
												<input class="form-control" type="text" name="quantity"value="1">
												<input type="hidden" name="product_id" value="{{$productDetails->id}}">
												<span class="input-group-addon product_quantity_down">−</span>
												<span class="input-group-addon product_quantity_up">+</span>
											</div>
										</div>
										<div class="cart">
											<input type="submit" data-toggle="tooltip" title="" value="Add To Cart" data-loading-text="Loading..." id="button-cart" class="btn btn-mega btn-lg"  data-original-title="Add To Cart">
										</div>
										<div class="add-to-links wish_comp">
											<ul class="blank list-inline">
												<li class="wishlist">
													<button type="submit" data-toggle="tooltip" style="height:42px; width:40px;" value="Add To Wishlist" name="wishlist" data-loading-text="Loading..." id="button-cart" data-original-title="Add To Wishlist" >
													<i class="fa fa-heart"></i>
													
													</button>
												</li>
												<li class="compare">
											<button type="submit" data-toggle="tooltip"  style="height:42px; width:40px;" value="Comapre Products" name="compare" data-loading-text="Loading..." id="button-cart" data-original-title="Compare Products" >
												<i class="fa fa-exchange"></i>
												</button>
												</li>
											</ul>
										</div>

									</div>

								</div>
								<!-- end box info product -->

							</div>
						</div>
					</div>
					
					<section class="col-lg-2 hidden-sm hidden-md hidden-xs slider-products">
						<div class="module col-sm-12 four-block">
							<div class="modcontent clearfix">
								<div class="policy-detail">
									<div class="banner-policy">
										<div class="policy policy1">
											<a href="#"> <span class="ico-policy">&nbsp;</span>	90 day
											<br> money back </a>
										</div>
										<div class="policy policy2">
											<a href="#"> <span class="ico-policy">&nbsp;</span>	In-store exchange </a>
										</div>
										<div class="policy policy3">
											<a href="#"> <span class="ico-policy">&nbsp;</span>	lowest price guarantee </a>
										</div>
										<div class="policy policy4">
											<a href="#"> <span class="ico-policy">&nbsp;</span>	shopping guarantee </a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
</form>				
				<!-- Product Tabs -->
				<div class="producttab ">
	<div class="tabsslider  vertical-tabs col-xs-12">
		<ul class="nav nav-tabs col-lg-2 col-sm-3">
			<li class="active"><a data-toggle="tab" href="#tab-1">Description</a></li>
			<li class="item_nonactive"><a data-toggle="tab" href="#tab-review">Reviews</a></li>
			<li class="item_nonactive"><a data-toggle="tab" href="#tab-4">Tags</a></li>
			<li class="item_nonactive"><a data-toggle="tab" href="#tab-5">Custom Tab</a></li>
		</ul>
		<div class="tab-content col-lg-10 col-sm-9 col-xs-12">
			<div id="tab-1" class="tab-pane fade active in">

			{!!$productDetails->description!!}
			
			</div>
			<div id="tab-review" class="tab-pane fade">
			<form name="addtoCart" method="post" action="{{url('/review')}}">{{csrf_field()}}
					<div id="review">
					@foreach($productDetails->reviews as $review)
						<table class="table table-striped table-bordered">
							<tbody>
								<tr>
									<td style="width: 50%;"><strong>{{$review->name}}</strong></td>
									<td class="text-right">{{$review->created_at}}</td>
								</tr>
								<tr>
									<td colspan="2">
										<p>{{$review->review}}</p>
									</td>
								</tr>
							</tbody>
						</table>
						<div class="text-right"></div>
						@endforeach
					</div>
					<h2 id="review-title">Write a review</h2>
					<div class="contacts-form">
						<div class="form-group"> <span class="icon icon-user"></span>
							<input type="text" name="name" class="form-control" value="Your Name" onblur="if (this.value == '') {this.value = 'Your Name';}" onfocus="if(this.value == 'Your Name') {this.value = '';}"> 
						</div>
						<div class="form-group"> <span class="icon icon-bubbles-2"></span>
							<textarea class="form-control" name="text" onblur="if (this.value == '') {this.value = 'Your Review';}" onfocus="if(this.value == 'Your Review') {this.value = '';}">Your Review</textarea>
						</div> 
						
						<input type="hidden" value="{{$productDetails->id}}" name="product_id">

						<div class="buttons clearfix">
						<button type="submit" data-toggle="tooltip"  style="height:35px; width:55px;" value="Submit Review" name="compare" data-loading-text="Loading..." id="button-cart" data-original-title="Submit Review" >
												Submit
												</button></div>
					</div>
				</form>
			</div>
			<div id="tab-4" class="tab-pane fade">
				<a href="#">Monitor</a>,
				<a href="#">Apple</a>				
			</div>
			<div id="tab-5" class="tab-pane fade">
				<h3 class="custom-color">Take a trivial example which of us ever undertakes</h3>
				<p>Lorem ipsum dolor sit amet, consetetur
					sadipscing elitr, sed diam nonumy eirmod
					tempor invidunt ut labore et dolore
					magna aliquyam erat, sed diam voluptua.
					At vero eos et accusam et justo duo
					dolores et ea rebum. Stet clita kasd
					gubergren, no sea takimata sanctus est
					Lorem ipsum dolor sit amet. Lorem ipsum
					dolor sit amet, consetetur sadipscing
					elitr, sed diam nonumy eirmod tempor
					invidunt ut labore et dolore magna aliquyam
					erat, sed diam voluptua. </p>
				<p>At vero eos et accusam et justo duo dolores
					et ea rebum. Stet clita kasd gubergren,
					no sea takimata sanctus est Lorem ipsum
					dolor sit amet. Lorem ipsum dolor sit
					amet, consetetur sadipscing elitr.</p>
					<ul class="marker-simple-list two-columns">
<li>Nam liberempore</li>
<li>Cumsoluta nobisest</li>
<li>Eligendptio cumque</li>
<li>Nam liberempore</li>
<li>Cumsoluta nobisest</li>
<li>Eligendptio cumque</li>
</ul>
				<p>Sed diam nonumy eirmod tempor invidunt
					ut labore et dolore magna aliquyam erat,
					sed diam voluptua. At vero eos et accusam
					et justo duo dolores et ea rebum. Stet
					clita kasd gubergren, no sea takimata
					sanctus est Lorem ipsum dolor sit amet.</p>
			</div>
		</div>
	</div>
</div>
				<!-- //Product Tabs -->
				
				<!-- Related Products -->
				<div class="related titleLine products-list grid module ">
	<h3 class="modtitle">Related Products  </h3>
	<div class="releate-products ">
		<div class="product-layout">
			<div class="product-item-container">
				<div class="left-block">
					<div class="product-image-container second_img ">
						<img  src="image/demo/shop/product/e11.jpg"  title="Apple Cinema 30&quot;" class="img-responsive" />
						<img  src="image/demo/shop/product/e12.jpg"  title="Apple Cinema 30&quot;" class="img_0 img-responsive" />
					</div>
					<!--Sale Label-->
					<span class="label label-sale">Sale</span>
					<!--full quick view block-->
					<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
					<!--end full quick view block-->
				</div>
				
				
				<div class="right-block">
					<div class="caption">
						<h4><a href="product.html">Apple Cinema 30&quot;</a></h4>		
						<div class="ratings">
							<div class="rating-box">
								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
								<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
							</div>
						</div>
											
						<div class="price">
							<span class="price-new">$74.00</span> 
							<span class="price-old">$122.00</span>		 
							<span class="label label-percent">-40%</span>    
						</div>
						<div class="description item-desc hidden">
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut l..</p>
						</div>
					</div>
					
					  <div class="button-group">
						<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs">Add to Cart</span></button>
						<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
						<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
					  </div>
				</div><!-- right block -->

			</div>
		</div>
		<div class="product-layout ">
			<div class="product-item-container">
				<div class="left-block">
					<div class="product-image-container second_img ">
						<img  src="image/demo/shop/product/11.jpg"  title="Apple Cinema 30&quot;" class="img-responsive" />
						<img  src="image/demo/shop/product/10.jpg"  title="Apple Cinema 30&quot;" class="img_0 img-responsive" />
						
					</div>
					<!--Sale Label-->
					<span class="label label-sale">Sale</span>
					<!--full quick view block-->
					<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
					<!--end full quick view block-->
				</div>
				
				
				<div class="right-block">
					<div class="caption">
						<h4><a href="product.html">Apple Cinema 30&quot;</a></h4>		
						<div class="ratings">
							<div class="rating-box">
								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
								<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
							</div>
						</div>
											
						<div class="price">
							<span class="price-new">$74.00</span> 
							<span class="price-old">$122.00</span>		 
							<span class="label label-percent">-40%</span>    
						</div>
						<div class="description item-desc hidden">
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut l..</p>
						</div>
					</div>
					
					  <div class="button-group">
						<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs">Add to Cart</span></button>
						<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
						<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
					  </div>
				</div><!-- right block -->

			</div>
		</div>
		<div class="product-layout ">
			<div class="product-item-container">
				<div class="left-block">
					<div class="product-image-container second_img ">
						<img  src="image/demo/shop/product/35.jpg"  title="Apple Cinema 30&quot;" class="img-responsive" />
						<img  src="image/demo/shop/product/34.jpg"  title="Apple Cinema 30&quot;" class="img_0 img-responsive" />
					</div>
					<!--Sale Label-->
					<span class="label label-sale">Sale</span>
					<!--full quick view block-->
					<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
					<!--end full quick view block-->
				</div>
				
				
				<div class="right-block">
					<div class="caption">
						<h4><a href="product.html">Apple Cinema 30&quot;</a></h4>		
						<div class="ratings">
							<div class="rating-box">
								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
								<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
							</div>
						</div>
											
						<div class="price">
							<span class="price-new">$74.00</span> 
							<span class="price-old">$122.00</span>		 
							<span class="label label-percent">-40%</span>    
						</div>
						<div class="description item-desc hidden">
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut l..</p>
						</div>
					</div>
					
					  <div class="button-group">
						<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs">Add to Cart</span></button>
						<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
						<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
					  </div>
				</div><!-- right block -->

			</div>
		</div>
		<div class="product-layout ">
			<div class="product-item-container">
				<div class="left-block">
					<div class="product-image-container second_img ">
						<img  src="image/demo/shop/product/14.jpg"  title="Apple Cinema 30&quot;" class="img-responsive" />
						<img  src="image/demo/shop/product/15.jpg"  title="Apple Cinema 30&quot;" class="img_0 img-responsive" />
					</div>
					<!--Sale Label-->
					<span class="label label-sale">Sale</span>
					<!--full quick view block-->
					<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
					<!--end full quick view block-->
				</div>
				
				
				<div class="right-block">
					<div class="caption">
						<h4><a href="product.html">Apple Cinema 30&quot;</a></h4>		
						<div class="ratings">
							<div class="rating-box">
								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
								<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
							</div>
						</div>
											
						<div class="price">
							<span class="price-new">$74.00</span> 
							<span class="price-old">$122.00</span>		 
							<span class="label label-percent">-40%</span>    
						</div>
						<div class="description item-desc hidden">
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut l..</p>
						</div>
					</div>
					
					  <div class="button-group">
						<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs">Add to Cart</span></button>
						<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
						<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
					  </div>
				</div><!-- right block -->

			</div>
		</div>
	</div>
</div>

			<!-- end Related  Products-->
			
				
			</div>
			
			
		</div>
		<!--Middle Part End-->
	</div>
	<!-- //Main Container -->
	

    </body>
@endsection
	
	




	
	
<!-- Include Libs & Plugins
	============================================ -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="{{asset('front_assets/js/jquery-2.2.4.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front_assets/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('front_assets/js/owl-carousel/owl.carousel.js')}}"></script>
	<script type="text/javascript" src="{{asset('front_assets/js/themejs/libs.js')}}"></script>
	<script type="text/javascript" src="{{asset('front_assets/js/unveil/jquery.unveil.js')}}"></script>
	<script type="text/javascript" src="{{asset('front_assets/js/countdown/jquery.countdown.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('front_assets/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('front_assets/js/datetimepicker/moment.js')}}"></script>
	<script type="text/javascript" src="{{asset('front_assets/js/datetimepicker/bootstrap-datetimepicker.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('front_assets/js/jquery-ui/jquery-ui.min.js')}}"></script>
	
	
	<!-- Theme files
	============================================ -->
	
	
	<script type="text/javascript" src="{{asset('front_assets/js/themejs/so_megamenu.js')}}"></script>
	<script type="text/javascript" src="{{asset('front_assets/js/themejs/addtocart.js')}}"></script>
	<script type="text/javascript" src="{{asset('front_assets/js/themejs/application.js')}}"></script>
	<script type="text/javascript" src="{{asset('front_assets/js/themejs/cpanel.js')}}"></script>	
	
</body>
</html>