@extends('frontend.layout')
@section('content')

		<div class="container">
			<div class="check-out">
				<h4 class="title">Shopping cart</h4>
				<table class="table table-striped responsive-utilities jambo_table bulk_action">
							<thead>
								<tr class="headings">
									<th class="column-title">
										Product #
									</th>
									<th class="column-title">
										Product Image
									</th>
									<th class="column-title">
										Product Name
									</th>
									<th class="column-title">
										Product Description
									</th>
									<th class="column-title">
										Price
									</th>
									<th class="column-title no-link last">
										<span class="nobr">
											Action
										</span>
									</th>
                                </tr>
                            </thead>
                            
                            
                            <!--start class view-->
                            <tbody>
                            <!--table content-->
                            
                            <?php foreach($_cart_item as $artworks): ?><!--start artworks iteration for class view-->
                            
	                            <tr class="even pointer">
	                            
	                            	<td class=" ">
	                            	
	                            		<?php echo $artworks->product_id; ?>
	                            		
	                            	</td>
	                            	<td class=" ">
	                            		<img src="assets/gallery/<?php echo $artworks->product_src; ?>" width="100px" height="100px" class="responsive"/>
	                            	</td>
	                            	<td class=" ">
	                            	
	                            		<?php echo $artworks->product_name; ?>
	                            		
	                            	</td>
	                            	<td class=" ">
	                            	
	                            		<?php echo $artworks->product_desc; ?>
	                            		
	                            	</td>
		                            <td class="a-right a-right ">
		                            	P <?php echo $artworks->product_price; 
		                            				$_total = $_total + $artworks->product_price?>.00
		                            </td>
		                            <td class=" last">
		                            	<a href="/removecartitem<?php echo $artworks->product_id; ?>">REMOVE</a>
		                            </td>
	                            </tr>
	                            
                            <?php endforeach; ?><!--end artworks iteration for class view-->
                            	
                            </tbody>
                            <!--end class view-->
                            
                            <!--start class trashbin-->
                           </table>
                           <br>
				<p class="cart">You have <?php echo $_count; ?> item/s in your shopping cart.<span style="float: right">Total Price: P <?php echo $_total ?>.00</span>
				<br>Click<a href="/album"> here</a> to continue shopping<span style="float: right;"><a href="/send_email"><button type="button" class="btn btn-success">Buy Now</button></a></span></p>
			</div>
		</div>
	</div>
		
			<?php if(isset($error))
					{
						echo $error;
					}
			
			?>
@stop