<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
		$this->load->model('m_home');
		//$this->load->model('m_access');
		
    }
	
	public function index(){
		if(!isset($this->session->userdata['data'])){			
			redirect(base_url('index.php/admin/home/login'));
		}else{			
			redirect(base_url('index.php/admin/home/home'));
		}	
	}
	
	public function login(){
		$this->load->view('admin/pages/login');
	}
	
	public function home(){
		$data['view'] = 'admin/pages/home_page';
		$this->load->view('admin/index', $data);
	}
	
	public function validasi(){
		$this->m_home->login_validation($_POST);
	}	
        
    public function table_dinamic(){
        $data['view'] = 'pages/simpledinamic_pages';
        $this->load->view('admin/index', $data);
	}
        
    public function table_jgrid(){
        $data['view'] = 'pages/jgrid_pages';
        $this->load->view('admin/index', $data);
	}
}
