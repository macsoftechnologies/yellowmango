<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Controller {

	public function __Construct(){
		parent::__Construct();
		$this->load->model('UserModel', 'um');
		$this->admin = $this->session->userdata('admin_id');
		is_adlogged_in();
	}

	public function index()
	{
		$data['page_title'] = "Customers";
		$data['customers'] = $this->um->CustomerDetails('tbl_customer',[]);
		$this->settemplate->dashboard("customers/index",$data);
	}

	public function create()
	{
		$data['page_title'] = "Customers Create";
		$this->settemplate->dashboard("customers/create",$data);
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
		$this->form_validation->set_rules('customer_name','Customer Name', 'trim|required');
		$this->form_validation->set_rules('mobile_number1', 'Mobile Number','trim|required');
		$this->form_validation->set_rules('email', 'E-Mail', 'trim|required');
		if ($this->form_validation->run() == FALSE)
		{	
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
			$this->create();
		}		
		else	
		{
			$moblie = $this->input->post('mobile_number1');
				$email = $this->input->post('email');
				$chkemailmobile = $this->um->checkMoblieNumber($moblie,$email);

				if($chkemailmobile == 0){
							$date = date('Y-m-d H:i:s');
			
			$userData = [
				'customer_name' => $this->input->post('customer_name'),
				'mobile_number1' => $this->input->post('mobile_number1'),
				'mobile_number2' => $this->input->post('mobile_number2'),
				'guarantor_name' => $this->input->post('guarantor_name'),
				'email' => $this->input->post('email'),
				'ic_no' => $this->input->post('ic_no'),
				'passport_others' => $this->input->post('passport_others'),
				'address' => $this->input->post('address'),
                'created_at' => $date
			];

			$userId = $this->um->insertData("tbl_customer",$userData);

			if($userId > 0){

			$this->session->set_flashdata('success_msg',  "Registration Completed Successfully.");
			    redirect('customers');
			}else{

				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
				redirect('customers/create');
			}


			}else{

			$this->session->set_flashdata('error_msg',  "Failed, Email/Mobile Number Already Exit.");
			redirect('customers/create');
			
				}
			
		}
	}

	public function edit($customer_id)
	{
		$data['page_title'] = "Customers";
		$data['customers'] = $this->um->CustomerDetails('tbl_customer',['customer_id' => $customer_id])->row_array();
		$this->settemplate->dashboard("customers/edit",$data);
	}

	public function update($customer_id)
	{
		$this->form_validation->set_rules('customer_name','Customer Name', 'trim|required');
		$this->form_validation->set_rules('mobile_number1', 'Mobile Number','trim|required');
		$this->form_validation->set_rules('email', 'E-Mail', 'trim|required');
		if ($this->form_validation->run() == FALSE)
		{	
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
			$this->edit($customer_id);
		}		
		else	
		{
			$whr = ['customer_id'=> $customer_id];
			$userData = [
				'customer_name' => $this->input->post('customer_name'),
				'mobile_number1' => $this->input->post('mobile_number1'),
				'mobile_number2' => $this->input->post('mobile_number2'),
				'guarantor_name' => $this->input->post('guarantor_name'),
				'email' => $this->input->post('email'),
				'ic_no' => $this->input->post('ic_no'),
				'passport_others' => $this->input->post('passport_others'),
				'address' => $this->input->post('address'),
			];
			
			$lastId = $this->um->updateData("tbl_customer",$userData,$whr);
			if($lastId > 0){
				$this->session->set_flashdata('success_msg', "Customer Updated successfully.");
			}else{
				$this->session->set_flashdata('error_msg',  "Failed, Please try again.");
			}
			redirect('customers');
		}
	}

	public function delete($customer_id)
	{
		
		$whr = ['customer_id' => $customer_id];
		$producteData = [
			'status' => 0
		];

		$productId = $this->um->updateData("tbl_customer",$producteData,$whr);
		if($productId > 0){
			$this->session->set_flashdata('success_msg',  "Customer Remove Successfully.");
		}else{
			$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
		}
		redirect('customers');
	}

	public function show($customer_id)
	{
		$data['page_title'] = "Customers";
		$data['customers'] = $this->um->CustomerDetails('tbl_customer',['customer_id' => $customer_id])->row_array();
		$this->settemplate->dashboard("customers/show",$data);
	}
	
}