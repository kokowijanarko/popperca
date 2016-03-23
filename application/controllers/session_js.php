<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Session_js extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('session');
		
		
		
    }
	
	public function set_session_non_member(){
		//session_destroy();
		$sesi = $_SESSION;
		if(isset($sesi['product_id'])){
			$count_product_id = count($sesi['product_id']);
			$_SESSION['product_id'][$count_product_id] = $_POST['product_id']
			
		}
	}
}
