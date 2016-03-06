<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Size extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
		$this->load->model('m_size');
		//$this->load->model('m_access');
		
    }
	
	public function list_size(){		
		$size = $this->m_size->listSize();
		//var_dump($size);die;
		$data['list'] = $size;
		$data['view']="admin/pages/size/list_size";
		$this->load->view('index', $data);
		//var_dump(count($size));die;
	}
	
	public function add_size(){	
		$data['sex'] = $this->m_size->list_sex();
		$data['size'] = $this->m_size->list_size();
		$data['size'] = $this->m_size->list_size();
		$data['view'] = "pages/admin/size/add_size";
		//var_dump($data);die;
		$this->load->view('index', $data);
	}
	
	public function do_add(){
		$params=$_POST;
		//var_dump($params);die;
		
		if(!empty($params['size_id'])){
			$return = $this->m_size->doEdit($params);
			
		}else{
			$return = $this->m_size->doAdd($params);
		}
		
		if($return == true){
			redirect(base_url('index.php/admin/size/list_size'));
		}else{
			$msg = 'Add new size failed';
		}
	}
	
	public function do_delete($id){
		$return = $this->m_size->doDelete($id);
		if($return == true){
			redirect(base_url('index.php/admin/size/list_size'));
		}else{
			$msg = 'Add new size failed';
		}
	}
	
	public function edit($id){
		$size = $this->m_size->listSize();
		$data['list'] = $size;
		$data['detail'] = $this->m_size->getDetailsize($id);		
		$data['view'] = "pages/admin/size/list_size";
		$this->load->view('index', $data);
	}
}
