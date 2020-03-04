<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Index extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $data=array(
            'title'=>'list User',
            'scrumb_name'=>'Data User',
            'scrumb'=>'admin/view_user',
            'view'=>'home',
		);

       $this->load->view('home/home',$data);
    }
	
    public function our_services() {
        $data=array(
            'title'=>'list User',
            'scrumb_name'=>'Data User',
            'scrumb'=>'admin/view_user',
            'view'=>'home',
		);

       $this->load->view('home/our_services',$data);
    }
	
	
}
