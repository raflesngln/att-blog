<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_home extends CI_Model {
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	

public function get_by_id($id,$nmtabel,$key){
		$this->db->from($nmtabel);
		$this->db->where($key,$id);
		$query = $this->db->get();
		return $query->row();
	}

    function getCustom($kolom,$table,$where) {
		$query=$this->db->query("select ".$kolom." from ".$table." $where");		
		return $query->result();
 	}
    
	function getMaxId($table,$kolom) 
	{
		//$query=$this->db->query("select MAX(Id) AS maxi from ".$table." $where");	
		$maxid = $this->db->query('SELECT MAX('.$kolom.') AS maxid FROM '.$table.'')->row()->maxid;
		return $maxid;
 	}
	
	public function save($nmtabel,$data)
	{
		$this->db->insert($nmtabel, $data);
		return $this->db->insert_id();
	}

function update($table,$kolom,$id,$data)
	    {
	      $this->db->where($kolom,$id);
	       $ubah= $this->db->update($table,$data);
			return $ubah;
	    }
function update_views_count($id){
			$this->db->where('post_id', $id);
			$this->db->set('views', 'views+1', FALSE);
			$this->db->update('count_views');
}
function delete_data($table,$kolom,$id)
	{
		$this->db->where($kolom,$id);
		$this->db->delete($table);
	}

	
	//========================count record ========================
public function count_record($table,$where) {
      $query = $this->db->query("SELECT * FROM $table $where ");
	  return $query->num_rows(); 
    }
	//========================Get Header ========================
public function getDataCustom($kolom,$table,$where) {
      $query = $this->db->query("SELECT " .$kolom. " FROM $table $where ");
	 return $query->result(); 
    }

  
 function update_user_online($table,$kolom,$id,$data)
	    {
	      $this->db->where($kolom,$id);
	       $ubah= $this->db->update($table,$data);
		   //$query = $this->db->query("update $table set last_active=date('Y-m-d H:i:s') where $kolom='$id'");
			return $ubah;
	    }
 function update_user_offline($table,$kolom,$id,$kolom2,$id2,$data)
	    {
	      $this->db->where($kolom,$id);
		  $this->db->where($kolom2,$id2);
	       $ubah= $this->db->update($table,$data);
		   //$query = $this->db->query("update $table set last_active=date('Y-m-d H:i:s') where $kolom='$id'");
			return $ubah;
	    }


}
