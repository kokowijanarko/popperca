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
		$this->load->view('user/index');
		
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
