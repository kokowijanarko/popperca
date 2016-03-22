<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
		$this->load->model('m_home');
		$this->load->library('authex');
		
		
		if( ! $this->authex->logged_in())
        {
            //they are not logged in
            redirect(base_url('index.php/user/login/'));  //for example
        }
		
    }
	
	public function index(){
		$data['product'] = $this->m_home->load_product_img();
		//var_dump($data['product']);die;
		foreach($data['product'] as $key=>$val){
			//var_dump($val->product_id);die;
			$data['image'][] = $this->m_home->getImg($val->product_id);				
		}
		//var_dump($data['image']);die;
		$this->load->view('user/index', $data);
		
	}
	
	public function login(){
		if(!isset($this->session->userdata['data'])){			
			redirect(base_url('index.php/home/login'));
		}else{			
			redirect(base_url('index.php/home/home'));
		}
		
	}
	
	
	
	public function validasi(){
		$this->m_home->login_validation($_POST);
	}	
        
   
}
