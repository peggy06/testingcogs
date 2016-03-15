<?php
class BackendBaseController extends BackendController
{
 	public function dashboard()
    {
    	session_start();
    	
	    $tZone = 'Asia/Singapore';
	  	$dt = Carbon::now($tZone)->toDateString();
    	
    	$data["_useraccount"]=ModelUserlog::where('Date', $dt)
    			->where('user_type', 4)
    			->get();
    	$data["date"]=$dt;
    	
		View::share(array(
			'page'=>'Dashboard',
			'modify'=>'otherpage',
			'class'=>'view',
			'type'=>'user',
			
		));
		
			     $this->layout->content = View::make('backend.dashboard', $data);

		
		if(!isset($_SESSION["session_testing"]))
		{
			
			return Redirect::action('BackendBaseController@login');
		}	
		
   	}
   	
   	public function Admindashboard()
    {
    	session_start();
    	$tZone = 'Asia/Singapore';
	  	$dt = Carbon::now($tZone)->toDateString();
    	
    	$data["_useraccount"]=ModelUserlog::where('Date', $dt)
    			->where('user_type', 2)
    			->get();
    	$data["date"]=$dt;
    	
		View::share(array(
			'page'=>'Dashboard',
			'modify'=>'otherpage',
			'class'=>'view',
			'type'=>'admin',
		));
		
			     $this->layout->content = View::make('backend.dashboard', $data);

		
		if(!isset($_SESSION["session_testing"]))
		{
			
			return Redirect::action('BackendBaseController@login');
		}	
		
   	}
	
	public function userlog_filter()
	{
		session_start();
    	
	  	$dt = Input::get("filter");
    	
    	$data["_useraccount"]=ModelUserlog::where('Date', $dt)
    		->where('user_type', 4)
    		->get();
    		
    	$data["date"]=$dt;
    	
		View::share(array(
			'page'=>'Dashboard',
			'modify'=>'otherpage',
			'class'=>'view',
			'type'=>'user',
		));
		
			     $this->layout->content = View::make('backend.dashboard', $data);

		
		if(!isset($_SESSION["session_testing"]))
		{
			
			return Redirect::action('BackendBaseController@login');
		}	
		
	}
	
	public function adminlog_filter()
	{
		session_start();
    	
	  	$dt = Input::get("filter");
    	
    	$data["_useraccount"]=ModelUserlog::where('Date', $dt)
    		->where('user_type', 2)
    		->get();
    	$data["date"]=$dt;
    	
		View::share(array(
			'page'=>'Dashboard',
			'modify'=>'otherpage',
			'class'=>'view',
			'type'=>'admin',
		));
		
			     $this->layout->content = View::make('backend.dashboard', $data);

		
		if(!isset($_SESSION["session_testing"]))
		{
			
			return Redirect::action('BackendBaseController@login');
		}	
		
	}
	
    public function login()
    {
    	session_start();
    	
		View::share(array(
			'page'=>'Login',
			'modify'=>'login'
		));
		
		
		$this->layout->content = View::make('backend.login');

		if(isset($_SESSION["session_testing"]))
		{
		return Redirect::action('BackendBaseController@dashboard');
			
		}
        
	}

	 public function login2()
    {
		View::share(array(
			'page'=>'Login',
			'modify'=>'login'
		));
		
        $this->layout->content = View::make('backend.login2');
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
					$_userlog->user_type= 2;
					$_userlog->activity="Logout";
					$_userlog->save();
		session_destroy();
		return Redirect::action('BackendBaseController@login');
	}

	public function verify()
	{
		
		$username=Input::get("fname");
		$password=Input::get("lname");
		
		$_data=ModelAdmin::where('user_mail', $username)->get();
			foreach($_data as $user)
			{
				$data=array(
					'oldpassword'=>$user->user_pass,
					'fname'=>$user->user_fname,
					'lname'=>$user->user_lname
				);
			}			
				
				if(Hash::check($password, $data['oldpassword']))
				{
					$_count=ModelAdmin::where('user_mail', $username)
						->count();
				
	    			$_newpassword=array(
	    				'user_pass'=>Hash::make($password)
	    			);
	    			ModelAdmin::where('user_mail',$username)->update($_newpassword);
	    			
	    			
	    			$tZone = 'Asia/Singapore';
	    			$dt = Carbon::now($tZone)->toDateString();
	    			$tm = Carbon::now($tZone)->toTimeString();
	    			
	    			$_userlog = new ModelUserlog;
					$_userlog->user_email= $username;
					$_userlog->Time= $tm;
					$_userlog->Date= $dt;
					$_userlog->user_type= 2;
					$_userlog->activity="Login";
					$_userlog->save();
				}
				else
				{
					$_count = 0;	
				}
		
				if($_count!=0)
				{
					session_start();
					$_SESSION["username"] = $username;
					$_SESSION["session_testing"]=$data['fname']." ".$data['lname'];
					return Redirect::action('BackendBaseController@dashboard');
				}
				else
				{
					return Redirect::action('BackendBaseController@login2');
				}
	}
	
	public function painting()
    {   
    	session_start();
    	$data["_painting"]=ModelPainting::where('deleted', 0)->get();
        View::share(array(
        	'page'=>'Paintings',
        	'modify'=>'otherpage',
        	'panel'=>'view',
        	'class'=>'view'
       ));
        $this->layout->content = View::make('backend.data_painting',$data);
    }

    
    public function trashbin_paint()
    {   
    	session_start();
    	$data["_painting"]=ModelPainting::where('deleted', 1)->get();
        View::share(array(
        	'page'=>'Paintings',
        	'modify'=>'otherpage',
        	'panel'=>'view',
        	'class'=>'trashbin'
       ));
        $this->layout->content = View::make('backend.data_painting',$data);
    }
	
	public function add_paint()
    {   
    
    	session_start();
        View::share(array(
        	'page'=>'Paintings',
        	'modify'=>'otherpage',
        	'panel'=>'new',
        	'class'=>'new'
       ));
        $this->layout->content = View::make('backend.data_painting');
    }
	
	public function save_paint()
	{
		session_start();		
		
		$fileUpload=Input::file("fileToUpload");
		$path='assets/gallery/';	
		$name=ucwords(Input::get("paint_name"));
    	$data=new ModelPainting;
    	$data->paint_name=ucwords(Input::get("paint_name"));
    	$data->paint_desc=ucfirst(Input::get("paint_desc"));
    	$data->paint_price=Input::get("paint_price");
    	$data->paint_status=Input::get("status");
    	$data->paint_imgsrc=Input::file("fileToUpload")->getClientOriginalName();
    	$data->deleted=0;
    	$data->qnty=1;
    	try{
			
    		$data->save();
    		$tZone = 'Asia/Singapore';
	    			$dt = Carbon::now($tZone)->toDateString();
	    			$tm = Carbon::now($tZone)->toTimeString();
	    			
	    			$_userlog = new ModelUserlog;
					$_userlog->user_email= $_SESSION["username"];
					$_userlog->Time= $tm;
					$_userlog->Date= $dt;
					$_userlog->user_type= 2;
					$_userlog->activity="Added new painting. Name:".$name;
					$_userlog->save();
		$fileUploadOrigName=$fileUpload->getClientOriginalName();
		Input::file("fileToUpload")->move($path, $fileUploadOrigName);
    	
        return Redirect::action('BackendBaseController@painting');	
		
		} catch (Exception $e) {
			$errormsg["error"]="<script>alert('Invalid entry! Duplicate value for painting, not allowed! Entry Disposed!')</script>";
			 View::share(array(
        	'page'=>'Paintings',
        	'modify'=>'otherpage',
        	'panel'=>'new',
        	'class'=>'new'
       ));
        $this->layout->content = View::make('backend.data_painting', $errormsg);
		}
		

	}
	
	
	public function edit_paint($id)
	{
		
    	session_start();
		$_painting=ModelPainting::where('paint_id', $id)->where('deleted', 0)->get();
    	$_count=ModelPainting::where('paint_id', $id)->where('deleted', 0)->count();
    	foreach($_painting as $painting) {
			$data=array(
				'painting_id'=>$painting->paint_id,
				'painting_name'=>$painting->paint_name,
				'painting_desc'=>$painting->paint_desc,
				'painting_price'=>$painting->paint_price,
				'painting_status'=>$painting->paint_status,
				'painting_src'=>$painting->paint_imgsrc
			);
		}
		if($_count!=0)
		{
			View::share(array(
				'page'=>'Edit',
				'modify'=>'otherpage',
				'panel'=>'new',
        		'class'=>'edit'
			));
        	$this->layout->content = View::make('backend.data_painting',$data);
		}
		else
		{
			return Redirect::action('BackendBaseController@painting');
		}
	}
	
	public function update_paint($id)
    {  
    
		session_start();
    	$name=ucwords(Input::get("paint_name"));
    	$data=array(
    		'paint_name'=>ucwords(Input::get("paint_name")),
    		'paint_desc'=>ucfirst(Input::get("paint_desc")),
    		'paint_status'=>ucfirst(Input::get("status")),
    		'paint_price'=>ucfirst(Input::get("paint_price")),
    	);
    	ModelPainting::where('paint_id',$id)->update($data);
    	$tZone = 'Asia/Singapore';
	    			$dt = Carbon::now($tZone)->toDateString();
	    			$tm = Carbon::now($tZone)->toTimeString();
	    			
	    			$_userlog = new ModelUserlog;
					$_userlog->user_email= $_SESSION["username"];
					$_userlog->Time= $tm;
					$_userlog->Date= $dt;
					$_userlog->user_type= 2;
					$_userlog->activity="Modified existing painting. Name:".$name;
					$_userlog->save();
        return Redirect::action('BackendBaseController@painting',$id);
    }
    
    
    public function delete_paint($id)
    {   
    	$data['deleted']=1;
    	ModelPainting::where('paint_id',$id)->update($data);
    	
        return Redirect::action('BackendBaseController@painting');
    }
    
     
    public function delete_verify($id)
    {   
    	session_start();
    	$data["_id"]=$id;
    	View::share(array(
				'page'=>'Verify',
				'modify'=>'otherpage',
				'panel'=>'new'
		));
        $this->layout->content = View::make('backend.deleteverify',$data);
    }

     
    public function delete_auth($id)
    {   
		$password=Input::get("password");
		$_paint=ModelPainting::where('paint_id', $id)->get();
		foreach($_paint as $paint)
			{
				$name=array(
					'paint_name'=>$paint->paint_name
				);
			}		
		$_data=ModelAdmin::where('user_mail', "jimuelpalaca06@gmail.com")->get();
			foreach($_data as $user)
			{
				$data=array(
					'oldpassword'=>$user->user_pass
				);
			}			
				
				if(Hash::check($password, $data['oldpassword']))
				{
					session_start();
					$del['deleted']=1;
    				ModelPainting::where('paint_id',$id)->update($del);
    				$tZone = 'Asia/Singapore';
	    			$dt = Carbon::now($tZone)->toDateString();
	    			$tm = Carbon::now($tZone)->toTimeString();
	    			
	    			$_userlog = new ModelUserlog;
					$_userlog->user_email= $_SESSION["username"];
					$_userlog->Time= $tm;
					$_userlog->Date= $dt;
					$_userlog->user_type= 2;
					$_userlog->activity="Delete existing painting. Name:".$name["paint_name"].", Recoverable: true";
					$_userlog->save();
        			$errormsg["error"]="<script>alert('Item successfully deleted!')</script>";
        			$errormsg["_painting"]=ModelPainting::where('deleted', 0)->get();
			 		View::share(array(
        	'page'=>'Paintings',
        	'modify'=>'otherpage',
        	'panel'=>'view',
        	'class'=>'view'
       ));
        $this->layout->content = View::make('backend.data_painting', $errormsg);
				}
				else
				{
					session_start();
					$data["_id"]=$id;
    				View::share(array(
					'page'=>'Verify',
					'modify'=>'otherpage',
					'panel'=>'failed'
					));
        			$this->layout->content = View::make('backend.deleteverify',$data);
				}
				
    }

	public function order_list()
	{
		session_start();
		$_data["order"]=ModelOrder::where('complete',1)->get();
		
		View::share(array(
			'page'=>'Dashboard',
			'modify'=>'otherpage',
			'class'=>'view',
			'type'=>'user',
			
		));
		
		$this->layout->content = View::make('backend.order_dashboard', $_data);

		
	}

	public function confirm_delete($id)
	{
		session_start();
		
		$data["_painting"]=ModelPainting::where('paint_id', $id)->where('deleted', 0)->get();
		$_count=ModelPainting::where('paint_id', $id)->where('deleted', 0)->count();
		
		if($_count!=0)
		{
			View::share(array(
				'page'=>'Confirm Delete',
				'modify'=>'otherpage',
				'panel'=>'new',
				'class'=>'edit'
			));
			$this->layout->content = View::make('backend.confirm_delete',$data);
		}
		else
		{
			return Redirect::action('BackendBaseController@painting');
		}
	}
    
    public function restore_paint($id)
    {   
    	session_start();
    	$_paint=ModelPainting::where('paint_id', $id)->get();
		foreach($_paint as $paint)
			{
				$name=array(
					'paint_name'=>$paint->paint_name
				);
			}	
    	$data['deleted']=0;
    	ModelPainting::where('paint_id',$id)->update($data);
    	$tZone = 'Asia/Singapore';
	    			$dt = Carbon::now($tZone)->toDateString();
	    			$tm = Carbon::now($tZone)->toTimeString();
	    			
	    			$_userlog = new ModelUserlog;
					$_userlog->user_email= $_SESSION["username"];
					$_userlog->Time= $tm;
					$_userlog->Date= $dt;
					$_userlog->user_type= 2;
					$_userlog->activity="Restore deleted painting. Name:".$name["paint_name"];
					$_userlog->save();
        return Redirect::action('BackendBaseController@painting');
    }
    
    public function portrait()
    {   
    	session_start();
    	$data["_painting"]=ModelPortrait::where('deleted', 0)->get();
        View::share(array(
        	'page'=>'Portrait',
        	'modify'=>'otherpage',
        	'panel'=>'view',
        	'class'=>'view'
       ));
        $this->layout->content = View::make('backend.data_portrait',$data);
    }
    
    public function trashbin_port()
    {   
    	session_start();
    	$data["_painting"]=ModelPortrait::where('deleted', 1)->get();
        View::share(array(
        	'page'=>'Portrait',
        	'modify'=>'otherpage',
        	'panel'=>'view',
        	'class'=>'trashbin'
       ));
        $this->layout->content = View::make('backend.data_portrait',$data);
    }
	
	public function add_port()
    {   
    	session_start();
        View::share(array(
        	'page'=>'Paintings',
        	'modify'=>'otherpage',
        	'panel'=>'new',
        	'class'=>'new'
       ));
        $this->layout->content = View::make('backend.data_portrait');
    }
	
	public function save_port()
	{
    	$data=new ModelPortrait;
    	$data->port_name=ucwords(Input::get("paint_name"));
    	$data->port_desc=ucfirst(Input::get("paint_desc"));
    	$data->port_price=Input::get("paint_price");
    	$data->port_status=Input::get("status");
    	$data->port_imgsrc=Input::get("fileToUpload");
    	$data->deleted=0;
    	$data->save();
		
        return Redirect::action('BackendBaseController@portrait');	
	}
	
	public function edit_port($id)
	{
    	session_start();
		$_painting=ModelPortrait::where('port_id', $id)->where('deleted', 0)->get();
    	$_count=ModelPortrait::where('port_id', $id)->where('deleted', 0)->count();
    	foreach($_painting as $painting) {
			$data=array(
				'painting_id'=>$painting->port_id,
				'painting_name'=>$painting->port_name,
				'painting_desc'=>$painting->port_desc,
				'painting_price'=>$painting->port_price,
				'painting_status'=>$painting->port_status,
				'painting_src'=>$painting->port_imgsrc
			);
		}
		if($_count!=0)
		{
			View::share(array(
				'page'=>'Edit',
				'modify'=>'otherpage',
				'panel'=>'new',
        		'class'=>'edit'
			));
        	$this->layout->content = View::make('backend.data_portrait',$data);
		}
		else
		{
			return Redirect::action('BackendBaseController@portrait');
		}
	}
	
	public function update_port($id)
    {  
    	$data=array(
    		'port_name'=>ucwords(Input::get("paint_name")),
    		'port_desc'=>ucfirst(Input::get("paint_desc")),
    		'port_status'=>ucfirst(Input::get("status")),
    		'port_price'=>ucfirst(Input::get("paint_price")),
    	);
    	ModelPortrait::where('port_id',$id)->update($data);
        return Redirect::action('BackendBaseController@portrait',$id);
    }
    
    
    public function delete_port($id)
    {   
    	$data['deleted']=1;
    	ModelPortrait::where('port_id',$id)->update($data);
        return Redirect::action('BackendBaseController@portrait');
    }
    
    public function restore_port($id)
    {   
    	$data['deleted']=0;
    	ModelPortrait::where('port_id',$id)->update($data);
        return Redirect::action('BackendBaseController@portrait');
    }
    
        
	public function users()
    {   
    	session_start();
    	$data["_painting"]=ModelAdmin::where('deactivated', 0)
    		->where('user_type', 2)
    		->get();
        View::share(array(
        	'page'=>'Users',
        	'modify'=>'otherpage',
        	'panel'=>'view',
        	'class'=>'view'
       ));
        $this->layout->content = View::make('backend.data_users',$data);
    }
    
    public function customer()
    {   
    	session_start();
    	$data["_painting"]=ModelUser::where('deactivated', 0)
    		->where('user_type', 4)
    		->get();
        View::share(array(
        	'page'=>'Users',
        	'modify'=>'otherpage',
        	'panel'=>'view',
        	'class'=>'view'
       ));
        $this->layout->content = View::make('backend.customer',$data);
    }

	public function users_staff()
    {   
    	session_start();
    	$data["_painting"]=ModelAdmin::where('deactivated', 0)
    		->where('user_type', 3)
    		->get();
        View::share(array(
        	'page'=>'Users',
        	'modify'=>'otherpage',
        	'panel'=>'view',
        	'class'=>'view'
       ));
        $this->layout->content = View::make('backend.data_usersstaff',$data);
    }
    
    public function trashbin_user()
    {   
    	session_start();
    	$data["_painting"]=ModelUser::where('deleted', 1)->get();
        View::share(array(
        	'page'=>'Paintings',
        	'modify'=>'otherpage',
        	'panel'=>'view',
        	'class'=>'trashbin'
       ));
        $this->layout->content = View::make('backend.data_user',$data);
    }
	
	public function add_user()
    {   
    	session_start();
        View::share(array(
        	'page'=>'Paintings',
        	'modify'=>'otherpage',
        	'panel'=>'new',
        	'class'=>'new'
       ));
        $this->layout->content = View::make('backend.data_users');
    }
	
	public function save_user()
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
        		'page'=>'Paintings',
        		'modify'=>'otherpage',
        		'panel'=>'new',
        		'class'=>'new'
      		 ));
        	$this->layout->content = View::make('backend.data_users',$_data);
		}
		else
		{
			/*$data["input_out"]="Input is Alpha Numeric";
        	$this->layout->content = View::make('backend.input_out',$data);*/
        	$password=Input::get("password");
    		$data=new ModelAdmin;
    		$data->user_pass=Hash::make($password);
    		$data->user_type=Input::get("type");
    		$data->user_fname=ucwords(Input::get("fname"));
    		$data->user_mname=ucwords(Input::get("mname")); 
    		$data->user_lname=ucwords(Input::get("lname")); 
    		$data->user_num=Input::get("phone");
    		$data->user_mail=Input::get("email");
    		$data->deactivated=0;
    		$data->save();
		
        return Redirect::action('BackendBaseController@users');	
		}
		
	}
	
	public function edit_user($id)
	{
		
    	session_start();
		$_painting=ModelPainting::where('paint_id', $id)->where('deleted', 0)->get();
    	$_count=ModelPainting::where('paint_id', $id)->where('deleted', 0)->count();
    	foreach($_painting as $painting) {
			$data=array(
				'painting_id'=>$painting->paint_id,
				'painting_name'=>$painting->paint_name,
				'painting_desc'=>$painting->paint_desc,
				'painting_price'=>$painting->paint_price,
				'painting_status'=>$painting->paint_status,
				'painting_src'=>$painting->paint_imgsrc
			);
		}
		if($_count!=0)
		{
			View::share(array(
				'page'=>'Edit',
				'modify'=>'otherpage',
				'panel'=>'new',
        		'class'=>'edit'
			));
        	$this->layout->content = View::make('backend.data_painting',$data);
		}
		else
		{
			return Redirect::action('BackendBaseController@user');
		}
	}
	
	public function update_user($id)
    {  
    	$data=array(
    		'paint_name'=>ucwords(Input::get("paint_name")),
    		'paint_desc'=>ucfirst(Input::get("paint_desc")),
    		'paint_status'=>ucfirst(Input::get("status")),
    		'paint_price'=>ucfirst(Input::get("paint_price")),
    	);
    	ModelPainting::where('paint_id',$id)->update($data);
        return Redirect::action('BackendBaseController@painting',$id);
    }
    
    
    public function delete_user($id)
    {   
    	$data['deleted']=1;
    	ModelPainting::where('paint_id',$id)->update($data);
        return Redirect::action('BackendBaseController@painting');
    }
    
    public function restore_user($id)
    {   
    	$data['deleted']=0;
    	ModelPainting::where('paint_id',$id)->update($data);
        return Redirect::action('BackendBaseController@painting');
    }
    
      public function indexpage_settings()
    {
    	session_start();
    	$_setIndexPage=ModelSetIndex::where('id', 1)->get();
    	foreach($_setIndexPage as $settings) {
			$data=array(
				'setbHead'=>$settings->bnnr_head,
				'setbSubhead'=>$settings->bnnr_subhead,
				'setbInfo'=>$settings->bnnr_info,
				'setf1Head'=>$settings->ftre1_head,
				'setf1Info'=>$settings->ftre1_info,
				'setf2Head'=>$settings->ftre2_head,
				'setf2Info'=>$settings->ftre2_info,
				'setf3Head'=>$settings->ftre3_head,
				'setf3Info'=>$settings->ftre3_info,
			);
		}
    	View::share(array(
        	'page'=>'Page Setting',
        	'modify'=>'otherpage',
			'account'=>'null'
       ));
        $this->layout->content = View::make('backend.setIndex',$data);
	}
	public function updateIndexPage()
    {  
    	$data=array(
    		'bnnr_head'=>ucwords(Input::get("bhead")),
    		'bnnr_subhead'=>ucwords(Input::get("bshead")),
    		'bnnr_info'=>ucfirst(Input::get("binfo")),
    		'ftre1_head'=>ucfirst(Input::get("f1head")),
    		'ftre1_info'=>ucfirst(Input::get("f1info")),
    		'ftre2_head'=>ucfirst(Input::get("f2head")),
    		'ftre2_info'=>ucfirst(Input::get("f2info")),
    		'ftre3_head'=>ucfirst(Input::get("f3head")),
    		'ftre3_info'=>ucfirst(Input::get("f3info")),
    		
    	);
    	ModelSetIndex::where('id', 1)->update($data);
        return Redirect::action('BackendBaseController@indexpage_settings');
    }
    public function history_settings()
    {
    	session_start();
    	$_setIndexPage=ModelHistory::where('id', 1)->get();
    	foreach($_setIndexPage as $settings) {
			$data=array(
				'History'=>$settings->History,
			);
		}
    	View::share(array(
        	'page'=>'Page Setting',
        	'modify'=>'otherpage'
       ));
        $this->layout->content = View::make('backend.setHistory',$data);
	}
	
	
	public function updateHistory()
    {  
    	$data=array(
    		'History'=>ucfirst(Input::get("binfo"))
    		
    	);
    	ModelHistory::where('id', 1)->update($data);
        return Redirect::action('BackendBaseController@history_settings');
    }
}