<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
		$this->load->model('m_userlogin');
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
		$this->load->view('user/pages/login');
	}
	
	public function do_login(){
		//var_dump($_POST);
		$login = $this->authex->login($_POST['username'], $_POST['password']);
		//var_dump($login);die;
		if($login == true){
			redirect(base_url('index.php'));
		}
	}
	
	public function do_register(){
		var_dump($_POST);
		var_dump('register');die;
	}
	
	
}
