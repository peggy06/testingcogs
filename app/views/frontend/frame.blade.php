@extends('frontend.layout')
@section('content')

<div class="main">
		<div class="main-top">
		<div class="container" >
			<div class="section group" >
			
    		<?php foreach($_painting as $artworks): ?>
    		
				<div class="content span_1_of_2">				
					<div class="grid images_3_of_2">
						<img src="assets/gallery/<?php echo $artworks->paint_imgsrc ?>" class="img-responsive" alt=""/>
					</div>
					<div class="desc span_3_of_2">
						<h3><?php echo $artworks->paint_name ?></h3>
					<div class="desc">
                	<span class="brand">Image Source: <?php echo $artworks->paint_imgsrc ?></span><br>
                	<span class="code">Product Code: Product <?php echo $artworks->paint_id ?></span><br>
                	<div class="padd-stock"> <div class="extra-wrap"> <span class="prod-stock-2">Availability:</span>
                 	<div class="prod-stock">
                	<?php
		                            		if($artworks->qnty==1){
		                            			echo('In Stock');
		                            		}
		                            		elseif($artworks->qnty==0){
		                            			echo('Out of Stock');
		                            		}
		                            		else{
		                            			echo('Sold');
		                            		}
		                            	?>
                 	</div></div></div>
           			 <div class="price">
        				<span class="text">Price: P <?php echo $artworks->paint_price ?>.00</span>
                     </div>
                  		<div class="single-cart">
			        	<div class="prod-row">
			          	<div class="cart-top">
			            <div class="cart-top-padd">
			                <label>Qty:</label>
			                <input type="text" name="quantity" size="2" value="<?php echo $artworks->qnty ?>" disabled="disabled">
			                <input type="hidden" name="product_id" size="2" value="47">
			              </div>
			             
								<?php if($account=="!null"): ?>
			              			<a href="/addtocart<?php echo $artworks->paint_id; ?>"><button type="button" class="button6">Add to Cart</button></a>
			              		<?php elseif($account=="null"): ?>
			              			<a href="/login" value="Add to Cart" class="button">Add to cart</a>
			              		<?php endif; ?>
			              <br/>
			              <br/>
			              <p class="para"><?php echo $artworks->paint_desc ?></p>
			          </div>
        			</div>
        		</div>
          </div>
				</div>
				
				</div>
				</div>
				</div>
				</div>
				</div>
<?php endforeach;?>
@stop