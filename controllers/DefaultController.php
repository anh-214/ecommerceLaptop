<?php 

class DefaultController 
{
    public function index()
    {
        echo "This is default controller";
    }
    public function yield($value){
        echo $value;
    }
}