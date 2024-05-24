<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Userlogin extends CI_Controller {

	public function __Construct(){
		parent::__Construct();
		$this->load->model('UserModel', 'um');
	}

	public function index($product_id,$quantity,$price)
	{
		$data['title'] = "Login";
		$data['cartitems'] = $this->um->cartItemDetails('tbl_cart c',['c.customer_id' => $this->session->userdata('customer_id'), 'c.order_status' => 0])->result_array();
		$data['carti'] = count($data['cartitems']);
		$data['daily'] = $this->um->DailyCitiesDetails('tbl_daily_cities',[]);
		$data['weekly'] = $this->um->WeeklyCitiesDetails('tbl_weekly_cities',[]);
		$data['product_id'] = $product_id;
		$data['quantity'] = $quantity;
		$data['price'] = $price;

		$data['days'] = $this->um->getDays('tbl_days',['status' => 1]);
		$data['time'] = $this->um->getTime('tbl_time',['status' => 1]);

		$data['timess'] = $this->um->getTime('tbl_time',['status' => 2]);

		$data['scroll'] = $this->um->getScroll('tbl_scroll',[]);

		$data['areas'] = $this->um->AreaDetails('tbl_shipping_charges',['status' => 1]);

		
		$this->settemplate->front("userlogin",$data);
	}

	public function indexproduct($product_id,$quantity,$price)
	{
		$data['title'] = "Login";
		$data['product_id'] = $product_id;
		$data['quantity'] = $quantity;
		$data['price'] = $price;
		$data['cartitems'] = $this->um->cartItemDetails('tbl_cart c',['c.customer_id' => $this->session->userdata('customer_id'), 'c.order_status' => 0])->result_array();
		$data['carti'] = count($data['cartitems']);
		$data['daily'] = $this->um->DailyCitiesDetails('tbl_daily_cities',[]);
		$data['weekly'] = $this->um->WeeklyCitiesDetails('tbl_weekly_cities',[]);

		$data['days'] = $this->um->getDays('tbl_days',['status' => 1]);
		$data['time'] = $this->um->getTime('tbl_time',['status' => 1]);

		$data['scroll'] = $this->um->getScroll('tbl_scroll',[]);

		$data['timess'] = $this->um->getTime('tbl_time',['status' => 2]);

		$data['areas'] = $this->um->AreaDetails('tbl_shipping_charges',['status' => 1]);
		$this->settemplate->front("userlogin",$data);
	}

	public function login()
	{
	    $product_id = 0;
	    $quantity = 0;
	    $price = 0;
		$date = date('Y-m-d h:i:s');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() == FALSE)
		{	
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
			$this->index($product_id,$quantity,$price);
		}		
		else	
		{
			$email = $this->input->post('email');
 			$inputPwd = $this->input->post('password');
			$pwd = md5($inputPwd);

			$result = $this->um->checkUserLogin($email, $pwd);

        

            if($result!="")
            {
    			$systems = $this->um->userLoginData("tbl_customer",['customer_id' => $result['customer_id']]);
    
    
				$systemsss = $this->um->StudentDetails("tbl_customer",['customer_id' => $result['customer_id']])->result_array();
				if($this->input->post('product_id') == '' || $this->input->post('product_id') == 0) {
					$product_id = 0;
					$quantity = 0;
					$price = 0;
				}else {
					$product_id = $this->input->post('product_id');
					$quantity = $this->input->post('quantity');
					$price = $this->input->post('price');
	
				}

				if(count($systemsss) > 0){

					if($product_id == 0 || $this->input->post('product_id') == 0) {
						$this->session->set_userdata('customer_id',$systems['customer_id']);
					$this->session->set_userdata('customer_name',$systems['customer_name']);
					$this->session->set_userdata('email',$systems['email']);
					$this->session->set_userdata('mobile_number',$systems['mobile_number']);	
					$this->session->set_userdata('address', $systems['address']);
					$this->session->set_userdata('status',$systems['status']);
					$this->session->set_userdata('password',$systems['password']);		
					$this->session->set_flashdata('success_msg',"Welcome! ".$result['customer_name']);

						redirect('home');

					}else {

					$cartitems = $this->um->cartItemDetails('tbl_cart c',['c.customer_id' => $systems['customer_id'],'c.order_status' => 0, 'c.product_id' => $product_id])->result_array();


						if(count($cartitems) == 0) {

							$date = date('Y-m-d H:i:s');

							
							$userData = [
								'customer_id' => $systems['customer_id'],
								'product_id' => $this->input->post('product_id'),
								'quantity' => $this->input->post('quantity'), 
								'order_status' => 0,
								'price' => $this->input->post('price'),
								'created_at' => $date
							];

							$userId = $this->um->insertData("tbl_cart",$userData);
							$this->session->set_userdata('customer_id',$systems['customer_id']);
							$this->session->set_userdata('customer_name',$systems['customer_name']);
							$this->session->set_userdata('email',$systems['email']);
							$this->session->set_userdata('mobile_number',$systems['mobile_number']);	
							$this->session->set_userdata('address', $systems['address']);
							$this->session->set_userdata('status',$systems['status']);
							$this->session->set_userdata('password',$systems['password']);		
							$this->session->set_flashdata('success_msg',"Welcome! ".$result['customer_name']);

					redirect('home');

						}else  {

							$this->session->set_flashdata('error_msg',"Cart Item Already Added.");

							$this->session->set_userdata('customer_id',$systems['customer_id']);
							$this->session->set_userdata('customer_name',$systems['customer_name']);
							$this->session->set_userdata('email',$systems['email']);
							$this->session->set_userdata('mobile_number',$systems['mobile_number']);	
							$this->session->set_userdata('address', $systems['address']);
							$this->session->set_userdata('status',$systems['status']);
							$this->session->set_userdata('password',$systems['password']);		
							$this->session->set_flashdata('success_msg',"Welcome! ".$result['customer_name']);

						redirect('home');



						}

						

					

						}

						$this->session->set_userdata('customer_id',$systems['customer_id']);
						$this->session->set_userdata('customer_name',$systems['customer_name']);
						$this->session->set_userdata('email',$systems['email']);
						$this->session->set_userdata('mobile_number',$systems['mobile_number']);	
						$this->session->set_userdata('address', $systems['address']);
						$this->session->set_userdata('status',$systems['status']);
						$this->session->set_userdata('password',$systems['password']);		
						$this->session->set_flashdata('success_msg',"Welcome! ".$result['customer_name']);

						redirect('home');
					}else{
						
						$this->session->set_flashdata('error_msg',"Invalid Email/Password");
						
						redirect('userlogin/index/'.$product_id.'/'.$quantity.'/'.$price);
					}
				
			}
			else
			{
					$this->session->set_flashdata('error_msg',"Invalid Email/Password");
						
					redirect('userlogin/index/'.$product_id.'/'.$quantity.'/'.$price);
			}
		}
		
	}

	public function userlogin()
	{
		$date = date('Y-m-d h:i:s');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() == FALSE)
		{	
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
			$this->index();
		}		
		else	
		{
			$email = $this->input->post('email');
 			$inputPwd = $this->input->post('password');
			$pwd = md5($inputPwd);
			$product_id = $this->input->post('product_id');

			$result = $this->um->checkUserLogin($email, $pwd);

			// $resultss = $result->result_array();
            // $row = mysqli_fetch_row($resultss);

			$systems = $this->um->userLoginData("tbl_customer",['customer_id' => $result['customer_id']]);

			$systemsss = $this->um->StudentDetails("tbl_customer",['customer_id' => $result['customer_id']])->result_array();

			if(count($systemsss) > 0){

				$date = date('Y-m-d H:i:s');

						
						$userData = [
							'customer_id' => $systems['customer_id'],
							'product_id' => $this->input->post('product_id'),
							'quantity' => $this->input->post('quantity'), 
							'order_status' => 0,
							'price' => $this->input->post('price'),
			                'created_at' => $date
						];

						$userId = $this->um->insertData("tbl_cart",$userData);

				$this->session->set_userdata('customer_id',$systems['customer_id']);
				$this->session->set_userdata('customer_name',$systems['customer_name']);
				$this->session->set_userdata('email',$systems['email']);
				$this->session->set_userdata('mobile_number',$systems['mobile_number']);	
				$this->session->set_userdata('address', $systems['address']);
				$this->session->set_userdata('status',$systems['status']);
				$this->session->set_userdata('password',$systems['password']);		
				$this->session->set_flashdata('success_msg',"Welcome! ".$result['customer_name']);




				redirect('home/product_details/'.$product_id);
			}else{
				
				redirect('userlogin');
			}
		}
	}

	public function userlogout()
	{
		$this->session->sess_destroy();
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('student_name');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('phone_number');
		$this->session->unset_userdata('student_ic');
		$this->session->unset_userdata('father_mother');
		$this->session->unset_userdata('father_mother_ic');
		redirect('userlogin');
	}


	

	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->unset_userdata('customer_id');
		$this->session->unset_userdata('customer_name');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('mobile_number');
		$this->session->unset_userdata('address');
		$this->session->unset_userdata('status');
		redirect('home');
	}

	public function guestlogin()
	{
	    $product_id = 0;
	    $quantity = 0;
	    $price = 0;
		$date = date('Y-m-d h:i:s');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		if ($this->form_validation->run() == FALSE)
		{	
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
			$this->index($product_id,$quantity,$price);
		}		
		else	
		{
			$sys = $this->um->StudentDetails("tbl_customer",['email' => $this->input->post('email'), 'role_id' => $this->input->post('role_id')])->result_array();

			if(count($sys) == 0) {

			$date = date('Y-m-d H:i:s');
			
			$userData = [
				'email' => $this->input->post('email'),
				'role_id' => $this->input->post('role_id'),
                'created_at' => $date
			];

			$userId = $this->um->insertData("tbl_customer",$userData);

				$email = $this->input->post('email');
				$role_id = $this->input->post('role_id');
				$result = $this->um->checkGuestLogin($email, $role_id);

				$systems = $this->um->userLoginData("tbl_customer",['customer_id' => $result['customer_id']]);

			$systemsss = $this->um->StudentDetails("tbl_customer",['customer_id' => $result['customer_id']])->result_array();
			if($this->input->post('product_id') == '' || $this->input->post('product_id') == 0) {
				$product_id = 0;
				$quantity = 0;
				$price = 0;
			}else {
				$product_id = $this->input->post('product_id');
				$quantity = $this->input->post('quantity');
				$price = $this->input->post('price');

			}

			}else {

				$email = $this->input->post('email');
				$role_id = $this->input->post('role_id');
				$result = $this->um->checkGuestLogin($email, $role_id);

				$systems = $this->um->userLoginData("tbl_customer",['customer_id' => $result['customer_id']]);

			$systemsss = $this->um->StudentDetails("tbl_customer",['customer_id' => $result['customer_id']])->result_array();
			if($this->input->post('product_id') == '' || $this->input->post('product_id') == 0) {
				$product_id = 0;
				$quantity = 0;
				$price = 0;
			}else {
				$product_id = $this->input->post('product_id');
				$quantity = $this->input->post('quantity');
				$price = $this->input->post('price');

			}

			}

			

			if(count($systemsss) > 0){

				if($product_id == 0 || $this->input->post('product_id') == 0) {
					$this->session->set_userdata('customer_id',$systems['customer_id']);
				$this->session->set_userdata('customer_name',$systems['customer_name']);
				$this->session->set_userdata('email',$systems['email']);
				$this->session->set_userdata('mobile_number',$systems['mobile_number']);	
				$this->session->set_userdata('address', $systems['address']);
				$this->session->set_userdata('status',$systems['status']);
				$this->session->set_userdata('password',$systems['password']);	
				$this->session->set_userdata('role_id',$systems['role_id']);		
				$this->session->set_flashdata('success_msg',"Welcome! ".$result['customer_name']);

					redirect('home');

				}else {

				$cartitems = $this->um->cartItemDetails('tbl_cart c',['c.customer_id' => $systems['customer_id'],'c.order_status' => 0, 'c.product_id' => $product_id])->result_array();


					if(count($cartitems) == 0) {

						$date = date('Y-m-d H:i:s');

						
						$userData = [
							'customer_id' => $systems['customer_id'],
							'product_id' => $this->input->post('product_id'),
							'quantity' => $this->input->post('quantity'), 
							'order_status' => 0,
							'price' => $this->input->post('price'),
			                'created_at' => $date
						];

						$userId = $this->um->insertData("tbl_cart",$userData);
						$this->session->set_userdata('customer_id',$systems['customer_id']);
						$this->session->set_userdata('customer_name',$systems['customer_name']);
						$this->session->set_userdata('email',$systems['email']);
						$this->session->set_userdata('mobile_number',$systems['mobile_number']);	
						$this->session->set_userdata('address', $systems['address']);
						$this->session->set_userdata('status',$systems['status']);
						$this->session->set_userdata('password',$systems['password']);		
						$this->session->set_flashdata('success_msg',"Welcome! ".$result['customer_name']);

				redirect('home/viewcart');

					}else  {

						$this->session->set_flashdata('error_msg',"Cart Item Already Added.");

						$this->session->set_userdata('customer_id',$systems['customer_id']);
						$this->session->set_userdata('customer_name',$systems['customer_name']);
						$this->session->set_userdata('email',$systems['email']);
						$this->session->set_userdata('mobile_number',$systems['mobile_number']);	
						$this->session->set_userdata('address', $systems['address']);
						$this->session->set_userdata('status',$systems['status']);
						$this->session->set_userdata('password',$systems['password']);		
						$this->session->set_flashdata('success_msg',"Welcome! ".$result['customer_name']);

				    redirect('home/viewcart');



					}

				}

				$this->session->set_userdata('customer_id',$systems['customer_id']);
				$this->session->set_userdata('customer_name',$systems['customer_name']);
				$this->session->set_userdata('email',$systems['email']);
				$this->session->set_userdata('mobile_number',$systems['mobile_number']);	
				$this->session->set_userdata('address', $systems['address']);
				$this->session->set_userdata('status',$systems['status']);
				$this->session->set_userdata('password',$systems['password']);		
				$this->session->set_flashdata('success_msg',"Welcome! ".$result['customer_name']);
				redirect('home');
			}else{
			    
			    $this->session->set_flashdata('error_msg',"Invalid Email/Password");
				
				redirect('userlogin/index/'.$product_id.'/'.$quantity.'/'.$price);
			}
		}
	}

}

