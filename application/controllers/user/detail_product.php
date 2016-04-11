<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_product extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
		$this->load->model('m_userlogin');
		$this->load->model('m_useraccount');
		$this->load->model('m_custommer');
		$this->load->model('m_product');
		$this->load->library('authex');
		
		/*
		if( ! $this->authex->logged_in())
        {
            //they are not logged in
            redirect(base_url('index.php/user/login/'));  //for example
        }
		*/
    }
	
	public function detail($id){		
		$data['detail'] = $this->m_product->getDetailProduct($id);
		$data['img'] = $this->m_product->getImg($id);
		//$data['sex'] = $this->m_product->list_sex();
		//$data['genre'] = $this->m_product->list_genre();
		$data['size'] = $this->m_product->sizeProductByIdProduct($id);
		//$data['size'] = $this->m_product->size($id);
		
		$this->load->view('user/pages/detail_product', $data);
	}	
}
