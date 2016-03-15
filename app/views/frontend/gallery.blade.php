@extends('frontend.layout')
@section('content')
<div class="products">
<div class="products-1">
<div class="container">
			<div class="content_top">
	    		<div class="heading">
	    			<h3>New Products</h3>
	    		</div>
	    		
				<?php if($account=="null"): ?>
	    		<a href="/paintingGallery">
	    			<span style="float: right;">See More</span>
	    		</a>
	    		
				<?php elseif($account=="!null"):?>
				
	    		<a href="/album">
	    			<span style="float: right;">See More</span>
	    		</a>
				<?php endif;?>
	    		<div class="clearfix"> </div>
    	    </div>
    		<div class="section group">
    		<div class="container row">
    		<?php foreach($_painting as $artworks): ?>
    		
				<div class="col_1_of_4 span_1_of_4 col-md-3" style="margin: 5px;">
						<div class="view effect">
					        <a href="/frame<?php echo $artworks->paint_id; ?>"><img src="assets/gallery/<?php echo $artworks->paint_imgsrc; ?>" class="img-responsive" alt="" style="width: 260px; height: 182px;"></a>
					     </div>
							<div class="cart">
								<p class="title"> 
								<?php if($account=="null"): ?>
								<a href="/frame<?php echo $artworks->paint_id; ?>"><?php echo $artworks->paint_name; ?></a></p>
								<?php elseif($account=="!null"): ?>
								<a href="/framewithuser<?php echo $artworks->paint_id; ?>"><?php echo $artworks->paint_name; ?></a></p>
								<?php endif; ?>
								<div class="price">
				        				<span class="actual">P <?php echo $artworks->paint_price; ?>.00</span>
				        		</div>
							</div>
				</div>
			<?php endforeach;?>
			</div>	
			</div>
</div>
</div>

<div class="products-1">
<div class="container">
			<div class="content_top">
	    		<div class="heading">
	    			<h3>Recently Sold Products</h3>
	    			
	    		</div>
	    		
	    		<div class="clearfix"> </div>
    	    </div>
    		<div class="section group">
    		<div class="container row">
    		<?php foreach($_paintingsold as $artworks): ?>
    		
				<div class="col_1_of_4 span_1_of_4 col-md-3" style="margin: 5px;">
						<div class="view effect">
					        <a href="/frame<?php echo $artworks->paint_id; ?>"><img src="assets/gallery/<?php echo $artworks->paint_imgsrc; ?>" class="img-responsive" alt="" style="width: 100px; height: 100px;"></a>
					     </div>
							<div class="cart">
								<p class="title"> <a href="/frame<?php echo $artworks->paint_id; ?>"><?php echo $artworks->paint_name; ?></a></p>
								<div class="price">
				        				<span class="actual">P <?php echo $artworks->paint_price; ?>.00</span>
				        		</div>
							</div>
				</div>
			<?php endforeach;?>
			</div>	
			</div>
</div>
</div>
@stop