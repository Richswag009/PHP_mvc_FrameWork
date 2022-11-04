<?php
class Pages extends Controller{

    public function __construct()
    {
    
    }

    public function about(){
        $data= ['title'=>'About Us'];
        $this->views('Pages/About', $data);
          
    }

    public function index(){
       
        $data= ['title'=>'Welcome'];     
        $this->views('Pages/Home',$data);
    }
}