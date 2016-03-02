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
			$data = array(
			'custommer_name' => $params['custommer_name'],
			'custommer_provinsi_id'=> $params['custommer_provinsi_id'],
			'custommer_kabupaten_id'=> $params['custommer_kabupaten_id'],
			'custommer_kecamatan_id'=>$params['custommer_kecamatan_id'],
			'custommer_address'=>$params['custommer_address'],
			'custommer_phone'=>$params['custommer_phone'],
			'custommer_pos_code'=>$params['custommer_pos_code'],
			'custommer_type'=>$params['custommer_type'],
			'custommer_email'=>$params['custommer_email'],
			'custommer_password'=>$params['custommer_password'],
			'custommer_username'=>$params['custommer_username']
			
			);
			$id = $params['custommer_id'];
			$return = $this->m_custommer->doEdit($data, $id);
			
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
