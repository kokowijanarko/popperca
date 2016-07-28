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
		$result = false;
		if(isset($_POST['product_id'])){
			$_SESSION['product_id'][$_POST['product_id']] = $_POST['product_id'];
			$_SESSION['ukuran'][$_POST['product_id']] = $_POST['ukuran'];
			if(isset($_SESSION['product_count'][$_POST['product_id']])){
			//	if($_SESSION['product_count'][$_POST['product_id']] > 1){
					$product_count = $_POST['product_count'];
			//	}else{
			//		$product_count = $_SESSION['product_count'][$_POST['product_id']] + 1;
			//	}				
				
				//var_dump($product_count);
				//var_dump($_POST['product_id']);die;
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
			$result = true;
		}
		echo json_encode($result);
		exit;
		//var_dump($_SESSION);die;
	}
	public function remove_cart_session(){
		$params = array(
			"product_id" => $_POST['product_id'],
			"product_count" => $_POST['product_id']
		);
		unset($_SESSION['product_count'][$_POST['product_id']]);
		unset($_SESSION['product_id'][$_POST['product_id']]);
		var_dump($_SESSION);
	}
	
	public function empty_cart(){
		unset($_SESSION['product_count']);
		unset($_SESSION['product_id']);
	}
	
}
