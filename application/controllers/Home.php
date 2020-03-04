<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Home extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
         $this->load->model('Model_home');
    }
    
    public function index() {
        $data=array(
                'title'=>'front-content',
                'scrumb_name'=>'front-content',
                'scrumb'=>'admin/front-content',
                'trending'=>$this->Model_home->getCustom("a.post_id,a.post_desc,a.post_title,a.post_picture,b.tag_id,c.tag_label","posts a",
                           "INNER JOIN posts_tags b ON a.post_id=b.post_id
                            INNER JOIN tags c ON b.tag_id=c.tag_id WHERE a.post_id='6' OR a.post_id='5'"),
                'trending_related'=>$this->Model_home->getCustom("a.post_id,a.post_desc,a.post_title,a.post_picture,b.tag_id,c.tag_label","posts a",
                           "INNER JOIN posts_tags b ON a.post_id=b.post_id
                            INNER JOIN tags c ON b.tag_id=c.tag_id WHERE b.tag_id='4' ORDER BY a.created_date DESC LIMIT 4"),
                'populars'=>$this->Model_home->getCustom("a.post_id,a.post_desc,a.post_title,a.post_picture,b.tag_id,c.tag_label","posts a",
                           "INNER JOIN posts_tags b ON a.post_id=b.post_id
                            INNER JOIN tags c ON b.tag_id=c.tag_id WHERE b.tag_id='4' ORDER BY a.created_date DESC LIMIT 4"),
                'hots_bigs'=>$this->Model_home->getCustom("a.post_id,a.post_desc,a.post_title,a.post_picture,b.tag_id,c.tag_label","posts a",
                           "INNER JOIN posts_tags b ON a.post_id=b.post_id
                            INNER JOIN tags c ON b.tag_id=c.tag_id WHERE b.tag_id='4' ORDER BY a.created_date DESC LIMIT 0,1"),
                'hots'=>$this->Model_home->getCustom("a.post_id,a.post_desc,a.post_title,a.post_picture,b.tag_id,c.tag_label","posts a",
                           "INNER JOIN posts_tags b ON a.post_id=b.post_id
                            INNER JOIN tags c ON b.tag_id=c.tag_id WHERE b.tag_id='2' ORDER BY a.created_date DESC LIMIT 1,6"),
                'recomended'=>$this->Model_home->getCustom("a.post_id,a.post_desc,a.post_title,a.post_picture,b.tag_id,c.tag_label","posts a",
                           "INNER JOIN posts_tags b ON a.post_id=b.post_id
                            INNER JOIN tags c ON b.tag_id=c.tag_id LIMIT 9"),
                'newest'=>$this->Model_home->getCustom("a.post_id,a.post_desc,a.post_title,a.post_picture,b.tag_id,c.tag_label","posts a",
                           "INNER JOIN posts_tags b ON a.post_id=b.post_id
                            INNER JOIN tags c ON b.tag_id=c.tag_id WHERE b.tag_id='2' ORDER BY a.created_date ASC LIMIT 0,6"),

                'content'=>'home/front-content'
            );
        $this->load->view('home/home',$data);
    }

function category_post(){
        $page=$this->uri->segment(3);
        $cari=$this->input->post('txtsearch');
        $limit=25;
        if(!$page):
        $offset = 0;
        else:
        $offset = $page;
        endif;
        $data['title']='list USER';
        $data['scrumb_name']='Data user';
        $data['scrumb']='admin/view_user';
        $data['list']=$this->produk_model->getdata('users',"where nm_user like '%$cari%' OR email_user like '%$cari%' order by nm_user ASC LIMIT $offset,$limit");
        $tot_hal = $this->produk_model->hitung_isi_tabel('*',"users","where nm_user like '%$cari%' OR email_user like '%$cari%' order by nm_user ASC");
        
                                //create for pagination     
            $config['base_url'] = base_url() . 'admin/view_user/';
            $config['total_rows'] = $tot_hal->num_rows();
            $config['per_page'] = $limit;
            $config['uri_segment'] = 3;
            $config['first_link'] = 'First';
            $config['last_link'] = 'last';
            $config['next_link'] = 'Next';
            $config['prev_link'] = 'Prev';
            $this->pagination->initialize($config);
            $data["paginator"] =$this->pagination->create_links();
        
        $data['view']='admin/user/v_user';
        $this->load->view('admin/home',$data);
}

public function post_detail() {
        $post_id=$this->uri->segment('3');
            //     $ubah = array(
            // 'groupname'=>$this->input->post('groupname'),
            // 'views'=>$this->input->post('idgrup2'),
            // );
        $query = $this->db->query('SELECT * FROM count_views');
        $jml=$query->num_rows();

        $updateviews=$this->Model_home->update_views_count($post_id);

        $data=array(
            'title'=>'post_detail',
            'scrumb_name'=>'detail',
            'scrumb'=>'admin/post_detail',
            'details'=>$this->Model_home->getCustom("a.created_date,a.post_id,a.post_desc,a.post_title,a.post_picture,b.tag_id,c.tag_label,d.views","posts a",
                       "LEFT JOIN posts_tags b ON a.post_id=b.post_id
                        LEFT JOIN tags c ON b.tag_id=c.tag_id
                        LEFT JOIN count_views d on a.post_id=d.post_id
                         WHERE a.post_id='$post_id' LIMIT 1"),
            'recomended'=>$this->Model_home->getCustom("a.post_id,a.post_desc,a.post_title,a.post_picture,b.tag_id,c.tag_label","posts a",
                           "INNER JOIN posts_tags b ON a.post_id=b.post_id
                            INNER JOIN tags c ON b.tag_id=c.tag_id LIMIT 9"),
            'tags'=>$this->Model_home->getCustom("c.tag_label,c.tag_id","posts_tags a",
                           "INNER JOIN posts b ON a.post_id=b.post_id
                            INNER JOIN tags c ON a.tag_id=c.tag_id WHERE a.post_id='$post_id'"),
            'content'=>'home/post_detail'
        );
       $this->load->view('home/home',$data);
    }
    public function post_category() {
        $id_category=$this->uri->segment(3);

        $data=array(
            'title'=>'post_category',
            'scrumb'=>$this->Model_home->getCustom("category_title","categories","WHERE category_id='$id_category' limit 1"),
            'newest'=>$this->Model_home->getCustom("a.created_date,a.post_id,a.post_desc,a.post_title,a.post_picture,b.tag_id,c.tag_label","posts a",
                           "INNER JOIN posts_tags b ON a.post_id=b.post_id
                            INNER JOIN tags c ON b.tag_id=c.tag_id WHERE b.tag_id='2' ORDER BY a.created_date ASC LIMIT 0,6"),
            'list'=>$this->Model_home->getCustom("a.*,b.category_id,c.category_title","posts a",
                       "INNER JOIN category_posts b ON a.post_id=b.post_id
                        INNER JOIN categories c ON b.category_id=c.category_id WHERE c.category_id='$id_category' LIMIT 9"),
            'recomended'=>$this->Model_home->getCustom("a.created_date,a.post_id,a.post_desc,a.post_title,a.post_picture,b.tag_id,c.tag_label",           "posts a",
                           "INNER JOIN posts_tags b ON a.post_id=b.post_id
                            INNER JOIN tags c ON b.tag_id=c.tag_id WHERE b.tag_id='2' ORDER BY a.created_date ASC LIMIT 0,6"),

            'content'=>'home/post_category'
        );
       $this->load->view('home/home',$data);
    }
public function post_tags() {
        $id_tags=$this->uri->segment(3);

        $data=array(
            'title'=>'post_category',
            'scrumb'=>$this->Model_home->getCustom("tag_id,tag_label","tags","WHERE tag_id='$id_tags' limit 1"),
            'newest'=>$this->Model_home->getCustom("*","posts a",
                           "INNER JOIN posts_tags b ON a.post_id=b.post_id
                            INNER JOIN tags c ON b.tag_id=c.tag_id WHERE b.tag_id='2' ORDER BY a.created_date ASC LIMIT 0,6"),
            'list'=>$this->Model_home->getCustom("*","posts a",
                           "INNER JOIN posts_tags b ON a.post_id=b.post_id
                            INNER JOIN tags c ON b.tag_id=c.tag_id WHERE b.tag_id='$id_tags' ORDER BY a.created_date ASC LIMIT 0,6"),
            'recomended'=>$this->Model_home->getCustom("a.created_date,a.post_id,a.post_desc,a.post_title,a.post_picture,b.tag_id,c.tag_label",           "posts a",
                           "INNER JOIN posts_tags b ON a.post_id=b.post_id
                            INNER JOIN tags c ON b.tag_id=c.tag_id WHERE b.tag_id='2' ORDER BY a.created_date ASC LIMIT 0,6"),

            'content'=>'home/post_tags'
        );
       $this->load->view('home/home',$data);
    }



    public function parcel() {
        $data=array(
            'title'=>'list User',
            'scrumb_name'=>'Data User',
            'scrumb'=>'admin/view_user',
            'content'=>'home/expertise/parcel'
		);
       $this->load->view('home/home',$data);
    }
    public function part_full_loads() {
        $data=array(
            'title'=>'part_full_loads',
            'scrumb_name'=>'Data part_full_loads',
            'scrumb'=>'admin/view_user',
            'content'=>'home/expertise/part_full_loads'
        );
       $this->load->view('home/home',$data);
    }
    public function multi_moda() {
        $data=array(
            'title'=>'multi_moda',
            'scrumb_name'=>'Data multi_moda',
            'scrumb'=>'admin/view_user',
            'content'=>'home/expertise/multi_moda'
        );
       $this->load->view('home/home',$data);
    }
    public function airfreight() {
        $data=array(
            'title'=>'airfreight',
            'scrumb_name'=>'Data airfreight',
            'scrumb'=>'admin/view_user',
            'content'=>'home/expertise/airfreight'
        );
       $this->load->view('home/home',$data);
    }
    public function general_airfreight() {
        $data=array(
            'title'=>'general_airfreight',
            'scrumb_name'=>'Data general_airfreight',
            'scrumb'=>'admin/view_user',
            'content'=>'home/expertise/general_airfreight'
        );
       $this->load->view('home/home',$data);
    }
    public function charter_services() {
        $data=array(
            'title'=>'charter_services',
            'scrumb_name'=>'Data charter_services',
            'scrumb'=>'admin/charter_services',
            'content'=>'home/expertise/charter_services'
        );
       $this->load->view('home/home',$data);
    }
    public function intermodal_solution() {
        $data=array(
            'title'=>'intermodal_solution',
            'scrumb_name'=>'Data intermodal_solution',
            'scrumb'=>'admin/view_user',
            'content'=>'home/expertise/intermodal_solution'
        );
       $this->load->view('home/home',$data);
    }    
    public function flight_operation() {
        $data=array(
            'title'=>'flight_operation',
            'scrumb_name'=>'Data flight_operation',
            'scrumb'=>'admin/view_user',
            'content'=>'home/expertise/flight_operation'
        );
       $this->load->view('home/home',$data);
    }
    public function lcl() {
        $data=array(
            'title'=>'lcl',
            'scrumb_name'=>'Data lcl',
            'scrumb'=>'admin/lcl',
            'content'=>'home/expertise/lcl'
        );
       $this->load->view('home/home',$data);
    }
    public function fcl() {
        $data=array(
            'title'=>'fcl',
            'scrumb_name'=>'Data fcl',
            'scrumb'=>'admin/fcl',
            'content'=>'home/expertise/fcl'
        );
       $this->load->view('home/home',$data);
    }
    public function intermodal_solution_ocean() {
        $data=array(
            'title'=>'intermodal_solution_ocean',
            'scrumb_name'=>'Data intermodal_solution_ocean',
            'scrumb'=>'admin/view_user',
            'content'=>'home/expertise/intermodal_solution_ocean'
        );
       $this->load->view('home/home',$data);
    }
    public function customer_solution() {
        $data=array(
            'title'=>'customer_solution',
            'scrumb_name'=>'Data customer_solution',
            'scrumb'=>'admin/customer_solution',
            'content'=>'home/expertise/customer_solution'
        );
       $this->load->view('home/home',$data);
    }
    public function production_logistics() {
        $data=array(
            'title'=>'multi_moda',
            'scrumb_name'=>'Data multi_moda',
            'scrumb'=>'admin/view_user',
            'content'=>'home/expertise/multi_moda'
        );
       $this->load->view('home/home',$data);
    }
    public function fullfillment_logistics() {
        $data=array(
            'title'=>'multi_moda',
            'scrumb_name'=>'Data multi_moda',
            'scrumb'=>'admin/view_user',
            'content'=>'home/expertise/multi_moda'
        );
       $this->load->view('home/home',$data);
    }
    public function service_aftermarket_logistics() {
        $data=array(
            'title'=>'multi_moda',
            'scrumb_name'=>'Data multi_moda',
            'scrumb'=>'admin/view_user',
            'content'=>'home/expertise/multi_moda'
        );
       $this->load->view('home/home',$data);
    }
    public function ecommerce_logistics_solutions() {
        $data=array(
            'title'=>'multi_moda',
            'scrumb_name'=>'Data multi_moda',
            'scrumb'=>'admin/view_user',
            'content'=>'home/expertise/multi_moda'
        );
       $this->load->view('home/home',$data);
    }
    public function value_added_services() {
        $data=array(
            'title'=>'multi_moda',
            'scrumb_name'=>'Data multi_moda',
            'scrumb'=>'admin/view_user',
            'content'=>'home/expertise/multi_moda'
        );
       $this->load->view('home/home',$data);
    }
    public function automative_industry() {
        $data=array(
            'title'=>'automative',
            'scrumb_name'=>'Data automative',
            'scrumb'=>'admin/view_user',
            'content'=>'home/industry_solution/automative'
        );
       $this->load->view('home/home',$data);
    }
    public function beverage_industry() {
        $data=array(
            'title'=>'beverage',
            'scrumb_name'=>'Data beverage',
            'scrumb'=>'admin/view_user',
            'content'=>'home/industry_solution/beverage'
        );
       $this->load->view('home/home',$data);
    }
    public function consumer_industry() {
        $data=array(
            'title'=>'consumer',
            'scrumb_name'=>'Data consumer',
            'scrumb'=>'admin/view_user',
            'content'=>'home/industry_solution/consumer'
        );
       $this->load->view('home/home',$data);
    }
    public function electronics_industry() {
        $data=array(
            'title'=>'electronics',
            'scrumb_name'=>'Data electronics',
            'scrumb'=>'admin/view_user',
            'content'=>'home/industry_solution/electronics'
        );
       $this->load->view('home/home',$data);
    }
    public function fashion_industry() {
        $data=array(
            'title'=>'fashion',
            'scrumb_name'=>'Data fashion',
            'scrumb'=>'admin/view_user',
            'content'=>'home/industry_solution/fashion'
        );
       $this->load->view('home/home',$data);
    }
    public function healthcare_industry() {
        $data=array(
            'title'=>'healthcare',
            'scrumb_name'=>'Data healthcare',
            'scrumb'=>'admin/view_user',
            'content'=>'home/industry_solution/healthcare'
        );
       $this->load->view('home/home',$data);
    }
    public function industrial_industry() {
        $data=array(
            'title'=>'industrial',
            'scrumb_name'=>'Data industrial',
            'scrumb'=>'admin/view_user',
            'content'=>'home/industry_solution/industrial'
        );
       $this->load->view('home/home',$data);
    }
    public function marine_industry() {
        $data=array(
            'title'=>'marine',
            'scrumb_name'=>'Data marine',
            'scrumb'=>'admin/view_user',
            'content'=>'home/industry_solution/marine_parts'
        );
       $this->load->view('home/home',$data);
    }
    public function perishable_industry() {
        $data=array(
            'title'=>'perishable',
            'scrumb_name'=>'Data perishable',
            'scrumb'=>'admin/view_user',
            'content'=>'home/industry_solution/perishable'
        );
       $this->load->view('home/home',$data);
    }
    public function oil_gas_industry() {
        $data=array(
            'title'=>'oil_gas',
            'scrumb_name'=>'Data oil_gas',
            'scrumb'=>'admin/view_user',
            'content'=>'home/industry_solution/oil_gas'
        );
       $this->load->view('home/home',$data);
    }
    public function recyclabes_industry() {
        $data=array(
            'title'=>'recyclabes',
            'scrumb_name'=>'Data recyclabes',
            'scrumb'=>'admin/view_user',
            'content'=>'home/industry_solution/recyclabes'
        );
       $this->load->view('home/home',$data);
    }
    public function eService() {
        $data=array(
            'title'=>'eService',
            'scrumb_name'=>'Data eService',
            'scrumb'=>'admin/view_user',
            'content'=>'home/eService/eService'
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
    public function detail_blog() {
        $data=array(
            'title'=>'list User',
            'scrumb_name'=>'Data User',
            'scrumb'=>'admin/view_user',
            'content'=>'home/blogs/detail_blog'
		);
       $this->load->view('home/home',$data);
    }
	
	
}
