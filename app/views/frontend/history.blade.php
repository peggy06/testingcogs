@extends('frontend.layout')
@section('content')

<div class="login-page">
<h1>This is our Journey</h1>
<div class="login-page">
		<div class="container">
			<div class="check-out">
				<h4 class="title">Brief History of Chiaroscuro Artworks and Gallery Shop</h4>
				
<?php foreach($_history as $history): ?>
				<p class="cart"><?php echo $history->History; ?></p>
<?php endforeach; ?>
				<div class="clearfix"> </div>
				<br />
				<br />
				<br />
		   </div>
		 </div>




@stop