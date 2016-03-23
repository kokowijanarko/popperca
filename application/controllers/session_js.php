<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Session_js extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->helper('session');
		
		
		
    }
	
	public function set_session_non_member(){
		$query = $this->db->query("SELECT MAX(cart_session_id) as cart_session_id FROM pop_cart");
		$result = $query->row();
		var_dump($result);die;
	}
}
