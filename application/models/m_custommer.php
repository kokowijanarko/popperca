<?php

if(!defined('BASEPATH')) exit('No direct script access allowed');

class M_custommer extends CI_Model
{
	
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }
	
	public function listCustommer(){
		$query = $this->db->query("
			SELECT 
				a.`custommer_id`,
				a.`custommer_name`,
				a.`custommer_provinsi_id`,
				a.`custommer_kabupaten_id`,
				a.`custommer_kecamatan_id`,
				a.`custommer_address`,
				a.`custommer_phone`,
				a.`custommer_pos_code`,
				a.`custommer_type`,
				b.`custommertype_type`,
				c.`Nama` AS cus_provinsi,
				d.`Nama` AS cus_kabupaten,
				e.`Nama` AS cus_kecamatan
			FROM dev_custommer a 
			JOIN `dev_custommer_type` b ON b.`custommertype_id` = a.`custommer_type`
			JOIN `dev_provinsi` c ON c.`IDProvinsi` = a.`custommer_provinsi_id`
			JOIN `dev_kabupaten` d ON d.`IDKabupaten` = a.`custommer_kabupaten_id`
			JOIN `dev_kecamatan` e ON e.`IDKecamatan` = a.`custommer_kecamatan_id`
		");
		$result = $query->result();
		return $result;
	}
	public function getDetailCustommer($id){
		$query = $this->db->query("
			SELECT 
				*				
			 FROM dev_custommer a			 
			 WHERE a.`productgenre_id`='".$id."'
		");
		$result = $query->row();
		return $result;
	}
	
	public function doAdd($params){		
		$result = false;
		if(!empty($params)){
			$execute = $this->db->insert('dev_custommer', $params);	
			$result = true;
		}
		return $result;
	}
	
	public function doEdit($params){
		
		$data = array(
			'productgenre_name'=> $params['gen_name'],			
			'productgenre_description'=> $params['gen_desc']			
		);
		//var_dump($params, $data);die;
		$result = false;
		if(!empty($params)){
			$this->db->update('dev_custommer', $data, array('productgenre_id' => $params['gen_id']));
			$result = true;
		}
		return $result;
	}
	
	
	public function doDelete($id){
		$result = false;
		if(!empty($id)){
			$execute = $this->db->delete('dev_custommer', array('productgenre_id' => $id));
			$result = true;
		}		
		return $result;		
	}
	
	public function getProvinsi(){
		$query = $this->db->get('dev_provinsi');
		$result = $query->result();
		return $result;
	}
	
	public function getKabupaten($id){
		$query = $this->db->get_where('dev_kabupaten', array('IDProvinsi'=>$id));
		$result = $query->result();
		return $result;
	}
	
	public function getKecamatan($id){
		$query = $this->db->get_where('dev_kecamatan', array('IDKabupaten'=>$id));
		$result = $query->result();
		return $result;
	}
	
	public function getCustommerType(){
		$query = $this->db->get_where('dev_custommer_type');
		$result = $query->result();
		return $result;
	}
	
	public function getCustommerDetail($id){
		$query = $this->db->get_where('dev_custommer', array('custommer_id'=>$id));
		$result = $query->row();
		return $result;
	}
	
}