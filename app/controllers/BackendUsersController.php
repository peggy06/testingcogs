<?php
class BackendUsersController extends BackendController
{
    public function active()
    {   
    	$data["_users"]=ModelUser::where('deleted', 0)->get();
        View::share(array(
        	'page'=>'Active Users',
        	'header'=>"Active Users",
        	'modify'=>'active'
       ));
        $this->layout->content = View::make('backend.users',$data);
    }
    public function deleted()
    {   
    	$data["_users"]=ModelUser::where('deleted', 1)->get();
        View::share(array(
        	'page'=>'Deleted Users',
        	'header'=>"Deleted Users",
        	'modify'=>'deleted'
       ));
        $this->layout->content = View::make('backend.users',$data);
    }
	public function create()
    {   
        View::share(array(
        	'page'=>'Create',
        	'header'=>'Create New Profile',
        	'modify'=>'add'
       ));
        $this->layout->content = View::make('backend.users_modify');
    }
    public function save()
    {   
    	$data=new ModelUser;
    	$data->user_fname=ucfirst(Input::get("user_fname"));
    	$data->user_mname=ucfirst(Input::get("user_mname"));
    	$data->user_lname=ucfirst(Input::get("user_lname"));
    	$data->user_gender=Input::get("user_gender");
    	$data->user_bdate=strtotime(Input::get("user_bdate"));
    	$data->user_bplace=ucfirst(Input::get("user_bplace"));
    	$data->save();
        return Redirect::action('BackendUsersController@active');
    }
    public function view($id)
    {  
    	$_users=ModelUser::where('user_id', $id)->get();
    	$_count=ModelUser::where('user_id', $id)->where('deleted', 0)->count();
    	foreach($_users as $users) {
			$data=array(
				'user_id'=>$users->user_id,
				'user_fname'=>$users->user_fname,
				'user_mname'=>$users->user_mname,
				'user_lname'=>$users->user_lname,
				'user_gender'=>$users->user_gender,
				'user_bdate'=>date("m/d/Y",$users->user_bdate),
				'user_bplace'=>$users->user_bplace
			);
		}
		View::share(array(
			'page'=>'View',
			'header'=>$data['user_fname']." ".$data['user_lname']."'s Profile",
			'modify'=>'view',
			'count'=>$_count
		));
        $this->layout->content = View::make('backend.users_modify',$data);
    }
    public function edit($id)
    {
    	$_users=ModelUser::where('user_id', $id)->where('deleted', 0)->get();
    	$_count=ModelUser::where('user_id', $id)->where('deleted', 0)->count();
    	foreach($_users as $users) {
			$data=array(
				'user_id'=>$users->user_id,
				'user_fname'=>$users->user_fname,
				'user_mname'=>$users->user_mname,
				'user_lname'=>$users->user_lname,
				'user_gender'=>$users->user_gender,
				'user_bdate'=>date("m/d/Y",$users->user_bdate),
				'user_bplace'=>$users->user_bplace
			);
		}
		if($_count!=0)
		{
			View::share(array(
				'page'=>'Edit',
				'header'=>$data['user_fname']." ".$data['user_lname']."'s Profile",
				'modify'=>'edit'
			));
        	$this->layout->content = View::make('backend.users_modify',$data);
		}
		else
		{
			return Redirect::action('BackendUsersController@active');
		}
		
	}
	public function update($id)
    {  
    	$data=array(
    		'user_fname'=>ucfirst(Input::get("user_fname")),
    		'user_mname'=>ucfirst(Input::get("user_mname")),
    		'user_lname'=>ucfirst(Input::get("user_lname")),
    		'user_gender'=>ucfirst(Input::get("user_gender")),
    		'user_bdate'=>strtotime(Input::get("user_bdate")),
    		'user_bplace'=>ucfirst(Input::get("user_bplace"))
    	);
    	ModelUser::where('user_id',$id)->update($data);
        return Redirect::action('BackendUsersController@view',$id);
    }
    public function delete($id)
    {   
    	$data['deleted']=1;
    	ModelUser::where('user_id',$id)->update($data);
        return Redirect::action('BackendUsersController@active');
    }
    public function restore($id)
    {   
    	$data['deleted']=0;
    	ModelUser::where('user_id',$id)->update($data);
        return Redirect::action('BackendUsersController@deleted');
    }
    public function sessionpage()
    {
    	session_start();
		View::share(array(
			'page'=>'session page'
		));
        $this->layout->content = View::make('backend.session_page');
	}
    public function login()
    {
		View::share(array(
			'page'=>'login'
		));
        $this->layout->content = View::make('backend.login');
	}
	public function logout()
	{
		session_start();
		session_destroy();
		return Redirect::action('BackendUsersController@login');
	}
	public function verify()
	{
		$fname=Input::get("fname");
		$lname=Input::get("lname");
		$_count=ModelUser::where('user_fname', $fname)
			->where('user_lname', $lname)
			->count();
		
		if($_count!=0)
		{
			session_start();
			$_SESSION["session_testing"]="<script>alert('session is active');</script>";
			return Redirect::action('BackendUsersController@sessionpage');
		}
		else
		{
			return Redirect::action('BackendUsersController@login');
		}
	}
}