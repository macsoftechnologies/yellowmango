<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dailycities extends CI_Controller {

	public function __Construct(){
		parent::__Construct();
		$this->load->model('UserModel', 'um');
		$this->admin = $this->session->userdata('admin_id');
		is_adlogged_in();
	}

	public function index()
	{
		$data['page_title'] = "Daily Cities";
		$data['daily'] = $this->um->DailyCitiesDetails('tbl_daily_cities',[]);
		$data['time'] = $this->um->getTime('tbl_time',['status' => 1]);
		$this->settemplate->dashboard("daily/index",$data);
	}

	public function create()
	{
		$data['page_title'] = "Daily Cities Create";
		$this->settemplate->dashboard("daily/create",$data);
	}

	public function insert()
	{
		$this->form_validation->set_rules('daily_city_name','Daily City Name', 'trim|required');
		if ($this->form_validation->run() == FALSE)
		{	
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
			$this->create();
		}		
		else	
		{
			$date = date('Y-m-d H:i:s');
			
			$userData = [
				'daily_city_name' => $this->input->post('daily_city_name'),
                'created_at' => $date
			];

			$userId = $this->um->insertData("tbl_daily_cities",$userData);

			if($userId > 0){

			$this->session->set_flashdata('success_msg',  "Daily City Inserted Successfully.");
			    redirect('dailycities');
			}else{

				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
				redirect('dailycities/create');
			}
			
		}
	}

	public function edit($daily_city_id)
	{
		$data['page_title'] = "Daily Cities";
		$data['daily'] = $this->um->DailyCitiesDetails('tbl_daily_cities',['daily_city_id' => $daily_city_id])->row_array();
		$this->settemplate->dashboard("daily/edit",$data);
	}

	public function update($daily_city_id)
	{
		$this->form_validation->set_rules('daily_city_name','Daily City Name', 'trim|required');
		if ($this->form_validation->run() == FALSE)
		{	
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
			$this->edit($daily_city_id);
		}		
		else	
		{
			$whr = ['daily_city_id'=> $daily_city_id];
			$userData = [
				'daily_city_name' => $this->input->post('daily_city_name'),
			];
			
			$lastId = $this->um->updateData("tbl_daily_cities",$userData,$whr);
			if($lastId > 0){
				$this->session->set_flashdata('success_msg', "Daily Cities Updated successfully.");
			}else{
				$this->session->set_flashdata('error_msg',  "Failed, Please try again.");
			}
			redirect('dailycities');
		}
	}

	public function delete($daily_city_id)
	{
		
		$whr = ['daily_city_id' => $daily_city_id];

		$productId = $this->um->deleteData("tbl_daily_cities",$whr);
		if($productId > 0){
			$this->session->set_flashdata('success_msg',  "Daily City Remove Successfully.");
		}else{
			$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
		}
		redirect('dailycities');
	}
	
}