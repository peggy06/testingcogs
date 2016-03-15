<?php
class BackendHomeController extends BackendController
{
    public function index()
    {   
        View::share('page', 'Admin');
        $this->layout->content = View::make('backend.home');
    }
}