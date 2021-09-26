@extends('E-com.layouts.master')
@Section('content')

	<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Order History</a></li>
		</ul>
		
		<div class="row">
			<!--Middle Part Start-->
			<div id="content" class="col-sm-9">
				<h2 class="title">Order History</h2>
				<div class="table-responsive">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>

								<td class="text-center">Order ID</td>
								<td class="text-center">Status</td>
								<td class="text-right">Total</td>
								<td></td>
							</tr>
						</thead>
						<tbody>
                        @foreach($orders as $order)
							<tr>
								<td class="text-left">{{$order->id}}</td>
								<td class="text-center">{{$order->order_status}}</td>
								<td class="text-right">{{$order->grand_total}}</td>
								<td class="text-center"><a class="btn btn-info" title="" data-toggle="tooltip" href="{{url('/orders/'.$order->id)}}" data-original-title="View"><i class="fa fa-eye"></i></a>
								</td>
							</tr>
						@endforeach
						</tbody>
					</table>
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
		

@endsection