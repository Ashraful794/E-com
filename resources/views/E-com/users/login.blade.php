@extends('E-com.layouts.master')
@Section('content')

	<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Account</a></li>
			<li><a href="#">Login</a></li>
		</ul>
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






		<div class="row">
			<div id="content" class="col-sm-12">
				<div class="page-login">
				
					<div class="account-border">
						<div class="row">
							<div class="col-sm-6 new-customer">
								<div class="well">
									<h2><i class="fa fa-file-o" aria-hidden="true"></i> New Customer</h2>
									<p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
								</div>
								<div class="bottom-form">
									<a href="#" class="btn btn-default pull-right">Continue</a>
								</div>
							</div>
							
							<form action="{{url('/login_page')}}" method="post" enctype="multipart/form-data">{{csrf_field()}}
								<div class="col-sm-6 customer-login">
									<div class="well">
										<h2><i class="fa fa-file-text-o" aria-hidden="true"></i> Returning Customer</h2>
										<p><strong>I am a returning customer</strong></p>
										<div class="form-group">
											<label class="control-label " for="input-email">E-Mail Address</label>
											<input type="text" name="email" value="" id="input-email" class="form-control" />
										</div>
										<div class="form-group">
											<label class="control-label " for="input-password">Password</label>
											<input type="password" name="password" value="" id="input-password" class="form-control" />
										</div>
									</div>
									<div class="bottom-form">
										<a href="#" class="forgot">Forgotten Password</a>
										<input type="submit" value="Login" class="btn btn-default pull-right" />
									</div>
								</div>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- //Main Container -->
	

    </body>
@endsection