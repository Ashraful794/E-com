@extends('E-com.layouts.master')
@Section('content')
<div class="cart-box-main">
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


<form name="addtoCart" method="post" action="{{url('/add-wishlist')}}">{{csrf_field()}}
	<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Account</a></li>
			<li><a href="#">My Wish List</a></li>
		</ul>
		
		<div class="row">
			<!--Middle Part Start-->
			<div id="content" class="col-sm-12">
				<h2 class="title">My Wish List</h2>
				<div class="table-responsive">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<td class="text-center">Image</td>
								<td class="text-left">Product Name</td>
								<td class="text-left">Product Color</td>
								<td class="text-left">Product Size</td>
								<td class="text-right">Unit Price</td>
								<td class="text-right">Action</td>
							</tr>
						</thead>
						<tbody>
						@foreach($userCart as $cart)
							<tr>
								<td class="text-center">
									<img width="70px" src="{{asset('/uploads/products/'.$cart->image)}}" alt="Aspire Ultrabook Laptop" title="Aspire Ultrabook Laptop">
									
								</td>
								<td class="text-left">{{$cart->product_name}}
								</td>
								<td class="text-left">
								{{$cart->product_color}}
								</td>
								<td class="text-left">
								{{$cart->size}}
								</td>

								<td class="text-right">
									<div class="price"> {{$cart->price}} </div>
								</td>
							
							
							
							<input type="hidden" value="{{$cart->product_id}}" name="product_id">
                            <input type="hidden" value="{{$cart->product_name}}" name="product_name">

							<input type="hidden" value="{{$cart->product_color}}" name="color">
                            <input type="hidden" value="{{$cart->size}}" name="size">

                            <input type="hidden" value="{{$cart->product_code}}" name="product_code">
                            <input type="hidden" id="price" value="{{$cart->price}}" name="price">
							<input type="hidden" value="{{$cart->quantity}}" name="quantity">

								<td class="text-right">
									<button class="btn btn-primary"
									title="" data-toggle="tooltip"
									
									type="submit" data-original-title="Add to Cart"><i class="fa fa-shopping-cart"></i>
									</button>
									<a class="btn btn-danger" title="" data-toggle="tooltip" href="{{url('/wishlist/delete-product/'.$cart->id)}}"data-original-title="Remove"><i class="fa fa-times"></i></a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>

			<!--Middle Part End-->
			
		</div>
	</div>
	<!-- //Main Container -->
</form>

@endsection