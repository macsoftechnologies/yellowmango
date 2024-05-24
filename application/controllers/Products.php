<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __Construct(){
		parent::__Construct();
		$this->load->model('UserModel', 'um');
		$this->admin = $this->session->userdata('admin_id');
		is_adlogged_in();
	}

	public function index()
	{
		$data['page_title'] = "Products";
		$data['products'] = $brands = $this->um->ProdcutDetails('tbl_products',[]);
		$brandProducts = [];
		if($brands->num_rows() > 0){
			foreach ($brands->result() as $key => $bnd) {
				$prod = $this->um->PriceDetails("tbl_price",['product_id' => $bnd->product_id])->result_array();
				array_push($brandProducts, array('stock' => $bnd->stock, 'outward' => $bnd->outward, 'product_id' => $bnd->product_id, 'product_image' => $bnd->product_image, 'min_max_price' => $bnd->min_max_price, 'product_name' => $bnd->product_name, 'sizes' => $prod));
			}
		}
		$data['bProducts'] = $brandProducts;

		// echo "<pre>";
		// print_r($data['bProducts']);
		// exit;
		$this->settemplate->dashboard("products/index",$data);
	}

	public function create()
	{
		$data['page_title'] = "Products Create";
		$this->settemplate->dashboard("products/create",$data);
	}

	public function approved($user_id)
	{
		
		$whr = ['user_id' => $user_id];
		$producteData = [
			'status' => 2
		];

		$productId = $this->um->updateData("tbl_users",$producteData,$whr);
		if($productId > 0){
			$this->session->set_flashdata('success_msg',  "Student Approved Successfully.");
		}else{
			$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
		}
		redirect('customers');
	}

	public function insert()
	{
		$this->form_validation->set_rules('product_name','Product Name', 'trim|required');
		$this->form_validation->set_rules('stock', 'Stock','trim|required');

		if ($this->form_validation->run() == FALSE)
		{	
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
			$this->create();
		}		
		else	
		{

			$image_path = "";
			//insert Image here
			if(isset($_FILES['product_image']) && $_FILES['product_image']['size'] > 0){
				$getFlag = 0;
				$imgName = $_FILES['product_image']['name'];
				$file_size =$_FILES['product_image']['size'];
				$file_tmp =$_FILES['product_image']['tmp_name'];

				$temp_tr = explode(".", $_FILES["product_image"]["name"]);
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
				'product_name' => $this->input->post('product_name'),
				'product_image' => $image_path,
				'stock' => $this->input->post('stock'),
				'min_max_price' => $this->input->post('min_max_price'),
				'description' => $this->input->post('description'),
				'price' => $this->input->post('price'),
                'created_at' => $date
			];

			$userId = $this->um->insertData("tbl_products",$userData);

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

			$this->session->set_flashdata('success_msg',  "Products Created Successfully.");
			    redirect('products');
			}else{

				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
				redirect('products/create');
			}
			
		}
	}

	public function edit($product_id)
	{
		$data['page_title'] = "Products";
		$data['products'] = $this->um->ProdcutDetails('tbl_products',['product_id' => $product_id])->row_array();
		$this->settemplate->dashboard("products/edit",$data);
	}

	public function update($product_id)
	{
		$this->form_validation->set_rules('product_name','Product Name', 'trim|required');
		$this->form_validation->set_rules('stock', 'Stock','trim|required');
		if ($this->form_validation->run() == FALSE)
		{	
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
			$this->edit($product_id);
		}		
		else	
		{
			$image_path = "";
			//insert Image here
			if(isset($_FILES['product_image']) && $_FILES['product_image']['size'] > 0){
				$getFlag = 0;
				$imgName = $_FILES['product_image']['name'];
				$file_size =$_FILES['product_image']['size'];
				$file_tmp =$_FILES['product_image']['tmp_name'];

				$temp_tr = explode(".", $_FILES["product_image"]["name"]);
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
				$getImg = $this->um->ProdcutDetails('tbl_products',['product_id' => $product_id])->row_array();
				if($getImg['product_image'] != ""){
					$image_path = $getImg['product_image'];
				}else{
					$image_path = "";
				}
			}
			$produc =  $this->um->ProdcutDetails('tbl_products',['product_id' => $product_id])->row_array();
			$whr = ['product_id'=> $product_id];
			$userData = [
				'product_name' => $this->input->post('product_name'),
				'product_image' => $image_path,
				'description' => $this->input->post('description'),
				'min_max_price' => $this->input->post('min_max_price'),
				'price' => $this->input->post('price'),
				'stock' => $produc['stock'] + $this->input->post('stock'),
			];
			
			$lastId = $this->um->updateData("tbl_products",$userData,$whr);
			if($lastId > 0){
				$this->session->set_flashdata('success_msg', "Product Updated successfully.");
			}else{
				$this->session->set_flashdata('error_msg',  "Failed, Please try again.");
			}
			redirect('products');
		}
	}

	public function delete($product_id)
	{
		
		$whr = ['product_id' => $product_id];
		$producteData = [
			'status' => 0
		];

		$productId = $this->um->updateData("tbl_products",$producteData,$whr);
		if($productId > 0){
			$this->session->set_flashdata('success_msg',  "Product Remove Successfully.");
		}else{
			$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
		}
		redirect('products');
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