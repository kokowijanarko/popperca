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
		if(isset($_POST['product_id'])){
			$_SESSION['product_id'][$_POST['product_id']] = $_POST['product_id'];
			if(isset($_SESSION['product_count'][$_POST['product_id']])){
				$product_count = $_SESSION['product_count'][$_POST['product_id']] + 1;
				$_SESSION['product_count'][$_POST['product_id']] = $product_count;
			}else{
				$_SESSION['product_count'][$_POST['product_id']] = 1;
			}
			
			
			/*
			if(isset($_SESSION['product_id'])){
				$count_product_id = count($_SESSION['product_id']);
				$_SESSION['product_id'][$count_product_id] = $_POST['product_id'];			
			}else{
				$_SESSION['product_id'][0] = $_POST['product_id'];
			}
			*/
		}
		
		var_dump($_SESSION);die;
	}
}
