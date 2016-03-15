@extends('frontend.layout')
@section('content')

    <link href="assets/backend/css/bootstrap.min.css" rel="stylesheet" />

    <link href="assets/backend/fonts/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/backend/css/animate.min.css" rel="stylesheet" />
    <script src="assets/backend/js/jquery.min.js"></script>
    <script src="assets/backend/js/nprogress.js"></script>
     <style>
                                            	.alert {
    float: left;
    margin: 0 0 0 20px;
    padding: 3px 10px;
    color: #FFF;
    border-radius: 3px 4px 4px 3px;
    background-color: #CE5454;
    max-width: 170px;
    white-space: pre;
    position: relative;
    left: -15px;
    opacity: 0;
    z-index: 1;
    transition: 0.15s ease-out;
}

.item .alert::after {
    content: '';
    display: block;
    height: 0;
    width: 0;
    border-color: transparent #CE5454 transparent transparent;
    border-style: solid;
    border-width: 11px 7px;
    position: absolute;
    left: -13px;
    top: 1px;
}

.item.bad .alert {
    left: 0;
    opacity: 1;
}
/* ***** dropzone ****** */

.dropzone,
.dropzone * {
    box-sizing: border-box;
}

.dropzone {
    min-height: 150px;
    border: 2px solid rgba(0, 0, 0, 0.3);
    background: white;
    padding: 54px 54px;
}

.dropzone.dz-clickable {
    cursor: pointer;
}

.dropzone.dz-clickable * {
    cursor: default;
}

.dropzone.dz-clickable .dz-message,
.dropzone.dz-clickable .dz-message * {
    cursor: pointer;
}
                                            </style>
		<div class="container">
			<div class="register">
		  	 
                                    <form action="/reg" class="form-horizontal form-label-left input_mask" method="post">
	
                                        <span class="section">Personal Info |<small style="font-size: small;"> Fill up all fields</small>	</span> 
										      
										    
                                            
                                            <div class="item form-group has-feedback">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> <span class="required"></span>
                                            </label>
                                            
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="name" name="fname" value="<?php echo (isset($fname))? $fname: ""; ?>" class="form-control col-md-7 col-xs-12 has-feedback-left" data-validate-length-range="6" data-validate-words="1"  placeholder="First Name" required="required" type="text">
                                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="item form-group has-feedback">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> <span class="required"></span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="name" name="mname" value="<?php echo (isset($mname))? $mname: ""; ?>" class="form-control col-md-7 col-xs-12 has-feedback-left" data-validate-length-range="6" data-validate-words="1" placeholder="Middle Name" required="required" type="text">
                                                 <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="item form-group has-feedback">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> <span class="required"></span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="name" name="lname" value="<?php echo (isset($lname))? $lname: ""; ?>" class="form-control col-md-7 col-xs-12 has-feedback-left" data-validate-length-range="6" data-validate-words="1" placeholder="Last Name" required="required" type="text">
                                                 <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="item form-group has-feedback">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email" > <span class="required"></span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="email" id="email" name="email" value="<?php echo (isset($email))? $email: ""; ?>" required="required" class="form-control col-md-7 col-xs-12 has-feedback-left" placeholder="Email">
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
                                                <input type="text" name="phone" value="<?php echo (isset($phone))? $phone: ""; ?>" class="form-control has-feedback-left" data-validate-length-range="12" id="inputSuccess5" data-inputmask="'mask' : '+(639) 99-999-9999'" placeholder="Phone (Philippines)" required="required" >
                                                <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        
                                        <div class="item form-group has-feedback">
                                            <label for="password" class="control-label col-md-3 "></label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="password" type="password" name="password" data-validate-length-range="8"  class="form-control col-md-7 col-xs-12 has-feedback-left" required="required" placeholder="Password : Alphanumeric Format">
                                                <span class="fa fa-lock form-control-feedback left" aria-hidden="true"></span>
                                       			<div class="text-danger"><center><?php echo (isset($msg))? $msg: ""; ?></center></div>
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
                                                <a href="/" class="btn btn-primary">Cancel</a>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
				<div class="clearfix"> </div>
		   </div>
		 </div>


    <script src="assets/backend/js/bootstrap.min.js"></script>

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

			<?php if(isset($error))
					{
						echo $error;
					}
			
			?>
@stop