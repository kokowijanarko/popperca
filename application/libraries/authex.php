<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authex{

 function Authex()
 {
     $CI =& get_instance();

     //load libraries
     $CI->load->database();
     $CI->load->library("session");
 }

 function get_userdata()
 {
     $CI =& get_instance();

     if( ! $this->logged_in())
     {
         return false;
     }
     else
     {
          $query = $CI->db->get_where("dev_custommer", array("custommer_id" => $CI->session->userdata("user_id")));
          return $query->row();
     }
 }

 function logged_in()
 {
     $CI =& get_instance();
     return ($CI->session->userdata("user_id")) ? true : false;
 }

 function login($username, $password)
 {
     $CI =& get_instance();

     $data = array(
         "custommer_username" => $username,
         "custommer_password" => md5($password)
     );
	
     $query = $CI->db->get_where("dev_custommer", $data);
	//var_dump( $data);
     if($query->num_rows() !== 1)
     {
         /* their username and password combination
         * were not found in the databse */

         return false;
     }
     else
     {
         //update the last login time
         $last_login = date("Y-m-d H-i-s");

         $data = array(
             "custommer_last_login" => $last_login
         );

         $CI->db->query("UPDATE dev_custommer SET custommer_last_login='".$last_login."' WHERE 
			custommer_username = '".$username."' AND custommer_password = '".md5($password)."'
		 ");
		//var_dump($query->row()->custommer_id);die;
         //store user id in the session
         $CI->session->set_userdata("user_id", $query->row()->custommer_id);
         $CI->session->set_userdata("user_name", $query->row()->custommer_name);
         return true;
     }
 }

 function logout()
 {
     $CI =& get_instance();
     $CI->session->unset_userdata("user_id");
 }

 function register($username, $password)
 {
     $CI =& get_instance();

     //ensure the username is unique
     if($this->can_register($username))
     {
         $data = array(
             "username" => $username,
             "password" => sha1($password)
         );

         $CI->db->insert("dev_custommer", $data);

         return true;
     }

     return false;
 }

 function can_register($username)
 {
     $CI =& get_instance();

     $query = $CI->db->get_where("dev_custommer", array("username" => $username));

     return ($query->num_rows() < 1) ? true : false;
 }
}