<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
		$this->load->model('m_product');
		//$this->load->model('m_access');
		
    }
	
	public function list_product(){		
		$product = $this->m_product->list_product();
		$data['product'] = $product;
		$data['view']="pages/admin/product/list_product";
		$this->load->view('index', $data);
		//var_dump(count($product));die;
	}
	
	public function add_baju(){	
		$data['sex'] = $this->m_product->list_sex();
		$data['genre'] = $this->m_product->list_genre();
		$data['size'] = $this->m_product->list_size();
		$data['view'] = "pages/admin/product/add_product";
		//var_dump($data);die;
		$this->load->view('index', $data);
	}
	
	public function do_add(){
		$params=$_POST;
		//var_dump($params);die;
		$return = $this->m_product->do_add($params);
		if($return == true){
			redirect(base_url('index.php/admin/product/list_product'));
		}else{
			$msg = 'Add new product failed';
		}
	}
	
	public function do_delete($id){
		$return = $this->m_product->do_delete($id);
		if($return == true){
			redirect(base_url('index.php/admin/product/list_product'));
		}else{
			$msg = 'Add new product failed';
		}
	}
	
	public function edit($id){
		
		$data['detail'] = $this->m_product->getDetailProduct($id);
		$data['sex'] = $this->m_product->list_sex();
		$data['genre'] = $this->m_product->list_genre();
		$data['size'] = $this->m_product->list_size();
		//var_dump($data['detail']);die;
		$data['view'] = "pages/admin/product/edit_product";
		$this->load->view('index', $data);
	}
}
