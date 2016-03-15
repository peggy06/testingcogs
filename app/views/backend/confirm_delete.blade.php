@extends('backend.layout')
@section('content')

    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>
                        <?php echo $page; ?>
                    </h3>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row"></div>
            <div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>
							<?php echo $page; ?> | <small> Dangerous Acts</small>
						</h2>
						
						<div class="clearfix"></div>
						
					</div>
					
					<div class="x_content">
            		<?php foreach($_painting as $artworks):?>
                		<form id="demo-form2" action="/deleteverify<?php echo $artworks->paint_id; ?>" method="post" class="form-horizontal form-label-left input_mask"" enctype="multipart/form-data">
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="paint-img">
								
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<center>
										<img src="assets/gallery/<?php echo $artworks->paint_imgsrc; ?>" width="300px" height="300px" class="responsive">
									</center>
								</div>
							</div>
							
						  	
						  
						  	<center>
						  	<p style="font-size: 1.5em !important;">
						  		Are you sure you want to delete painting with ID: "<?php echo $artworks->paint_id?>" Name: "<?php echo $artworks->paint_name?>" ?
						  		<br><div class="font-size: 1em;">Deleting this item will temporarily remove to gallery and will be moved to the trashbin, where you can later restore it if you want.</div>
						  	</p></center>
						  	<div class="form-group">
						  		<center>
						  		<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						  			<a href="/gallerypainting" class="btn btn-warning">NO</a>
						  			<button type="submit" class="btn btn-danger">YES</button>
						  		</div>
						  		</center>
						  	</div>
						  </form>
            		<?php endforeach;?>
            		</div>
			</div>
         </div>
    </div>
   </div>

@stop