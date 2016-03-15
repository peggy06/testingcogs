@extends('frontend.layout')
@section('content')


<section>
<div class="log_sectionPosition">
<div class="row">
   			<div class="logpanel">
   			<center>
   			<h1>Login</h1>
   			</center><br>
   			
<form role="form" action="/admin" method="post">
  <div class="form-group">
    <input type="email" class="form-control" id="email" placeholder="Email Address / Username" size="30">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" id="pwd" placeholder="Password">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Login</button>&nbsp;<a href="\signup">Sign Up</a>
</form>

</div>
</div>
</div>
</section>

				
	@stop