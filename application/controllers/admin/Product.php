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
		$data['product'] = $product;
		foreach($product as $key=>$prod){
			//$data['img'][$prod->product_id] = $this->m_product->getImg($prod->product_id);
			$data['size'][$prod->product_id] = $this->m_product->prodSize($prod->product_id);
			$data['product'][$key]->images= $this->m_product->getImg($prod->product_id);
			
		}		
		// var_dump($data);
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
		$msg = '';
		$params=$_POST;		
		$this->db->trans_start();
		$result = $this->m_product->do_add($params);	
		if($result){
			$id = $this->db->insert_id();
			foreach($_FILES['gambar'] as $key=>$val){
				$i = 0;	
				foreach($val as $v){
					$file[$i][$key] = $v;               		
					$i++;
				}
			}
			unset($_FILES['gambar']);
			
			foreach($file as $idx=>$val){
				if($val['type'] != 'image/jpeg'){
					$msg .= '
						<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h4><i class="icon fa fa-check"></i>one or more image(s) file type is not in jpg format!</h4>
						</div>
					';
					$this->session->set_flashdata('msg', $msg);
					redirect(site_url('admin/product/add_baju'));
					break;
				}
			}			
			$i=1;
			$image_index = 0;
			
			foreach($params['stock'] as $key => $val){
				if($val == '' || is_null($val)){
					$val = 0;
				}
				$size_par = array(
					'product_id'=>$id,
					'size_id'=>$key,
					'stock'=>$val
				);
				$result = $result && $this->m_product->addSizeStock($size_par);
			}
			if($result){
				foreach($file as $key=>$val){
					$image_data  = array(
						'productimage_name' => $id.'_'.$i.'.jpg',
						'productimage_product_id' => $id				
					);					
					$source =$val['tmp_name']; 
					$name = $id.'_'.$i.'.jpg';
					$this->process_image($source, $name);
					$result = $result && $this->m_product->do_addImage($image_data);
					$i++;
				}
			}			
		}
		// var_dump($result);die;
		$this->db->trans_complete($result);
		if($result){
			$msg .= '
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i>Add Product success</h4>
				</div>
			';
			$this->session->set_flashdata('msg', $msg);
			redirect(site_url('admin/product/list_product'));
		}else{
			$msg .= '
				<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i>Add Product Fail</h4>
				</div>
			';
			$this->session->set_flashdata('msg', $msg);
			redirect(site_url('admin/product/add_baju'));
		}
		
	}
	
	function do_edit(){
		$result = $this->m_product->doEdit($_POST);
		$this->db->trans_start();
		if($result){
			foreach($_POST['stock'] as $key=>$val){			
				foreach($val as $idx=>$value){
					$par = array(
						'size_id'=>$idx,
						'stock'=>$value,
						'id'=>$key
					);			
				}
				$result = $result && $this->m_product->doEditSize($par);
			}			
		}
		
		if($_FILES['gambar']['error'] == 0 || $_FILES['gambar']['error'][0] == 0){
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
			foreach($_FILES as $idx=>$val){
				if($val['type'] != 'image/jpeg'){
					$msg .= '
						<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h4><i class="icon fa fa-check"></i>one or more image(s) file type is not in jpg format!</h4>
						</div>
					';
					$this->session->set_flashdata('msg', $msg);
					redirect(site_url('admin/product/edit/'. $_POST['id']));
					break;
				}
			}
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
				$result = $this->m_product->do_addImage($image_data);
				
				//$this->upload->do_upload($key);			
				//$data[] = array('upload_data' => $this->upload->data());
				$i++;
			//var_dump($source, $name);die;
			}
		}
		$this->db->trans_complete($result);
		if($result){
			$msg .= '
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i>Edit Product Success</h4>
				</div>
			';
			$this->session->set_flashdata('msg', $msg);
			redirect(base_url('admin/product/list_product'));
		}else{
			$msg .= '
				<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i>Edit Product Fail, Please Check your entry data!</h4>
				</div>
			';
			$this->session->set_flashdata('msg', $msg);
			redirect(base_url('admin/product/edit/'. $_POST['id']));
		}
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
			redirect(base_url('index.php/admin/product/list_product'));
		}else{
			$msg = 'Add new product failed';
		}
	}
	
	public function edit($id){
		
		$data['detail'] = $this->m_product->getDetailProduct($id);
		$data['img'] = $this->m_product->getImg($id);
		$data['sex'] = $this->m_product->list_sex();
		$data['genre'] = $this->m_product->list_genre();
		$data['size'] = $this->m_product->sizeProductByIdProduct($id);
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
