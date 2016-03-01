<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Custommer extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
		$this->load->model('m_custommer');
		//$this->load->model('m_access');
		
    }
	
	public function list_custommer(){	
		$data['list'] = $this->m_custommer->listCustommer();
		$data['provinsi'] = $this->m_custommer->getProvinsi();
		$data['type'] = $this->m_custommer->getCustommerType();
		$data['view']="pages/admin/custommer/list_custommer";
		//var_dump($data);die;
		$this->load->view('index', $data);
	}
	
	public function add(){	
		$data['sex'] = $this->m_custommer->list_sex();
		$data['custommer'] = $this->m_custommer->list_custommer();
		$data['custommer'] = $this->m_custommer->list_custommer();
		$data['view'] = "pages/admin/custommer/add_custommer";
		//var_dump($data);die;
		$this->load->view('index', $data);
	}
	
	public function do_add(){
		$params=$_POST;
		
		if(!empty($params['custommer_id'])){
			$return = $this->m_custommer->doEdit($params);
			
		}else{
			$return = $this->m_custommer->doAdd($params);
		}
		
		if($return == true){
			redirect(base_url('index.php/admin/custommer/list_custommer'));
		}else{
			$msg = 'Add new custommer failed';
		}
	}
	
	public function do_delete($id){
		$return = $this->m_custommer->doDelete($id);
		if($return == true){
			redirect(base_url('index.php/admin/custommer/list_custommer'));
		}else{
			$msg = 'Add new custommer failed';
		}
	}
	
	public function edit($id){
		$custommer = $this->m_custommer->listCustommer();
		$data['list'] = $custommer;
		$data['detail'] = $this->m_custommer->getDetailcustommer($id);		
		$data['view'] = "pages/admin/custommer/list_custommer";
		$this->load->view('index', $data);
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
	
	public function get_custommer($id){
		$data = $this->m_custommer->getCustommerDetail($id);
		echo json_encode($data);
		exit;
	}
}
