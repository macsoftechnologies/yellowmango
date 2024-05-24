<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Pincodes extends CI_Controller {

	public function __Construct(){
		parent::__Construct();
		$this->load->model('UserModel', 'um');
	}

	public function index()
	{
		$data['title'] = "Login";

		$data['pincodes'] = $this->um->getsortbyPincodes('tbl_pincode',[]);

		
		$this->settemplate->dashboard("pincodes/index",$data);
	}

	public function update($range)
	{
		$whr = ['range' => $range];
		$lastId = $this->um->deleteData("tbl_pincode", $whr);
		
		 $pincodetange = $this->input->post('pincode2')-$this->input->post('pincode')+1;
// 		$itObject = [
// 			'pincode' => $this->input->post('pincode'),
// 			'price' => $this->input->post('price'),
// 		];

// 		$itLastId = $this->um->updateData("tbl_pincode",$itObject,$whr);
		
		
		if($pincodetange > 0){
			for ($i=0; $i < $pincodetange; $i++) { 
					$itObject = [
					'pincode' => $this->input->post('pincode')+$i,
					'price' => $this->input->post('price'),
					'range' => $this->input->post('pincode2')
					];
					$itLastId = $this->um->insertData("tbl_pincode",$itObject);
				}
		}

		if($itLastId > 0){
			$this->session->set_flashdata('success_msg',  "Pincode and Price Updated Successfully.");
			redirect('pincodes');
		}else{
			$this->session->set_flashdata('error_msg',  "Failed, Please check users.");
			redirect('pincodes');
		}
    }

    public function insert()
	{
	    $pincodetange = $this->input->post('pincode2')-$this->input->post('pincode')+1;
	    
	   // echo "<pre>";
	   // print_r($pincodetange);
	   // exit;
	    
	    if($pincodetange > 0){
			for ($i=0; $i < $pincodetange; $i++) { 
					$itObject = [
					'pincode' => $this->input->post('pincode')+$i,
					'price' => $this->input->post('price'),
					'range' => $this->input->post('pincode2')
					];
					$itLastId = $this->um->insertData("tbl_pincode",$itObject);
				}
		}
	    
// 		$sditObject = [
// 			'pincode' => $this->input->post('pincode'),
// 			'price' => $this->input->post('price'),
// 			'range' => $this->input->post('pincode2')
// 		];

// 		$fgitLastId = $this->um->insertData("tbl_pincode",$itObject);

		if($itLastId > 0){
			$this->session->set_flashdata('success_msg',  "Pincode and Price Created Successfully.");
			redirect('pincodes');
		}else{
			$this->session->set_flashdata('error_msg',  "Failed, Please check users.");
			redirect('pincodes');
		}
    }
    
    public function delete($range)
	{
		$whr = ['range' => $range];
			$lastId = $this->um->deleteData("tbl_pincode", $whr);
			if($lastId > 0){

				$this->session->set_flashdata('success_msg',  "Pincode Delete Successfully.");
			}else{
				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
			}
		redirect('pincodes');
	}
	
	public function enableupdate($range)
	{
		$whr = ['range' => $range];
		
		$itObject = [
			'payondelivery' => 0
		];

		$itLastId = $this->um->updateData("tbl_pincode",$itObject,$whr);
		

		if($itLastId > 0){
			$this->session->set_flashdata('success_msg',  "Disable Pay on Delievry Successfully.");
			redirect('pincodes');
		}else{
			$this->session->set_flashdata('error_msg',  "Failed, Please check users.");
			redirect('pincodes');
		}
    }
    
    public function disableupdate($range)
	{
		$whr = ['range' => $range];
		
		$itObject = [
			'payondelivery' => 1
		];

		$itLastId = $this->um->updateData("tbl_pincode",$itObject,$whr);
		

		if($itLastId > 0){
			$this->session->set_flashdata('success_msg',  "Enable Pay on Delievry Successfully.");
			redirect('pincodes');
		}else{
			$this->session->set_flashdata('error_msg',  "Failed, Please check users.");
			redirect('pincodes');
		}
    }

	

}

