@extends('backend.layout')
@section('content')

<section>
	<div class="acct_sectionPosition">
		<div class="row">
   			<div class="acctpanel">
   				<center>
   					<h1>Account Settings</h1>
   				</center><br>
   				<p>
   					<span style="float: left;">First Name:</span>
   					<span style="float: right;">Jimuel <a href=""><span class="glyphicon glyphicon-edit" style="margin: 0 0 0 10;"></span></a></span><br/>
   					<span style="float: left;">Middle Name:</span>
   					<span style="float: right;">Bulanadi <a href=""><span class="glyphicon glyphicon-edit" style="margin: 0 0 0 10;"></span></a></span><br/>
   					<span style="float: left;">Last Name:</span>
   					<span style="float: right;">Palaca <a href=""><span class="glyphicon glyphicon-edit" style="margin: 0 0 0 10;"></span></a></span><br/><br>
   					<span style="float: left;">Email:</span>
   					<span style="float: right;">jimuelpalaca@gmail.com <a href=""><span class="glyphicon glyphicon-edit" style="margin: 0 0 0 10;"></span></a></span><br/>
  					<span style="float: left;">Username:</span>
   					<span style="float: right;">jimuelpalaca <a href=""><span class="glyphicon glyphicon-edit" style="margin: 0 0 0 10;"></span></a></span><br/>
   					<span style="float: left;">Password:</span>
   					<span style="float: right;">************* <a href=""><span class="glyphicon glyphicon-edit" style="margin: 0 0 0 10;"></span></a></span><br/>	
   					
   				</p><br />
   			
   				<form action="/admin">
 					 <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok-sign"></span>&nbsp;Done</button></a>
				</form>
   			</div>
   		</div>
   	</div>
</section>

@stop