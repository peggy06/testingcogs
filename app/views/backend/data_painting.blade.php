@extends('backend.layout')
@section('content')

<!-- page content -->
<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>
					<?php echo $page; ?>
				</h3>
			</div>
			<div class="title_right">
				<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search for...">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button">Go!</button>
                        </span>
					</div>
				</div>
			</div>
		</div>
		
		<div class="clearfix"></div>
		
		<div class="row">
			
			<?php if($panel=="view"): ?><!--start panel condition-->
			<!--start of view panel-->
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>
							<?php echo $page; ?> | <small> Reports about paintings</small>
						</h2>
						
						<div class="clearfix"></div>
						
					</div>
					
					<div class="x_content">
						<p>
							<a href="/addpainting">
								<span class="fa fa-plus-circle"></span> Add new painting.
							</a>  |
							
							<?php if($class=="view"): ?>
							
								<a href="/paintingtrashbin">
									<span class="fa fa-trash"></span> Trash Bin
								</a>
							
							<?php elseif($class=="trashbin"): ?>
							
								<a href="/gallerypainting">
									<span class="fa fa-paint-brush"></span> Painting List
								</a>
							<?php endif ?>
						</p>
						<table class="table table-striped responsive-utilities jambo_table bulk_action">
							<thead>
								<tr class="headings">
									<th class="column-title">
										ID
									</th>
									<th class="column-title">
										Painting Image
									</th>
									<th class="column-title">
										Painting Name
									</th>
									<th class="column-title">
										Description
									</th>
									<th class="column-title">
										Status
									</th>
									<th class="column-title">
										Amount
									</th>
									<th class="column-title no-link last">
										<span class="nobr">
											Action
										</span>
									</th>
                                </tr>
                            </thead>
                            
                            <?php if($class=="view"): ?><!--start class condition-->
                            <!--start class view-->
                            <tbody>
                            <!--table content-->
                            
                            <?php foreach($_painting as $artworks): ?><!--start artworks iteration for class view-->
                            
	                            <tr class="even pointer">
	                            
	                            	<td class=" ">
	                            	
	                            		<?php echo $artworks->paint_id; ?>
	                            		
	                            	</td>
	                            	<td class=" ">
	                            		<img src="assets/gallery/<?php echo $artworks->paint_imgsrc; ?>" width="100px" height="100px" class="responsive"/>
	                            	</td>
	                            	<td class=" ">
	                            	
	                            		<?php echo $artworks->paint_name; ?>
	                            		
	                            	</td>
	                            	<td class=" ">
	                            	
	                            		<?php echo $artworks->paint_desc; ?>
	                            		
	                            	</td>
	                            	<td class=" ">
	                            	
		                            	<?php
		                            		if($artworks->paint_status==1){
		                            			echo('New');
		                            		}
		                            		elseif($artworks->paint_status==2){
		                            			echo('Old');
		                            		}
		                            		else{
		                            			echo('Sold');
		                            		}
		                            	?>
		                            	
	                            	</td>
		                            <td class="a-right a-right ">
		                            	P <?php echo $artworks->paint_price; ?>.00
		                            </td>
		                            <td class=" last">
		                            	<a href="/editpainting<?php echo $artworks->paint_id; ?>">Edit</a> | 
		                            	<a href="/confirmdelete<?php echo $artworks->paint_id; ?>">Delete</a>
		                            </td>
	                            </tr>
	                            
                            <?php endforeach; ?><!--end artworks iteration for class view-->
                            	
                            </tbody>
                            <!--end class view-->
                            
                            <?php elseif($class=="trashbin"): ?>
                            <!--start class trashbin-->
                            <tbody>
                            
                            <?php foreach($_painting as $artworks): ?><!--start artworks iteration for class trashbin-->
                            
                            	<tr class="even pointer">
                                    <td class=" ">
                                    	<?php echo $artworks->paint_id; ?>
                                    	
                                    </td>
                                    <td class=" ">
                                    	<img src="assets/gallery/<?php echo $artworks->paint_imgsrc; ?>" width="100px" height="100px" class="responsive"/>
                                    </td>
                                    <td class=" ">
                                    	<?php echo $artworks->paint_name; ?>
                                    		
                                    </td>
                                    <td class=" ">
                                    	<?php echo $artworks->paint_desc; ?>
                                    	
                                    </td>
                                    <td class=" ">
	                                    <?php  
	                                    		if($artworks->paint_status==1){
													echo('New');
												}
												elseif($artworks->paint_status==2){
													echo('Old');
												}
												else{
													echo('Sold');
												}
	                                     ?></td>
                                    <td class="a-right a-right ">
                                    	P <?php echo $artworks->paint_price; ?>.00
                                    </td>
                                    <td class=" last">
                                    	<a href="/restorepainting<?php echo $artworks->paint_id; ?>">Restore</a>
                                    </td>
								</tr>
								
							<?php endforeach; ?><!--end artworks iteration for class trashbin-->
								
							</tbody>
							<!--end class trashbin-->
							<?php endif; ?><!--end class condition-->
						</table>
					</div>
				</div>
			</div>
			<!--/end of view panel-->
			
			<?php elseif($panel=="new"): ?>
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<?php if($class=="new"): ?><!--start header condition-->
						
						<h2>
							Add new painting<small>Fill-up all fields</small>
						</h2>
						
						<?php elseif($class=="edit"): ?>
						
						<h2>
							Edit painting<small>Update specific painting information</small>
						</h2>
						
						<?php endif; ?><!--end header condition-->
						
						<div class="clearfix"></div>
					</div>
					
					<div class="x_content">
						<br />
						<form id="demo-form2" action="/painting<?php echo ($class=="new")?"save":(($class=="edit")?"update".$painting_id:""); ?>" method="post" class="form-horizontal form-label-left input_mask"" enctype="multipart/form-data">
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="paint-img">
									Painting Image: <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<?php if($class=="new"): ?>
										<input type="file" name="fileToUpload" id="fileToUpload" required="required" class=" col-md-7 col-xs-12">
									<?php elseif($class=="edit"): ?>
										<img src="assets/gallery/<?php echo $painting_src; ?>" width="300px" height="300px" class="responsive">
									<?php endif; ?>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="paint-name">
									Painting Name: <span class="required">*</span>
								</label>
						 		<div class="col-md-6 col-sm-6 col-xs-12">
						 			<input type="text" name="paint_name" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo ($class!="new")?$painting_name:""; ?>"> 	
						 		</div>
						 	</div>
						 	<div class="form-group">
						 		<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">
						 			Painting Description*
						 		</label>
						 		<div class="col-md-6 col-sm-6 col-xs-12">
						 			<textarea class="form-control" rows="5" name="paint_desc" required="required"><?php echo ($class!="new")?$painting_desc:""; ?></textarea>
						 		</div>
						  	</div>
						  	<div class="form-group">
						  		<label class="control-label col-md-3 col-sm-3 col-xs-12">
						  			Status
						  		</label>
						  		<div class="col-md-6 col-sm-6 col-xs-12">
						  			<div id="gender" class="btn-group" data-toggle="buttons">
						  				<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
						  					<input type="radio" name="status" value="2" <?php echo ($class!="new")?(($painting_status==2)?"checked":""):""; ?> /> &nbsp; Old &nbsp;
						  				</label>
						  				<label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
						  					<input type="radio" name="status"  value="1" <?php echo ($class!="new")?(($painting_status==1)?"checked":""):""; ?> /> New
						  				</label>
						  			</div>
						  		</div>
						  	</div>
						  	
						  	<div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Price <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="number" id="number" name="paint_price" min="1000" max="50000" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
						  	<div class="ln_solid"></div>
						  	<div class="form-group">
						  		<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						  			<a href="/gallerypainting" class="btn btn-primary">Cancel</a>
						  			<button type="submit" class="btn btn-success">Submit</button>
						  		</div>
						  	</div>
						  </form>
						</div>
					</div>
				</div>
				
				<?php endif; ?>
					
			</div>
			<br />
			<br />
			<br />
			<br />
			<br />
		<!-- footer content -->
		<footer>
			<div class="">
				<p class="pull-right">
					�2016 All Rights Reserved |<span class="lead"> <i class="fa fa-paint-brush"></i> Chiaroscuro Artworks and Gallery</span>
                </p>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
	</div>
</div>
<!-- /page content -->
<div id="custom_notifications" class="custom-notifications dsp_none">
	<ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
	</ul>
	<div class="clearfix"></div>
	<div id="notif-group" class="tabbed_notifications"></div>
</div>

<div id="custom_notifications" class="custom-notifications dsp_none">
	<ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
		
	</ul>
	<div class="clearfix"></div>
	<div id="notif-group" class="tabbed_notifications"></div>
</div>

    <!-- /datepicker -->
    <!-- /footer content -->
    
    <script src="assets/backend/js/input_mask/jquery.inputmask.js"></script>
<script>
        // initialize the validator function
        validator.message['date'] = 'not a real date';

        // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
        $('form')
            .on('blur', 'input[required], input.optional, select.required', validator.checkField)
            .on('change', 'select.required', validator.checkField)
            .on('keypress', 'input[required][pattern]', validator.keypress);

        $('.multi.required')
            .on('keyup blur', 'input', function () {
                validator.checkField.apply($(this).siblings().last()[0]);
            });

        // bind the validation to the form submit event
        //$('#send').click('submit');//.prop('disabled', true);

        $('form').submit(function (e) {
            e.preventDefault();
            var submit = true;
            // evaluate the form using generic validaing
            if (!validator.checkAll($(this))) {
                submit = false;
            }

            if (submit)
                this.submit();
            return false;
        });

        /* FOR DEMO ONLY */
        $('#vfields').change(function () {
            $('form').toggleClass('mode2');
        }).prop('checked', false);

        $('#alerts').change(function () {
            validator.defaults.alerts = (this.checked) ? false : true;
            if (this.checked)
                $('form .alert').remove();
        }).prop('checked', false);
    </script>
    <script>
        $(document).ready(function () {
            $(":input").inputmask();
        });
    </script>
    
    
			<?php if(isset($error))
					{
						echo $error;
					}
			
			?>
@stop