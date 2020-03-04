<?php
class Master extends CI_Controller{
	var $view2='';
	public $ses='';
	
	public function __construct()
	{
		parent::__construct();
		/*$this->ses=$this->session->userdata('GroupName');
        $this->load->model('logistic/Crm_model');
		$this->load->library('sesi_login');
		if($this->sesi_login->all_gate() !=TRUE){
			redirect('Error_404');
			return false;
		}*/
		//$this->load->model('logistic/User_model');
	}
		
    function index(){
		  if($this->session->userdata('login_forwarder') != TRUE ){
            $this->load->view('logistic/login');
        } else {
		   redirect('logistic/Forwarder/Forwarder');		
			
		} 
}
public function master_data() {
		$data=array(
		'title'=>'Karyawan',
		'view'=>'template/content'
		);
		$this->load->view('template/home',$data);
}

    function dashboard(){
       	  $data=array(
		  'title'=>'dashboard Customers',
		  'scrumb'=>'<a href="'.base_url().'logistic/Forwarder/dashboard" class="breadcrumb">Dashboard</a> Dashboard',
		  'Prospect'=>$this->Crm_model->count_record("trcust_hdr","WHERE Status='Prospect'"),
		  'Customer'=>$this->Crm_model->count_record("trcust_hdr","WHERE Status='Customer'"),
		  'aktive'=>$this->Crm_model->count_record("trcust_hdr","WHERE isActive='1'"),
		  'nonaktive'=>$this->Crm_model->count_record("trcust_hdr","WHERE isActive='0'"),
		  'sidemenu'=>'<a href="'.base_url().'">dashboard</a>',
		  'view'=>'logistic/dashboard'
		  );
	      $this->load->view('template/home',$data);		  
}
 
    function logout() {
        $this->session->unset_userdata('idusr');
        $this->session->unset_userdata('Email');
        $this->session->unset_userdata('IdGroupUsr');
		$this->session->unset_userdata('GroupId');
		$this->session->unset_userdata('GroupName');
        $this->session->unset_userdata('DepartemenCode');
        $this->session->unset_userdata('login_forwarder');
        $this->session->set_flashdata('notif','THANK YOU FOR LOGIN IN THIS APP');
        redirect('logistic/Forwarder');
    }
	
}


