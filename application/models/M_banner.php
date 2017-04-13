<?php

if(!defined('BASEPATH')) exit('No direct script access allowed');

class M_banner extends CI_Model
{
	
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }
	
	public function show(){
		$query = $this->db->query("
			SELECT * FROM dev_banner;
		");
		$result = $query->result();
		return $result;
	}
	
	public function getBannerById($id){
		$query = $this->db->query("
			SELECT * FROM dev_banner WHERE banner_id = $id;
		");
		$result = $query->result();
		return $result;
	}
	
	
	public function getImgName($id){
		$query = $this->db->get_where('dev_banner_images', array('bandet_banner_id'=>$id));
		$result = $query->result();
		return $result;
	}
	
	public function do_addImage($params){
		$execute = $this->db->insert('dev_banner_images', $params);	
		return $execute;		
	}
	public function do_add($params){
		$execute = $this->db->insert('dev_banner', $params);	
		return $execute;		
	}
	
	public function deleteImg($id){
		$result = $this->db->delete('dev_banner_images', array('bandet_id' => $id));
		return $result;
	}
	public function delImg($id){
		$result = $this->db->delete('dev_banner_images', array('bandet_banner_id' => $id));
		return $result;
	}
	
	public function doEdit($params){
		$result = $this->db->update('dev_banner', $params, array('banner_id' => $params['banner_id']));
		return $result;
	}	
}