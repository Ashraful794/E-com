@extends('E-com.layouts.master')
@Section('content')

	<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Order Infomation</a></li>
		</ul>
		@foreach($orderDetails->orders as $pro)		
		<div class="row">
			<!--Middle Part Start-->
			<div id="content" class="col-sm-9">
				<h2 class="title">Order Information</h2>

				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<td colspan="2" class="text-left">Order Details</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td style="width: 50%;" class="text-left"> <b>Order ID:</b> #{{$pro->product_id}}
								<br>
								<b>Date Added:</b> {{$pro->created_at}}</td>
							<td style="width: 50%;" class="text-left"> <b>Payment Method:</b> {{$orderDetails->payment_method}}
								<br>
						</tr>
					</tbody>
				</table>
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<td style="width: 50%; vertical-align: top;" class="text-left">Shipping Address</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-left">{{$orderDetails->name}}
								<br>{{$orderDetails->address}}
								<br>{{$orderDetails->city}}
								<br>{{$orderDetails->country}}
								
						</tr>
					</tbody>
				</table>
				<div class="table-responsive">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<td class="text-left">Product Name</td>
								<td class="text-right">Quantity</td>
								<td class="text-right">Price</td>
								<td class="text-right">Total</td>

							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-left">{{$pro->product_name}} </td>
								<td class="text-right">{{$pro->product_qty}}</td>
								<td class="text-right">{{$pro->product_price}}</td>
								<td class="text-right">{{$pro->product_qty * $pro->product_price}}</td>							
							</tr>

						</tbody>
						<tfoot>
							<tr>
								<td colspan="3"></td>
								<td class="text-right"><b>Sub-Total</b>
								</td>
								<td class="text-right">{{$pro->product_qty * $pro->product_price}}</td>
								<td></td>
							</tr>
							<tr>
								<td colspan="3"></td>
								<td class="text-right"><b>Flat Shipping Rate</b>
								</td>
								<td class="text-right">60</td>
								<td></td>
							</tr>

							<tr>
								<td colspan="3"></td>
								<td class="text-right"><b>Total</b>
								</td>
								<td class="text-right">{{$pro->product_qty * $pro->product_price +60}}</td>
								<td></td>
							</tr>
						</tfoot>
					</table>
				</div>
				<h3>Order History</h3>
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<td class="text-left">Date Added</td>
							<td class="text-left">Status</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-left">{{$orderDetails->updated_at}}</td>
							<td class="text-left">{{$orderDetails->order_status}}</td>
						</tr>
					</tbody>
				</table>
				<div class="buttons clearfix">
					<div class="pull-right"><a class="btn btn-primary" href="#">Continue</a>
					</div>
				</div>



			</div>
			<!--Middle Part End-->
			<!--Right Part Start -->
			<aside class="col-sm-3 hidden-xs" id="column-right">
				<h2 class="subtitle">Account</h2>
<div class="list-group">
	<ul class="list-item">
		<li><a href="login.html">Login</a>
		</li>
		<li><a href="register.html">Register</a>
		</li>
		<li><a href="#">Forgotten Password</a>
		</li>
		<li><a href="#">My Account</a>
		</li>
		<li><a href="#">Address Books</a>
		</li>
		<li><a href="wishlist.html">Wish List</a>
		</li>
		<li><a href="#">Order History</a>
		</li>
		<li><a href="#">Downloads</a>
		</li>
		<li><a href="#">Reward Points</a>
		</li>
		<li><a href="#">Returns</a>
		</li>
		<li><a href="#">Transactions</a>
		</li>
		<li><a href="#">Newsletter</a>
		</li>
		<li><a href="#">Recurring payments</a>
		</li>
	</ul>
</div>			</aside>
			<!--Right Part End -->
		</div>
	</div>
	<!-- //Main Container -->
@endforeach
@endsection