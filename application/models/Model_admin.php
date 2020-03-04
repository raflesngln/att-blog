<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin extends CI_Model {
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

// ==================CUSTOMS============================================


//    KODE PENJUALAN
    public function getKodeOrder(){
        $query = $this->db->query("select MAX(RIGHT(id_order,5)) as kd_max from orders");
        $kd = "";
        if($query->num_rows()>0)
        {
            foreach($query->result() as $data)
            {
                $tmp = ((int)$data->kd_max)+1;
                $kd = sprintf("%05s", $tmp);
            }
        }
        else
        {
            $kd = "00001";
        }
        return "INV-".date('dmy').'-'.$kd;
    }

	
//=====================login member cek============================
    function login($table,$username,$password) {
		
	$query=$this->db->query("select*from ".$table." where UserName='$username' and Password='$password'");		
	return $query->result();
    }


    	//=====================get data all============================
    public function getdatapaging($kolom,$tabel,$where)
    {
        $query = $this->db->query("select ".$kolom." from ".$tabel." $where");
		return $query->result();
    }
    //////////////////////////////////////////////////////////////////////
	    public function tampil($kolom,$tabel,$where)
    {
        $query = $this->db->query("select $kolom from ".$tabel." $where");
		return $query->result();
    }
//===============VIEW PRODUCT WITH PAGING=============================
		function tampil_semua_produk($limit,$offset)
	{
		$q = $this->db->query("SELECT * from produk left join kategori_produk on produk.id_kategori=kategori_produk.id_kategori order by 
		id_produk DESC LIMIT $offset,$limit");
		return $q;
	}
//================ DETAIL PRODUCT===========================================
		function detail_produk($kode)
	{
		$sql = $this->db->query("SELECT * from produk inner join kategori_produk on produk.id_kategori=kategori_produk.id_kategori where
		id_produk='$kode'");
		return $sql->result();
	}



//===============DELETE PRODUK========================================
	    function delete_order_pending($tabel,$where)
	    {
		$query = $this->db->query("DELETE from  $tabel ".$where."");
		return $query;
	    }
//=============== Hitung isi tabel===============================
		function hitung_isi_tabel($kolom,$tabel,$seleksi)
	{
		$q = $this->db->query("SELECT ".$kolom." from ".$tabel." $seleksi");
		return $q;
	}

    public function KodeProduk()
    {
        $query = $this->db->query("select MAX(RIGHT(id_produk,4)) as kd_max from produk");
        $kd = "";
        if($query->num_rows()>0)
        {
            foreach($query->result() as $k)
            {
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%04s", $tmp);
            }
        }
        else
        {
            $kd = "0001";
        }
        return "PROD-".$kd;
    }
	//====================UPDATE data=====================================	 
	    function aktivasi($table,$kode1,$kode2)
	    {
	      $query = $this->db->query("UPDATE ".$table." set active='1' Where md5(id_user)='$kode1' OR md5(id_user)='$kode2'");
			return $query;
	    }


}
