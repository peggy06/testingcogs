@extends('frontend.layout')
@section('content')
<!-- banner -->

<?php foreach($_settings as $setIndex): ?>
<div class="banner" >
	<h1><?php echo $setIndex->bnnr_head; ?></h1>
<div class="container">
	<div class="banner-info">
		<h2><?php echo $setIndex->bnnr_subhead; ?></h2>
		<p><?php echo $setIndex->bnnr_info; ?></p>
	</div>
	</div>
</div>
<!-- banner -->
<!-- millons -->
<div class="millons">
	<div class="container">
		<div class="col-md-4 billon">
			<i class="ima"></i>
			<h4><?php echo $setIndex->ftre1_head; ?></h4>
			<p><?php echo $setIndex->ftre1_info; ?></p>
		</div>
		<div class="col-md-4 billon">
			<i class="ban"></i>
			<h4><?php echo $setIndex->ftre2_head; ?></h4>
			<p><?php echo $setIndex->ftre2_info; ?></p>
		</div>
		<div class="col-md-4 billon">
			<i class="art"></i>
			<h4><?php echo $setIndex->ftre3_head; ?></h4>
			<p><?php echo $setIndex->ftre3_info; ?></p>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- millons -->
<!-- socc -->
<div class="socc">
	<div class="container">
		<div class="col-md-4 soccer">
			<div class="view effect">
				<a href="/paintingGallery"><img src="assets/gallery/l2.jpg" class="img-responsive" alt=""></a>
			</div>
			<h4><?php echo $setIndex->prdct1_category; ?></h4>
		</div>
		<div class="col-md-4 soccer">
			<div class="view effect">
				<a href="/paintingGallery"><img src="assets/gallery/b2.jpg" class="img-responsive" alt=""></a>
			</div>
			<h4><?php echo $setIndex->prdct2_category; ?></h4>
		</div>
		<div class="col-md-4 soccer">
			<div class="view effect">
				<a href="/paintingGallery"><img src="assets/gallery/p9.jpg"  class="img-responsive" alt=""></a>
			</div>
			<h4><?php echo $setIndex->prdct3_category; ?></h4>
		</div>
			<div class="clearfix"> </div>
	</div>
</div>
<!-- socc -->
<!-- become -->
<div class="become">
	<div class="container">
		<div class="col-md-5 become-1">
			<h4>Become a part of ART </h4>
			<p>Enjoy and be inspire by the life of Artworks :)</p>
			<a href="/login" class="more">Join it now!</a>
		</div>
		<div class="col-md-7 become-2">
			<img src="assets/frontend/images/map.png" class="img-responsive" alt="">
		</div>
			<div class="clearfix"> </div>
	</div>
</div>
<!-- become -->

<?php endforeach; ?>
@stop