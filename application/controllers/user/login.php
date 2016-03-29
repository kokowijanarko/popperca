<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
		$this->load->model('m_userlogin');
		$this->load->model('m_useraccount');
		$this->load->model('m_custommer');
		$this->load->library('authex');
		
		/*
		if( ! $this->authex->logged_in())
        {
            //they are not logged in
            redirect(base_url('index.php/user/login/'));  //for example
        }
		*/
    }
	
	public function index(){
		
		$data['type'] = $this->m_custommer->getCustommerType();
		$data['provinsi'] = $this->m_custommer->getProvinsi();
		//var_dump($data);die;
		$this->load->view('user/pages/login', $data);
	}
	
	public function do_login(){
		//var_dump($_POST);
		$login = $this->authex->login($_POST['username'], $_POST['password']);
		//var_dump($login);die;
		
		echo json_encode($login);
		exit;
	}
	
	public function do_register(){
		//var_dump($_POST);
		unset($_POST['custommer_password_confirm']);
		$register = $this->m_userlogin->doAdd($_POST);
		//var_dump($register);die;
		$data['message'] = "Registration Success, Please Login to continue";
		$data['type'] = $this->m_custommer->getCustommerType();
		$data['provinsi'] = $this->m_custommer->getProvinsi();
		if($register == true){
			$this->load->view('user/pages/login', $data);
		}
	}
	
	public function get_kab($id){
		$data = $this->m_custommer->getKabupaten($id);	
		echo json_encode($data);
		exit;
		
	}
	public function get_kec($id){
		$data = $this->m_custommer->getKecamatan($id);	
		echo json_encode($data);
		exit;		
	}
	
	public function logout(){
		$this->authex->logout();
		redirect(base_url('index.php'));
	}
	
	
}
