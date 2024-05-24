<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonies extends CI_Controller {

	public function __Construct(){
		parent::__Construct();
		$this->load->model('UserModel', 'um');
		$this->admin = $this->session->userdata('admin_id');
		is_adlogged_in();
	}

	public function index()
	{
		$data['page_title'] = "Testimonies";
		$data['testimonies'] = $this->um->TestimoniesDetails('tbl_testimonies',['status' => 1]);
		$this->settemplate->dashboard("testimonies/index",$data);
	}

	public function create()
	{
		$data['page_title'] = "Testimonies Create";
		$this->settemplate->dashboard("testimonies/create",$data);
	}

	public function insert()
	{
		$this->form_validation->set_rules('testimony_name','Testimonies Name', 'trim|required');
		$this->form_validation->set_rules('testimonies', 'Testimonies','trim|required');

		if ($this->form_validation->run() == FALSE)
		{	
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
			$this->create();
		}		
		else	
		{

			$date = date('Y-m-d H:i:s');
			
			$userData = [
				'testimony_name' => $this->input->post('testimony_name'),
				'testimony_address' => $this->input->post('testimony_address'),
				'testimonies' => $this->input->post('testimonies'),
                'created_at' => $date
			];

			$userId = $this->um->insertData("tbl_testimonies",$userData);

			if($userId > 0){

			$this->session->set_flashdata('success_msg',  "Testimonies Created Successfully.");
			    redirect('testimonies');
			}else{

				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
				redirect('testimonies/create');
			}
			
		}
	}

	public function edit($testimony_id)
	{
		$data['page_title'] = "Products";
		$data['testimonies'] = $this->um->TestimoniesDetails('tbl_testimonies',['testimony_id' => $testimony_id])->row_array();
		$this->settemplate->dashboard("testimonies/edit",$data);
	}

	public function update($testimony_id)
	{
		$this->form_validation->set_rules('testimony_name','Testimonies Name', 'trim|required');
		$this->form_validation->set_rules('testimonies', 'Testimonies','trim|required');
		if ($this->form_validation->run() == FALSE)
		{	
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
			$this->edit($testimony_id);
		}		
		else	
		{
			$whr = ['testimony_id'=> $testimony_id];
			$userData = [
				'testimony_name' => $this->input->post('testimony_name'),
				'testimony_address' => $this->input->post('testimony_address'),
				'testimonies' => $this->input->post('testimonies')
			];

			
			$lastId = $this->um->updateData("tbl_testimonies",$userData,$whr);
			if($lastId > 0){
				$this->session->set_flashdata('success_msg', "Testimonies Updated successfully.");
			}else{
				$this->session->set_flashdata('error_msg',  "Failed, Please try again.");
			}
			redirect('testimonies');
		}
	}

	public function delete($testimony_id)
	{
		
		$whr = ['testimony_id' => $testimony_id];
		$producteData = [
			'status' => 0
		];

		$productId = $this->um->updateData("tbl_testimonies",$producteData,$whr);
		if($productId > 0){
			$this->session->set_flashdata('success_msg',  "Testimonies Remove Successfully.");
		}else{
			$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
		}
		redirect('testimonies');
	}
	
}