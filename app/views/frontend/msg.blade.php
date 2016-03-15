<html>
<head>
</head>
<body>
<p><h4 style="background: #2a3946;color: #fff;padding: 10px;">
	Dear <?php echo $user_lname?>, <?php echo $user_fname?> <?php echo $user_mname?>, </h4><br />
	<h2 style="font: #222;">Your Order has ready to go.</h2>
	
	<p>
		<b>Here is your Order Verification Code:</b><br />
		 <i><?php echo $order_verCode?></i>
	</p>
	
</p><br />

<p><h4>Your Purchasing Information</h4></p>

<hr>
<table width="100%" style="padding: 10px;margin: 5px;" >
							<thead>
								<tr class="headings">
									<th class="column-title">
										Product #
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
                                </tr>
                            </thead>
                            
                            
                            <!--start class view-->
                            <tbody>
                            <!--table content-->
                            
                            <?php 
                            	foreach($_cart_item as $artworks): ?><!--start artworks iteration for class view-->
                            
	                            <tr class="even pointer">
	                            
	                            	<td class=" ">
	                            		<center>
	                            		<?php echo $artworks->product_id; ?>
	                            		</center>
	                            	</td>
	                            	<td class=" ">
	                            		<center>
	                            		<?php echo $artworks->product_name; ?>
	                            		</center>
	                            	</td>
	                            	<td class=" ">
	                            		<center>
	                            		<?php echo $artworks->product_desc; ?>
	                            		</center>
	                            	</td>
		                            <td class="a-right a-right ">
		                            <center>
		                            	P <?php echo $artworks->product_price; 
		                            				$_total = $_total + $artworks->product_price?>.00
		                            </center>
		                            </td>
	                            </tr>
	                            
                            <?php 
                           	endforeach; ?><!--end artworks iteration for class view-->
                            	
                            </tbody>
                            <!--end class view-->
                            
                            <!--start class trashbin-->
                           </table>
                           <hr />
<p>

	<span>Order ID: <?php echo $artworks->order_id; ?></span><br />
	<span>Item/s Ordered: <?php echo $_count; ?></span><br />
	<span >Order Total: P <?php echo $_total ?>.00</span><br />
</p>
<p><h4>Thank you,<br /> Chiaroscuro Artworks</h4></p>
</body>
</html>