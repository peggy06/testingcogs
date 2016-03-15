@extends('frontend.layout')
@section('content')

<div class="container">
			<div class="account_grid">
				<div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">
					<h3>NEW CUSTOMERS</h3>
					<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
					<a class="acount-btn" href="register.html">Create an Account</a>
			   </div>
			   <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
					<h3>REGISTERED CUSTOMERS</h3>
					<p>You need to login first before you can buy our product. </p>
					 <small class="text-danger"> Invalid Email and Password !</small>
					 
					<form action="/auth" method="post">
						<div>
							<span>Email Address<label>*</label></span>
							<input type="email" name="email" required="required" style="font-size: 1em;width: 100%;padding: 5px 0px 5px 15px;border: solid 1px; !important"> 
						</div>
						<div>
							<span>Password<label>*</label></span>
							<input type="password" name="pass" required="required" style="font-size: 1em;width: 100%; border: solid 1px ; !important"> 
						</div>
						<a class="forgot" href="#">Forgot Your Password?</a>
						<input type="submit" value="Login">
					</form>
			   </div>	
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
@stop