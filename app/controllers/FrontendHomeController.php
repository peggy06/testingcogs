<?php
class FrontendHomeController extends FrontendController
{
	public function index()
	{   
        $data["default"]="Welcome to FrontEnd";
        View::share('page', 'Home');
        $this->layout->content = View::make('frontend.home', $data);
	}
}