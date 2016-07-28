<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
		$this->load->model('m_userlogin');
		$this->load->model('m_useraccount');
		$this->load->model('m_custommer');
		$this->load->model('m_product');
		$this->load->model('m_invoice');
		$this->load->library('authex');
		
		/*
		if( ! $this->authex->logged_in())
        {
            //they are not logged in
            redirect(base_url('index.php/user/login/'));  //for example
        }
		*/
    }	
	public function img_inv_confirm($img){
		$data['img'] = $img;
		$this->load->view('user/pages/img_inv', $data);
	}
	
	public function list_invoice(){
		$custommer_id = $this->session->userdata['user_id'];
		$data['invoice'] = $this->m_invoice->invoice($custommer_id);
		foreach($data['invoice'] as $idx=>$inv){
			$data['invoice'][$idx]->conf_hide = '';			
			$data['invoice'][$idx]->img_hide = 'hide';	
			if(!empty($inv->invoice_conf_img)){
				$data['invoice'][$idx]->conf_hide = 'hide';			
				$data['invoice'][$idx]->img_hide = '';			
			}
		}
		//var_dump($data['invoice']);
		
		
		//var_dump($data);die;
		$this->load->view('user/pages/list_invoice', $data);
	}
	
	public function inv_confirm($id){
		$data['inv_id'] = $id;
		$this->load->view('user/pages/confirm_inv', $data);
	}
	
	public function upload_file_conf(){
		$post = $_POST;
		$files=$_FILES;
		
		//var_dump($_POST, $_FILES);die;
		
		if(($files['inv_file']['type'] == 'image/jpeg') || ($files['inv_file']['type'] == 'image/png')){
			$param = array(			
				'invoice_conf_img'=>$files['inv_file']['name']
			);		
			//var_dump($param);
			$result = $this->m_invoice->updateConfInv($param, $post['inv_id']);
			//var_dump($this->db->last_query(), $result);die;
			if($result){
				$source =$files['inv_file']['tmp_name']; 
				$name = $files['inv_file']['name'];			
				$this->process_image($source, $name);
			}
			redirect(site_url('user/invoice/list_invoice/'));
		}else{
			redirect(site_url('user/invoice/inv_confirm/'.$post['inv_id']));
		}		
	}
	
	function process_image($source, $name){
	$size = getimagesize($source);
	//var_dump($size);die;
	if($size[0] < 5000)
		{
		move_uploaded_file($source,"file/inv_conf_img/" . $name);	
		}	
	else
		{
		  //identitas file asli
		  $im_src = imagecreatefromjpeg($source);
		  $src_width = imageSX($im_src);
		  $src_height = imageSY($im_src);


		  //Set ukuran gambar hasil perubahan
		  $dst_width = 5000;
		  $dst_height = ($dst_width/$src_width)*$src_height;

		  //proses perubahan ukuran
		  $im = imagecreatetruecolor($dst_width,$dst_height);
		  imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

		  //Simpan gambar
		  imagejpeg($im,"file/inv_conf_img/" . $name);
		  
		  //Hapus gambar di memori komputer
		  imagedestroy($im_src);
		  imagedestroy($im);
		}
	}
}
