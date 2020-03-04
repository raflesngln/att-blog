<?php 

class My_menu{

 
         public function __construct()
        {
	        $CI =& get_instance();        
	        //$this->load->database();
	        $this->db= $CI->load->database('default', TRUE);
        }


public function get_menu_category(){
		$menuku="";

		$sql = "SELECT * from categories";
        $query=$this->db->query($sql);
        if ($query->num_rows() > 0){
            foreach ($query->result() as $row)
            {
            	$id_mn=$row->category_id;
            	$mn_title=$row->category_title;

                $menuku .="<li><a href='".base_url().'home/post_category/'.$id_mn."'>".$mn_title." </a></li>";
            }
        }
		return $menuku;
	}

public function my_profile(){
	return 'raflesiangln';
}


}