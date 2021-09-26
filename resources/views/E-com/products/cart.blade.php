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
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Shopping Cart</a></li>
		</ul>
		
		<div class="row">
			<!--Middle Part Start-->
        <div id="content" class="col-sm-12">
          <h2 class="title">Shopping Cart</h2>
            <div class="table-responsive form-group">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <td class="text-center">Image</td>
                    <td class="text-left">Product Name</td>
                    <td class="text-left">Color</td>
                    <td class="text-left">Quantity</td>
					<td class="text-right">Unit Price</td>
                    <td class="text-right">Total</td>
					<td class="text-right">Remove</td>

                  </tr>
                </thead>
                <tbody>
				<?php $total_amount = 0; ?>
				@foreach($userCart as $cart)
                  <tr>
                    <td class="text-center"><img width="70px" src="{{asset('/uploads/products/'.$cart->image)}}" alt="Aspire Ultrabook Laptop" title="Aspire Ultrabook Laptop" class="img-thumbnail" /></td>
                    <td class="text-left">{{$cart->product_name}}<br />
                     </td>
                    <td class="text-left">{{$cart->product_color}}</td>
					<td class="text-left" width="200px">
							<a href="{{url('/cart/update-quantity/'.$cart->id.'/1')}}"  style="font-size:20px;">+</a>
							<input type="text" size="4" value="{{$cart->quantity}}" min="0" step="1" class="c-input-text qty text">
							@if($cart->quantity>1)
							<a href="{{url('/cart/update-quantity/'.$cart->id.'/-1')}}"  style="font-size:20px;">-</a>
						   @endif
						</td>
                    <td class="text-right">{{$cart->price}}</td>
                    <td class="text-right">{{$cart->price*$cart->quantity}}</td>
					<td class="remove-pr">
					<a href="{{url('/cart/delete-product/'.$cart->id)}}" class="btn btn-danger">Remove</a>
                    </td>
                  </tr>
				  <?php $total_amount = $total_amount + ($cart->price*$cart->quantity); ?>
			@endforeach
                </tbody>
              </table>
            </div>

          <h3 class="subtitle no-margin">What would you like to do next?</h3>
          <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
		  <div class="panel-group" id="accordion">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a href="#collapse-coupon" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" aria-expanded="true">Use Coupon Code 
							
							<i class="fa fa-caret-down"></i>
						</a>
					</h4>
				</div>
				<div id="collapse-coupon" class="panel-collapse collapse in" aria-expanded="true">
					<div class="panel-body">
					<form action="{{url('/cart/apply-coupon')}}" method="post"> {{csrf_field()}}
						<label class="col-sm-2 control-label" for="input-coupon">Enter your coupon here</label>
						<div class="input-group">
							<input type="text" name="coupon_code" value="" placeholder="Enter your coupon here" id="input-coupon" class="form-control">
							<span class="input-group-btn"><button class="btn btn-primary" type="submit">Apply Coupon</button></span>
						</div>
					</div>
					</form>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a href="#collapse-shipping" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" aria-expanded="false">Estimate Shipping &amp; Taxes 
							
							<i class="fa fa-caret-down"></i>
						</a>
					</h4>
				</div>
				<div id="collapse-shipping" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
					<div class="panel-body">
						<p>Enter your destination to get a shipping estimate.</p>
						<div class="form-horizontal">
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-country">Country</label>
								<div class="col-sm-10">
									<select name="country_id" id="input-country" class="form-control">
										<option value=""> --- Please Select --- </option>
										<option value="244">Aaland Islands</option>
										<option value="1">Afghanistan</option>
										<option value="2">Albania</option>
										<option value="3">Algeria</option>
									</select>
								</div>
							</div>
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-zone">Region / State</label>
								<div class="col-sm-10">
									<select name="zone_id" id="input-zone" class="form-control">
										<option value=""> --- Please Select --- </option>
										<option value="3513">Aberdeen</option>
										<option value="3514">Aberdeenshire</option>
										<option value="3515">Anglesey</option>
										<option value="3516">Angus</option>
										<option value="3517">Argyll and Bute</option>
										<option value="3518">Bedfordshire</option>
										<option value="3519">Berkshire</option>
									</select>
								</div>
							</div>
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-postcode">Post Code</label>
								<div class="col-sm-10"><input type="text" name="postcode" value="" placeholder="Post Code" id="input-postcode" class="form-control"></div>
							</div>
								<button type="button" id="button-quote" data-loading-text="Loading..." class="btn btn-primary">Get Quotes</button>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a href="#collapse-voucher" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle collapsed" aria-expanded="false">Use Gift Certificate 
							
							<i class="fa fa-caret-down"></i>
						</a>
					</h4>
				</div>
				<div id="collapse-voucher" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
					<div class="panel-body">
						<label class="col-sm-2 control-label" for="input-voucher">Enter your gift certificate code here</label>
						<div class="input-group">
							<input type="text" name="voucher" value="" placeholder="Enter your gift certificate code here" id="input-voucher" class="form-control">
							<span class="input-group-btn"><input type="submit" value="Apply Gift Certificate" id="button-voucher" data-loading-text="Loading..." class="btn btn-primary"></span>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="row">
			<div class="col-sm-4 col-sm-offset-8">
				<table class="table table-bordered">
					<tbody>
					@if(!empty(Session::get('CouponAmount')))
						<tr>
							<td class="text-right">
								<strong>Sub-Total:</strong>
							</td>
							<td class="text-right">BDT <?php echo $total_amount; ?></td>
						</tr>

						<tr>
							<td class="text-right">
								<strong>Coupon Discount:</strong>
							</td>
							<td class="text-right">BDT <?php echo Session::get('CouponAmount'); ?></td>
						</tr>
						<tr>
							<td class="text-right">
								<strong>Total:</strong>
							</td>
							<td class="text-right">BDT <?php echo $total_amount - Session::get('CouponAmount'); ?> </td>
						</tr>
						</tbody>
				</table>
			</div>
		</div>
						@else
						<tr>
							<td class="text-right">
								<strong>Total:</strong>
							</td>
							<td class="text-right">BDT <?php echo $total_amount; ?> </td>
						</tr>

					</tbody>
				</table>
			</div>
		</div>
		@endif
		 <div class="buttons">
            <div class="pull-left"><a href="{{url('/')}}" class="btn btn-primary">Continue Shopping</a></div>
            <div class="pull-right"><a href="{{url('/checkout')}}" class="btn btn-primary">Checkout</a></div>
          </div>
        </div>

        <!--Middle Part End -->
			
		</div>
	</div>
	<!-- //Main Container -->
	
    </body>
@endsection