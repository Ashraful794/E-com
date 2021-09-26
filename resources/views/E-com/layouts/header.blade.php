	<!-- Header Container  -->
	<header id="header" class=" variantleft type_1">
<!-- Header Top -->
<div class="header-top compact-hidden">
	<div class="container">
		<div class="row">
			<div class="header-top-left form-inline col-sm-6 col-xs-12 compact-hidden">



			</div>
			<div class="header-top-right collapsed-block text-right  col-sm-6 col-xs-12 compact-hidden">
				<h5 class="tabBlockTitle visible-xs">More<a class="expander " href="#TabBlock-1"><i class="fa fa-angle-down"></i></a></h5>
				<div class="tabBlock" id="TabBlock-1">
				@if(empty(Auth::check()))
					<ul class="top-link list-inline">
						<li class="account" id="my_account">
							<a href="#" title="My Account" class="btn btn-xs dropdown-toggle" data-toggle="dropdown"> <span >My Account</span> <span class="fa fa-angle-down"></span></a>
							<ul class="dropdown-menu ">
								<li><a href="{{url('/register_page')}}"><i class="fa fa-user"></i> Register</a></li>
								<li><a href="{{url('/login_page')}}"><i class="fa fa-pencil-square-o"></i> Login</a></li>
							</ul>
							@else
						<ul class="top-link list-inline">

						<li class="account" id="my_account">
							<a href="{{url('/user-logout')}}"  > <span >Logout</span> <span class="fa fa-angle-down"></span></a>
						</li>
						<li class="account" id="my_account">
							<a href="{{url('/account')}}"> <span >My Account</span> <span class="fa fa-angle-down"></span></a>
						</li>
						
						@endif
						<li class="wishlist"><a href="{{url('/wishlist')}}" id="wishlist-total" class="top-link-wishlist" title="Wish List"><span>Wish List </span></a></li>
						<li class="checkout"><a href="{{url('/checkout')}}" class="top-link-checkout" title="Checkout"><span >Checkout</span></a></li>
						<li class="login"><a href="{{url('/cart')}}" title="Shopping Cart"><span >Shopping Cart</span></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //Header Top -->

<!-- Header center -->
<div class="header-center left">
	<div class="container">
		<div class="row">
			<!-- Logo -->
			<div class="navbar-logo col-md-3 col-sm-12 col-xs-12">
				<a href="{{url('/')}}"><img src="{{asset('front_assets/image/demo/logos/theme_logo.png')}}" title="Your Store" alt="Your Store" /></a>
			</div>
			<!-- //end Logo -->

			<!-- Search -->
			<div id="sosearchpro" class="col-sm-7 search-pro">
				<form method="GET" action="{{url('/search')}}">
					<div id="search0" class="search input-group">

						<input class="autosearch-input form-control" type="text" size="50" autocomplete="off" placeholder="Search" name="search" value="{{isset($product_search) ? $product_search: ''}}">
						<span class="input-group-btn">
						<button type="submit" class="button-search btn btn-primary" name="submit_search"><i class="fa fa-search"></i></button>
						</span>
					</div>
					<input type="hidden" name="route" value="product/search" />
				</form>
			</div>
			<!-- //end Search -->



					<ul class="tab-content content dropdown-menu pull-right shoppingcart-box" role="menu">
						
						<li>
							<table class="table table-striped">
								<tbody>
									<tr>
										<td class="text-center" style="width:70px">
											<a href="product.html"> <img src="{{asset('front_assets/image/demo/shop/product/resize/2.jpg')}}" style="width:70px" alt="Filet Mign" title="Filet Mign" class="preview"> </a>
										</td>
										<td class="text-left"> <a class="cart_product_name" href="product.html">Filet Mign</a> </td>
										<td class="text-center"> x1 </td>
										<td class="text-center"> $1,202.00 </td>
										<td class="text-right">
											<a href="product.html" class="fa fa-edit"></a>
										</td>
										<td class="text-right">
											<a onclick="cart.remove('2');" class="fa fa-times fa-delete"></a>
										</td>
									</tr>
									<tr>
										<td class="text-center" style="width:70px">
											<a href="product.html"> <img src="{{asset('front_assets/image/demo/shop/product/resize/3.jpg')}}" style="width:70px" alt="Canon EOS 5D" title="Canon EOS 5D" class="preview"> </a>
										</td>
										<td class="text-left"> <a class="cart_product_name" href="product.html">Canon EOS 5D</a> </td>
										<td class="text-center"> x1 </td>
										<td class="text-center"> $60.00 </td>
										<td class="text-right">
											<a href="product.html" class="fa fa-edit"></a>
										</td>
										<td class="text-right">
											<a onclick="cart.remove('1');" class="fa fa-times fa-delete"></a>
										</td>
									</tr>
								</tbody>
							</table>
						</li>
						<li>
							<div>
								<table class="table table-bordered">
									<tbody>
										<tr>
											<td class="text-left"><strong>Sub-Total</strong>
											</td>
											<td class="text-right">$1,060.00</td>
										</tr>
										<tr>
											<td class="text-left"><strong>Eco Tax (-2.00)</strong>
											</td>
											<td class="text-right">$2.00</td>
										</tr>
										<tr>
											<td class="text-left"><strong>VAT (20%)</strong>
											</td>
											<td class="text-right">$200.00</td>
										</tr>
										<tr>
											<td class="text-left"><strong>Total</strong>
											</td>
											<td class="text-right">$1,262.00</td>
										</tr>
									</tbody>
								</table>
								<p class="text-right"> <a class="btn view-cart" href="cart.html"><i class="fa fa-shopping-cart"></i>View Cart</a>&nbsp;&nbsp;&nbsp; <a class="btn btn-mega checkout-cart" href="checkout.html"><i class="fa fa-share"></i>Checkout</a> </p>
							</div>
						</li>
					</ul>
				</div>
				<!--//cart-->
			</div>
		</div>

	</div>
</div>
<!-- //Header center -->

<!-- Header Bottom -->
<div class="header-bottom">
	<div class="container">
		<div class="row">
			
			<div class="sidebar-menu col-md-3 col-sm-6 col-xs-12 ">
				<div class="responsive so-megamenu ">
					<div class="so-vertical-menu no-gutter compact-hidden">
						<nav class="navbar-default">	
							
							<div class="container-megamenu vertical ">
								<div id="menuHeading">
									<div class="megamenuToogle-wrapper">
										<div class="megamenuToogle-pattern">
											<div class="container">
												<div>
													<span></span>
													<span></span>
													<span></span>
												</div>
												All Categories							
												<i class="fa pull-right arrow-circle fa-chevron-circle-up"></i>
											</div>
										</div>
									</div>
								</div>
								<div class="navbar-header">
									<button type="button" id="show-verticalmenu" data-toggle="collapse" class="navbar-toggle fa fa-list-alt">
										
									</button>
									All Categories		
								</div>
								<div class="vertical-wrapper" >
									<span id="remove-verticalmenu" class="fa fa-times"></span>
									<div class="megamenu-pattern">
										<div class="container">
											<ul class="megamenu">
												@foreach($categories as $cat)
													<li class="item-vertical css-menu with-sub-menu hover">
														<p class="close-menu"></p>
														<a href="{{url('/category/'.$cat->id)}}" class="clearfix">															
															<img src="{{asset('front_assets/image/theme/icons/2.png')}}" alt="icon">
															<span>{{$cat->name}}</span>
															
															<b class="caret"></b>
														</a>
														<div class="sub-menu" data-subwidth="30" style="width: 270px; display: none; right: 0px;">
															<div class="content" style="display: none;">
																<div class="row">
																	<div class="col-sm-12">
																		<div class="row">
																			<div class="col-sm-12 hover-menu">
																				<div class="menu">
																					<ul>
																						<li>
																							@foreach($cat->categories as $key=>$subcat)
																							<a href="{{url('/categories/'.$subcat->id)}}" class="main-menu">{{$subcat->name}}</a>
																							@endforeach
																						</li>
																					</ul>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</li>
													@endforeach
													<li class="loadmore">
														<i class="fa fa-plus-square-o"></i>
														<span class="more-view">More Categories</span>
													</li>

												</ul>
											</div>
										</div>
									</div>
								</div>
							</nav>
					</div>
				</div>

			</div>
			
			<!-- Main menu -->
			<div class="megamenu-hori header-bottom-right  col-md-9 col-sm-6 col-xs-12 ">
				<div class="responsive so-megamenu ">
	<nav class="navbar-default">
		<div class=" container-megamenu  horizontal">
			<div class="navbar-header">
				<button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				Navigation		
			</div>
			
			<div class="megamenu-wrapper">
				<span id="remove-megamenu" class="fa fa-times"></span>
				<div class="megamenu-pattern">
					<div class="container">
						<ul class="megamenu " data-transition="slide" data-animationtime="250">
							<li class="home hover">
								<a href="index.html">Home <b class="caret"></b></a>
								<div class="sub-menu" style="width:100%;" >
									<div class="content" >
										<div class="row">
											<div class="col-md-15">
												<a href="index.html" class="image-link"> 
													<span class="thumbnail">
														<img class="img-responsive img-border" src="{{asset('front_assets/image/demo/feature/home-1.jpg')}}" alt="">
														<span class="btn btn-default">Read More</span>
													</span> 
													<h3 class="figcaption">Home page - (Default)</h3> 
												</a> 
												
											</div>
											<div class="col-md-15">
												<a href="home2.html" class="image-link"> 
													<span class="thumbnail">
														<img class="img-responsive img-border" src="{{asset('front_assets/image/demo/feature/home-2.jpg')}}" alt="">
														<span class="btn btn-default">Read More</span>
													</span> 
													<h3 class="figcaption">Home page - Layout 2</h3> 
												</a> 
												
											</div>
											<div class="col-md-15">
												<a href="home3.html" class="image-link"> 
													<span class="thumbnail">
														<img class="img-responsive img-border" src="{{asset('front_assets/image/demo/feature/home-3.jpg')}}" alt="">
														<span class="btn btn-default">Read More</span>
													</span> 
													<h3 class="figcaption">Home page - Layout 3</h3> 
												</a> 
												
											</div>
											<div class="col-md-15">
												<a href="home4.html" class="image-link"> 
													<span class="thumbnail">
														<img class="img-responsive img-border" src="{{asset('front_assets/image/demo/feature/home-4.jpg')}}" alt="">
														<span class="btn btn-default">Read More</span>
													</span> 
													<h3 class="figcaption">Home page - Layout 4</h3> 
												</a> 
												
											</div>
											<div class="col-md-15">
												<a href="home5.html" class="image-link"> 
													<span class="thumbnail">
														<img class="img-responsive img-border" src="{{asset('front_assets/image/demo/feature/home-5.jpg')}}" alt="">
														<span class="btn btn-default">Read More</span>
													</span> 
													<h3 class="figcaption">Home page - Layout 5</h3> 
												</a> 
												
											</div>
											<div class="col-md-15">
												<a href="home6.html" class="image-link"> 
													<span class="thumbnail">
														<img class="img-responsive img-border" src="{{asset('front_assets/image/demo/feature/home-6.jpg')}}" alt="">
														<span class="btn btn-default">Read More</span>
													</span> 
													<h3 class="figcaption">Home page - Layout 6</h3> 
												</a> 
												
											</div>
											<div class="col-md-15">
												<a href="home7.html" class="image-link"> 
													<span class="thumbnail">
														<img class="img-responsive img-border" src="{{asset('front_assets/image/demo/feature/home-7.jpg')}}" alt="">
														<span class="btn btn-default">Read More</span>
													</span> 
													<h3 class="figcaption">Home page - Layout 7</h3> 
												</a> 
												
											</div>
											<div class="col-md-15">
												<a href="home8.html" class="image-link"> 
													<span class="thumbnail">
														<img class="img-responsive img-border" src="{{asset('front_assets/image/demo/feature/home-8.jpg')}}" alt="">
														<span class="btn btn-default">Read More</span>
													</span> 
													<h3 class="figcaption">Home page - Layout 8</h3> 
												</a> 
												
											</div>
											<div class="col-md-15">
												<a href="html_width_RTL/index.html" class="image-link"> 
													<span class="thumbnail">
														<img class="img-responsive img-border" src="{{asset('front_assets/image/demo/feature/home-rtl.jpg')}}" alt="">
														<span class="btn btn-default">Read More</span>
													</span> 
													<h3 class="figcaption">Home page - Layout RTL</h3> 
												</a> 
												
											</div>
											<div class="col-md-15">
												<a href="#" class="image-link"> 
													<span class="thumbnail">
														<img class="img-responsive img-border" src="{{asset('front_assets/image/demo/feature/comming-soon.png')}}" alt="">
														
													</span> 
													<h3 class="figcaption">Comming soon</h3> 
												</a> 
												
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="with-sub-menu hover">
								<p class="close-menu"></p>
								<a href="#" class="clearfix">
									<strong>Features</strong>
									<img class="label-hot" src="{{asset('front_assets/image/theme/icons/hot-icon.png')}}" alt="icon items">
									<b class="caret"></b>
								</a>
								<div class="sub-menu" style="width: 100%; right: auto;">
									<div class="content" >
										<div class="row">
											<div class="col-md-3">
												<div class="column">
													<a href="#" class="title-submenu">Listing pages</a>
													<div>
														<ul class="row-list">
															<li><a href="category.html">Category Page 1 </a></li>
															<li><a href="category-v2.html">Category Page 2</a></li>
															<li><a href="category-v3.html">Category Page 3</a></li>
														</ul>
														
													</div>
												</div>
											</div>
											<div class="col-md-3">
												<div class="column">
													<a href="#" class="title-submenu">Product pages</a>
													<div>
														<ul class="row-list">
															<li><a href="product.html">Image size - big</a></li>
															<li><a href="product-v2.html">Image size - medium</a></li>
															<li><a href="product-v3.html">Image size - small</a></li>
														</ul>
													</div>
												</div>
											</div>
											<div class="col-md-3">
												<div class="column">
													<a href="#" class="title-submenu">Shopping pages</a>
													<div>
														<ul class="row-list">
															<li><a href="cart.html">Shopping Cart Page</a></li>
															<li><a href="checkout.html">Checkout Page</a></li>
															<li><a href="compare.html">Compare Page</a></li>
															<li><a href="wishlist.html">Wishlist Page</a></li>
														
														</ul>
													</div>
												</div>
											</div>
											<div class="col-md-3">
												<div class="column">
													<a href="#" class="title-submenu">My Account pages</a>
													<div>
														<ul class="row-list">
															<li><a href="login.html">Login Page</a></li>
															<li><a href="{{url('/register')}}">Register Page</a></li>
															<li><a href="my-account.html">My Account</a></li>
															<li><a href="order-history.html">Order History</a></li>
															<li><a href="order-information.html">Order Information</a></li>
															<li><a href="return.html">Product Returns</a></li>
															<li><a href="gift-voucher.html">Gift Voucher</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="with-sub-menu hover">
								<p class="close-menu"></p>
								<a href="#" class="clearfix">
									<strong>Pages</strong>
									<img class="label-hot" src="{{asset('front_assets/image/theme/icons/hot-icon.png')}}" alt="icon items">
									<b class="caret"></b>
								</a>
								<div class="sub-menu" style="width: 40%; ">
									<div class="content" >
										<div class="row">
											<div class="col-md-6">
												<ul class="row-list">
													<li><a class="subcategory_item" href="faq.html">FAQ</a></li>
													
													<li><a class="subcategory_item" href="sitemap.html">Site Map</a></li>
													<li><a class="subcategory_item" href="contact.html">Contact us</a></li>
													<li><a class="subcategory_item" href="banner-effect.html">Banner Effect</a></li>
												</ul>
											</div>
											<div class="col-md-6">
												<ul class="row-list">
													<li><a class="subcategory_item" href="about-us.html">About Us 1</a></li>
													<li><a class="subcategory_item" href="about-us-2.html">About Us 2</a></li>
													<li><a class="subcategory_item" href="about-us-3.html">About Us 3</a></li>
													<li><a class="subcategory_item" href="about-us-4.html">About Us 4</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="with-sub-menu hover">
								<p class="close-menu"></p>
								<a href="#" class="clearfix">
									<strong>Categories</strong>
									<span class="label"></span>
									<b class="caret"></b>
								</a>
								<div class="sub-menu" style="width: 100%; display: none;">
									<div class="content">
										<div class="row">
											<div class="col-sm-12">
												<div class="row">
													<div class="col-md-3 img img1">
														<a href="#"><img src="{{asset('front_assets/image/demo/cms/img1.jpg')}}" alt="banner1"></a>
													</div>
													<div class="col-md-3 img img2">
														<a href="#"><img src="{{asset('front_assets/image/demo/cms/img2.jpg')}}" alt="banner2"></a>
													</div>
													<div class="col-md-3 img img3">
														<a href="#"><img src="{{asset('front_assets/image/demo/cms/img3.jpg')}}" alt="banner3"></a>
													</div>
													<div class="col-md-3 img img4">
														<a href="#"><img src="{{asset('front_assets/image/demo/cms/img4.jpg')}}" alt="banner4"></a>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-3">
												<a href="#" class="title-submenu">Automotive</a>
												<div class="row">
													<div class="col-md-12 hover-menu">
														<div class="menu">
															<ul>
																<li><a href="#"  class="main-menu">Car Alarms and Security</a></li>
																<li><a href="#"  class="main-menu">Car Audio &amp; Speakers</a></li>
																<li><a href="#"  class="main-menu">Gadgets &amp; Auto Parts</a></li>
																<li><a href="#"  class="main-menu">More Car Accessories</a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-3">
												<a href="#" class="title-submenu">Electronics</a>
												<div class="row">
													<div class="col-md-12 hover-menu">
														<div class="menu">
															<ul>
																<li><a href="#"  class="main-menu">Battereries &amp; Chargers</a></li>
																<li><a href="#"  class="main-menu">Headphones, Headsets</a></li>
																<li><a href="#"  class="main-menu">Home Audio</a></li>
																<li><a href="#"  class="main-menu">Mp3 Players &amp; Accessories</a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-3">
												<a href="#" class="title-submenu">Jewelry &amp; Watches</a>
												<div class="row">
													<div class="col-md-12 hover-menu">
														<div class="menu">
															<ul>
																<li><a href="#"  class="main-menu">Earings</a></li>
																<li><a href="#"  class="main-menu">Wedding Rings</a></li>
																<li><a href="#"  class="main-menu">Men Watches</a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-3">
												<a href="#" class="title-submenu">Bags, Holiday Supplies</a>
												<div class="row">
													<div class="col-md-12 hover-menu">
														<div class="menu">
															<ul>
																<li><a href="#"  class="main-menu">Gift &amp; Lifestyle Gadgets</a></li>
																<li><a href="#"  class="main-menu">Gift for Man</a></li>
																<li><a href="#"  class="main-menu">Gift for Woman</a></li>
																<li><a href="#"  class="main-menu">Lighter &amp; Cigar Supplies</a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							
							<li class="with-sub-menu hover">
								<p class="close-menu"></p>
								<a href="#" class="clearfix">
									<strong>Accessories</strong>
									
									<b class="caret"></b>
								</a>
								<div class="sub-menu" style="width: 100%; display: none;">
									<div class="content" style="display: none;">
										<div class="row">
											<div class="col-md-8">
												<div class="row">
													<div class="col-md-6 static-menu">
														<div class="menu">
															<ul>
																<li>
																	<a href="#"  class="main-menu">Automotive</a>
																	<ul>
																		<li><a href="#">Car Alarms and Security</a></li>
																		<li><a href="#" >Car Audio &amp; Speakers</a></li>
																		<li><a href="3#" >Gadgets &amp; Auto Parts</a></li>
																	</ul>
																</li>
																<li>
																	<a href="#"  class="main-menu">Smartphone &amp; Tablets</a>
																	<ul>
																		<li><a href="#" >Accessories for i Pad</a></li>
																		<li><a href="#" >Apparel</a></li>
																		<li><a href="#" >Accessories for iPhone</a></li>
																	</ul>
																</li>
															</ul>
														</div>
													</div>
													<div class="col-md-6 static-menu">
														<div class="menu">
															<ul>
																<li>
																	<a href="#" class="main-menu">Sports &amp; Outdoors</a>
																	<ul>
																		<li><a href="#" >Camping &amp; Hiking</a></li>
																		<li><a href="#" >Cameras &amp; Photo</a></li>
																		<li><a href="#" >Cables &amp; Connectors</a></li>
																	</ul>
																</li>
																<li>
																	<a href="#"  class="main-menu">Electronics</a>
																	<ul>
																		<li><a href="#" >Battereries &amp; Chargers</a></li>
																		<li><a href="#" >Bath &amp; Body</a></li>
																		<li><a href="#" >Outdoor &amp; Traveling</a></li>
																	</ul>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<span class="title-submenu">Bestseller</span>
												<div class="col-sm-12 list-product">
													<div class="product-thumb">
														<div class="image pull-left">
															<a href="#"><img src="{{asset('front_assets/image/demo/shop/product/35.jpg')}}" width="80" alt="Filet Mign" title="Filet Mign" class="img-responsive"></a>
														</div>
														<div class="caption">
															<h4><a href="#">Filet Mign</a></h4>
															<div class="rating-box">
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															</div>
															<p class="price">$1,202.00</p>
														</div>
													</div>
												</div>
												<div class="col-sm-12 list-product">
													<div class="product-thumb">
														<div class="image pull-left">
															<a href="#"><img src="{{asset('front_assets/image/demo/shop/product/W1.jpg')}}" width="80" alt="Dail Lulpa" title="Dail Lulpa" class="img-responsive"></a>
														</div>
														<div class="caption">
															<h4><a href="#">Dail Lulpa</a></h4>
															<div class="rating-box">
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															   <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
															</div>
															<p class="price">$78.00</p>
														</div>
													</div>
												</div>
												<div class="col-sm-12 list-product">
													<div class="product-thumb">
														<div class="image pull-left">
															<a href="#"><img src="{{asset('front_assets/image/demo/shop/product/141.jpg')}}" width="80" alt="Canon EOS 5D" title="Canon EOS 5D" class="img-responsive"></a>
														</div>
														<div class="caption">
															<h4><a href="#">Canon EOS 5D</a></h4>
															
															<div class="rating-box">
																<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
															</div>
															<p class="price">
																<span class="price-new">$60.00</span>
																<span class="price-old">$145.00</span>
																
															</p>
														</div>
													</div>
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="">
								<p class="close-menu"></p>
								<a href="blog-page.html" class="clearfix">
									<strong>Blog</strong>
									<span class="label"></span>
								</a>
							</li>
							
							<li class="hidden-md">
								<p class="close-menu"></p>
								<a href="#" class="clearfix">
									<strong>Buy Theme!</strong>
									
								</a>
							</li>
						</ul>
						
					</div>
				</div>
			</div>
		</div>
	</nav>
</div>
									</div>
			<!-- //end Main menu -->
			
		</div>
	</div>

</div>

<!-- Navbar switcher -->
<!-- //end Navbar switcher -->
	</header>
	<!-- //Header Container  -->