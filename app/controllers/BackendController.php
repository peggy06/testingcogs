<?php
class BackendController extends SystemController
{
    protected $layout = 'backend.layout';
    
    protected function setupLayout()
    {
        if ( ! is_null($this->layout))
        {
            $this->layout = View::make($this->layout);
        }
    }
}