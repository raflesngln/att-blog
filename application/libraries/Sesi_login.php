<?php 

class Sesi_login{

 	protected $CI;
         public function __construct()
        {
                // Assign the CodeIgniter super-object
                $this->CI =& get_instance();
        }
public function gate1(){
		$sesi_gate1=$this->CI->session->userdata('gate1_login_rate');
		if($sesi_gate1 == TRUE){
		   return true;
		} else {
			return false;
		}
}
public function all_gate(){
		$sesi_gate1=$this->CI->session->userdata('gate1_login_rate');
		$sesi_gate2=$this->CI->session->userdata('gate2_login_rate');
		if($sesi_gate1 == TRUE && $sesi_gate2 ==TRUE){
		   return true;
		} else {
			return false;
		}
}
	
public function cek_sesi(){
		$sesi_gate1=$this->CI->session->userdata('gate1_login_rate');
		$sesi_gate2=$this->CI->session->userdata('gate2_login_rate');
		if($sesi_gate1 != TRUE && $sesi_gate2 !=TRUE){
		redirect('Error_404');
		}
}

public function my_profile(){
	return 'raflesia';
}


}