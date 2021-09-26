
@extends('E-com.layouts.master')
@Section('content')
<div class="contact-box-main">

    <div class="container">
        @if(Session::has('flash_message_error'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </button>
    <strong>{{ session('flash_message_error') }}</strong>
    </div>
    @endif
    @if(Session::has('flash_message_success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </button>
    <strong>{{ session('flash_message_success') }}</strong>
    </div>
    @endif
	<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Account</a></li>
			<li><a href="#">My Account</a></li>
		</ul>
		
		<div class="row">
			<!--Middle Part Start-->
			<div class="col-sm-9" id="content">
				<h2 class="title">My Account</h2>
				<p class="lead">Hello, <strong>{{$userDetails->name}}</strong> - To update your account information.</p>
				<form action="{{url('/account')}}" method="POST" id="contactForm registerForm"> {{csrf_field()}}
					<div class="row">
						<div class="col-sm-6">
							<fieldset id="personal-details">
								<legend>Personal Details</legend>
								<div class="form-group required">
									<label for="input-firstname" class="control-label">Name</label>
									<input type="text" class="form-control" id="input-firstname" placeholder="Name" value="{{$userDetails->name}}" name="name">
								</div>
								<div class="form-group required">
									<label for="input-email" class="control-label">E-Mail</label>
									<input type="email" class="form-control" id="input-email" placeholder="E-Mail" value="{{$userDetails->email}}" name="email">
								</div>
								<div class="form-group required">
									<label for="input-telephone" class="control-label">Mobile</label>
									<input type="tel" class="form-control" id="input-telephone" placeholder="Mobile" value="{{$userDetails->mobile}}" name="mobile">
								</div>
							</fieldset>
							<br>
						</div>
						<div class="col-sm-6">
							<fieldset>
								<legend>Change Password</legend>
								<div class="form-group required">
									<label for="input-password" class="control-label">Old Password</label>
									<input type="password" class="form-control" id="input-password" placeholder="Old Password" value="" name="old-password">
								</div>
								<div class="form-group required">
									<label for="input-password" class="control-label">New Password</label>
									<input type="password" class="form-control" id="input-password" placeholder="New Password" value="" name="new-password">
								</div>
								<div class="form-group required">
									<label for="input-confirm" class="control-label">New Password Confirm</label>
									<input type="password" class="form-control" id="input-confirm" placeholder="New Password Confirm" value="" name="new-confirm">
								</div>
							</fieldset>

						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<fieldset id="address">
								<legend>Address</legend>
								<div class="form-group required">
									<label for="input-address-1" class="control-label">Address </label>
									<input type="text" class="form-control" id="input-address-1" placeholder="Address 1" value="{{$userDetails->address}}" name="address">
								</div>
								<div class="form-group required">
									<label for="input-city" class="control-label">City</label>
									<input type="text" class="form-control" id="input-city" placeholder="City" value="{{$userDetails->city}}" name="city">
								</div>
								<div class="form-group required">
									<label for="input-country" class="control-label">Country</label>
									<select class="form-control" id="input-country" name="country">
										<option value="{{$userDetails->country}}"> {{$userDetails->country}} </option>								   
									</select>
								</div>

							</fieldset>
						</div>

					</div>



					<div class="buttons clearfix">
						<div class="pull-right">
							<input type="submit" class="btn btn-md btn-primary" value="Save Changes">
						</div>
					</div>
				</form>
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
						<li><a href="{{url('/orders')}}">Order History</a>
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
				</div>
			</aside>
			<!--Right Part End -->
		</div>
	</div>
	<!-- //Main Container -->
	

@endsection