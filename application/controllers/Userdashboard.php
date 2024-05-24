<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userdashboard extends CI_Controller {

	public function __Construct(){
		parent::__Construct();
		$this->load->model('UserModel', 'um');
		$this->user = $this->session->userdata('user_id');
		if($this->session->userdata('user_id') == ''){
			redirect("userlogin");
		}else { 
		}
		// is_userlogged_in();
	}

	public function index()
	{
		$data['page_title'] = "Admin";
		$data['users'] = $this->um->StudentDetails('tbl_users',['user_id' => $this->session->userdata('user_id')])->row_array();
		$this->settemplate->userdashboard("users/dashboard",$data);
	}

	public function payments()
	{
		$data['page_title'] = "Payments";
		$data['subjects'] = $this->um->SubjectDetails('tbl_subject_data',[]);
		$data['users'] = $this->um->StudentDetails('tbl_users',['user_id' => $this->session->userdata('user_id')]);

		$brandProducts = [];

		$users = $this->um->StudentDetails('tbl_users',['user_id' => $this->session->userdata('user_id')]);
		if($users->num_rows() > 0){
			foreach ($users->result() as $key => $us) {
				$prod = $this->um->UserSubjectDetails('tbl_subjects',['user_id' => $us->user_id])->result_array();
				array_push($brandProducts, array('user_id' => $us->user_id, 'day' => $us->day, 'student_name' => $us->student_name, 'student_ic' => $us->student_ic, 'father_mother' => $us->father_mother, 'father_mother_ic' => $us->father_mother_ic, 'phone_number' => $us->phone_number, 'email' => $us->email, 'products' => $prod));
			}
		}
		$data['bProducts'] = $brandProducts;


		$this->settemplate->userdashboard("users/payments",$data);
	}
}