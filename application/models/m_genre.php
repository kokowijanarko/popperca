<?php

if(!defined('BASEPATH')) exit('No direct script access allowed');

class M_genre extends CI_Model
{
	
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }
	
	public function listGenre(){
		$query = $this->db->query("
			SELECT 
				*
			FROM pop_genre
		");
		$result = $query->result();
		return $result;
	}
	public function getdetailGenre($id){
		$query = $this->db->query("
			SELECT 
				*				
			 FROM pop_genre a			 
			 WHERE a.`productgenre_id`='".$id."'
		");
		$result = $query->row();
		return $result;
	}
	
	public function doAdd($params){
		//var_dump($params);die;
		$data = array(
			'productgenre_name'=> $params['gen_name'],		
			'productgenre_description'=> $params['gen_desc']			
		);
		//var_dump($data);die;
		$result = false;
		if(!empty($params)){
			$execute = $this->db->insert('pop_genre', $data);	
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
			$this->db->update('pop_genre', $data, array('productgenre_id' => $params['gen_id']));
			$result = true;
		}
		return $result;
	}
	
	
	public function doDelete($id){
		$result = false;
		if(!empty($id)){
			$execute = $this->db->delete('pop_genre', array('productgenre_id' => $id));
			$result = true;
		}		
		return $result;		
	}
	
	
	
	
}