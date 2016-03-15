@extends('frontend.layout')
@section('content')



<section>
	<div class="container" style="margin: 100px auto auto auto;">
		<div id="jumbo" class="jumbotron" style="background: transparent;">
   		<div id="header1">Buy an art, feel your heart.</div>
    	<div id="header2">For every art you buy, we fill your heart with love.</div>
		<a href="/painting">
				<button type="submit" class="btn btn-Warning btn-lg"><span class="glyphicon glyphicon-shopping-cart"></span> &nbsp;Shop Now</button>			
    	</a>
    	</div>
	</div>
	
	<div class="container gallery" style="margin: 100px auto 50px auto;">
		<div id="newArtHead" class="container" style="background: #transparent;">
  				<h2>New Artwork For Sale</h2>
  				<p>Browse the latest original art. <span style="float: right; margin: 0px 15px 0px 0px;">See More</span></p>
  		</div>
  		
  		<div id="newArtGal" class="row collapse">
  		<?php
           $Source = DB::table('paintings')->get();
           foreach ($Source as $row){
        ?>
    		<div data-toggle="collapse" data-target="#frame<?php echo $row->paint_id ?>" class="col-lg-3 col-md-3 col-sm-6 col-xs-12 style parent">
    			<div class="thumbnail" style="cursor: pointer; background: #222; border: #222;">
        			<p><?php echo $row->paint_name ?></p>    
        			<img src="assets/images/gallery/<?php echo $row->paint_imgsrc ?>"  alt="<?php echo $row->paint_imgsrc ?>" class="img-responsive">
        			<p style="text-align: right;">P <?php echo $row->paint_price ?></p>
        			<p style="text-align: left;"><?php echo $row->paint_desc ?></p>
        		</div>
    		</div>
    		
			<div class="collapse" id="frame<?php echo $row->paint_id ?>" class="col-lg-3 col-md-3 col-sm-6 col-xs-12 collapse child">
    			<div class="frame">
        			<kbd class="exit" data-toggle="collapse" data-target="#frame<?php echo $row->paint_id ?>" style="cursor: pointer; float: right;background: #222;font: #000;margin: 5px;">x</kbd>
        			<p><?php echo $row->paint_name ?></p>    
        			<img src="assets/images/gallery/<?php echo $row->paint_imgsrc ?>"  alt="<?php echo $row->paint_imgsrc ?>" class="img-responsive">
        			<p style="text-align: right;">P <?php echo $row->paint_price ?></p>
        			<p style="text-align: left;"><?php echo $row->paint_desc ?></p>
        		</div>
    		</div>
        <?php } ?>
  		</div>
	</div>
	<div class="container gallery" style="margin: 100px auto 50px auto;">
		<div id="recArtHead" class="container" style="background: #transparent;">
  				<h2>Recently Sold Artwork</h2>
  				<p>Browse the recently sold original art. <span style="float: right; margin: 0px 15px 0px 0px;">See More</span></p>
  		</div>
  		<div id="recArtGal" class="row collapse">
    		<?php
           $Source = DB::table('paintings')->get();
           foreach ($Source as $row){
        ?>
    		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 style">
    			<div class="thumbnail" style="background: #222; border: #222;">
        			<p><?php echo $row->paint_name ?></p>    
        			<img src="assets/images/gallery/<?php echo $row->paint_imgsrc ?>"  alt="<?php echo $row->paint_imgsrc ?>" class="img-responsive">
        		</div>
    		</div>
        <?php } ?>
  		</div>
	</div>
</section>

@stop