<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subadmin extends CI_Controller {

	public function __Construct(){
		parent::__Construct();
		$this->load->model('UserModel', 'um');
		$this->admin = $this->session->userdata('admin_id');
		is_adlogged_in();
	}
	
	public function index()
	{
		$data['page_title'] = "Business";
		$data['admin'] = $this->um->getAdminDtata("tbl_admin",['role_id'=> 2]);
		$this->settemplate->dashboard("register/index",$data);
	}

	public function create()
	{
		$data['page_title'] = "Business";
		$this->settemplate->dashboard("register/create",$data);
	}


	public function insert()
	{
		$this->form_validation->set_rules('admin_name', 'Business Name', 'trim|required');
		$this->form_validation->set_rules('email','Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('mobile_number', 'Mobile Number', 'trim|required');
		$this->form_validation->set_rules('address', 'Address', 'trim|required');
		$this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'required|matches[password]');
		if ($this->form_validation->run() == FALSE)
		{	
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
			$this->create();
		}		
		else	
		{
			$email = $this->input->post('email');
			$mobile_number = $this->input->post('mobile_number');
			$checkemail = $this->um->checkemail($email,$mobile_number);


			if($checkemail == 0){
			$date = date('Y-m-d');

			$studentData = [
				'admin_name' => $this->input->post('admin_name'),
				'email' => $this->input->post('email'),
				'mobile_number' => $this->input->post('mobile_number'),
				'password' => md5($this->input->post('password')),
				'address' => $this->input->post('address'),
				'role_id' => 2,
				'created_at' => $date
			];

			$userId = $this->um->insertData("tbl_admin",$studentData);

	

			if($userId > 0){


				$this->session->set_flashdata('success_msg',  "Sub-Admin Inserted Successfully.");
				redirect('subadmin');
				}else{
					$this->session->set_flashdata('error_msg',  "Failed, Something went wrong.");
					redirect('subadmin/create');
				}
			}else{

			$this->session->set_flashdata('error_msg',  "Failed, Email/Mobile Number Already Exit.");
			redirect('subadmin/create');
			
				}
		}
	}

	public function edit($admin_id)
	{
		$data['page_title'] = "Admin Update";
		$data['admin'] = $this->um->checkUserLoginADmin("tbl_admin",['admin_id' => $admin_id])->row_array();
		$this->settemplate->dashboard("register/edit",$data);
	}

	public function update($admin_id)
	{
        $this->form_validation->set_rules('admin_name', 'Admin Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('mobile_number', 'Mobile Number', 'trim|required');
		$this->form_validation->set_rules('address', 'Address', 'trim|required');
		if ($this->form_validation->run() == FALSE)
		{	
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
			$this->edit($admin_id);
		}		
		else	
		{


			$whr = ['admin_id' => $admin_id];
			$settingsData = [
				'admin_name' => $this->input->post('admin_name'),
				'email' => $this->input->post('email'),
				'mobile_number' => $this->input->post('mobile_number'),
				'address' => $this->input->post('address'),
			];

			$settingId = $this->um->updateData("tbl_admin",$settingsData,$whr);
			if($settingId > 0){
				$this->session->set_flashdata('success_msg',  "Sub-Admin Profile Updated Successfully.");
			}else{
				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
			}
			redirect('subadmin');
		}
	}


	public function delete($admin_id)
	{
		$whr = ['admin_id'=> $admin_id];
		$deleteId = $this->um->deleteData("tbl_admin",$whr);
		if($deleteId > 0){
			$this->session->set_flashdata('success_msg',  "Sub-Admin Deleted Successfully.");
		}else{
			$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
		}
		redirect('subadmin');
	}
}
