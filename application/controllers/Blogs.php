<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends CI_Controller {

	public function __Construct(){
		parent::__Construct();
		$this->load->model('UserModel', 'um');
		$this->admin = $this->session->userdata('admin_id');
		is_adlogged_in();
	}

	public function index()
	{
		$data['page_title'] = "Blogs";
		$data['blogs'] = $this->um->BlogDetails('tbl_blogs',['status' => 1]);
		$this->settemplate->dashboard("blogs/index",$data);
	}

	public function create()
	{
		$data['page_title'] = "Blogs Create";
		$this->settemplate->dashboard("blogs/create",$data);
	}

	public function insert()
	{
		$this->form_validation->set_rules('blog_name','Blog Name', 'trim|required');
		$this->form_validation->set_rules('description', 'Description','trim|required');

		if ($this->form_validation->run() == FALSE)
		{	
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
			$this->create();
		}		
		else	
		{

			$image_path = "";
			//insert Image here
			if(isset($_FILES['blog_image']) && $_FILES['blog_image']['size'] > 0){
				$getFlag = 0;
				$imgName = $_FILES['blog_image']['name'];
				$file_size =$_FILES['blog_image']['size'];
				$file_tmp =$_FILES['blog_image']['tmp_name'];

				$temp_tr = explode(".", $_FILES["blog_image"]["name"]);
				$file_ext = end($temp_tr);
				$expensions= array("jpeg","jpg","png");
				if(in_array($file_ext,$expensions)=== false){
					$getFlag = 1;
					$this->response(['status' => 401,'message' =>'Invalid File.Image']);
			  	}
			  	if($file_size > 4194304){
			  		$getFlag = 2;
			        $this->response(['status' => 401,'message' =>'File size must be excately 4 MB.']);
			    }

			    if($getFlag == 0){
			    	$file_name = round(microtime(true)) . '.' . end($temp_tr);

			    	$img_directory =  "assets/profiles";
			    	if (!file_exists($img_directory)) {
					    mkdir($img_directory, 0777, true);
					}
						$image_path = base_url().$img_directory."/".$file_name;
					move_uploaded_file($file_tmp,$img_directory."/".$file_name);
			    }
			}

			// echo "<pre>";
			// print_r($image_path);
			// exit;
			$date = date('Y-m-d H:i:s');
			
			$userData = [
				'blog_name' => $this->input->post('blog_name'),
				'blog_image' => $image_path,
				'description' => $this->input->post('description'),
                'created_at' => $date
			];

			$userId = $this->um->insertData("tbl_blogs",$userData);

			// $price = $this->input->post('price');
		 //    $size = $this->input->post('size');
			// if(count($size) > 0){
			// 		for ($i=0; $i < count($size); $i++) { 
			// 			$itObject = [
			// 				'product_id' => $userId,
			// 				'size' => $size[$i],
			// 				'price' => $price[$i],
			// 			];

			// 			$itLastId = $this->um->insertData("tbl_price",$itObject);
			// 		}
			// 	}

			if($userId > 0){

			$this->session->set_flashdata('success_msg',  "Blogs Created Successfully.");
			    redirect('blogs');
			}else{

				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
				redirect('blogs/create');
			}
			
		}
	}

	public function edit($blog_id)
	{
		$data['page_title'] = "Products";
		$data['blogs'] = $this->um->BlogDetails('tbl_blogs',['blog_id' => $blog_id])->row_array();
		$this->settemplate->dashboard("blogs/edit",$data);
	}

	public function update($blog_id)
	{
		$this->form_validation->set_rules('blog_name','Blog Name', 'trim|required');
		$this->form_validation->set_rules('description', 'Description','trim|required');
		if ($this->form_validation->run() == FALSE)
		{	
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
			$this->edit($product_id);
		}		
		else	
		{
			$image_path = "";
			//insert Image here
			if(isset($_FILES['blog_image']) && $_FILES['blog_image']['size'] > 0){
				$getFlag = 0;
				$imgName = $_FILES['blog_image']['name'];
				$file_size =$_FILES['blog_image']['size'];
				$file_tmp =$_FILES['blog_image']['tmp_name'];

				$temp_tr = explode(".", $_FILES["blog_image"]["name"]);
				$file_ext = end($temp_tr);
				$expensions= array("jpeg","jpg","png");
				if(in_array($file_ext,$expensions)=== false){
					$getFlag = 1;
					$this->session->set_flashdata('success_msg',  "Invalid File.Image.");
			  	}
			  	if($file_size > 10194304){
			  		$getFlag = 2;
			        $this->session->set_flashdata(['status' => 401,'message' =>'File size must be excately 4 MB.']);
			    }

			    if($getFlag == 0){
			    	$file_name = round(microtime(true)) . '.' . end($temp_tr);

			    	$img_directory =  "assets/profiles";
			    	if (!file_exists($img_directory)) {
					    mkdir($img_directory, 0777, true);
					}
						$image_path = base_url().$img_directory."/".$file_name;
					move_uploaded_file($file_tmp,$img_directory."/".$file_name);
			    }
			}
			else{
				$getImg = $this->um->BlogDetails('tbl_blogs',['blog_id' => $blog_id])->row_array();
				if($getImg['blog_image'] != ""){
					$image_path = $getImg['blog_image'];
				}else{
					$image_path = "";
				}
			}
			$whr = [' blog_id'=> $blog_id];
			$userData = [
				'blog_name' => $this->input->post('blog_name'),
				'blog_image' => $image_path,
				'description' => $this->input->post('description'),
			];
			
			$lastId = $this->um->updateData("tbl_blogs",$userData,$whr);
			if($lastId > 0){
				$this->session->set_flashdata('success_msg', "Blog Updated successfully.");
			}else{
				$this->session->set_flashdata('error_msg',  "Failed, Please try again.");
			}
			redirect('blogs');
		}
	}

	public function delete($blog_id)
	{
		
		$whr = ['blog_id' => $blog_id];
		$producteData = [
			'status' => 0
		];

		$productId = $this->um->updateData("tbl_blogs",$producteData,$whr);
		if($productId > 0){
			$this->session->set_flashdata('success_msg',  "Blog Remove Successfully.");
		}else{
			$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
		}
		redirect('blogs');
	}

	public function show($product_id)
	{
		$data['page_title'] = "Products";
		$data['products'] = $this->um->ProdcutDetails('tbl_products',['product_id' => $product_id])->row_array();
		$data['price'] = $this->um->PriceDetails("tbl_price",['product_id' => $product_id]);

		$this->load->library('ciqrcode');
		$params['data'] = base_url().'home/product_details/'.$product_id;
		$params['level'] = 'H';
		$params['size'] = 10;
		$params['savename'] = FCPATH.$product_id.'.png';
		$this->ciqrcode->generate($params);
		$data['qrImage'] = base_url().$product_id.'.png';
		$this->settemplate->dashboard("products/show",$data);
	}

	public function updateprice($price_id)
	{
		
		$whr = ['price_id' => $price_id];
		$producteData = [
			'price' => $this->input->post('price')
		];

		$productId = $this->um->updateData("tbl_price",$producteData,$whr);
		if($productId > 0){
			$this->session->set_flashdata('success_msg',  "Price Updated Successfully.");
		}else{
			$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
		}
		redirect('products');
	}
	
}