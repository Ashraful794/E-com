
@extends('E-com.layouts.master')
@Section('content')

	<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Account</a></li>
			<li><a href="#">Register</a></li>
		</ul>
		
		<div class="row">
			<div id="content" class="col-sm-12">
				<h2 class="title">Register Account</h2>
				<p>If you already have an account with us, please login at the <a href="{{url('/login_page')}}">login page</a>.</p>
				
				
				
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






				
				<form action="{{url('/register_page')}}" method="post" enctype="multipart/form-data" class="form-horizontal account-register clearfix">{{csrf_field()}}
					<fieldset id="account">
						<legend>Your Personal Details</legend>
						<div class="form-group required" style="display: none;">
							<label class="col-sm-2 control-label">Customer Group</label>
							<div class="col-sm-10">
								<div class="radio">
									<label>
										<input type="radio" name="customer_group_id" value="1" checked="checked"> Default
									</label>
								</div>
							</div>
						</div>
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-firstname"> Name</label>
							<div class="col-sm-10">
								<input type="text" name="name" value="" placeholder="Name" id="input-name" class="form-control" required>
							</div>
						</div>

						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-email">E-Mail</label>
							<div class="col-sm-10">
								<input type="email" name="email" value="" placeholder="E-Mail" id="input-email" class="form-control" required>
							</div>
						</div>
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-telephone">Phone Number</label>
							<div class="col-sm-10">
								<input type="tel" name="mobile" value="" placeholder="Phone Number" id="input-telephone" class="form-control" required>
							</div>
						</div>
					</fieldset>
					<fieldset id="address">
						<legend>Your Address</legend>
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-address-1">Address </label>
							<div class="col-sm-10">
								<input type="text" name="address" value="" placeholder="Address" id="input-address" class="form-control" required>
							</div>
						</div>
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-city">City</label>
							<div class="col-sm-10">
								<input type="text" name="city" value="" placeholder="City" id="input-city" class="form-control" required>
							</div>
						</div>
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-country">Country</label>
							<div class="col-sm-10">
								<select name="country_id" id="input-country" class="form-control" required> 
									<option value="Bangladesh">Bangladesh </option>
								</select>
							</div>
						</div>
					</fieldset>
					<fieldset>
						<legend>Your Password</legend>
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-password">Password</label>
							<div class="col-sm-10">
								<input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control" required>
							</div>
						</div>
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-confirm">Password Confirm</label>
							<div class="col-sm-10">
								<input type="password" name="confirm" value="" placeholder="Password Confirm" id="input-confirm" class="form-control">
							</div>
						</div>
					</fieldset>
					<fieldset>
						<legend>Newsletter</legend>
						<div class="form-group">
							<label class="col-sm-2 control-label">Subscribe</label>
							<div class="col-sm-10">
								<label class="radio-inline">
									<input type="radio" name="newsletter" value="1"> Yes
								</label>
								<label class="radio-inline">
									<input type="radio" name="newsletter" value="0" checked="checked"> No
								</label>
							</div>
						</div>
					</fieldset>
					<div class="buttons">
							<input type="submit" value="Continue" class="btn btn-primary">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- //Main Container -->

	</body>
@endsection