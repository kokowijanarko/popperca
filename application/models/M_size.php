<?php

if(!defined('BASEPATH')) exit('No direct script access allowed');

class M_size extends CI_Model
{
	
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }
	
	public function listSize(){
		$query = $this->db->query("
			SELECT 
				*
			FROM pop_size
		");
		$result = $query->result();
		return $result;
	}
	public function getdetailSize($id){
		$query = $this->db->query("
			SELECT 
				*				
			 FROM pop_size a			 
			 WHERE a.`size_id`='".$id."'
		");
		$result = $query->row();
		return $result;
	}
	
	public function doAdd($data){	
		$result = false;
		if(!empty($data)){
			$execute = $this->db->insert('pop_size', $data);	
			$result = true;
		}
		return $result;
	}
	
	public function doEdit($data){
		$result = false;
		if(!empty($data)){
			$this->db->update('pop_size', $data, array('size_id' => $data['size_id']));
			$result = true;
		}
		return $result;
	}
	
	
	public function doDelete($id){
		$result = false;
		if(!empty($id)){
			$execute = $this->db->delete('pop_size', array('size_id' => $id));
			$result = true;
		}		
		return $result;		
	}
	
	
	
	
}