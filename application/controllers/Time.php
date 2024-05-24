<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Time extends CI_Controller {

	public function __Construct(){
		parent::__Construct();
		$this->load->model('UserModel', 'um');
	}

	public function index()
	{
		$data['title'] = "Login";

		$data['days'] = $this->um->getDays('tbl_days',[]);

		
		$this->settemplate->dashboard("time/index",$data);
	}

	public function update($time_id)
	{
		
		$whr = ['time_id' => $time_id];
		$producteData = [
			'time' => $this->input->post('time')
		];

		$productId = $this->um->updateData("tbl_time",$producteData,$whr);
		if($productId > 0){
			$this->session->set_flashdata('success_msg',  "Time Updated Successfully.");
		}else{
			$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
		}
		redirect('dailycities');
	}

	public function updateweekly($time_id)
	{
		
		$whr = ['time_id' => $time_id];
		$producteData = [
			'time' => $this->input->post('time')
		];

		$productId = $this->um->updateData("tbl_time",$producteData,$whr);
		if($productId > 0){
			$this->session->set_flashdata('success_msg',  "Time Updated Successfully.");
		}else{
			$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
		}
		redirect('weeklycities');
	}

	public function insertAttendance()
	{
			$day_id = $this->input->post('day_id');
			$status = 2;

			if(count($day_id) > 0){
					for ($i=0; $i < count($day_id); $i++) { 
						$whr = ['day_id' => $day_id[$i]];
						$itObject = [
							'status' => $status,
						];

						$itLastId = $this->um->updateData("tbl_days",$itObject,$whr);
					}
				}

			if($itLastId > 0){
				$this->session->set_flashdata('success_msg',  "Days De-Active Successfully.");
			}else{
				$this->session->set_flashdata('error_msg',  "Failed, Please check users.");
			}
 
			
			redirect('time');
	}


	public function changeStatus($day_id)
	{
		$whr = ['day_id' => $day_id];
		$itObject = [
			'status' => 1,
		];

		$itLastId = $this->um->updateData("tbl_days",$itObject,$whr);

	if($itLastId > 0){
		$this->session->set_flashdata('success_msg',  "Days Active Successfully.");
	}else{
		$this->session->set_flashdata('error_msg',  "Failed, Please check users.");
	}
 
			
	redirect('time');
	}


	public function scroll()
	{
		$data['title'] = "Scroll";

		$data['scroll'] = $this->um->getScroll('tbl_scroll',[]);

		
		$this->settemplate->dashboard("scroll/index",$data);
	}

	public function updatescroll($scroll_id)
	{
		$whr = ['scroll_id' => $scroll_id];
		$itObject = [
			'scroll_name' => $this->input->post('scroll_name'),
		];

		$itLastId = $this->um->updateData("tbl_scroll",$itObject,$whr);

	if($itLastId > 0){
		$this->session->set_flashdata('success_msg',  "Scroll Updated Successfully.");
		redirect('time/scroll');
	}else{
		$this->session->set_flashdata('error_msg',  "Failed, Please check users.");
		redirect('time/scroll');
	}
}

	

}

