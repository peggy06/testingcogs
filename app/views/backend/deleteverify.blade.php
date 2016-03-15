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
						<form action="/deleteauth<?php echo $_id?>" class="form-horizontal form-label-left input_mask" method="post" >
							<div class="item form-group has-feedback">
							<?php if($panel=="new"): ?>
                            	<p><center>This action needs the Master Admin Password!</center></p>
                            <?php elseif($panel=="failed"): ?>
                            	<p ><center class="text-danger">Authentication failed! Inputted password did not match the MASTER ADMIN PASSWORD</center></p>
                            <?php endif;?>
                            	<label for="password" class="control-label col-md-3 "></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="password" type="password" name="password" data-validate-length-range="8"  class="form-control col-md-7 col-xs-12 has-feedback-left" required="required" placeholder="Master Admin Password">
                           			<span class="fa fa-lock form-control-feedback left" aria-hidden="true"></span>
                           		
                           		<div class="ln_solid"></div>
                                        <div class="form-group" style="float: right;padding-right: 10px;">
                                            <div class="col-md-6 col-md-offset-3">
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>
                                  </div>
                            </div>
						</form>
            		</div>
			</div>
         </div>
    </div>
   </div>

@stop