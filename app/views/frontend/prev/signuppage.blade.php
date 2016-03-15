@extends('frontend.layout')
@section('content')


<section>
<div class="log_sectionPosition">
<div class="row">
   			<div class="spanel">
   			<center>
   			<h1>Sign Up...</h1>
   			</center><br>
		<form class="form-inline" role="form" action="/login">
  <div class="form-group" style="float: left;">
  	Email:
  </div>
  <div class="form-group" style="float: right;">
    <input type="email" class="form-control" id="email" placeholder="Email Address" size="24">
  </div><br/><br/>
  <div class="form-group" style="float: left;">
  	Username:
  </div>
  <div class="form-group" style="float: right;">
    <input type="text" class="form-control" id="comment" placeholder="Desired Username" size="24">
  </div><br/><br/>
  <div class="form-group" style="float: left;">
  	Password:
  </div>
  <div class="form-group" style="float: right;">
    <input type="password" class="form-control" id="pwd"  placeholder="Password" size="24">
  </div><br/><br/>
  <div class="form-group" style="float: left;">
  	First Name:
  </div>
  <div class="form-group" style="float: right;">
    <input type="text" class="form-control" id="comment" placeholder="Firstname" size="24">
  </div> <br/><br/>
  <div class="form-group" style="float: left;">
  	Middle Name:
  </div>
  <div class="form-group" style="float: right;">
    <input type="password" class="form-control" id="pwd" placeholder="Middlename" size="24">
  </div> <br/><br/>
  <div class="form-group" style="float: left;">
  	Last Name:
  </div>
  <div class="form-group" style="float: right;">
    <input type="password" class="form-control" id="pwd" placeholder="Lastname" size="24">
  </div> <br/><br/>
  <button type="submit" class="btn btn-success" style="float: right";>Sign Up</button>
</form>

</div>
</div>
</div>
</section>

@stop