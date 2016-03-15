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
		  	 
 


<div class="login-page">
<h1>Near to success!</h1>
<div class="login-page">
		<div class="container">
			<div class="check-out">
				<h4 class="title">Almost done!</h4>
				<p class="cart">We send you a verification code to your email account. This is to ensure that you are really willing ti buy the specific products</p>
				
									<form action="/codeVerify" class="form-horizontal form-label-left input_mask" method="post">
	
                                        
                                        <div class="item form-group has-feedback">
                                            <label for="password" class="control-label"></label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="vcode" class="form-control has-feedback-left" data-validate-length-range="12" id="inputSuccess5" placeholder="Verification Code" required="required" >
                                                <span class="fa fa-lock form-control-feedback left" aria-hidden="true"></span>
                                           
                                                <button type="submit" class="btn btn-primary" style="float: right;margin-top: 5px;">Submit</button>
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


@stop