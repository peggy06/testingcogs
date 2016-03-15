@extends('backend.layout')
@section('content')
	
	 <div class="right_col" role="main">

                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3><?php echo $page; ?>
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
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                
                        <?php if($class=="new"): ?>
                                    <h2>Creating new account for user</h2>
                        <?php elseif($class=="view"): ?>
                        
                                    <h2>Admin Accounts</h2>
                        <?php endif ?>
                        
                                <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
									
						<p>
						
							<a href="/adduser">
                        <?php if($class=="view"): ?>
								<span class="fa fa-plus-circle"></span> Add new user.
                        <?php endif ?>
							</a>
							</p>
                            	<?php if($class=="new"): ?>
                                    <form action="/usersave" class="form-horizontal form-label-left input_mask" method="post" >
	
                                        <span class="section">Personal Info |<small style="font-size: small;"> Fill up all fields</small>	</span> 
										<div class=" form-group" style="margin: 0px 0px 10px 27%;"> User Type:
                                       <div id="gender" class="btn-group " data-toggle="buttons">
						  				<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
						  					<input type="radio" name="type" value="2"   /> &nbsp; Admin &nbsp;
						  				</label>
						  				<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
						  					<input type="radio" name="type" value="3" checked  /> &nbsp; Staff &nbsp;
						  				</label>
						  			</div>

</div>                                        <div class="item form-group has-feedback">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> <span class="required"></span>
                                            </label>
                                            
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="name" name="fname" class="form-control col-md-7 col-xs-12 has-feedback-left" data-validate-length-range="6" data-validate-words="1"  placeholder="First Name" required="required" type="text">
                                                 <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="item form-group has-feedback">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> <span class="required"></span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="name" name="mname" class="form-control col-md-7 col-xs-12 has-feedback-left" data-validate-length-range="6" data-validate-words="1" placeholder="Middle Name" required="required" type="text">
                                                 <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="item form-group has-feedback">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> <span class="required"></span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="name" name="lname" class="form-control col-md-7 col-xs-12 has-feedback-left" data-validate-length-range="6" data-validate-words="1" placeholder="Last Name" required="required" type="text">
                                                 <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="item form-group has-feedback">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email" > <span class="required"></span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12 has-feedback-left" placeholder="Email">
                                                <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="item form-group has-feedback">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email"><span class="required"></span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="email" id="email2" name="confirm_email" data-validate-linked="email" required="required" class="form-control col-md-7 col-xs-12 has-feedback-left" placeholder="Confirm Email">
                                                <span class="fa fa-envelope-o form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="item form-group has-feedback">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number"> <span class="required"></span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="phone" class="form-control has-feedback-left" data-validate-length-range="12" id="inputSuccess5" data-inputmask="'mask' : '+(639) 99-999-9999'" placeholder="Phone (Philippines)" required="required" >
                                                <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        
                                        <div class="item form-group has-feedback">
                                            <label for="password" class="control-label col-md-3 "></label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="password" type="password" name="password" data-validate-length-range="8" class="form-control col-md-7 col-xs-12 has-feedback-left" required="required" placeholder="Password">
                                                <span class="fa fa-lock form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        
                                        <div class="item form-group has-feedback">
                                            <label for="password" class="control-label col-md-3 "></label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="password2" type="password" name="password2" data-validate-linked="password" class="form-control col-md-7 col-xs-12 has-feedback-left" required="required" placeholder="Confirm Password">
                                                <span class="fa fa-lock form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-3">
                                                <a href="/usersdata" class="btn btn-primary">Cancel</a>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>
                                    </form>
								
                            <?php elseif($class=="view"): ?>
                            <table class="table table-striped responsive-utilities jambo_table bulk_action">
							<thead>
								<tr class="headings">
									<th class="column-title">
										#
									</th>
									<th class="column-title">
										User Name
									</th>
									<th class="column-title">
										Phone #
									</th>
									<th class="column-title">
										Email
									</th>
									<th class="column-title">
										User Type
									</th>
									<th class="column-title">
										Status
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
	                            	
	                            		<?php echo $artworks->id; ?>
	                            		
	                            	</td>
	                            	<td class=" ">
	                            	<?php echo $artworks->user_lname; ?>, <?php echo $artworks->user_fname; ?>
	                            		
	                            		
	                            	</td>
	                            	<td class=" ">
	                            	
	                            		<?php echo $artworks->user_num; ?>
	                            		
	                            	</td>
	                            	<td class=" ">
	                            	
	                            		<?php echo $artworks->user_mail; ?>
	                            		
	                            	</td>
	                            	<td class=" ">
	                            	
	                            		<?php if($artworks->user_type==2)
	                            				echo 'Admin'; ?>
	                            		
	                            	</td>
	                            	<td class=" ">
	                            	
	                            	<?php if($artworks->deactivated!=1)
	                            			echo 'Active'; ?>
	                            		
		                            	
	                            	</td>
		                            <td class=" last"> 
		                            	<a href="/deletepainting<?php echo $artworks->paint_id; ?>">Block</a>  |  
		                            	<a href="/deletepainting<?php echo $artworks->paint_id; ?>">Deactivate</a>
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
                            <?php endif ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- footer content -->
            <footer>
                <div class="">
                    <p class="pull-right">Gentelella Alela! a Bootstrap 3 template by <a>Kimlabs</a>. |
                        <span class="lead"> <i class="fa fa-paw"></i> Gentelella Alela!</span>
                    </p>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
                
            </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>

	
    <script src="assets/backend/js/validator/validator.js"></script>
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
@stop