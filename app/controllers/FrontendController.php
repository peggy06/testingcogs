<?php
class FrontendController extends SystemController
{
    protected $layout = 'frontend.layout';  
    
    protected function setupLayout()
    {
        if ( ! is_null($this->layout))
        {
            $this->layout = View::make($this->layout);
        }
    }
}