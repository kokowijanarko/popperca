<?php

if(!defined('BASEPATH')) exit('No direct script access allowed');

class M_userlogin extends CI_Model
{
	
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

	public function doAdd($params){	
		$result = false;
		if(!empty($params)){
			//$this->db->trans_start();
			$execute = $this->db->insert('dev_custommer', $params);	
			var_dump($this->db->last_query());die;
			//$this->db->trans_complete($execute);
			$result = true;
		}
		return $result;
	}  
}