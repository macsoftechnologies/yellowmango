<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Home extends CI_Controller {



	public function __Construct(){

		parent::__Construct();

		$this->load->model('UserModel', 'um');

		$this->user_id = $this->session->userdata('user_id');

		$this->email = $this->session->userdata('email');

	}

	

	public function index()

	{

		$data['page_title'] = "Home Page";

		$data['products'] = $brands = $this->um->ProdcutDetails('tbl_products',[]);

		$brandProducts = [];

		if($brands->num_rows() > 0){

			foreach ($brands->result() as $key => $bnd) {

				$prod = $this->um->PriceDetails("tbl_price",['product_id' => $bnd->product_id])->result_array();

				array_push($brandProducts, array('stock' => $bnd->stock, 'outward' => $bnd->outward, 'product_id' => $bnd->product_id, 'min_max_price' => $bnd->min_max_price, 'product_image' => $bnd->product_image, 'product_name' => $bnd->product_name, 'sizes' => $prod));

			}

		}

		$data['bProducts'] = $brandProducts;



		$cartProducts = [];

		if($brands->num_rows() > 0){

			foreach ($brands->result() as $key => $bnd) {

				$prod = $this->um->cartItemDetails("tbl_cart c",['c.product_id' => $bnd->product_id, 'c.customer_id' => $this->session->userdata('customer_id'), 'c.order_status' => 0])->result_array();

				$sizes = $this->um->PriceDetails("tbl_price",['product_id' => $bnd->product_id])->result_array();

				array_push($cartProducts, array('stock' => $bnd->stock, 'product_id' => $bnd->product_id, 'outward' => $bnd->outward, 'product_id' => $bnd->product_id, 'price' => $bnd->price, 'min_max_price' => $bnd->min_max_price, 'product_image' => $bnd->product_image, 'product_name' => $bnd->product_name, 'carts' => $prod));

			}

		}

		$data['cProducts'] = $cartProducts;

		// echo "<pre>";
		// print_r($data['cProducts']);
		// exit;



		// echo "<pre>";

		// print_r($data['cProducts']);

		// exit;



		$data['cartitems'] = $this->um->cartItemDetails('tbl_cart c',['c.customer_id' => $this->session->userdata('customer_id'),'order_status' => 0])->result_array();

		$data['carti'] = count($data['cartitems']);

		$data['daily'] = $this->um->DailyCitiesDetails('tbl_daily_cities',[]);

		$data['weekly'] = $this->um->WeeklyCitiesDetails('tbl_weekly_cities',[]);

		$data['days'] = $this->um->getDays('tbl_days',['status' => 1]);

		$data['time'] = $this->um->getTime('tbl_time',['status' => 1]);

		$data['timess'] = $this->um->getTime('tbl_time',['status' => 2]);

		$data['scroll'] = $this->um->getScroll('tbl_scroll',[]);

		$data['testimonies'] = $this->um->TestimoniesDetails('tbl_testimonies',['status' => 1]);

		$data['areas'] = $this->um->AreaDetails('tbl_shipping_charges',['status' => 1]);

		$data['blogs'] = $this->um->BlogDetails('tbl_blogs',['status' => 1]);

		$this->settemplate->front("home",$data);

	}



	public function product_details($product_id)

	{

		$data['page_title'] = "Product Details Page";

		$quantity = 1;

		$data['cartdatasystem'] = $this->um->cartItemDetails("tbl_cart c",['c.product_id' => $product_id, 'c.customer_id' => $this->session->userdata('customer_id'), 'c.order_status' => 0])->result_array();

		$data['products'] = $brands = $this->um->ProdcutDetails('tbl_products',['product_id' => $product_id])->row_array();

		$brands = $this->um->ProdcutDetails('tbl_products',[]);

		$brandProducts = [];

		if($brands->num_rows() > 0){

			foreach ($brands->result() as $key => $bnd) {

				$prod = $this->um->PriceDetails("tbl_price",['product_id' => $bnd->product_id])->result_array();

				array_push($brandProducts, array('stock' => $bnd->stock, 'outward' => $bnd->outward, 'product_id' => $bnd->product_id, 'min_max_price' => $bnd->min_max_price, 'product_image' => $bnd->product_image, 'product_name' => $bnd->product_name, 'sizes' => $prod));

			}

		}

		$data['bProducts'] = $brandProducts;

		$data['reviews'] = $this->um->Reviews('tbl_review',['product_id' => $product_id])->result_array();



		$cartProducts = [];

		if($brands->num_rows() > 0){

			foreach ($brands->result() as $key => $bnd) {

				$prod = $this->um->cartItemDetails("tbl_cart c",['c.product_id' => $bnd->product_id, 'c.customer_id' => $this->session->userdata('customer_id'), 'c.order_status' => 0])->result_array();

				$sizes = $this->um->PriceDetails("tbl_price",['product_id' => $bnd->product_id])->result_array();

				array_push($cartProducts, array('stock' => $bnd->stock, 'product_id' => $bnd->product_id, 'outward' => $bnd->outward, 'product_id' => $bnd->product_id, 'price' => $bnd->price, 'min_max_price' => $bnd->min_max_price, 'product_image' => $bnd->product_image, 'product_name' => $bnd->product_name, 'carts' => $prod));

			}

		}

		$data['cProducts'] = $cartProducts;





		$data['produc'] = $brands = $this->um->ProdcutDetails('tbl_products',['product_id' => $product_id])->row_array();

		$data['price'] = $this->um->PriceDetails("tbl_price",['product_id' => $product_id]);

		$data['price1'] = $this->um->PriceDetails("tbl_price",['product_id' => $product_id])->row_array();

		$data['cartitems'] = $this->um->cartItemDetails('tbl_cart c',['c.customer_id' => $this->session->userdata('customer_id'),'order_status' => 0])->result_array();

		$data['carti'] = count($data['cartitems']);

		$data['daily'] = $this->um->DailyCitiesDetails('tbl_daily_cities',[]);

		$data['weekly'] = $this->um->WeeklyCitiesDetails('tbl_weekly_cities',[]);

		$data['days'] = $this->um->getDays('tbl_days',['status' => 1]);

		$data['time'] = $this->um->getTime('tbl_time',['status' => 1]);

		$data['timess'] = $this->um->getTime('tbl_time',['status' => 2]);

		$data['scroll'] = $this->um->getScroll('tbl_scroll',[]);

		$data['areas'] = $this->um->AreaDetails('tbl_shipping_charges',['status' => 1]);

		$this->settemplate->front("product_details",$data);

	}





	public function product_details_data($product_id)

	{

		$data['page_title'] = "Product Details Page";

		$quantity = $this->input->post('quantity');

		$brands = $this->um->ProdcutDetails('tbl_products',[]);

		$brandProducts = [];

		if($brands->num_rows() > 0){

			foreach ($brands->result() as $key => $bnd) {

				$prod = $this->um->PriceDetails("tbl_price",['product_id' => $bnd->product_id])->result_array();

				array_push($brandProducts, array('stock' => $bnd->stock, 'product_id' => $bnd->product_id, 'min_max_price' => $bnd->min_max_price, 'product_image' => $bnd->product_image, 'product_name' => $bnd->product_name, 'sizes' => $prod));

			}

		}

		$data['bProducts'] = $brandProducts;

		$data['products'] = $brands = $this->um->ProdcutDetails('tbl_products',['product_id' => $product_id])->row_array();

		$data['price'] = $this->um->PriceDetails("tbl_price",['product_id' => $product_id]);

		$data['price1'] = $this->um->PriceDetails("tbl_price",['product_id' => $product_id])->row_array();

		$data['cartitems'] = $this->um->cartItemDetails('tbl_cart c',['c.customer_id' => $this->session->userdata('customer_id'),'order_status' => 0])->result_array();

		$data['carti'] = count($data['cartitems']);

		$data['daily'] = $this->um->DailyCitiesDetails('tbl_daily_cities',[]);

		$data['weekly'] = $this->um->WeeklyCitiesDetails('tbl_weekly_cities',[]);

		$data['days'] = $this->um->getDays('tbl_days',['status' => 1]);

		$data['time'] = $this->um->getTime('tbl_time',['status' => 1]);

		$data['timess'] = $this->um->getTime('tbl_time',['status' => 2]);

		$data['scroll'] = $this->um->getScroll('tbl_scroll',[]);

		$data['areas'] = $this->um->AreaDetails('tbl_shipping_charges',['status' => 1]);

		$this->settemplate->front("product_details",$data);

	}



	public function about()

	{

		$data['page_title'] = "Contact Us Page";

		$data['cartitems'] = $this->um->cartItemDetails('tbl_cart c',['c.customer_id' => $this->session->userdata('customer_id'),'order_status' => 0])->result_array();

		$data['carti'] = count($data['cartitems']);

		$data['daily'] = $this->um->DailyCitiesDetails('tbl_daily_cities',[]);

		$data['weekly'] = $this->um->WeeklyCitiesDetails('tbl_weekly_cities',[]);

		$data['days'] = $this->um->getDays('tbl_days',['status' => 1]);

		$data['time'] = $this->um->getTime('tbl_time',['status' => 1]);

		$data['timess'] = $this->um->getTime('tbl_time',['status' => 2]);

		$data['scroll'] = $this->um->getScroll('tbl_scroll',[]);

		$data['areas'] = $this->um->AreaDetails('tbl_shipping_charges',['status' => 1]);

		$this->settemplate->front("about",$data);

	}

	public function shop()

	{

		$data['page_title'] = "Shop Page";

		$data['products'] = $brands = $this->um->ProdcutDetails('tbl_products',[]);

		$brandProducts = [];

		if($brands->num_rows() > 0){

			foreach ($brands->result() as $key => $bnd) {

				$prod = $this->um->PriceDetails("tbl_price",['product_id' => $bnd->product_id])->result_array();

				array_push($brandProducts, array('stock' => $bnd->stock,'description' => $bnd->description, 'outward' => $bnd->outward, 'product_id' => $bnd->product_id, 'min_max_price' => $bnd->min_max_price, 'product_image' => $bnd->product_image, 'product_name' => $bnd->product_name, 'sizes' => $prod));

			}

		}

		$data['bProducts'] = $brandProducts;



		$cartProducts = [];

		if($brands->num_rows() > 0){

			foreach ($brands->result() as $key => $bnd) {

				$prod = $this->um->cartItemDetails("tbl_cart c",['c.product_id' => $bnd->product_id, 'c.customer_id' => $this->session->userdata('customer_id'), 'c.order_status' => 0])->result_array();

				$sizes = $this->um->PriceDetails("tbl_price",['product_id' => $bnd->product_id])->result_array();

				array_push($cartProducts, array('stock' => $bnd->stock,'description' => $bnd->description, 'product_id' => $bnd->product_id, 'outward' => $bnd->outward, 'product_id' => $bnd->product_id, 'price' => $bnd->price, 'min_max_price' => $bnd->min_max_price, 'product_image' => $bnd->product_image, 'product_name' => $bnd->product_name, 'carts' => $prod));

			}

		}

		$data['cProducts'] = $cartProducts;

		$data['cartitems'] = $this->um->cartItemDetails('tbl_cart c',['c.customer_id' => $this->session->userdata('customer_id'),'order_status' => 0])->result_array();

		$data['carti'] = count($data['cartitems']);

		$data['daily'] = $this->um->DailyCitiesDetails('tbl_daily_cities',[]);

		$data['weekly'] = $this->um->WeeklyCitiesDetails('tbl_weekly_cities',[]);

		$data['days'] = $this->um->getDays('tbl_days',['status' => 1]);

		$data['time'] = $this->um->getTime('tbl_time',['status' => 1]);

		$data['timess'] = $this->um->getTime('tbl_time',['status' => 2]);

		$data['scroll'] = $this->um->getScroll('tbl_scroll',[]);

		$data['areas'] = $this->um->AreaDetails('tbl_shipping_charges',['status' => 1]);

		$this->settemplate->front("shop",$data);

	}

	public function bulkorder()

	{

		$data['page_title'] = "Contact Us Page";

		$data['cartitems'] = $this->um->cartItemDetails('tbl_cart c',['c.customer_id' => $this->session->userdata('customer_id'),'order_status' => 0])->result_array();

		$data['carti'] = count($data['cartitems']);

		$data['daily'] = $this->um->DailyCitiesDetails('tbl_daily_cities',[]);

		$data['weekly'] = $this->um->WeeklyCitiesDetails('tbl_weekly_cities',[]);

		$data['days'] = $this->um->getDays('tbl_days',['status' => 1]);

		$data['time'] = $this->um->getTime('tbl_time',['status' => 1]);

		$data['timess'] = $this->um->getTime('tbl_time',['status' => 2]);

		$data['scroll'] = $this->um->getScroll('tbl_scroll',[]);

		$data['areas'] = $this->um->AreaDetails('tbl_shipping_charges',['status' => 1]);

		$this->settemplate->front("bulkorder",$data);

	}



	public function contact()

	{

		$data['page_title'] = "Contact Us Page";

		$data['cartitems'] = $this->um->cartItemDetails('tbl_cart c',['c.customer_id' => $this->session->userdata('customer_id'),'order_status' => 0])->result_array();

		$data['carti'] = count($data['cartitems']);

		$data['daily'] = $this->um->DailyCitiesDetails('tbl_daily_cities',[]);

		$data['weekly'] = $this->um->WeeklyCitiesDetails('tbl_weekly_cities',[]);

		$data['days'] = $this->um->getDays('tbl_days',['status' => 1]);

		$data['time'] = $this->um->getTime('tbl_time',['status' => 1]);

		$data['timess'] = $this->um->getTime('tbl_time',['status' => 2]);

		$data['scroll'] = $this->um->getScroll('tbl_scroll',[]);

		$data['areas'] = $this->um->AreaDetails('tbl_shipping_charges',['status' => 1]);

		$this->settemplate->front("contactus",$data);

	}





	public function termsandconditions()

	{

		$data['page_title'] = "Terms And Conditions Page";

		$data['cartitems'] = $this->um->cartItemDetails('tbl_cart c',['c.customer_id' => $this->session->userdata('customer_id'),'order_status' => 0])->result_array();

		$data['carti'] = count($data['cartitems']);

		$data['daily'] = $this->um->DailyCitiesDetails('tbl_daily_cities',[]);

		$data['weekly'] = $this->um->WeeklyCitiesDetails('tbl_weekly_cities',[]);

		$data['days'] = $this->um->getDays('tbl_days',['status' => 1]);

		$data['time'] = $this->um->getTime('tbl_time',['status' => 1]);

		$data['timess'] = $this->um->getTime('tbl_time',['status' => 2]);

		$data['scroll'] = $this->um->getScroll('tbl_scroll',[]);

		$data['areas'] = $this->um->AreaDetails('tbl_shipping_charges',['status' => 1]);

		$this->settemplate->front("termsandconditions",$data);

	}



	public function privicypolicy()

	{

		$data['page_title'] = "Privacy Policy Page";

		$data['cartitems'] = $this->um->cartItemDetails('tbl_cart c',['c.customer_id' => $this->session->userdata('customer_id'),'order_status' => 0])->result_array();

		$data['carti'] = count($data['cartitems']);

		$data['daily'] = $this->um->DailyCitiesDetails('tbl_daily_cities',[]);

		$data['weekly'] = $this->um->WeeklyCitiesDetails('tbl_weekly_cities',[]);

		$data['days'] = $this->um->getDays('tbl_days',['status' => 1]);

		$data['time'] = $this->um->getTime('tbl_time',['status' => 1]);

		$data['timess'] = $this->um->getTime('tbl_time',['status' => 2]);

		$data['scroll'] = $this->um->getScroll('tbl_scroll',[]);

		$data['areas'] = $this->um->AreaDetails('tbl_shipping_charges',['status' => 1]);

		$this->settemplate->front("privicypolicy",$data);

	}



	public function gallery()

	{

		$data['page_title'] = "Terms And Conditions Page";

		$data['cartitems'] = $this->um->cartItemDetails('tbl_cart c',['c.customer_id' => $this->session->userdata('customer_id'),'order_status' => 0])->result_array();

		$data['carti'] = count($data['cartitems']);

		$data['daily'] = $this->um->DailyCitiesDetails('tbl_daily_cities',[]);

		$data['weekly'] = $this->um->WeeklyCitiesDetails('tbl_weekly_cities',[]);

		$data['days'] = $this->um->getDays('tbl_days',['status' => 1]);

		$data['time'] = $this->um->getTime('tbl_time',['status' => 1]);

		$data['timess'] = $this->um->getTime('tbl_time',['status' => 2]);

		$data['scroll'] = $this->um->getScroll('tbl_scroll',[]);

		$data['areas'] = $this->um->AreaDetails('tbl_shipping_charges',['status' => 1]);

		$this->settemplate->front("gallery",$data);

	}





	public function register()

	{

		$data['page_title'] = "Register Page";

		$data['cartitems'] = $this->um->cartItemDetails('tbl_cart c',['c.customer_id' => $this->session->userdata('customer_id'),'order_status' => 0])->result_array();

		$data['carti'] = count($data['cartitems']);

		$data['daily'] = $this->um->DailyCitiesDetails('tbl_daily_cities',[]);

		$data['weekly'] = $this->um->WeeklyCitiesDetails('tbl_weekly_cities',[]);

		$data['days'] = $this->um->getDays('tbl_days',['status' => 1]);

		$data['time'] = $this->um->getTime('tbl_time',['status' => 1]);

		$data['timess'] = $this->um->getTime('tbl_time',['status' => 2]);

		$data['scroll'] = $this->um->getScroll('tbl_scroll',[]);

		$data['areas'] = $this->um->AreaDetails('tbl_shipping_charges',['status' => 1]);

		$data['cities'] = $this->um->GetCities('tbl_community');
		
		
		$this->settemplate->front("register",$data);

	}





	public function insert()
	{
		$this->form_validation->set_rules('customer_name','Customer Name', 'trim|required');
		$this->form_validation->set_rules('mobile_number', 'Mobile Number','trim|required');
		$this->form_validation->set_rules('email', 'E-Mail', 'trim|required');
		$this->form_validation->set_rules('last_name','Last Name', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() == FALSE)
		{	
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
			$this->register();
		}		
		else	
		{
			$is_gated_community =  $this->input->post('is_gated_community');
			
			$date = date('Y-m-d H:i:s');
			if($is_gated_community == "on")
			{
				
				$raw = explode("-",$this->input->post('appartment'));
				$appartment = $raw[1];
				$community_id = $raw[0];
				
				$userData = [
							'customer_name' => $this->input->post('customer_name'),
							'last_name' => $this->input->post('last_name'),
							'mobile_number' => $this->input->post('mobile_number'),
							'email' => $this->input->post('email'),
							'password' => md5($this->input->post('password')),
							'city' => $this->input->post('city'),
							'appartment' => $appartment,
							'community_id' => $community_id,
							'block' => $this->input->post('block'),
							'flat_no' => $this->input->post('flat_no'),
							'postal_code' => $this->input->post('postal_code'),
							'is_gated_community' => 1,
							'role_id' => 1,
							'created_at' => $date
							];
							
							
			}
			else
			{
				$userData = [
							'customer_name' => $this->input->post('customer_name'),
							'last_name' => $this->input->post('last_name'),
							'mobile_number' => $this->input->post('mobile_number'),
							'email' => $this->input->post('email'),
							'password' => md5($this->input->post('password')),
							'state' => $this->input->post('state'),
							'address1' => $this->input->post('address1'),
							'address2' => $this->input->post('address2'),
							'town_mandal' => $this->input->post('town_mandal'),
							'district' => $this->input->post('district'),
							'postal_code' => $this->input->post('postal_code'),
							'role_id' => 1,
							'created_at' => $date
							];
							
			}
			
			
			$moblie = $this->input->post('mobile_number');
			$email = $this->input->post('email');
			$role_id = 1;
			$chkemailmobile = $this->um->checkMoblieNumber($moblie,$email);
	
				if($chkemailmobile == 0)
				{
					$userId = $this->um->insertData("tbl_customer",$userData);

					if($userId > 0){

					$this->session->set_flashdata('success_msg',  "Registration Completed Successfully.");
						redirect('userlogin/index/0/0/0');
					}else{

						$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
						redirect('home/register');
					}


				}
				else
				{

					$this->session->set_flashdata('error_msg',  "Failed, Email/Mobile Number Already Exit.");
					redirect('home/register');
			
				}
			
		}
	}





	public function insertcart()

	{

		$product_id = $this->input->post('product_id');

		$quantity = $this->input->post('quantity');

		$price = $this->input->post('price');

			    if($this->session->userdata('customer_id') == ''){

                    redirect('userlogin/index/'.$product_id.'/'.$quantity.'/'.$price);



			    }else {





					$date = date('Y-m-d H:i:s');

						

						$userData = [

							'customer_id' => $this->input->post('customer_id'),

							'product_id' => $this->input->post('product_id'),

							'quantity' => $this->input->post('quantity'), 

							'order_status' => 0,

							'price' => $this->input->post('price'),

			                'created_at' => $date

						];



						$userId = $this->um->insertData("tbl_cart",$userData);



			    }





			if($userId > 0){



			$this->session->set_flashdata('success_msg',  "Item Added to Cart Successfully.");

			    redirect('home/product_details/'.$this->input->post('product_id'));

			}else{



				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");

				redirect('home/product_details/'.$this->input->post('product_id'));

			}

	}





	public function inserthomecart()

	{

		$product_id = $this->input->post('product_id');

		$quantity = $this->input->post('quantity');

		$price = $this->input->post('price');

		$productsdata = $this->um->ProdcutDetails('tbl_products',['product_id' => $this->input->post('product_id')])->row_array();

		// echo "<pre>";
		// print_r($productsdata);
		// exit;



		if(($productsdata['stock']-$productsdata['outward']) >= $this->input->post('quantity')) {



			    if($this->session->userdata('customer_id') == ''){

                    redirect('userlogin/index/'.$product_id.'/'.$quantity.'/'.$price);



			    }else {





					$date = date('Y-m-d H:i:s');

						

						$userData = [

							'customer_id' => $this->input->post('customer_id'),

							'product_id' => $product_id,

							'quantity' => $quantity, 

							'order_status' => 0,

							'price' => $price,

			                'created_at' => $date

						];



						$userId = $this->um->insertData("tbl_cart",$userData);



			    }



		}else {

	           $this->session->set_flashdata('error_msg',  "Out Of Stock...");

				redirect('home');

			}




			if($userId > 0){



			$this->session->set_flashdata('success_msg',  "Cart Item Added Successfully.");

			    redirect('home');

			}else{



				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");

				redirect('home');

			}


	redirect('home');

}



	public function deleteCart()

	{

		$response = array();



		$cart_id = $this->input->post('cart_id');



		$updateId = $this->um->deleteData('tbl_cart',['cart_id' => $cart_id]);

		if($updateId > 0){

			$response['status'] = "pass";

		}else{

			$response['status'] = "fail";

		}

		echo  json_encode($response);

	}



	public function viewcart()

	{
		if($this->session->userdata('customer_id') == ''){
			redirect("userlogin/index/0/0/0");

		}else {

		$data['page_title'] = "Register Page";

		$data['cartitems'] = $this->um->cartItemDetails('tbl_cart c',['c.customer_id' => $this->session->userdata('customer_id'),'order_status' => 0])->result_array();

		$data['carti'] = count($data['cartitems']);

		$data['daily'] = $this->um->DailyCitiesDetails('tbl_daily_cities',[]);

		$data['weekly'] = $this->um->WeeklyCitiesDetails('tbl_weekly_cities',[]);

		$data['days'] = $this->um->getDays('tbl_days',['status' => 1]);

		$data['time'] = $this->um->getTime('tbl_time',['status' => 1]);

		$data['timess'] = $this->um->getTime('tbl_time',['status' => 2]);

		$data['scroll'] = $this->um->getScroll('tbl_scroll',[]);

		$data['areas'] = $this->um->AreaDetails('tbl_shipping_charges',['status' => 1]);

		$this->settemplate->front("cart",$data);
	}

	}



	public function changeQuantity()

	{

		$response = array();



		$cart_id = $this->input->post('cart_id');

		$quantity = $this->input->post('quantity');

		



		$cart = $this->um->cartItemDetails('tbl_cart c',['c.cart_id' =>  $this->input->post('cart_id')])->row_array();



		$products = $this->um->PriceDetails('tbl_price',['product_id' => $cart['product_id']])->result_array();



		$productsdata = $this->um->ProdcutDetails('tbl_products',['product_id' => $cart['product_id']])->row_array();



		if(($productsdata['stock']-$productsdata['outward']) >= $this->input->post('quantity')) {


		$updatecart =  [

			'quantity' => $quantity, 

		    'price' => $productsdata['price'] 

		];



		$whr = ['cart_id' => $cart_id];



		





		$updateId = $this->um->updateData('tbl_cart',$updatecart, $whr);

		$cartitems =  $this->um->cartItemDetailsData("tbl_cart c",['c.customer_id' => $this->session->userdata('customer_id'), 'c.order_status' => 0])->result_array();

		 $tot_price = 0;
	     $prices = 0;
	     $product = 0;
	     if(count($cartitems) > 0) {
	        for ($i=0; $i < count($cartitems); $i++) {  
	                     

	            if(($cartitems[$i]['stock']-$cartitems[$i]['outward']) >= $cartitems[$i]['quantity']){
	                $tot_price = ($cartitems[$i]['price']*$cartitems[$i]['quantity'])+$cartitems[$i]['gift'];
	                $prices = $tot_price + $prices;
	                $product = 1;
	            } else { 
	                $tot_price = 0;
	                $prices = $tot_price + $prices;
	                $product = 2;
	             } 
	           }
	        }



		if($updateId > 0){

			$response['status'] = "pass";
			$response['price'] = $prices;

		}else{

			$response['status'] = "fail";

		}



		}else {

           $response['status'] = "fail";

		}

		

		echo  json_encode($response);

	}





	public function changeQuantityData()

	{

		$response = array();



		$cart_id = $this->input->post('cart_id');

		$quantity = $this->input->post('quantity');

		



		$cart = $this->um->cartItemDetails('tbl_cart c',['c.cart_id' =>  $this->input->post('cart_id')])->row_array();



		$products = $this->um->PriceDetails('tbl_price',['product_id' => $cart['product_id']])->result_array();



		$productsdata = $this->um->ProdcutDetails('tbl_products',['product_id' => $cart['product_id']])->row_array();



		if(($productsdata['stock']-$productsdata['outward']) >= $this->input->post('quantity')) {


		$updatecart =  [

			'quantity' => $quantity, 

		    'price' => $productsdata['price'] 

		];



		$whr = ['cart_id' => $cart_id];



		





		$updateId = $this->um->updateData('tbl_cart',$updatecart, $whr);

		$cartitems =  $this->um->cartItemDetailsData("tbl_cart c",['c.customer_id' => $this->session->userdata('customer_id'), 'c.order_status' => 0])->result_array();

		 $tot_price = 0;
	     $prices = 0;
	     $product = 0;
	     if(count($cartitems) > 0) {
	        for ($i=0; $i < count($cartitems); $i++) {  
	                     

	            if(($cartitems[$i]['stock']-$cartitems[$i]['outward']) >= $cartitems[$i]['quantity']){
	                $tot_price = ($cartitems[$i]['price']*$cartitems[$i]['quantity'])+$cartitems[$i]['gift'];
	                $prices = $tot_price + $prices;
	                $product = 1;
	            } else { 
	                $tot_price = 0;
	                $prices = $tot_price + $prices;
	                $product = 2;
	             } 
	           }
	        }



		if($updateId > 0){

			$response['status'] = "pass";
			$response['price'] = $prices;

		}else{

			$response['status'] = "fail";

		}



		}else {

           $response['status'] = "fail";

		}

		

		echo  json_encode($response);

	}



	public function checkout()

	{

		$data['page_title'] = "Register Page";
		
		$data['products'] = $brands = $this->um->ProdcutDetails('tbl_products',[]);



		$cart_id = 0;

		$data['customers'] = $this->um->CustomerDetails('tbl_customer',['customer_id' => $this->session->userdata('customer_id')])->row_array();

		$data['cartitems'] = $cartitems = $this->um->cartItemDetails('tbl_cart c',['c.customer_id' => $this->session->userdata('customer_id'),'order_status' => 0])->result_array();

// 		$data['carti'] = count($data['cartitems']);
		
		$data['carti'] = $cartss = count($data['cartitems']);

		//$data['cities'] = $this->um->DailyCities('tbl_daily_cities');
		$data['cities'] = $this->um->GetCities('tbl_community');
		
		
		$data['daily'] = $this->um->DailyCitiesDetails('tbl_daily_cities',[]);

		$data['weekly'] = $this->um->WeeklyCitiesDetails('tbl_weekly_cities',[]);

		$data['days'] = $this->um->getDays('tbl_days',['status' => 1]);

		$data['time'] = $this->um->getTime('tbl_time',['status' => 1]);

		$data['timess'] = $this->um->getTime('tbl_time',['status' => 2]);

		$data['scroll'] = $this->um->getScroll('tbl_scroll',[]);

		$data['areas'] = $this->um->AreaDetails('tbl_shipping_charges',['status' => 1]);



		if(count($cartitems) > 0) {

            for ($i=0; $i < count($cartitems); $i++) {



			if(($cartitems[$i]['stock']-$cartitems[$i]['outward']) >= $cartitems[$i]['quantity']){

		        $cart_id = 0;

		     } else {

		        $cart_id = $cartitems[$i]['cart_id'];

		     } 



		     $whr = ['cart_id' => $cart_id];



		     $deleteId = $this->um->deleteData("tbl_cart", $whr);

		 }

		}

		if($cartss == 0) {

		$cartProducts = [];

		if($brands->num_rows() > 0){

			foreach ($brands->result() as $key => $bnd) {

				$prod = $this->um->cartItemDetails("tbl_cart c",['c.product_id' => $bnd->product_id, 'c.customer_id' => $this->session->userdata('customer_id'), 'c.order_status' => 0])->result_array();

				$sizes = $this->um->PriceDetails("tbl_price",['product_id' => $bnd->product_id])->result_array();

				array_push($cartProducts, array('stock' => $bnd->stock, 'product_id' => $bnd->product_id, 'outward' => $bnd->outward, 'product_id' => $bnd->product_id, 'price' => $bnd->price, 'min_max_price' => $bnd->min_max_price, 'product_image' => $bnd->product_image, 'product_name' => $bnd->product_name, 'carts' => $prod));

			}

		}

		$data['cProducts'] = $cartProducts;

		$this->settemplate->front("home",$data);
	}else {
		$this->settemplate->front("checkout",$data);
	}

	}



	public function placeorder()

	{

		  // $itemId = $this->input->post('postal_code');
		  //       $aa = explode('-', $itemId);
		  //       $qty1 = $aa[0];
		  //       $qty2 = $aa[1];

				$date = date('Y-m-d H:i:s');



				$whr = ['customer_id' => $this->input->post('customer_id')];
				$is_gated_community = $this->input->post('is_gated_community');

				// $digits = 4;
		        // $otp = str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);

				
				$last_order_id = $this->um->getlastorderId();
				
				
				$new_order_id = $last_order_id['order_id'];
				
				if($is_gated_community==1)
				{
					$order_txn = "#GC_".sprintf('%04d', $new_order_id);
				}
				else
				{
					$order_txn = "#NG_".sprintf('%04d', $new_order_id);
				}
				
				//$order_txn = "#".$otp;

				$city = $this->input->post('city');
				
				if($is_gated_community==1)
				{
					
					$appartment = $this->input->post('appartment');
				
					$block =  $this->input->post('block');
					$flat_no =  $this->input->post('flat_no');
					$consignment_date=  $this->input->post('consignment_date');
					$community_discount_percentage=  $this->input->post('community_discount_percentage');
					$community_discount_val=  $this->input->post('community_discount_val');

				}
				else
				{
					$appartment = "";
					
					$block =  "";
					$flat_no =  "";
					$consignment_date=  "";
					$community_discount_percentage=  0;
					$community_discount_val=  0;
				}

				$userData = [

					'customer_id' => $this->input->post('customer_id'),

					'total_price' => $this->input->post('total_price'),

					'tab' => $this->input->post('tab'),
					'sub_total_amount' => $this->input->post('sub_total_amount'),
					
					'order_txn' => $order_txn,

					'shipping_fee' => $this->input->post('shipping_price'),
					'community_discount_percentage' => $community_discount_percentage,
					'community_discount_val' => $community_discount_val,
					'consignment_date' => $consignment_date,
					'city' => $city ,
					'appartment' => $appartment,
					'created_at' => $date,
					'is_gated_community' => $is_gated_community,

				];



				$orderId = $this->um->insertData("tbl_order",$userData);

				if($this->input->post('check') == 1)
				{

					$customerdata = [

					'order_id' => $orderId,

					'customer_id' => $this->input->post('customer_id'),

					'postal_code1' => $this->input->post('postal_code'),

					'town_mandal1' => $this->input->post('town_mandal'),

					'city1' => $city,

					'district1' => $this->input->post('district'),

					'customer_name1' => $this->input->post('customer_name'),

					'state1' => $this->input->post('state'),

					'last_name1' => $this->input->post('last_name'),

					'mobile_number1' => $this->input->post('mobile_number'),

					'email1' => $this->input->post('email'),

					'address11' => $this->input->post('address1'),

					'address22' => $this->input->post('address2'),


					'pc' => $this->input->post('postal_code1'),

					'tm' => $this->input->post('town_mandal1'),

					'cy' => $this->input->post('city1'),

					'dist' => $this->input->post('district1'),

					'fname' => $this->input->post('customer_name1'),

					'st' => $this->input->post('state1'),

					'lname' => $this->input->post('last_name1'),

					'ph' => $this->input->post('mobile_number1'),

					'em' => $this->input->post('email1'),

					'ad1' => $this->input->post('address11'),

					'ad2' => $this->input->post('address22'),

					'block' => $block,
					'block1' => $block,
					'appartment' => $appartment,
					'flat_no' => $flat_no,

	                'created_at' => $date
					
	

				];

				}else {

					
					$customerdata = [

					'order_id' => $orderId,

					'customer_id' => $this->input->post('customer_id'),

					'postal_code1' => $this->input->post('postal_code'),

					'town_mandal1' => $this->input->post('town_mandal'),

					'city1' => $city,

					'district1' => $this->input->post('district'),

					'customer_name1' => $this->input->post('customer_name'),

					'state1' => $this->input->post('state'),

					'last_name1' => $this->input->post('last_name'),

					'mobile_number1' => $this->input->post('mobile_number'),

					'email1' => $this->input->post('email'),

					'address11' => $this->input->post('address1'),

					'address22' => $this->input->post('address2'),

	                'block' => $block,
	                'block1' => $block,
					'appartment' => $appartment,
					'flat_no' => $flat_no,

	                'created_at' => $date
				];

				}



				$customerId = $this->um->insertData("tbl_order_address",$customerdata);





				$cwhr = [

					'customer_id' => $this->input->post('customer_id'),

					'order_status' => 0

				];



				$order_status = ['order_status' => $orderId];



				$customercartId = $this->um->updateData("tbl_cart",$order_status, $cwhr);


	
			if($orderId > 0){



				$order = $this->um->cartItemDetails('tbl_cart c',['order_status' => $orderId])->result_array();



				if(count($order) > 0){

					for ($i=0; $i < count($order); $i++) { 



						$products = $this->um->ProdcutDetails("tbl_products",['product_id' =>$order[$i]['product_id']])->row_array();

								

								// $quantity = $products['stock'] - $order[$i]['quantity'];

								$outward = $products['outward'] + $order[$i]['quantity'];

								$whr = ['product_id' => $order[$i]['product_id']];



								$product = [

									// 'product_quantity' => $quantity,

									'outward' => $outward

								];

								

								$productId = $this->um->updateData("tbl_products",$product,$whr);

					}

				}

        $customer = $this->um->CustomerDetails('tbl_customer',['customer_id' => $this->input->post('customer_id')])->row_array();

        $orderpro = $this->um->cartItemDetails('tbl_cart c',['order_status' => $orderId])->result_array();

        $orderlist = $this->um->getorderData("tbl_order",['order_id' => $orderId]);

        $address = $this->um->OrderAddress('tbl_order_address',['order_id' => $orderId])->row_array();

		$block = $address['block'];
		$appartment = $address['appartment'];
		$flat_no = $address['flat_no'];
		
        $floor1 = $address['address11'];
		$home_type1 = $address['address22'];
		$street1 = $address['street1'];
		$postal_code1 = $address['postal_code1'];
		$block1 = $address['block1'];
		$land_mark1 = $address['land_mark1'];
		$customer_name1 = $address['customer_name1'];
		$last_name1 = $address['last_name1'];
		$mobile_number1 = $address['mobile_number1'];
		$email1 = $address['email1'];
		$town_mandal1 = $address['town_mandal1'];
		$city1 = $address['city1'];
		$district1 = $address['district1'];
		$state1 = $address['state1'];

		if($address['fname'] == '') {
           $fname = $address['customer_name1'];
		}else  {
           $fname = $address['fname'];
		}

		if($address['lname'] == '') {
           $lname = $address['last_name1'];
		}else  {
           $lname = $address['lname'];
		}

		if($address['em'] == '') {
           $em = $address['email1'];
		}else  {
           $em = $address['em'];
		}

		if($address['ph'] == '') {
           $ph = $address['mobile_number1'];
		}else  {
           $ph = $address['ph'];
		}

		if($address['ad1'] == '') {
           $ad1 = $address['address11'];
		}else  {
           $ad1 = $address['ad1'];
		}

		if($address['ad2'] == '') {
           $ad2 = $address['address22'];
		}else  {
           $ad2 = $address['ad2'];
		}

		if($address['tm'] == '') {
           $tm = $address['town_mandal1'];
		}else  {
           $tm = $address['tm'];
		}

		if($address['cy'] == '') {
           $cy = $address['city1'];
		}else  {
           $cy = $address['cy'];
		}

		if($address['dist'] == '') {
           $dist = $address['district1'];
		}else  {
           $dist = $address['dist'];
		}

		if($address['st'] == '') {
           $st = $address['state1'];
		}else  {
           $st = $address['st'];
		}

		if($address['pc'] == '') {
           $pc = $address['postal_code1'];
		}else  {
           $pc = $address['pc'];
		}

			$total_price = $this->input->post('total_price');
			
			$shipping_fee = $this->input->post('shipping_price');
			
			
			if($is_gated_community==1)
			{
				$community_discount_percentage = $this->input->post('community_discount_percentage');
				$community_discount_val = $this->input->post('community_discount_val');
			
			}
			else
			{
				$community_discount_percentage = 0;
				$community_discount_val = 0;
			
			}
			
			
			$sub_total = $this->input->post('sub_total_amount');
					
			
			$tab = ($this->input->post('tab') == "Pay") ? "Paid" : $this->input->post('tab');
			$tot = $total_price;
			// $product_name = $orderpro['product_name'];
			// $price = $orderpro['price'];
			// $quantity = $orderpro['quantity'];
			$email = $customer['email'];
			$order_txn = $orderlist['order_txn'];
			$datadate = date('M d Y',strtotime($orderlist['created_at']));
			$to = $email;
            $subject = 'Welcome To Yellowmango';
			
			$name =   $customer_name1.' '. $last_name1;
			$message_line1 = '<p>Hi '. $name.', <br/>
					 Your order is Confirmed. Please Check the invoice details below. </p>';
					 
			$message_line2 = '<p>Hi, <br/>
					 New Order has been Placed on yellowmango.in.  Please Check the invoice details below. </p>';
					 
			$message = '
					<div class="content" id="root">
					  <div class="container">
							<div style="max-width:900px; margin: auto;" style="padding: 25px;">
					  <div style="padding: 25px 20px">
							<div class="logo" style="display: flex;">
						  <div class="img_logo" style="width: 55%;">
								  <img style="height: 80px;width:  180px;" src="https://yellowmango.in/assets2/images/yellowmango_from_scratch/Logo/yellowmango.png">
							  </div>
							  <div class="com_address" style="width: 45%;">
								  <div class="list1">
									  <ul style="list-style-type: none;padding: 0px;">
										  <li><b>YellowMango</b></li>
											  <li>Mogallur [V], Gudlur [M],</li>
											  <li>Prakasam [Dt],</li>
											  <li>Andhra Pradesh,</li>
											  <li>India -523115</li>
									  </ul>
								  </div>
							  </div>          
							</div>
							<div class="cust_address" style="display: flex;margin-bottom: 20px;">
							  <div class="list2" style="width: 55%;">
								  <h1 style="font-size: 18px">INVOICE</h1>
								  <div class="list2">';
								  
									
								  if( $is_gated_community == "1")
								  {
									
									$content = '<li style="list-style-type: none;">'.$name.'</li>';
									$content .= '<li style="list-style-type: none;">'.$flat_no.', '.$block.' </li>';
									$content .= '<li style="list-style-type: none;">'.$appartment.' </li>';
									$content .= '<li style="list-style-type: none;">'.$cy.' </li>';
									$content .= '<li style="list-style-type: none;">'.$pc.' </li>';
									$content .= '<li style="list-style-type: none;">Phone: '.$ph.' </li>';
									$content .= '<li style="list-style-type: none;">Email: '.$em.' </li>';
								  }
								  else
								  {				
									$content = '<li style="list-style-type: none;">'.$name.'</li>';
									$content .= '<li style="list-style-type: none;">'.$tm.' </li>';
									$content .= '<li style="list-style-type: none;">'.$ad1.' </li>';
									$content .= '<li style="list-style-type: none;">'.$ad2.' </li>';
									$content .= '<li style="list-style-type: none;">'.$pc.' </li>';
									$content .= '<li style="list-style-type: none;">Phone: '.$ph.' </li>';
									$content .= '<li style="list-style-type: none;">Email: '.$em.' </li>';
								  }			  
									 
								$message .= '<ul class="data1" style="list-style-type: none;padding: 0px !important; margin-left: 0px;">'.$content.'</ul>
								  </div>
							  </div>
							  <div class="list3" style="width: 45%; padding-top: 50px;">
								  <ul class="data2" style="padding-left: 0px">
										  <li style="list-style-type: none;">Invoice Number: <b>'.$orderId.'</b></li>
										  <li style="list-style-type: none;">Invoice Date: <b>'.date('d M, Y', strtotime($datadate)).'</b></li>
										  <li style="list-style-type: none;">Order Number: <b>'.$order_txn.'</b></li>
										  <li style="list-style-type: none;">Order Date: <b>'.date('d M, Y', strtotime($datadate)).'</b></li>
										  <li style="list-style-type: none;">Payment Method: <b>'.$tab.'
										  </b>

										  </li>
									  </ul>
							  </div>
							</div>
						

						<div>
							<table class="container order-table table" style="width: 100%">
								<thead style="background-color: #96588b !important; color: #fff !important">
									<tr class="row1" style="background-color: #96588b; border-bottom: 1px solid #ccc;">
										<th style="background-color: green;background: #000;color: #fff;padding: 12px 5px;text-align: left; color: #fff;">Product</th>
										<th style="background-color: green;background: #000;color: #fff;padding: 12px 5px; text-align: left; color: #fff">Quantity</th>
										<th style="background-color: green;background: #000;color: #fff;padding: 12px 5px;text-align: left; color: #fff">Price</th>
									</tr>
								</thead>';
							  
								if(count($orderpro)!=0)
								{
								  for($j=0;$j<count($orderpro);$j++)
								  {
								
								   $message .= ' <tbody>
										<tr>
											<td style="border-bottom: 1px solid #ccc;padding: 10px 5px;width: 60%;">'.$orderpro[$j]['product_name'].' - 5KG
												<br /><span style="font-size: 12px; margin: 10px 0px;">Weight: 5kg</span>
											</td>
											<td style="border-bottom: 1px solid #ccc;padding: 10px 5px;">'.$orderpro[$j]['quantity'].'</td>
											<td style="border-bottom: 1px solid #ccc;padding: 10px 5px;">₹'.number_format($orderpro[$j]['price'],2).'</td>
										</tr>
									</tbody>';
									}
								 } 
								 
							$message .= '</table>
						</div>
						<div class="cart_sub" style="text-align: end;margin-top: 15px;margin-left: 60%;">
						  <div class="subb" style="display: flex;justify-content: end;border-top: 1px solid #ccc;border-bottom: 1px solid #ccc; padding: 5px 0px; margin: 0px !important;">
							<span style="text-align: left;width:50%"><b>Sub Total</b></span>
							<span style="text-align: right;width:50%">₹ '.number_format($sub_total,2).'</span>
						  </div>

						  <div class="subb" style="border-top: 1px solid #ccc;padding: 10px 0px;display: flex;justify-content: end;border-bottom: 1px solid #000;align-items: center;">
							<span style="text-align: left;width:50%"><b>Shipping</b></span>
							<span style="text-align: right;width:50%">';
								if($shipping_fee == '0' || $shipping_fee == ' ') 
								{
									$shipping_fee = 'FREE SHIPPING';
								}
								$message .='₹ '. $shipping_fee;
							$message .= '</span>
						  </div>';
						  
						  if($is_gated_community==1)
						  {
						  $message .= '<div class="subb" style="border-top: 1px solid #ccc;padding: 10px 0px;display: flex;justify-content: end;border-bottom: 1px solid #000;align-items: center;">
							<span style="text-align: left;width:50%"><b>Community Discount :</b></span>
							<span style="text-align: right;width:50%">₹ '.
							 $community_discount_val.'</span>
						  </div>';
						  }
						  
						  $message .= '<div class="subb mainn" style="display: flex;justify-content: end;border-top: 2px solid #000; border-bottom: 2px solid #000;">
							<span style="text-align: left;width:50%"><b>Total</b></span>
							<span style="text-align: right;width:50%">₹ '.number_format($tot,2).'</span>
						  </div>
						</div>
					  </div>
					</div>
					  </div>
					</div>
			
			<center><p style="font-size: 20px;">https://yellowmango.in/home/invoice/'.$orderId.'</p></center>';
			
            $message .= "<hr>";
            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            //$headers .= "mail2yellowmango@gmail.com";
            // send email
			
			$message_sent = $message_line1;
			$message_sent .= $message;
			
            $message .= "<hr>";
            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
           // $headers .= "mail2yellowmango@gmail.com";
            // send email
            if(mail($to, $subject, $message_sent, $headers)){
			}else{
			}

		     $too = "mail2yellowmango@gmail.com";
		    // $too = "priyadev7861@gmail.com";
            $subject = 'Welcome Yellowmango';
           
		    $message_sent = $message_line2;
			$message_sent .= $message;
			
			
            $message .= "<hr>";
            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            //$headers .= "mail2yellowmango@gmail.com";
            // send email
            if(mail($too, $subject, $message_sent, $headers)){
			}
			else
			{
			}

			$this->session->set_flashdata('success_msg',  "Order Placed Successfully.");

			   redirect('home/thankyou/'.$orderId);

			}else{



				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");

				redirect('home/thankyou/'.$orderId);

			}



	}



	public function thankyou($orderId = NULL)

	{

		$data['page_title'] = "Thankyou";

		$data['orderId'] = $orderId;

		$data['cartitems'] = $this->um->cartItemDetails('tbl_cart c',['c.customer_id' => $this->session->userdata('customer_id'), 'order_status' => 0])->result_array();

		$data['carti'] = count($data['cartitems']);

		$data['orderlist'] = $this->um->getorderData("tbl_order",['order_id' => $orderId]);

		$data['daily'] = $this->um->DailyCitiesDetails('tbl_daily_cities',[]);

		$data['weekly'] = $this->um->WeeklyCitiesDetails('tbl_weekly_cities',[]);

		$data['days'] = $this->um->getDays('tbl_days',['status' => 1]);

		$data['time'] = $this->um->getTime('tbl_time',['status' => 1]);

		$data['timess'] = $this->um->getTime('tbl_time',['status' => 2]);

		$data['scroll'] = $this->um->getScroll('tbl_scroll',[]);

		$data['areas'] = $this->um->AreaDetails('tbl_shipping_charges',['status' => 1]);

		$this->settemplate->front("thankyou",$data);

	}



	public function myaccount()

	{
		if($this->session->userdata('customer_id') == ''){
			redirect("userlogin/index/0/0/0");

		}else {

			$data['page_title'] = "My Account Page";

		$data['cartitems'] = $this->um->cartItemDetails('tbl_cart c',['c.customer_id' => $this->session->userdata('customer_id'),'c.order_status' => 0])->result_array();

		$data['carti'] = count($data['cartitems']);

		





		$orderProducts = [];

		$order = $this->um->orderDetails("tbl_order o",['o.customer_id' => $this->session->userdata('customer_id')]);

		if($order->num_rows() > 0){

			foreach ($order->result() as $key => $ord) {

				$cartItems = $this->um->cartItemDetails("tbl_cart c",['c.order_status' => $ord->order_id]);

				array_push($orderProducts, array('order_txn' => $ord->order_txn,'shipping_fee' => $ord->shipping_fee,'created_at' => $ord->created_at, 'delivery_date' => $ord->delivery_date, 'total_price' => $ord->total_price, 'cartData' => $cartItems));

			}

		}

		$data['orderData'] = $orderProducts;

		$data['daily'] = $this->um->DailyCitiesDetails('tbl_daily_cities',[]);

		$data['weekly'] = $this->um->WeeklyCitiesDetails('tbl_weekly_cities',[]);

		$data['customers'] = $this->um->CustomerDetails('tbl_customer',['customer_id' => $this->session->userdata('customer_id')])->row_array();

		$data['days'] = $this->um->getDays('tbl_days',['status' => 1]);

		$data['time'] = $this->um->getTime('tbl_time',['status' => 1]);

		$data['timess'] = $this->um->getTime('tbl_time',['status' => 2]);

		$data['scroll'] = $this->um->getScroll('tbl_scroll',[]);

		$data['areas'] = $this->um->AreaDetails('tbl_shipping_charges',['status' => 1]);

		$this->settemplate->front("myorders",$data);

		}

	}



	public function getTotalStstessList()

	{

		$response = array();

		$response['cartitems'] =  $this->um->cartItemDetailsData("tbl_cart c",['c.customer_id' => $this->session->userdata('customer_id'), 'c.order_status' => 0])->result_array();



		$this->load->view('test', $response);

		// $this->load->view('testcart', $response);

		

		// echo json_encode($response);

	}



	public function getTotalStstessDatatataList()

	{

		$response = array();

		$response['cartitems'] =  $this->um->cartItemDetailsData("tbl_cart c",['c.customer_id' => $this->session->userdata('customer_id'), 'c.order_status' => 0])->result_array();



		// $this->load->view('test', $response);

		$this->load->view('testcart', $response);

		

		// echo json_encode($response);

	}



	public function getTotalDatatcartItemList()

	{

		$response = array();

		$response['cartitems'] =  $this->um->cartItemDetailsData("tbl_cart c",['c.customer_id' => $this->session->userdata('customer_id'), 'c.order_status' => 0])->result_array();



		// $this->load->view('test', $response);

		$this->load->view('testcart', $response);

		

		// echo json_encode($response);

	}





	public function changeCountry()

	{

		$response = array();



		$customer_id = $this->input->post('customer_id');

		$product_id = $this->input->post('product_id');

		// $quantity = $this->input->post('quantity');



		$products = $this->um->PriceDetails('tbl_price',['product_id' => $this->input->post('product_id')])->result_array();



		$productsdata = $this->um->ProdcutDetails('tbl_products',['product_id' => $cart['product_id']])->row_array();



		if(($productsdata['stock']-$productsdata['outward']) >= $this->input->post('quantity')) {



			// echo "one";



			if(count($products) > 0) {

			for ($i=0; $i < count($products); $i++) { 

			$price = 0;

			if($this->input->post('quantity') == 1 || $this->input->post('quantity') == 2) {

				$quantity = $this->input->post('quantity');

			    $price = $products[0]['price'];

           }else if($this->input->post('quantity') == 3 || $this->input->post('quantity') == 4) {

           	   $quantity = $this->input->post('quantity');

               $price = $products[1]['price'];

            }else {

              $quantity = $this->input->post('quantity');

              $price = $products[2]['price'];

            }

				

			}

		}



		$updatecart =  [

			'quantity' => $quantity, 

		    'price' => $price,

		    'customer_id' => $customer_id,

		    'product_id' => $product_id

		];



		$updateId = $this->um->insertData('tbl_cart',$updatecart);



		if($updateId > 0){

			$response['status'] = "pass";

		}else{

			$response['status'] = "fail";

		}



		}else {

           $response['status'] = "fail";

		}

		echo  json_encode($response);

	}





	public function getTotalProductsdta()

	{

		$response = array();

		$cartProducts = [];

		if($brands->num_rows() > 0){

			foreach ($brands->result() as $key => $bnd) {

				$prod = $this->um->cartItemDetails("tbl_cart c",['c.product_id' => $bnd->product_id, 'c.customer_id' => $this->session->userdata('customer_id'), 'c.order_status' => 0])->result_array();

				$sizes = $this->um->PriceDetails("tbl_price",['product_id' => $bnd->product_id])->result_array();

				array_push($cartProducts, array('stock' => $bnd->stock, 'product_id' => $bnd->product_id, 'outward' => $bnd->outward, 'product_id' => $bnd->product_id, 'min_max_price' => $bnd->min_max_price, 'product_image' => $bnd->product_image, 'product_name' => $bnd->product_name, 'carts' => $prod, 'sizes' => $sizes));

			}

		}

		// $data['cProducts'] = $cartProducts;

		$response['cProducts'] =  $cartProducts;



		// $this->load->view('test', $response);

		$this->load->view('testhome', $response);

		

		// echo json_encode($response);

	}

	

	

	public function getEmail()

	{

		$response = array();

		$checkUser = $this->um->getUserName("tbl_customer", $this->input->post('email'));

			if ($checkUser != "") {

				$response['res'] = "pass";

			   $response['customer_name'] = $checkUser;

			}else{

				$response['res'] = "fail";		

	      	}

	echo json_encode($response);

	}





	public function getMobileNumber()

	{

		$response = array();

		$checkUser = $this->um->getUserMobile("tbl_customer", $this->input->post('mobile_number'));

			if ($checkUser != "") {

				$response['res'] = "pass";

			   $response['customer_name'] = $checkUser;

			}else{

				$response['res'] = "fail";		

	      	}

	echo json_encode($response);

	}


	public function updateprofile($customer_id)
	{
		$this->form_validation->set_rules('customer_name','Customer Name', 'trim|required');
		$this->form_validation->set_rules('mobile_number', 'Mobile Number','trim|required');
		$this->form_validation->set_rules('email', 'E-Mail', 'trim|required');
		$this->form_validation->set_rules('last_name','Last Name', 'trim|required');
		$this->form_validation->set_rules('postal_code', 'Postal Code','trim|required');
		$this->form_validation->set_rules('town_mandal', 'Town/Mandal', 'trim|required');
		$this->form_validation->set_rules('city', 'City', 'trim|required');
		$this->form_validation->set_rules('district', 'District', 'trim|required');
		if ($this->form_validation->run() == FALSE)
		{	
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
			$this->myaccount();
		}		
		else	
		{
			$date = date('Y-m-d H:i:s');

			$whr = ['customer_id' => $customer_id];
			
			$userData = [
				'customer_name' => $this->input->post('customer_name'),
				'last_name' => $this->input->post('last_name'),
				'mobile_number' => $this->input->post('mobile_number'),
				'email' => $this->input->post('email'),
				'town_mandal' => $this->input->post('town_mandal'),
				'city' => $this->input->post('city'),
				'district' => $this->input->post('district'),
				'postal_code' => $this->input->post('postal_code'),
				'state' => $this->input->post('state'),
				'address1' => $this->input->post('address1'),
				'address2' => $this->input->post('address2')
			];

			$userId = $this->um->updateData("tbl_customer",$userData,$whr);

			if($userId > 0){

			$this->session->set_flashdata('success_msg',  "Profile Updated Successfully Completed.");
			    redirect('home/myaccount');
			}else{

				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
				redirect('home/myaccount');
			}
			
		}
	}


	public function changepassword()
	{
		$data['page_title'] = "ForgotPassword Page";

		$data['cartitems'] = $this->um->cartItemDetails('tbl_cart c',['c.customer_id' => $this->session->userdata('customer_id'),'order_status' => 0])->result_array();

		$data['carti'] = count($data['cartitems']);

		$data['daily'] = $this->um->DailyCitiesDetails('tbl_daily_cities',[]);

		$data['weekly'] = $this->um->WeeklyCitiesDetails('tbl_weekly_cities',[]);

		$data['days'] = $this->um->getDays('tbl_days',['status' => 1]);

		$data['time'] = $this->um->getTime('tbl_time',['status' => 1]);

		$data['timess'] = $this->um->getTime('tbl_time',['status' => 2]);

		$data['scroll'] = $this->um->getScroll('tbl_scroll',[]);

		$data['areas'] = $this->um->AreaDetails('tbl_shipping_charges',['status' => 1]);

		$this->settemplate->front("changepassword",$data);
	}


	public function forgotpassword()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		if ($this->form_validation->run() == FALSE)
		{	
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
			$this->changepassword();
		}		
		else	
		{

			$email = $this->input->post('email');

			$customer = $this->um->userLoginData2342("tbl_customer",['email' => $email]);
			$customer_id = $customer['customer_id'];

			$to = $this->input->post('email');
            $subject = 'Welcome Yellow Mango';
            $message = "<div class='col-md-12'><div class='row'><div class='col-md-9'><h1>Please complete your password reset</h1><br><h4>Hi,<br>There was a request to reset the password on your account. If you requested this password reset, please set a new password by clicking the link below:</h4><br><p>http://yellowmango.in/home/resetpassword/$customer_id</p><br><h5>If you did not make this request, please disregard this email.</h5><h2>Regards,<br>Your Yellow Mango Team<br><a href='http://yellowmango.in'>Yellowmango.com</a></h2></div></div></div>";
            $message .= "<hr>";
            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            // $headers .= "sesetti9999@gmail.com";
            // send email
            if(mail($to, $subject, $message, $headers)){
            	$this->session->set_flashdata('success_msg',  "Mail sent Successfully   Please check for Inbox or Spam.");
            	redirect('userlogin/index/0/0/0');
			}else{
				$this->session->set_flashdata('error_msg',  "Failed, Something went wrong.");
				redirect('userlogin/index/0/0/0');
			}
			
		}
	}


	public function resetpassword($customer_id)
	{
		$data['page_title'] = "Reset Password Page";
		$data['daily'] = $this->um->DailyCitiesDetails('tbl_daily_cities',[]);

		$data['weekly'] = $this->um->WeeklyCitiesDetails('tbl_weekly_cities',[]);
		$data['customers'] = $this->um->userLoginData2342("tbl_customer",['customer_id' => $customer_id]);

		$data['days'] = $this->um->getDays('tbl_days',['status' => 1]);

		$data['time'] = $this->um->getTime('tbl_time',['status' => 1]);

		$data['timess'] = $this->um->getTime('tbl_time',['status' => 2]);

		$data['scroll'] = $this->um->getScroll('tbl_scroll',[]);

		$data['areas'] = $this->um->AreaDetails('tbl_shipping_charges',['status' => 1]);

		$this->settemplate->front("resetpassword",$data);
	}

	public function reset($customer_id)
	{
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'required|matches[password]');
		if ($this->form_validation->run() == FALSE)
		{	
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
			$this->resetpassword($customer_id);
		}		
		else	
		{
			$whr = ['customer_id' => $this->input->post('customer_id')];
			$studentData = [
				'password' => md5($this->input->post('password')),
			];
			$studentId = $this->um->updateData("tbl_customer",$studentData,$whr);
           
			if($studentId > 0){
				$this->session->set_flashdata('success_msg',  "New Password Inserted Successfully.");
				redirect('userlogin/index/0/0/0');
			}else{
				$this->session->set_flashdata('error_msg',  "Failed, Something went wrong.");
				redirect('home/resetpassword/'.$this->input->post('customer_id'));
			}
			
		}
	}


	public function changeCheck()

	{

		$response = array();



		$cart_id = $this->input->post('cart_id');

		$check = $this->input->post('check');

		



		$cart = $this->um->cartItemDetails('tbl_cart c',['c.cart_id' =>  $this->input->post('cart_id')])->row_array();

		$gift = $this->um->getGift('tbl_gift',[])->row_array();



		if($cart['check'] == 0) {


		$updatecart =  [

			'check' => 1,

			'gift' => $gift['gift_price']

		];



		$whr = ['cart_id' => $cart_id];

		$updateId = $this->um->updateData('tbl_cart',$updatecart, $whr);

	}else {


		$updatecart =  [

			'check' => 0,

			'gift' => 0

		];



		$whr = ['cart_id' => $cart_id];

		$updateId = $this->um->updateData('tbl_cart',$updatecart, $whr);

	}



		if($updateId > 0){

			$response['status'] = "pass";

		}else{

			$response['status'] = "fail";

		}

		

		echo  json_encode($response);

	}

	

	public function insertReview($product_id)
	{
		$date = date('Y-m-d H:i:s');
			$studentData = [
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'comment' => $this->input->post('comment'),
				'review' => $this->input->post('rate'),
				'product_id' => $this->input->post('product_id'),
				'created_at' => $date
			];
			$studentId = $this->um->insertData("tbl_review",$studentData);
           
			if($studentId > 0){
				$this->session->set_flashdata('success_msg',  "New Password Inserted Successfully.");
				redirect('home/product_details/'.$product_id);
			}else{
				$this->session->set_flashdata('error_msg',  "Failed, Something went wrong.");
				redirect('home/product_details/'.$product_id);
			}
	}


	public function insertshopcart()

	{

		$product_id = $this->input->post('product_id');

		$quantity = $this->input->post('quantity');

		$price = $this->input->post('price');

		$productsdata = $this->um->ProdcutDetails('tbl_products',['product_id' => $product_id ])->row_array();

		

		if(($productsdata['stock']-$productsdata['outward']) >= $this->input->post('quantity')) {



			    if($this->session->userdata('customer_id') == ''){

                    redirect('userlogin/index/'.$product_id.'/'.$quantity.'/'.$price);



			    }else {





					$date = date('Y-m-d H:i:s');

						

						$userData = [

							'customer_id' => $this->input->post('customer_id'),

							'product_id' => $product_id,

							'quantity' => $this->input->post('quantity'), 

							'order_status' => 0,

							'price' => $this->input->post('price'),

			                'created_at' => $date

						];



						$userId = $this->um->insertData("tbl_cart",$userData);



			    }



		}else {

	           $this->session->set_flashdata('error_msg',  "Out Of Stock...");

				redirect('home/shop');

			}




			if($userId > 0){



			$this->session->set_flashdata('success_msg',  "Cart Item Added Successfully.");

			    redirect('home/shop');

			}else{



				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");

				redirect('home/shop');

			}


	redirect('home/shop');

}

    public function payment()

	{

		$data['page_title'] = "Orders";

		$data['from_date'] = '';
		$data['to_date'] = '';

		$data['orders'] = $this->um->OrderDetails('tbl_order o',[]);

		$data['areas'] = $this->um->AreaDetails('tbl_shipping_charges',['status' => 1]);

		$this->settemplate->dashboard("orders/index",$data);

	}


	public function ccavRequestHandler()
	{
		
	
		
		$is_gated_community = 0;
		if(!empty($this->input->post('is_gated_community')))
		{
			$is_gated_community  = 1;
		}
		
		
		if($this->input->post('tab') == 'Pay Now'){

		
		$customer_id = $this->input->post('customer_id');
		$total_price = $this->input->post('total_price');
		$sub_total_amount = $this->input->post('sub_total_amount');
		$check = $this->input->post('check');
		
		$postal_code = $this->input->post('postal_code');
		$town_mandal = $this->input->post('town_mandal');
		$city = $this->input->post('city');
		
		
		$district = $this->input->post('district');
		$customer_name = $this->input->post('customer_name');
		$state = $this->input->post('state');
		$last_name = $this->input->post('last_name');
		$mobile_number = $this->input->post('mobile_number');
		$email = $this->input->post('email');
		$address1 = $this->input->post('address1');
		$address2 = $this->input->post('address2'); 
		$tab = $this->input->post('tab'); 
		$shipping_fee = $this->input->post('shipping_price');
		
		$postal_code1 = $this->input->post('postal_code1');
		$town_mandal1 = $this->input->post('town_mandal1');
		$city1 = $this->input->post('city1');
		$district1 = $this->input->post('district1');
		$customer_name1 = $this->input->post('customer_name1');
		$state1 = $this->input->post('state1');
		$last_name1 = $this->input->post('last_name1');
		$mobile_number1 = $this->input->post('mobile_number1');
		$email1 = $this->input->post('email1');
		$address11 = $this->input->post('address11');
		$address22 = $this->input->post('address22');

		if($is_gated_community==1)
		{
			if($this->input->post('appartment')!="")
			{
				$raw = explode("-",$this->input->post('appartment'));
				$appartment = $raw[1];
			}
			else
			{
				$appartment ="";
			}

			
			$block =  $this->input->post('block');
			$flat_no =  $this->input->post('flat_no');
			$consignment_date=  $this->input->post('consignment_date');
			$community_discount_percentage=  $this->input->post('community_discount_percentage');
			$community_discount_val=  $this->input->post('community_discount_val');

		}
		else
		{
			$appartment = "";
			
			$block =  "";
			$flat_no =  "";
			$consignment_date=  "";
			$community_discount_percentage=  0;
			$community_discount_val=  0;
		}
		
       
       


		$dgtd = $this->input->post('total_price');

		
		?>
		<style type="text/css">
			.razorpay-payment-button {
				background-color: green;
				color: red
			}

			*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font-family: 'Nunito', sans-serif;
  color: #384047;
}

form {
  max-width: 300px;
  margin: 10px auto;
  padding: 10px 20px;
  background: #f4f7f8;
  border-radius: 8px;
}

h1 {
  margin: 0 0 30px 0;
  text-align: center;
}

input[type="text"],
input[type="password"],
input[type="date"],
input[type="datetime"],
input[type="email"],
input[type="number"],
input[type="search"],
input[type="tel"],
input[type="time"],
input[type="url"],
textarea,
select {
  background: rgba(255,255,255,0.1);
  border: none;
  font-size: 16px;
  height: auto;
  margin: 0;
  outline: 0;
  padding: 15px;
  width: 100%;
  background-color: #e8eeef;
  color: #8a97a0;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 30px;
}

input[type="radio"],
input[type="checkbox"] {
  margin: 0 4px 8px 0;
}

select {
  padding: 6px;
  height: 32px;
  border-radius: 2px;
}

.razorpay-payment-button {
  padding: 19px 39px 18px 39px;
  color: #FFF;
  background-color: #4bc970;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  width: 100%;
  border: 1px solid #3ac162;
  border-width: 1px 1px 3px;
  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
  margin-bottom: 10px;
}

fieldset {
  margin-bottom: 30px;
  border: none;
}

legend {
  font-size: 1.4em;
  margin-bottom: 10px;
}

label {
  display: block;
  margin-bottom: 8px;
}

label.light {
  font-weight: 300;
  display: inline;
}

.number {
  background-color: #5fcf80;
  color: #fff;
  height: 30px;
  width: 30px;
  display: inline-block;
  font-size: 0.8em;
  margin-right: 4px;
  line-height: 30px;
  text-align: center;
  text-shadow: 0 1px 0 rgba(255,255,255,0.2);
  border-radius: 100%;
}

@media screen and (min-width: 480px) {

  form {
    max-width: 480px;
  }

}

		</style>

       <link rel="stylesheet" href="https://codepen.io/gymratpacks/pen/VKzBEp#0">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
        <div class="row" style="margin-top: 100px;">
    <div class="col-md-12">
		<form method="post" name="redirect" action="<?=base_url();?>home/placeorder"> 

			<h1> Pay Now </h1>
			<fieldset>

        <label for="name">Customer Name:</label>
          <input type="text" id="name" name="user_name" value="<?php echo $this->input->post('customer_name');?>" readonly>
        
          <label for="email">Total Price:</label>
          <input type="text" id="mail" name="user_email" value="<?php echo $this->input->post('total_price');?>" readonly>
      </fieldset>
		 <script
            src="https://checkout.razorpay.com/v1/checkout.js"
            data-key="rzp_live_Q4wXI9mMI52eER" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys // test key  : rzp_test_r47kAZtLouDfT3,  rzp_live_Q4wXI9mMI52eER
            data-amount="<?php echo $dgtd * 100;?>" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.
            data-currency="INR"//You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
            data-id="<?php echo "ORDER".time();?>"//Replace with the order_id generated by you in the backend.
            data-buttontext="Pay Now"
            data-button.color="background-color: green; color: red;"
            data-name="Yellow Mango"
            data-description="A Wild Sheep Chase is the third novel by Japanese author Haruki Murakami"
            data-image="<?=base_url();?>assets2/images/yellowmango_from_scratch/Logo/yellowmango.png"
            data-prefill.name="<?php echo $this->input->post('customer_name');?>"
            data-prefill.email="<?php echo $this->input->post('email');?>"
            data-prefill.mobile="<?php echo $this->input->post('mobile_number');?>"
            data-prefill.customer_id="<?php echo $this->input->post('customer_id');?>"
            data-prefill.total_price="<?php echo $dgtd;?>"
            data-theme.color="#F37254"
        ></script>

        
        <!-- <input type=text name=customer_id class=form-control value=<?php echo $this->input->post('customer_name');?>> -->
        <?php
					
		echo "<input type=hidden name=customer_id value=$customer_id>";
		echo "<input type=hidden name=total_price value=$total_price>";
		echo "<input type=hidden name=sub_total_amount value=$sub_total_amount>";
		echo "<input type=hidden name=check value=$check>";
		echo "<input type=hidden name=postal_code1 value='$postal_code1'>";
		echo "<input type=hidden name=town_mandal value='$town_mandal1'>";
		echo "<input type=hidden name=city1 value=$city1>";
		echo "<input type=hidden name=district1 value=$district1>";
		echo "<input type=hidden name=customer_name1 value='$customer_name'>";
		echo "<input type=hidden name=state1 value='$state1'>";
		echo "<input type=hidden name=last_name1 value='$last_name'>";
		echo "<input type=hidden name=mobile_number1 value=$mobile_number1>";
		echo "<input type=hidden name=email1 value=$email1>";
		echo "<input type=hidden name=address11 value='$address11'>";
		echo "<input type=hidden name=address22 value='$address22'>";
		echo "<input type=hidden name=postal_code value=$postal_code>";
		echo "<input type=hidden name=town_mandal value='$town_mandal'>";
		echo "<input type=hidden name=city value='$city'>";
		echo "<input type=hidden name=district value='$district'>";
		echo "<input type=hidden name=customer_name value='$customer_name'>";
		echo "<input type=hidden name=state value='$state'>";
		echo "<input type=hidden name=last_name value='$last_name'>";
		echo "<input type=hidden name=mobile_number value=$mobile_number>";
		echo "<input type=hidden name=email value=$email>";
		echo "<input type=hidden name=address1 value='$address1'>";
		echo "<input type=hidden name=address2 value='$address2'>";
		echo "<input type=hidden name=tab value=$tab>";
		echo "<input type=hidden name=shipping_price value=$shipping_fee>";
		echo "<input type=hidden name=appartment value='$appartment'>";
		echo "<input type=hidden name=block value='$block'>";
		echo "<input type=hidden name=flat_no value='$flat_no'>";
		echo "<input type=hidden name=consignment_date value='$consignment_date'>";
		echo "<input type=hidden name=community_discount_val value='$community_discount_val'>";
		echo "<input type=hidden name=community_discount_percentage value=$community_discount_percentage>";
		echo "<input type=hidden name=is_gated_community value=$is_gated_community>";

		
		?>
		</form>
	</div>
</div>
		<?php

		} else {

			

			$date = date('Y-m-d H:i:s');

				$city = $this->input->post('city');
				

				$whr = ['customer_id' => $this->input->post('customer_id')];

				// $digits = 4;
		        // $otp = str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);

				
				$last_order_id = $this->um->getlastorderId();
				// echo "<pre>";
				// print_r($last_order_id);
				// exit;
				$new_order_id = $last_order_id['order_id'];
				
				if($is_gated_community==1)
				{
					$order_txn = "#GC_".sprintf('%04d', $new_order_id);
				}
				else
				{
					$order_txn = "#NG_".sprintf('%04d', $new_order_id);
				}
				
				//$order_txn = "#".$otp;


				if($is_gated_community==1)
				{
					if($this->input->post('appartment')!="")
					{
						$raw = explode("-",$this->input->post('appartment'));
						$appartment = $raw[1];
					}
					else
					{
						$appartment ="";
					}
					
					$block =  $this->input->post('block');
					$flat_no =  $this->input->post('flat_no');
					$consignment_date=  $this->input->post('consignment_date');
					$community_discount_percentage=  $this->input->post('community_discount_percentage');
					$community_discount_val=  $this->input->post('community_discount_val');

				}
				else
				{
					$appartment = "";
					
					$block =  "";
					$flat_no =  "";
					$consignment_date=  "";
					$community_discount_percentage=  0;
					$community_discount_val=  0;
				}
				

				$userData = [

					'customer_id' => $this->input->post('customer_id'),

					'total_price' => $this->input->post('total_price'),
					'sub_total_amount' => $this->input->post('sub_total_amount'),

					'tab' => $this->input->post('tab'),

					'order_txn' => $order_txn,

					'shipping_fee' => $this->input->post('shipping_price'),
					'community_discount_percentage' => $community_discount_percentage,
					'community_discount_val' => $community_discount_val,
					'consignment_date' => $consignment_date,
					'city' => $city ,
					'appartment' => $appartment,
	                'created_at' => $date,
					'is_gated_community' => $is_gated_community,
				];



				$orderId = $this->um->insertData("tbl_order",$userData);

				if($this->input->post('check') == 1){

					$customerdata = [

					'order_id' => $orderId,

					'customer_id' => $this->input->post('customer_id'),

					'postal_code1' => $this->input->post('postal_code'),

					'town_mandal1' => $this->input->post('town_mandal'),

					'city1' => $city,

					'district1' => $this->input->post('district'),

					'customer_name1' => $this->input->post('customer_name'),

					'state1' => $this->input->post('state'),

					'last_name1' => $this->input->post('last_name'),

					'mobile_number1' => $this->input->post('mobile_number'),

					'email1' => $this->input->post('email'),

					'address11' => $this->input->post('address1'),

					'address22' => $this->input->post('address2'),


					'pc' => $this->input->post('postal_code1'),

					'tm' => $this->input->post('town_mandal1'),

					'cy' => $this->input->post('city1'),

					'dist' => $this->input->post('district1'),

					'fname' => $this->input->post('customer_name1'),

					'st' => $this->input->post('state1'),

					'lname' => $this->input->post('last_name1'),

					'ph' => $this->input->post('mobile_number1'),

					'em' => $this->input->post('email1'),

					'ad1' => $this->input->post('address11'),

					'ad2' => $this->input->post('address22'),
					'block' => $block,
					'block1' => $block,
					'appartment' => $appartment,
					'flat_no' => $flat_no,

	                'created_at' => $date

				];

				}
				else 
				
				{


					$customerdata = [

					'order_id' => $orderId,

					'customer_id' => $this->input->post('customer_id'),

					'postal_code1' => $this->input->post('postal_code'),

					'town_mandal1' => $this->input->post('town_mandal'),

					'city1' => $city,

					'district1' => $this->input->post('district'),

					'customer_name1' => $this->input->post('customer_name'),

					'state1' => $this->input->post('state'),

					'last_name1' => $this->input->post('last_name'),

					'mobile_number1' => $this->input->post('mobile_number'),

					'email1' => $this->input->post('email'),

					'address11' => $this->input->post('address1'),

					'address22' => $this->input->post('address2'),
					
					'block' => $block,
					'block1' => $block,
					'appartment' => $appartment,
					'flat_no' => $flat_no,
					
	                'created_at' => $date
				];

				}



				$customerId = $this->um->insertData("tbl_order_address",$customerdata);





				$cwhr = [

					'customer_id' => $this->input->post('customer_id'),

					'order_status' => 0

				];



				$order_status = ['order_status' => $orderId];



				$customercartId = $this->um->updateData("tbl_cart",$order_status, $cwhr);


	
			if($orderId > 0)
			{



				$order = $this->um->cartItemDetails('tbl_cart c',['order_status' => $orderId])->result_array();



				if(count($order) > 0){

					for ($i=0; $i < count($order); $i++) { 



						$products = $this->um->ProdcutDetails("tbl_products",['product_id' =>$order[$i]['product_id']])->row_array();

								

								// $quantity = $products['stock'] - $order[$i]['quantity'];

								$outward = $products['outward'] + $order[$i]['quantity'];

								$whr = ['product_id' => $order[$i]['product_id']];



								$product = [

									// 'product_quantity' => $quantity,

									'outward' => $outward

								];

								

								$productId = $this->um->updateData("tbl_products",$product,$whr);

					}

				}

        $customer = $this->um->CustomerDetails('tbl_customer',['customer_id' => $this->input->post('customer_id')])->row_array();

        $orderpro = $this->um->cartItemDetails('tbl_cart c',['order_status' => $orderId])->result_array();



        $orderlist = $this->um->getorderData("tbl_order",['order_id' => $orderId]);

        $address = $this->um->OrderAddress('tbl_order_address',['order_id' => $orderId])->row_array();

		$block = $address['block'];
		$appartment = $address['appartment'];
		$flat_no = $address['flat_no'];
		
		
        $floor1 = $address['address11'];
		$home_type1 = $address['address22'];
		$street1 = $address['street1'];
		$postal_code1 = $address['postal_code1'];
		$block1 = $address['block1'];
		$land_mark1 = $address['land_mark1'];
		$customer_name1 = $address['customer_name1'];
		$last_name1 = $address['last_name1'];
		$mobile_number1 = $address['mobile_number1'];
		$email1 = $address['email1'];
		$town_mandal1 = $address['town_mandal1'];
		$city1 = $address['city1'];
		$district1 = $address['district1'];
		$state1 = $address['state1'];
		$datadate = date('M d Y', strtotime($orderlist['created_at']));
		
		$is_gated_community = $orderlist['is_gated_community'];
		
		
		if($address['fname'] == '') {
           $fname = $address['customer_name1'];
		}else  {
           $fname = $address['fname'];
		}

		if($address['lname'] == '') {
           $lname = $address['last_name1'];
		}else  {
           $lname = $address['lname'];
		}

		if($address['em'] == '') {
           $em = $address['email1'];
		}else  {
           $em = $address['em'];
		}

		if($address['ph'] == '') {
           $ph = $address['mobile_number1'];
		}else  {
           $ph = $address['ph'];
		}

		if($address['ad1'] == '') {
           $ad1 = $address['address11'];
		}else  {
           $ad1 = $address['ad1'];
		}

		if($address['ad2'] == '') {
           $ad2 = $address['address22'];
		}else  {
           $ad2 = $address['ad2'];
		}

		if($address['tm'] == '') {
           $tm = $address['town_mandal1'];
		}else  {
           $tm = $address['tm'];
		}

		if($address['cy'] == '') {
           $cy = $address['city1'];
		}else  {
           $cy = $address['cy'];
		}

		if($address['dist'] == '') {
           $dist = $address['district1'];
		}else  {
           $dist = $address['dist'];
		}

		if($address['st'] == '') {
           $st = $address['state1'];
		}else  {
           $st = $address['st'];
		}

		if($address['pc'] == '') {
           $pc = $address['postal_code1'];
		}else  {
           $pc = $address['pc'];
		}

			$total_price = $this->input->post('total_price');
			
			
			
			$shipping_fee = $this->input->post('shipping_price');
			
			if($is_gated_community == 1)
			{
				$community_discount_percentage = $this->input->post('community_discount_percentage');
				$community_discount_val = $this->input->post('community_discount_val');
			}
			else
			{
				$community_discount_percentage = 0;
				$community_discount_val = 0;
			}
			
			$sub_total = $this->input->post('sub_total_amount'); 
			
			$tab = ($this->input->post('tab') =="Pay" ) ? "Paid" : $this->input->post('tab');
			$tot = $total_price;
			// $product_name = $orderpro['product_name'];
			// $price = $orderpro['price'];
			// $quantity = $orderpro['quantity'];
			$email = $customer['email'];
			$order_txn = $orderlist['order_txn'];
			
			$name =   $customer_name1.' '. $last_name1;
			
			$to = $email;
            $subject = 'Welcome To Yellowmango';
            
			$message_line1 = '<p>Hi '. $name.', <br/>
					 Your order is Confirmed. Please Check the invoice details below. </p>';
					 
			$message_line2 = '<p>Hi, <br/>
					 New Order has been Placed on yellowmango.in.  Please Check the invoice details below. </p>';
					 
			$message = '
					<div class="content" id="root">
					  <div class="container">
							<div style="max-width:900px; margin: auto;" style="padding: 25px;">
					  <div style="padding: 25px 20px">
							<div class="logo" style="display: flex;">
						  <div class="img_logo" style="width: 55%;">
								  <img style="height: 80px;width:  180px;" src="https://yellowmango.in/assets2/images/yellowmango_from_scratch/Logo/yellowmango.png">
							  </div>
							  <div class="com_address" style="width: 45%;">
								  <div class="list1">
									  <ul style="list-style-type: none;padding: 0px;">
										  <li><b>YellowMango</b></li>
											  <li>Mogallur [V], Gudlur [M],</li>
											  <li>Prakasam [Dt],</li>
											  <li>Andhra Pradesh,</li>
											  <li>India -523115</li>
									  </ul>
								  </div>
							  </div>          
							</div>
							<div class="cust_address" style="display: flex;margin-bottom: 20px;">
							  <div class="list2" style="width: 55%;">
								  <h1 style="font-size: 18px">INVOICE</h1>
								  <div class="list2">';
								  
									
								  if( $is_gated_community == "1")
								  {
									
									$content = '<li style="list-style-type: none;">'.$name.'</li>';
									$content .= '<li style="list-style-type: none;">'.$flat_no.', '.$block.' </li>';
									$content .= '<li style="list-style-type: none;">'.$appartment.' </li>';
									$content .= '<li style="list-style-type: none;">'.$cy.' </li>';
									$content .= '<li style="list-style-type: none;">'.$pc.' </li>';
									$content .= '<li style="list-style-type: none;">Phone: '.$ph.' </li>';
									$content .= '<li style="list-style-type: none;">Email: '.$em.' </li>';
								  }
								  else
								  {				
									$content = '<li style="list-style-type: none;">'.$name.'</li>';
									$content .= '<li style="list-style-type: none;">'.$tm.' </li>';
									$content .= '<li style="list-style-type: none;">'.$ad1.' </li>';
									$content .= '<li style="list-style-type: none;">'.$ad2.' </li>';
									$content .= '<li style="list-style-type: none;">'.$pc.' </li>';
									$content .= '<li style="list-style-type: none;">Phone: '.$ph.' </li>';
									$content .= '<li style="list-style-type: none;">Email: '.$em.' </li>';
								  }			  
									 
								$message .= '<ul class="data1" style="list-style-type: none;padding: 0px !important; margin-left: 0px;">'.$content.'</ul>
								  </div>
							  </div>
							  <div class="list3" style="width: 45%; padding-top: 50px;">
								  <ul class="data2" style="padding-left: 0px">
										  <li style="list-style-type: none;">Invoice Number: <b>'.$orderId.'</b></li>
										  <li style="list-style-type: none;">Invoice Date: <b>'.date('d M, Y', strtotime($datadate)).'</b></li>
										  <li style="list-style-type: none;">Order Number: <b>'.$order_txn.'</b></li>
										  <li style="list-style-type: none;">Order Date: <b>'.date('d M, Y', strtotime($datadate)).'</b></li>
										  <li style="list-style-type: none;">Payment Method: <b>'.$tab.'
										  </b>

										  </li>
									  </ul>
							  </div>
							</div>
						

						<div>
							<table class="container order-table table" style="width: 100%">
								<thead style="background-color: #96588b !important; color: #fff !important">
									<tr class="row1" style="background-color: #96588b; border-bottom: 1px solid #ccc;">
										<th style="background-color: green;background: #000;color: #fff;padding: 12px 5px;text-align: left; color: #fff;">Product</th>
										<th style="background-color: green;background: #000;color: #fff;padding: 12px 5px; text-align: left; color: #fff">Quantity</th>
										<th style="background-color: green;background: #000;color: #fff;padding: 12px 5px;text-align: left; color: #fff">Price</th>
									</tr>
								</thead>';
							  
								if(count($orderpro)!=0)
								{
								  for($j=0;$j<count($orderpro);$j++)
								  {
								
								   $message .= ' <tbody>
										<tr>
											<td style="border-bottom: 1px solid #ccc;padding: 10px 5px;width: 60%;">'.$orderpro[$j]['product_name'].' - 5KG
												<br /><span style="font-size: 12px; margin: 10px 0px;">Weight: 5kg</span>
											</td>
											<td style="border-bottom: 1px solid #ccc;padding: 10px 5px;">'.$orderpro[$j]['quantity'].'</td>
											<td style="border-bottom: 1px solid #ccc;padding: 10px 5px;text-align:right">₹'.number_format($orderpro[$j]['price'],2).'</td>
										</tr>
									</tbody>';
									}
								 } 
								 
							$message .= '</table>
						</div>
						<div class="cart_sub" style="text-align: end;margin-top: 15px;margin-left: 60%;">
						  <div class="subb" style="display: flex;justify-content: end;border-top: 1px solid #ccc;border-bottom: 1px solid #ccc; padding: 5px 0px; margin: 0px !important;">
							<span style="text-align: left;width:50%"><b>Sub Total</b></span>
							<span style="text-align: right;width:50%">₹'.number_format($sub_total,2).'</span>
						  </div>

						  <div class="subb" style="border-top: 1px solid #ccc;padding: 10px 0px;display: flex;justify-content: end;border-bottom: 1px solid #000;align-items: center;">
							<span style="text-align: left;width:50%"><b>Shipping</b></span>
							<span style="text-align: right;width:50%">';
								if($shipping_fee == '0' || $shipping_fee == ' ') 
								{
									$shipping_fee = 'FREE SHIPPING';
								}
								$message .='₹ '. $shipping_fee;
							$message .= '</span>
						  </div>';
						  
						  if($is_gated_community==1)
						  {
						  $message .= '<div class="subb" style="border-top: 1px solid #ccc;padding: 10px 0px;display: flex;justify-content: end;border-bottom: 1px solid #000;align-items: center;">
							<span style="text-align: left;width:50%"><b>Community Discount :</b></span>
							<span style="text-align: right;width:50%">₹ '.
							 $community_discount_val.'</span>
						  </div>';
						  }
						  
						  $message .= '<div class="subb mainn" style="display: flex;justify-content: end;border-top: 2px solid #000; border-bottom: 2px solid #000;">
							<span style="text-align: left;width:50%"><b>Total</b></span>
							<span style="text-align: right;width:50%">₹ '.number_format($tot,2).'</span>
						  </div>
						</div>
					  </div>
					</div>
					  </div>
					</div>
			
			<center><p style="font-size: 20px;">https://yellowmango.in/home/invoice/'.$orderId.'</p></center>';
			
            $message .= "<hr>";
            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            //$headers .= "mail2yellowmango@gmail.com";
            // send email
			
			$message_sent = $message_line1;
			$message_sent .= $message;
			
			
            if(mail($to, $subject, $message_sent, $headers)){
			}else{
			}

			$too = "mail2yellowmango@gmail.com";
			//$too = "priyadev7861@gmail.com";
		
            $subject = 'Welcome To Yellowmango';
          
            // send email
			
			$message_sent = $message_line2;
			$message_sent .= $message;
			
            if(mail($too, $subject, $message_sent, $headers)){
			}else{
			}



			$this->session->set_flashdata('success_msg',  "Order Placed Successfully.");

			   redirect('home/thankyou/'.$orderId);

			}else{



				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");

				redirect('home/thankyou/'.$orderId);

			}

		}
	}


	public function blog()
	{

		$data['page_title'] = "Contact Us Page";

		$data['cartitems'] = $this->um->cartItemDetails('tbl_cart c',['c.customer_id' => $this->session->userdata('customer_id'),'order_status' => 0])->result_array();

		$data['carti'] = count($data['cartitems']);

		$data['daily'] = $this->um->DailyCitiesDetails('tbl_daily_cities',[]);

		$data['weekly'] = $this->um->WeeklyCitiesDetails('tbl_weekly_cities',[]);

		$data['days'] = $this->um->getDays('tbl_days',['status' => 1]);

		$data['time'] = $this->um->getTime('tbl_time',['status' => 1]);

		$data['timess'] = $this->um->getTime('tbl_time',['status' => 2]);

		$data['scroll'] = $this->um->getScroll('tbl_scroll',[]);

		$data['blogs'] = $this->um->BlogDetails('tbl_blogs',['status' => 1]);

		$data['areas'] = $this->um->AreaDetails('tbl_shipping_charges',['status' => 1]);

		$this->settemplate->front("blog",$data);

	}


	public function getPincodePricevalue($value='')
	{
		$response = array();
		$pincode  = $this->input->post('pincode');
		
		$pincode_string = substr($pincode, 0,6);
		
		$checkUser = $this->um->getPricePincodeData("tbl_pincode",$pincode_string);
		
		if($checkUser == '') {
		    $response['res'] = "fail";
		}else {
		   if($checkUser['status'] != 0){
			$response['res'] = "pass";
			$response['record'] = $checkUser;
		}else{
			$response['res'] = "fail";
			//$response['price'] = 30*$this->input->post('quantity');
			
		} 
		}
		
		echo json_encode($response);
	}
	
	
	public function getCommunityCity()
	{
		$response = array();
		$city_name = $this->input->post('city_name');
		
		$checkUser = $this->um->getCityApt("tbl_community",$city_name);
		
		if(count($checkUser)!=0)
		{
			$response['record'] = $checkUser;
			$response['status'] = 1;
		}
		else
		{
			$response['record'] = array();
			$response['status'] = 0;
		}
		echo json_encode($response);
	}
	
	public function getCommunityDiscount()
	{
		$response = array();
		$raw = explode("-",$this->input->post('community_id'));
		$community_id = $raw[0];
		
		$getData = $this->um->getCommunityDiscount("tbl_community",$community_id);
		
		if(count($getData)!=0)
		{
			$response['record'] = $getData;
			$response['status'] = 1;
		}
		else
		{
			$response['record'] = array();
			$response['status'] = 0;
		}
		echo json_encode($response);
	}
	


	public function invoice($order_id)

	{

	    $data['page_title'] = "My Account Page";

		$data['order'] = $this->um->orderDetails("tbl_order o",['o.order_id' => $order_id])->row_array();

		$data['cartItems'] = $this->um->cartItemDetails("tbl_cart c",['c.order_status' => $order_id]);

		$data['address'] = $this->um->OrderAddress('tbl_order_address',['order_id' => $order_id])->row_array();

		$data['areas'] = $this->um->AreaDetails('tbl_shipping_charges',['status' => 1]);

		$this->settemplate->invoice("orders/invoice",$data);

	}



}



