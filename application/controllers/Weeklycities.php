<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Weeklycities extends CI_Controller {

	public function __Construct(){
		parent::__Construct();
		$this->load->model('UserModel', 'um');
		$this->admin = $this->session->userdata('admin_id');
		is_adlogged_in();
	}

	public function index()
	{
		$data['page_title'] = "Weekly Cities";
		$data['weekly'] = $this->um->WeeklyCitiesDetails('tbl_weekly_cities',[]);
		$data['time'] = $this->um->getTime('tbl_time',['status' => 2]);
		$this->settemplate->dashboard("weekly/index",$data);
	}

	public function create()
	{
		$data['page_title'] = "Weekly Cities Create";
		$this->settemplate->dashboard("weekly/create",$data);
	}

	public function insert()
	{
		$this->form_validation->set_rules('weekly_city_name','Weekly City Name', 'trim|required');
		if ($this->form_validation->run() == FALSE)
		{	
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
			$this->create();
		}		
		else	
		{
			$date = date('Y-m-d H:i:s');
			
			$userData = [
				'weekly_city_name' => $this->input->post('weekly_city_name'),
                'created_at' => $date
			];

			$userId = $this->um->insertData("tbl_weekly_cities",$userData);

			if($userId > 0){

			$this->session->set_flashdata('success_msg',  "Weekly City Inserted Successfully.");
			    redirect('weeklycities');
			}else{

				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
				redirect('weeklycities/create');
			}
			
		}
	}

	public function edit($weekly_city_id)
	{
		$data['page_title'] = "Weekly Cities";
		$data['weekly'] = $this->um->WeeklyCitiesDetails('tbl_weekly_cities',['weekly_city_id' => $weekly_city_id])->row_array();
		$this->settemplate->dashboard("weekly/edit",$data);
	}

	public function update($weekly_city_id)
	{
		$this->form_validation->set_rules('weekly_city_name','weekly City Name', 'trim|required');
		if ($this->form_validation->run() == FALSE)
		{	
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
			$this->edit($weekly_city_id);
		}		
		else	
		{
			$whr = ['weekly_city_id'=> $weekly_city_id];
			$userData = [
				'weekly_city_name' => $this->input->post('weekly_city_name'),
			];
			
			$lastId = $this->um->updateData("tbl_weekly_cities",$userData,$whr);
			if($lastId > 0){
				$this->session->set_flashdata('success_msg', "weekly Cities Updated successfully.");
			}else{
				$this->session->set_flashdata('error_msg',  "Failed, Please try again.");
			}
			redirect('weeklycities');
		}
	}

	public function delete($weekly_city_id)
	{
		
		$whr = ['weekly_city_id' => $weekly_city_id];

		$productId = $this->um->deleteData("tbl_weekly_cities",$whr);
		if($productId > 0){
			$this->session->set_flashdata('success_msg',  "Weekly City Remove Successfully.");
		}else{
			$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
		}
		redirect('weeklycities');
	}
	
}