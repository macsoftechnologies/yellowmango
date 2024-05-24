<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminpasschange extends CI_Controller {

	public function __Construct(){
		parent::__Construct();
		$this->load->model('UserModel', 'um');
		$this->admin = $this->session->userdata('admin_id');
		if($this->session->userdata('admin_id') == ''){
			redirect("adminlogin");
		}else { 
		}
	}
	
	public function index()
	{
		$data['page_title'] = "ChangePassword";
		$data['admin'] = $this->um->getAdminDtata("tbl_admin",['admin_id' => $this->session->userdata('admin_id')])->row_array();
		$this->settemplate->dashboard("adminpasschange",$data);
	}

	public function update($admin)
	{
		
       	$this->form_validation->set_rules('password', 'Password', 'trim|required');
       	$this->form_validation->set_rules('new_pasword', 'Confirm Password', 'required|matches[password]');
		if ($this->form_validation->run() == FALSE)
		{	
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
			$this->index();
		}		
		else	
		{
			$whr = ['admin_id'=> $this->admin];
			$userData = [
				'password' => md5($this->input->post('password'))
				
			];
			$lastId = $this->um->updateData("tbl_admin",$userData,$whr);
			if($lastId > 0){
				$this->session->set_flashdata('success_msg', "Password Updated successfully.");
			}else{
				$this->session->set_flashdata('error_msg',  "Failed, Please try again.");
			}
			redirect('adminpasschange');
		}
	}

	
}