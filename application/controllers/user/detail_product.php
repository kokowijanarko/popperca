<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_product extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
		$this->load->model('M_userlogin');
		$this->load->model('M_useraccount');
		$this->load->model('M_custommer');
		$this->load->model('M_product');
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
		$data['detail'] = $this->M_product->getDetailProduct($id);
		$data['img'] = $this->M_product->getImg($id);
		//$data['sex'] = $this->M_product->list_sex();
		//$data['genre'] = $this->M_product->list_genre();
		$data['size'] = $this->M_product->sizeProductByIdProduct($id);
		//$data['size'] = $this->M_product->size($id);
		
		$this->load->view('user/pages/detail_product', $data);
	}	
}
