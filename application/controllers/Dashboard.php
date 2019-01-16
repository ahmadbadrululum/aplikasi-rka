<?php
Class Dashboard extends CI_Controller{
    
    function index(){
        
        $data = [
            'judul'     => 'Home',
            'subjudul'  => 'Dashboard'
        ];
        
        $this->template->load('template','dashboard',$data);
    	
    }

}