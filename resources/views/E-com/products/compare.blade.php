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
	<!-- Main Container  -->

    <form name="addtoCart" method="post" action="{{url('/add-compare')}}">{{csrf_field()}}

    <div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Product Comparison</a></li>
			
		</ul>
		
		<div class="row">
			<!--Middle Part Start-->
			<div id="content" class="col-sm-12">
			  <h2 class="title">Product Comparison</h2>
			  <div class="table-responsive">
				<table class="table table-bordered table-hover">
                <thead>
					<tr>
					  <td colspan="4"><strong>Product Details</strong></td>
					</tr>
				  </thead>
         
				  <tbody>

					<tr>
					  <td>Product</td>
                      @foreach($userCart as $cart)
					  <td>{{$cart->product_name}}</td>

                      @endforeach
					</tr>
					<tr>
					  <td>Image</td>
                      @foreach($userCart as $cart)
					  <td class="text-center"><img class="img-thumbnail" title="Laptop Silver black" alt="Laptop Silver black" width="100px" src="{{asset('/uploads/products/'.$cart->image)}}"></td>
                    @endforeach
                    </tr>
					<tr>
					  <td>Price</td>
                      @foreach($userCart as $cart)
					  <td><div class="price"><span class="price-new">{{$cart->price}}</span> </div></td>
					@endforeach
                    </tr>
				  </tbody>							
					<tr>
                    <td></td>
                    @foreach($userCart as $cart)
					  <td><input type="submit" onClick="" class="btn btn-primary btn-block" value="Add to Cart">
					  <a class="btn btn-danger btn-block" href="{{url('/compare/delete-product/'.$cart->id)}}">Remove</a></td>
                            <input type="hidden" value="{{$cart->product_id}}" name="product_id">
                            <input type="hidden" value="{{$cart->product_name}}" name="product_name">

							<input type="hidden" value="{{$cart->product_color}}" name="color">
                            <input type="hidden" value="{{$cart->size}}" name="size">

                            <input type="hidden" value="{{$cart->product_code}}" name="product_code">
                            <input type="hidden" id="price" value="{{$cart->price}}" name="price">
							<input type="hidden" value="{{$cart->quantity}}" name="quantity">

					@endforeach
                    </tr>
				  </tbody>
				</table>
			  </div>
			</div>
			<!--Middle Part End -->
			
		</div>
	</div>
	<!-- //Main Container -->
</form>
@endsection
	