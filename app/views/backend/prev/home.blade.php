@extends('backend.layout')
@section('content')

<section>
<div class="admin_sectionPosition">

				<h5><a href="edit-home" ><span class="glyphicon glyphicon-edit"></span> Edit</a></h5>
    			<h1>Buy an art, feel your heart.</h1> 
    			<h3>For every art you buy, we fill your heart with love.</h3>
    			<form class="form-inline" role="form" action="/gallery">
				<button type="submit" class="btn btn-Warning btn-lg"><span class="glyphicon glyphicon-shopping-cart"></span> &nbsp;Shop Now</button>
    				
    			</form>
 </div>
</section>


<footer class="index">
		<span class="foot"><small>
			<p><span class="glyphicon glyphicon-copyright-mark"></span> 2016 Chiaroscuro Online Gallery and Studio. Starmall | Bulacan, Philippines <br />Powered by: teamMode.org.ph</p></small></span>
  			<a href="/admin/logout">logout</a>
</footer>
@stop