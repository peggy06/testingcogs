@extends('backend.layout')
@section('content')
			
			<form action="/admin/verify" method="post">
				<input type="text" name="fname" value="" placeholder="first name" /><br />
				<input type="password" name="lname" value="" placeholder="last name" /><br />
				<input type="submit" name="login" value="login"/>
			</form>
			
@stop