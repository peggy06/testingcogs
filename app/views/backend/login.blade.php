@extends('backend.layout')
@section('content')

    <div class="">
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>

        <div id="wrapper">
            <div id="login" class="animate form">
                <section class="login_content">
                   <form action="/verify" method="post">
                        <h1>Admin Login</h1>
                        <div>
                            
				<input type="text" name="fname" class="form-control" value="" placeholder="Username" required="" />
                        </div>
                        <div>
                            <input type="password" class="form-control" name="lname" value="" placeholder="Password" />
                        </div>
                        <div>
							<input class="btn btn-primary submit" style="float: right;" type="submit" name="login" value="login"/>
                            <!--<a class="btn btn-default submit" href="index.html">Log in</a>-->
                           
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">

                            <p class="change_link">Lost your Password?
                                <a href="#" class="to_register"> Reset Password </a>
                            </p>
                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <h1><i class="fa fa-pencil" style="font-size: 26px;"></i> Chiaroscuro Artworks and Gallery</h1>

                                <p>©2016 All Rights Reserved. Chiaroscuro Online Artworks and Gallery Shop. Privacy and Terms</p>
                            </div>
                        </div>
                    </form>
                    <!-- form -->
                </section>
                <!-- content -->
            </div>
                <section class="login_content">
                    
                    <!-- form -->
                </section>
                <!-- content -->
        </div>
  
	</div>
@stop