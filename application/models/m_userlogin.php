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

	function login_validation($data){
		$username = $data['username'];
		$password = md5($data['password']);		
        $query = $this->db->query("select * from dev_custommer where custommer_username='".$username."' AND custommer_password='".$password."'");
		$result = $query->row();			
		return $result;
    }
   
   function from_date($date){
       $data = explode("-", $date);
       $day = array("Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu", "Minggu");
       $bulan = array(
       "error",
       "Januari",
       "Februari",
       "Maret",
       "April",
       "Mei",
       "Juni",
       "Juli",
       "Agustus",
       "September",
       "Oktober",
       "November",
       "Desember"
       );
       
      return $data[2] . " " . $bulan[intval($data[1])] . " " . $data[0];
   }
   
   function text_limit($str,$limit){  
       if(stripos($str," ")){  
         
     $ex_str = explode(" ",$str);  
     if(count($ex_str)>$limit){  
       for($i=0;$i<$limit;$i++){  
        $str_s.=$ex_str[$i]." ";  
       }  
      return $str_s;  
      }else{  
       return $str;  
      }  
     }else{  
     return $str;  
       }  
   }  
	
	
}