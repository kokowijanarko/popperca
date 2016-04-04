<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
		$this->load->model('m_product');
		//$this->load->model('m_access');
		
    }
	
	function list_product(){
		$product = $this->m_product->list_product();
		
		foreach($product as $prod){
			$data['img'][$prod->product_id] = $this->m_product->getImg($prod->product_id);
		}
		
		
		$data['product'] = $product;
		//$data['view']="admin/pages/product/list_product";
		$this->load->view("admin/pages/product/list_product", $data);
	}
	
	public function add_baju(){	
		$data['sex'] = $this->m_product->list_sex();
		$data['genre'] = $this->m_product->list_genre();
		$data['size'] = $this->m_product->list_size();
		$data['view'] = "admin/pages/product/add_product";
		$this->load->view('admin/index', $data);
	}
	
	public function do_add(){
		$params=$_POST;		
		$id = $this->m_product->do_add($params);		
		foreach($_FILES['gambar'] as $key=>$val){
            $i = 1;			
            foreach($val as $v){
			    $field_name = 'gambar'.$i;
                $_FILES[$field_name][$key] = $v;               		
				$i++;
			}
		}
		unset($_FILES['gambar']);
		$i=1;	
		$image_index = 0;
		foreach($_FILES as $key=>$val){
			$image_data  = array(
				'productimage_name' => $id.'_'.$i.'.jpg',
				'productimage_product_id' => $id				
			);
			$source =$val['tmp_name']; 
			$name = $id.'_'.$i.'.jpg';
			$this->process_image($source, $name);
			$this->m_product->do_addImage($image_data);
			
			//$this->upload->do_upload($key);			
			//$data[] = array('upload_data' => $this->upload->data());
			$i++;
		//var_dump($source, $name);die;
		}
		
		if($id !== null){
			redirect(base_url('index.php/admin/product/list_product'));
		}else{
			$msg = 'Add new product failed';
		}
		
	}
	
	function do_edit(){
		//var_dump($_FILES);
		$return = $this->m_product->doEdit($_POST);
		if($_FILES['gambar']['error'] == 0 OR $_FILES['gambar']['error'][0] == 0){
			//var_dump('xxx');die;
			foreach($_FILES['gambar'] as $key=>$val){
				$i = 1;			
				foreach($val as $v){
					$field_name = 'gambar'.$i;
					$_FILES[$field_name][$key] = $v;               		
					$i++;
				}
			}
			unset($_FILES['gambar']);
			$id=$_POST['id'];
			$result_img = $this->m_product->getImgLast($_POST['id']);
			if($result_img){
				$expl = explode(".", $result_img[0]->productimage_name, 2);
				$expl = explode("_", $expl[0], 2);
				$indexing = intval($expl[1])+1;
			}else{
				$indexing = 1;
			}
			$i=$indexing;	
			$image_index = 0;
			foreach($_FILES as $key=>$val){
				$image_data  = array(
					'productimage_name' => $id.'_'.$i.'.jpg',
					'productimage_product_id' => $id				
				);
				$source =$val['tmp_name']; 
				$name = $id.'_'.$i.'.jpg';
				$this->process_image($source, $name);
				$this->m_product->do_addImage($image_data);
				
				//$this->upload->do_upload($key);			
				//$data[] = array('upload_data' => $this->upload->data());
				$i++;
			//var_dump($source, $name);die;
			}
		}
		$this->list_product();
		
	}
	
	function deleteImg($id){
		$result_img = $this->m_product->getImgById($id);
		$name = $result_img[0]->productimage_name;
		//var_dump($name);die;
		unlink('file/product_img/'.$name);
		$exec = $this->m_product->delImg($id);
		unset($_FILES);
		echo json_encode ($exec);
		exit;
	}
	
	public function do_delete($id){
		$return = $this->m_product->do_delete($id);
		if($return == true){
			redirect(base_url('index.php/admin/pages/product/list_product'));
		}else{
			$msg = 'Add new product failed';
		}
	}
	
	public function edit($id){
		
		$data['detail'] = $this->m_product->getDetailProduct($id);
		$data['img'] = $this->m_product->getImg($id);
		$data['sex'] = $this->m_product->list_sex();
		$data['genre'] = $this->m_product->list_genre();
		$data['size'] = $this->m_product->list_size();
		//var_dump($data['detail']);die;
		//$data['view'] = "admin/pages/product/edit_product";
		//$this->load->view('admin/index', $data);
		$this->load->view('admin/pages/product/edit_product', $data);
	}
	
	//internal function
	function process_image($source, $name){
	$size = getimagesize($source);
	//var_dump($size);die;
	if($size[0] < 5000)
		{
		move_uploaded_file($source,"file/product_img/" . $name);	
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
		  imagejpeg($im,"file/product_img/" . $name);
		  
		  //Hapus gambar di memori komputer
		  imagedestroy($im_src);
		  imagedestroy($im);
		}
	}
	
	
}
