<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Adm extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('Model_admin');
    }
    
    public function index() {
        $data=array(
                'title'=>'Administrator',
                'scrumb_name'=>'Administrator',
                'scrumb'=>'admin/view_user',
                'content'=>'adm/layout/dashboard'
            );
        $this->load->view('adm/login_page',$data);
    }
    public function dashboard() {
        $data=array(
                'title'=>'Administrator',
                'scrumb_name'=>'Administrator',
                'scrumb'=>'admin/view_user',
                'content'=>'adm/layout/dashboard'
            );
        $this->load->view('adm/home',$data);
    }
    public function list_news() {
        $data=array(
                'title'=>'list_news',
                'scrumb_name'=>'list_news',
                'scrumb'=>'admin/list_news',
                'content'=>'adm/list_news'
		);
        $this->load->view('adm/home',$data);
    }
    public function input_news() {
        $data=array(
                'title'=>'input_news',
                'scrumb_name'=>'input_news',
                'scrumb'=>'admin/input_news',
                'content'=>'adm/input_news'
        );
        $this->load->view('adm/home',$data);
    }

function news_list(){
        $page=$this->uri->segment(3);
        $cari=$this->input->post('txtsearch');
        $limit=8;
        if(!$page):
        $offset = 0;
        else:
        $offset = $page;
        endif;
        $data['title']='list_news';
        $data['scrumb_name']='list_news';
        $data['scrumb']='admin/view_user';
        $data['category']=$this->Model_admin->getCustom("*","categories",
                           "ORDER BY category_title ASC");
        $data['list']=$this->Model_admin->getCustom("a.post_id,a.post_desc,a.post_title,a.post_picture,b.tag_id,c.tag_label","posts a",
                           "LEFT JOIN posts_tags b ON a.post_id=b.post_id
                            LEFT JOIN tags c ON b.tag_id=c.tag_id GROUP BY a.post_id ORDER BY c.tag_label ASC  LIMIT $offset,$limit ");
        $tot_hal = $this->Model_admin->hitung_isi_tabel('a.post_id,a.post_desc,a.post_title,a.post_picture,b.tag_id,c.tag_label',"posts a",
                    "LEFT JOIN posts_tags b ON a.post_id=b.post_id
                    LEFT JOIN tags c ON b.tag_id=c.tag_id GROUP BY a.post_id ORDER BY c.tag_label ASC");
        
                                // create for pagination     
            $config['base_url'] = base_url() . 'adm/news_list/';
            $config['total_rows'] = $tot_hal->num_rows();
            $config['per_page'] = $limit;
            $config['uri_segment'] = 3;
            $config['first_link'] = 'First';
            $config['last_link'] = 'last';
            $config['next_link'] = 'next';
            $config['prev_link'] = 'Prev';
            $this->pagination->initialize($config);
            $data["paginator"] =$this->pagination->create_links();
        
        $data['content']='adm/news_list';
        $this->load->view('adm/home',$data);
}

// =====================================================================================
    public function our_services() {
        $data=array(
            'title'=>'list User',
            'scrumb_name'=>'Data User',
            'scrumb'=>'admin/view_user',
            'content'=>'home/expertise/parcel'
		);
       $this->load->view('home/home',$data);
    }
    public function blogs() {
        $data=array(
            'title'=>'list User',
            'scrumb_name'=>'Data User',
            'scrumb'=>'admin/view_user',
            'content'=>'home/blogs/list_blog'
		);
       $this->load->view('home/home',$data);
    }

	
	
}
