@extends('frontend.layout')
@section('content')
<div class="products">
<div class="products-1">
<div class="container">
			<div class="content_top">
	    		<div class="heading">
	    			<h3>Painting Products</h3>
	    		</div>
	    		<div class="clearfix"> </div>
    	    </div>
    		<div class="section group">
    		<div class="container row">
    		<?php foreach($_painting as $artworks): ?>
    		
				<div class="col_1_of_4 span_1_of_4 col-md-3" style="margin: 5px;">
							<div class="cart">
								<?php if($account=="null"): ?>
								
								<div class="view effect">
					        		<a href="/frame<?php echo $artworks->paint_id; ?>"><img src="assets/gallery/<?php echo $artworks->paint_imgsrc; ?>" class="img-responsive" alt="" style="width: 260px; height: 182px;"></a>
					     		</div>
								<p class="title"><a href="/frame<?php echo $artworks->paint_id; ?>"><?php echo $artworks->paint_name; ?></a></p>
								
									<a href="/login" value="Add to Cart" class="button">Add to cart</a>
								
								<?php elseif($account=="!null"): ?>
								
								<div class="view effect">
					        		<a href="/viewer<?php echo $artworks->paint_id; ?>"><img src="assets/gallery/<?php echo $artworks->paint_imgsrc; ?>" class="img-responsive" alt="" style="width: 260px; height: 182px;"></a>
					     		</div>
								<p class="title"><a href="/frame<?php echo $artworks->paint_id; ?>"><?php echo $artworks->paint_name; ?></a></p>
								
									<a href="/addtocart<?php echo $artworks->paint_id; ?>" value="Add to Cart" class="button">Add to cart</a>
								<?php endif;?>
							</div>
				</div>
			<?php endforeach;?>
			</div>	
			</div>
</div>
</div>
</div>
@stop