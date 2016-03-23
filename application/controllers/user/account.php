<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
		$this->load->model('m_useraccount');
		$this->load->library('authex');
		
		
		if( ! $this->authex->logged_in())
        {
            //they are not logged in
            redirect(base_url('index.php/user/login/'));  //for example
        }
		
    }
	
	public function detail(){
		//var_dump($this->session->userdata['user_id']);die;
		$id = $this->session->userdata['user_id'];
		$data['account'] = $this->m_useraccount->detail($id); 
		
		$data['provinsi'] = $this->m_useraccount->getProvinsi($data['account']->custommer_provinsi_id); 
		$data['kabupatan'] = $this->m_useraccount->getKabupaten($data['account']->custommer_kabupaten_id); 
		$data['kecamaan'] = $this->m_useraccount->getKecamatan($data['account']->custommer_kecamatan_id); 
		//var_dump($this->db->last_query());
		//var_dump($data);die;
		$this->load->view('user/pages/account_detail', $data);
	}
	
	public function edit(){
		//var_dump($this->session->userdata['user_id']);die;
		$id = $this->session->userdata['user_id'];
		$data['account'] = $this->m_useraccount->detail($id); 
		
		$data['provinsi'] = $this->m_useraccount->getProvinsi($data['account']->custommer_provinsi_id); 
		$data['kabupatan'] = $this->m_useraccount->getKabupaten($data['account']->custommer_kabupaten_id); 
		$data['kecamaan'] = $this->m_useraccount->getKecamatan($data['account']->custommer_kecamatan_id); 
		//var_dump($this->db->last_query());
		//var_dump($data);die;
		$this->load->view('user/pages/account_edit', $data);
	}
	
	public function do_register(){
		var_dump($_POST);
		var_dump('register');die;
	}	
}
