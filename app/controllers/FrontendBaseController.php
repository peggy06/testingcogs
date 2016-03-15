<?php
class FrontendBaseController extends FrontendController
{
	
	public function send_email()
	{
		
		
		session_start();
		$_userid=ModelUser::where('user_fname', $_SESSION["session_testing"])->get();
    		foreach($_userid as $userid) {
			$user_id=array(
				'_user_id'=>$userid->id,
				'_user_fname'=>$userid->user_fname,
				'_user_lname'=>$userid->user_lname,
				'_user_mname'=>$userid->user_mname,
				'_user_mail'=>$userid->user_mail,
			);
		}
		
		$_cart=ModelCart::where('user_id', $user_id['_user_id'])->get();
			foreach($_cart as $cart) {
			$cart_id=array(
				'_cart_id'=>$cart->cart_id
			);
		}	
		
		$data["_cart_item"]=ModelCartItem::where('order_id', $_SESSION["orderID"])->get();
		$data["_count"]=ModelCartItem::where('order_id', $_SESSION["orderID"])->count();
      	$data["_total"]=0;
		$data['user_fname'] = $user_id['_user_fname'];
		$data['user_lname'] = $user_id['_user_lname'];
		$data['user_mname'] = $user_id['_user_mname'];
		$data['user_email'] = $user_id['_user_mail'];
		$data['order_verCode'] = strtoupper(Str::random(15));
		
		try{
			Mail::send('frontend.msg', $data, function($msg)use($data){
			$msg->to($data['user_email'],ucfirst($data['user_lname']).','.ucfirst($data['user_fname']))->subject('Order Confirmation');		
		});
			
			
		 $tZone = 'Asia/Singapore';
	    $dt = Carbon::now($tZone);
		$data_d=array(
    		'order_date'=>$dt,
    		'status'=>'Pending',
    		'vCode'=>$data['order_verCode'],
    	);
    	ModelOrder::where('order_id',$_SESSION["orderID"])
    		->where('login_id', $_SESSION["loginID"])
    		->update($data_d);	
    		
        return Redirect::action('FrontendBaseController@message_sent');			
		
		} catch (Exception $e) {
		$_userid=ModelUser::where('user_fname', $_SESSION["session_testing"])->get();
    		foreach($_userid as $userid) {
			$user_id=array(
				'_user_id'=>$userid->id
			);
			}
		
		$_cart=ModelCart::where('user_id', $user_id['_user_id'])->get();
			foreach($_cart as $cart) {
			$cart_id=array(
				'_cart_id'=>$cart->cart_id
			);
			}	
		
		$data["_cart_item"]=ModelCartItem::where('cart_id', $cart_id['_cart_id'])
				->where('removed', 0)
				->get();
		$data["_count"]=ModelCartItem::where('cart_id', $cart_id['_cart_id'])
				->where('removed', 0)
				->count();
      	$data["_total"]=0;
			$data["error"]="<script>alert('Network Failure! Internet connection refuse to respond, maybe due to low internet connection.Please check network connection and try again.')</script>";
			View::share(array(
			'page'=>'Home',
			'account'=>'!null'
		));
        $this->layout->content = View::make('frontend.cart',$data);
		}
	}
	
	public function message_sent(){
		session_start();
		View::share(array(
			'page'=>'Home',
			'account'=>'!null'
		));
        $this->layout->content = View::make('frontend.sent');
	}
	
	public function codeVerify()
	{
		session_start();
		$verify=Input::get("vcode");
		
		
		
		$_ctr=ModelOrder::where('vCode', $verify)
				->where('order_id', $_SESSION["orderID"])
				->where('login_id', $_SESSION["loginID"])
				->count();
		
		if($_ctr!=0)
		{
			$data=array(
    			'status'=>'Confirmed',
    		);
    		ModelOrder::where('vCode',$verify)->update($data);
			
	    	
			$_userid=ModelUser::where('user_fname', $_SESSION["session_testing"])->get();
    		foreach($_userid as $userid) {
			$user_id=array(
				'_user_id'=>$userid->id
			);
			}
			
			
			$_cart=ModelCart::where('user_id', $user_id['_user_id'])->get();
			foreach($_cart as $cart) {
			$cart_id=array(
				'_cart_id'=>$cart->cart_id
			);
			}
			
			$dataUpdate=array(
    			'removed'=>1,
    		);
    		ModelCartItem::where('cart_id',$cart_id['_cart_id'])->update($dataUpdate);
			
			
			$orderNum = strtoupper(Str::random(15));
			$_order = new ModelOrder;
			$_order->order_id = $orderNum;
			$_order->user_id = $user_id['_user_id'];
			$_order->login_id = $_SESSION["loginID"];
			$_order->save();
					
				
	    	$_SESSION["orderID"] = $orderNum;
	    	
	    	
        return Redirect::action('FrontendBaseController@done_msg');			
	    }
		else{
			
        return Redirect::action('FrontendBaseController@message_sent');			
		}
	}
	
	
	public function done_msg()
	{   
		session_start();
		View::share(array(
			'page'=>'Home',
			'account'=>'!null'
		));
        $this->layout->content = View::make('frontend.done');
	}
	
	public function index()
	{   
		$data["_settings"]=ModelSetIndex::where('id', 1)->get();
      
		View::share(array(
			'page'=>'Home',
			'account'=>'null'
		));
        $this->layout->content = View::make('frontend.index',$data);
        
	}
	
	public function logout()
	{
		
		
		session_start();
					
				$tZone = 'Asia/Singapore';
	    			$dt = Carbon::now($tZone)->toDateString();
	    			$tm = Carbon::now($tZone)->toTimeString();
	    			
	    			$_userlog = new ModelUserlog;
					$_userlog->user_email= $_SESSION["username"];
					$_userlog->Time= $tm;
					$_userlog->Date= $dt;
					$_userlog->user_type= 4;
					$_userlog->activity="Logout";
					$_userlog->save();
		session_destroy();
		View::share(array(
			'page'=>'Login',
			'account'=>'null'
		));
		
		return Redirect::action('FrontendBaseController@index');
		
	}
	
	public function sign()
	{   
		$data["_settings"]=ModelSetIndex::where('id', 1)->get();
      
		View::share(array(
			'page'=>'Sign Up',
			'account'=>'null'
		));
        $this->layout->content = View::make('frontend.signup',$data);
	}
	
	
	public function index_withuser()
	{   
		session_start();
		$data["_settings"]=ModelSetIndex::where('id', 1)->get();
      
		View::share(array(
			'page'=>'Home',
			'account'=>'!null'
		));
        $this->layout->content = View::make('frontend.index',$data);
	}
	
	public function gallery()
	{   
		$data["_settings"]=ModelSetIndex::where('id', 1)->get();
		
    	$data["_painting"]=ModelPainting::where('qnty', 1)
    		->where('deleted', 0)
    		->where('paint_status', 1)
    		->get();
    		
    	$data["_paintingsold"]=ModelPainting::where('qnty', 0)
    		->get();
    			
		View::share(array(
			'page'=>'Products',
			'account'=> 'null'
		));
        $this->layout->content = View::make('frontend.gallery',$data);
	}
	
	public function gallery_painting()
	{   
		$data["_settings"]=ModelSetIndex::where('id', 1)->get();
		
    	$data["_painting"]=ModelPainting::where('qnty', 1)
    		->where('deleted', 0)
    		->get();
    		
		View::share(array(
			'page'=>'Products',
			'account'=>'null'
		));
        $this->layout->content = View::make('frontend.paintingGallery',$data);
	}
	
	public function gallery_paintingwithuser()
	{   
		session_start();
		$data["_settings"]=ModelSetIndex::where('id', 1)->get();
		
    	$data["_painting"]=ModelPainting::where('qnty', 1)
    		->where('deleted', 0)
    		->get();
    		
		View::share(array(
			'page'=>'Products',
			'account'=>'!null'
		));
        $this->layout->content = View::make('frontend.paintingGallery',$data);
	}


	public function gallery_withuser()
	{   
	
		session_start();
		
    	$data["_painting"]=ModelPainting::where('qnty', 1)
    		->where('deleted', 0)
    		->where('paint_status', 1)
    		->get();
    		
    	$data["_paintingsold"]=ModelPainting::where('qnty', 0)
    		->get();
    			
		View::share(array(
			'page'=>'Products',
			'account'=> '!null'
		));
        $this->layout->content = View::make('frontend.gallery',$data);
	}
	
	
	public function loginview()
	{   
		View::share(array(
			'page'=>'Login',
			'account'=>'null'
		));
        $this->layout->content = View::make('frontend.customer_login');
	}	
	
	public function history()
	{   
	
		$data["_history"]=ModelHistory::where('id', 1)->get();
		View::share(array(
			'page'=>'History',
			'account'=>'null'
		));
        $this->layout->content = View::make('frontend.history', $data);
	}	
	
	public function history_withuser()
	{   
		session_start();
		$data["_history"]=ModelHistory::where('id', 1)->get();
		View::share(array(
			'page'=>'History',
			'account'=>'!null'
		));
        $this->layout->content = View::make('frontend.history', $data);
	}	
	
	public function loginview2()
	{   
        View::share(array('page'=> 'Login',
			'account' =>'null'        
        	));
        $this->layout->content = View::make('frontend.customer_login2');
	}
	
	public function customer_verify()
	{
		
		$username=Input::get("email");
		$password=Input::get("pass");
		
		
		$_data=ModelUser::where('user_mail', $username)
				->where('user_type', 4)
				->get();
		$_ctr=ModelUser::where('user_mail', $username)
				->where('user_type', 4)
				->count();
		
		if($_ctr!=0)
		{
			
			session_start();
	    			
			foreach($_data as $user)
			{
				$data=array(
					'oldpassword'=>$user->user_pass,
					'fname'=>$user->user_fname,
					'lname'=>$user->user_lname,
					'userID'=>$user->id
				);
			
				if(Hash::check($password, $data['oldpassword']))
				{
					$_count=ModelUser::where('user_mail', $username)
						->count();
				
	    			$_newpassword=array(
	    				'user_pass'=>Hash::make($password)
	    			);
	    			ModelUser::where('user_mail',$username)->update($_newpassword);
	    			
	    			$_SESSION["username"] = $username;	
	    			$tZone = 'Asia/Singapore';
	    			$dt = Carbon::now($tZone)->toDateString();
	    			$tm = Carbon::now($tZone)->toTimeString();
	    			
	    			$_userlog = new ModelUserlog;
					$_userlog->user_email= $_SESSION["username"];
					$_userlog->Time= $tm;
					$_userlog->Date= $dt;
					$_userlog->user_type= 4;
					$_userlog->activity="Login";
					$_userlog->save();
					
					$orderNum = strtoupper(Str::random(15));
					$loginNum = strtoupper(Str::random(15));
					
					
					
					$_order = new ModelOrder;
					$_order->order_id = $orderNum;
					$_order->user_id = $data['userID'];
					$_order->login_id = $loginNum;
					$_order->save();
					
					
	    			$_SESSION["orderID"] = $orderNum;	
	    			$_SESSION["loginID"] = $loginNum;	
				}
				else
				{
					$_count = 0;	
				}
			
				if($_count!=0)
				{
					
				
					$_SESSION["session_testing"]=$data['fname'];
					
					View::share(array(
					'page'=>'Home',
					'account'=>'!null'
					));
					
					$data["_settings"]=ModelSetIndex::where('id', 1)->get();
        			$this->layout->content = View::make('frontend.index',$data);
				}
				else
				{
					
					return Redirect::action('FrontendBaseController@loginview2');
				}
			}
		}
		else
		{
			return Redirect::action('FrontendBaseController@loginview2');
		}
		
	}
	
	public function add_item($id)
	{
		session_start();
		$_order=ModelPainting::where('paint_id', $id)->where('deleted', 0)->get();
		$_painting=ModelPainting::where('paint_id', $id)->where('deleted', 0)->get();
    	$_count=ModelPainting::where('paint_id', $id)->where('deleted', 0)->count();
    	foreach($_painting as $painting) {
			$data=array(
				'painting_id'=>$painting->paint_id,
				'painting_name'=>$painting->paint_name,
				'painting_desc'=>$painting->paint_desc,
				'painting_price'=>$painting->paint_price,
				'painting_status'=>$painting->paint_status,
				'painting_imgsrc'=>$painting->paint_imgsrc,
				'painting_qnty'=>$painting->qnty
			);
		}
		
		
		if($_count!=0)
		{
			
			$_userid=ModelUser::where('user_fname', $_SESSION["session_testing"])->get();
    		foreach($_userid as $userid) {
			$user_id=array(
				'_user_id'=>$userid->id
			);
			}
			
			
			$_cart=ModelCart::where('user_id', $user_id['_user_id'])->get();
			foreach($_cart as $cart) {
			$cart_id=array(
				'_cart_id'=>$cart->cart_id
			);
			}
			
			
			$_orderID=ModelOrder::where('user_id', $user_id['_user_id'])
					->where('order_id', $_SESSION["orderID"])
					->get();
			foreach($_orderID as $cart) {
			$ord_id=array(
				'_ord_id'=>$cart->order_id,
				'_log_id'=>$cart->login_id
			);
			}
			
			$_cartItem = new ModelCartItem;
			$_cartItem->cart_id=$cart_id['_cart_id'];
			$_cartItem->product_id=$data['painting_id'];
			$_cartItem->product_name=$data['painting_name'];
			$_cartItem->product_desc=$data['painting_desc'];
			$_cartItem->product_price=$data['painting_price'];
			$_cartItem->product_qnty=$data['painting_qnty'];
			$_cartItem->product_src=$data['painting_imgsrc'];
			$_cartItem->delivery_status='pending';
			$_cartItem->order_id=$_SESSION["orderID"];
			$_cartItem->cart_viewable='1';
			$_cartItem->removed='0';
			$_cartItem->save();
			
			
			
			$_orderitem = new ModelOrderItem;	
			$_orderitem->order_id= $ord_id['_ord_id'];
			$_orderitem->login_id= $ord_id['_log_id'];
			$_orderitem->product_id=$data['painting_id'];
			$_orderitem->product_name=$data['painting_name'];
			$_orderitem->product_desc=$data['painting_desc'];
			$_orderitem->product_price=$data['painting_price'];
			$_orderitem->product_qnty=$data['painting_qnty'];
			$_orderitem->save();
			
			$product_data=array(
    			'qnty'=>0
    		);
    		ModelPainting::where('paint_id',$data['painting_id'])->update($product_data);
			
			
			return Redirect::action('FrontendBaseController@gallery_paintingwithuser');
		}
		else
		{
			return Redirect::action('BackendBaseController@painting');
		}
	}
	
	public function reg_user()
	{
		$_data["fname"]=ucwords(Input::get("fname"));
		$_data["mname"]=ucwords(Input::get("mname"));
		$_data["lname"]=ucwords(Input::get("lname"));
		$_data["type"]=Input::get("type");
		$_data["phone"]=Input::get("phone");
    	$_data["email"]=Input::get("email");
    	$_data["password"]=Input::get("password");
		preg_match_all('/[a-zA-Z]/', $_data["password"], $alphcount);
		preg_match_all('/[0-9]/', $_data["password"], $numeacount);
		$_data["alph"]=count($alphcount[0]);
		$_data["nume"]=count($numeacount[0]);
		if($_data["alph"]==0||$_data["nume"]==0)
		{
			/*$data["input_out"]="Input is <b>NOT</b> Alpha Numeric";
        	$this->layout->content = View::make('backend.input_in',$data);*/
        	$_data["msg"]="Password needs to be in alphanumeric format! This is a combination of a-z and 0-9";
    		session_start();
        	View::share(array(
			'page'=>'Sign Up',
			'account'=>'null'
      		 ));
        	$this->layout->content = View::make('frontend.signup',$_data);
		}
		else
		{
		$password="".Input::get("password");
    	$data=new ModelUser;
    	$data->user_pass=Hash::make($password);
    	$data->user_type='4';
    	$data->user_fname=ucwords(Input::get("fname"));
    	$data->user_mname=ucwords(Input::get("mname")); 
    	$data->user_lname=ucwords(Input::get("lname")); 
    	$data->user_num=Input::get("phone");
    	$data->user_mail=Input::get("email");
    	$data->deactivated=0;
    	try{
			$data->save();
		
		
		$userfname = ucwords(Input::get("fname"));
		
		$_userid=ModelUser::where('user_fname', $userfname)->get();
    	foreach($_userid as $userid) {
			$user_id=array(
				'_user_id'=>$userid->id
			);
			}
			
		$cart=new ModelCart;
		$cart->user_id=$user_id['_user_id'];
		$cart->save();
        return Redirect::action('FrontendBaseController@loginview');
		} catch (Exception $e) {
			$errormsg["error"]="<script>alert('Invalid entry! Email address has been used! Entry Disposed!')</script>";
			View::share(array(
			'page'=>'Sign Up',
			'account'=>'null'
      		 ));
        	$this->layout->content = View::make('frontend.signup',$errormsg);
		}
    	
       }	
		
	}
	
	public function cart_view()
	{
		session_start();
		$_userid=ModelUser::where('user_fname', $_SESSION["session_testing"])->get();
    		foreach($_userid as $userid) {
			$user_id=array(
				'_user_id'=>$userid->id
			);
			}
		
		$_cart=ModelCart::where('user_id', $user_id['_user_id'])->get();
			foreach($_cart as $cart) {
			$cart_id=array(
				'_cart_id'=>$cart->cart_id
			);
			}	
		
		$data["_cart_item"]=ModelCartItem::where('cart_id', $cart_id['_cart_id'])
				->where('removed', 0)
				->get();
		$data["_count"]=ModelCartItem::where('cart_id', $cart_id['_cart_id'])
				->where('removed', 0)
				->count();
      	$data["_total"]=0;
		View::share(array(
			'page'=>'Home',
			'account'=>'!null'
		));
        $this->layout->content = View::make('frontend.cart',$data);
		
	}
	
	public function remove_item($id)
	{
		
		$product_data=array(
    			'qnty'=>1,
    			'deleted'=>0
    		);
    	ModelPainting::where('paint_id',$id)->update($product_data);
		
		$product_id=array(
    			'product_id'=>$id
    		);
		ModelCartItem::where('product_id', $id)->delete();
		
        return Redirect::action('FrontendBaseController@cart_view');
	}
	
	
	
	public function frame($id)
	{   
		session_start();
    	$data["_painting"]=ModelPainting::where('deleted', 0)
    		->where('paint_id', $id)
    		->get();
    			
		View::share(array(
			'page'=>'Products',
			'account'=> 'null'
		));
        $this->layout->content = View::make('frontend.frame',$data);
	}	
	
	
	
	public function viewer($id)
	{   
		session_start();
    	$data["_painting"]=ModelPainting::where('deleted', 0)
    		->where('paint_id', $id)
    		->get();
    			
		View::share(array(
			'page'=>'Products',
			'account'=> '!null'
		));
        $this->layout->content = View::make('frontend.frame',$data);
	}	
	
	
}
?>