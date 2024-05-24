<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Community extends CI_Controller {

	public function __Construct(){
		parent::__Construct();
		$this->load->model('UserModel', 'um');
	}

	public function index()
	{
		$data['title'] = "Login";
		$data['cities'] = $this->um->DailyCities('tbl_daily_cities');
		
		$data['community'] = $this->um->getPincodes('tbl_community',[]);

		
		$this->settemplate->dashboard("community/index",$data);
	}

	public function update($community_id)
	{
		$whr = ['community_id' => $community_id];
		
		$city_name = $this->input->post('city');
		
		$itObject = [
			'city_name' => $city_name,
			'appartment' => $this->input->post('appartment'),
			'discount' => $this->input->post('discount'),
			'consignment_date' => $this->input->post('consignment_date'),
		];

		
		$itLastId = $this->um->updateData("tbl_community",$itObject,$whr);

		if($itLastId > 0){
			$this->session->set_flashdata('success_msg',  "Community Updated Successfully.");
			redirect('community');
		}else{
			$this->session->set_flashdata('error_msg',  "Failed, Please check users.");
			redirect('community');
		}
    }

    public function insert()
	{
		$city_name = $this->input->post('city');
		$appartment = $this->input->post('appartment');
		$itObject = [
			'city_name' => $city_name,
			'appartment' => $this->input->post('appartment'),
			'discount' => $this->input->post('discount'),
			'consignment_date' => $this->input->post('consignment_date'),
		];


		$check_if_city_unique = $this->um->checkCityUnique("tbl_community",$city_name,$appartment);

		if($check_if_city_unique==1)
		{
			$itLastId = $this->um->insertData("tbl_community",$itObject);

			if($itLastId > 0){
				$this->session->set_flashdata('success_msg',  "Community Created Successfully.");
				redirect('community');
			}else{
				$this->session->set_flashdata('error_msg',  "Failed, Please check users.");
				redirect('community');
			}
		}
		else
		{
			$this->session->set_flashdata('error_msg',  "City Already Exists.");
				redirect('community');
		}
    }

	
	public function delete($community_id)
	{
		
		$query = $this->db->where('community_id',$community_id)->delete('tbl_community');
		if($query){
			$this->session->set_flashdata('success_msg',  "Community Remove Successfully.");
		}else{
			$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
		}
		redirect('community');
	}
	

}

