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
		if($login){
			redirect(base_url());
		}else{
			$data['type'] = $this->m_custommer->getCustommerType();
			$data['provinsi'] = $this->m_custommer->getProvinsi();
			$data['message'] = 'Login Gagal, Cek Password dan Username';
			//var_dump($data);die;
			$this->load->view('user/pages/login', $data);
		}
		
	}
	
	public function do_register(){
		var_dump($_POST);
		
		
		if($_POST['custommer_password_confirm'] == $_POST['custommer_password']){
			$_POST['custommer_password'] = md5($_POST['custommer_password_confirm']);
			$_POST['custommer_province_id'] = $_POST['custommer_provinsi_id'];
			$_POST['custommer_city_id'] = $_POST['custommer_kabupaten_id'];
			unset($_POST['custommer_password_confirm']);
			unset($_POST['custommer_provinsi_id']);
			unset($_POST['custommer_kabupaten_id']);
			$register = $this->m_userlogin->doAdd($_POST);			
			if($register == true){
				redirect(site_url('user/login?msg=REG1'));
			}else{
				redirect(site_url('user/login?msg=REG2'));
			}			
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
