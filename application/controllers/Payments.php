<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payments extends CI_Controller {

	public function __Construct(){
		parent::__Construct();
		$this->load->model('UserModel', 'um');
		$this->admin = $this->session->userdata('admin_id');
		is_adlogged_in();
	}

	public function index()
	{
		$data['page_title'] = "Payments";
		$data['subjects'] = $this->um->SubjectDetails('tbl_subject_data',[]);
		$data['users'] = $this->um->StudentDetails('tbl_users',[]);
		$data['months'] = $this->um->MonthDetails('tbl_month',[]);
		$brandProducts = [];

		$users = $this->um->StudentDetails('tbl_users',[]);
		if($users->num_rows() > 0){
			foreach ($users->result() as $key => $us) {
				$prod = $this->um->UserSubjectDetails('tbl_subjects',['user_id' => $us->user_id])->result_array();
				array_push($brandProducts, array('user_id' => $us->user_id, 'day' => $us->day, 'student_name' => $us->student_name, 'student_ic' => $us->student_ic, 'father_mother' => $us->father_mother, 'father_mother_ic' => $us->father_mother_ic, 'phone_number' => $us->phone_number, 'email' => $us->email, 'products' => $prod));
			}
		}
		$data['bProducts'] = $brandProducts;


		$this->settemplate->dashboard("payments/index",$data);
	}

	public function payment()
	{
		
		$whr = ['subject_id' => $this->input->post('subject_id')];

		$productId = $this->um->deleteData("tbl_subjects",$whr);

	// 	$date = date('Y-m-d');
	// 	$user_txn = "TXN".time();

	// 	$payment = [
	// 		'txn_date' => $this->input->post('txn_date'),
	// 		'txn_id' => $this->input->post('txn_id'),
	// 		'receipt_no' => $this->input->post('receipt_no'),
	// 		'bank_name' => $this->input->post('bank_name'),
	// 		'payment_type' => $this->input->post('payment_type'),
	// 		'amount' => $this->input->post('amount'),
	// 		'month' => $this->input->post('month')
	// ];


	$date = date('Y-m-d H:i:s');

			$userId = $this->input->post('user_id');

			$subjects = $this->input->post('subjects');

			$txn_date = $this->input->post('txn_date');

			$amount = $this->input->post('amount');

			$txn_id = $this->input->post('txn_id');

			$payment_type = $this->input->post('payment_type');

			$receipt_no = $this->input->post('receipt_no');

			$bank_name = $this->input->post('bank_name');

			$month = $this->input->post('month');



            	 if(count($month) > 0){
					for ($i=0; $i < count($month); $i++) { 
						$user_txn = "TXN".time();

					        		$itObject = [
										'user_id' => $userId,
										'subject_name' => $subjects,
										'month' => $month[$i],
										'payment_type' => $payment_type,
										'bank_name' => $bank_name,
										'receipt_no' => $receipt_no,
										'txn_date' =>  $txn_date,
										'amount' => $amount,
										'txn_id' => $txn_id
									];

						$itLastId = $this->um->insertData("tbl_subjects",$itObject);
					}
				}


		$productId = $this->um->insertData("tbl_subjects",$payment, $whr);
		if($productId > 0){
			$this->session->set_flashdata('success_msg',  "Transaction Completed Successfully.");
		}else{
			$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
		}
		redirect('payments');
	}

	public function insertsubjects()
	{
			$date = date('Y-m-d H:i:s');

			$userId = $this->input->post('user_id');

			$subjects = $this->input->post('subjects');

			$txn_date = $this->input->post('txn_date');

			$amount = $this->input->post('amount');

			$txn_id = $this->input->post('txn_id');

			$payment_type = $this->input->post('payment_type');

			$receipt_no = $this->input->post('receipt_no');

			$bank_name = $this->input->post('bank_name');

			$month = $this->input->post('month');

			$sub = $this->um->UserSubjectDetails('tbl_subjects',['user_id' => $userId])->result_array();

            	 if(count($month) > 0){
					for ($i=0; $i < count($month); $i++) { 
						$user_txn = "TXN".time();

					        		$itObject = [
										'user_id' => $userId,
										'subject_name' => $subjects,
										'month' => $month[$i],
										'payment_type' => $payment_type,
										'bank_name' => $bank_name,
										'receipt_no' => $receipt_no,
										'txn_date' =>  $txn_date,
										'amount' => $amount,
										'txn_id' => $txn_id
									];

						$itLastId = $this->um->insertData("tbl_subjects",$itObject);
					}
				}

        if($itLastId > 0){
			$this->session->set_flashdata('success_msg',  "Assign Subjects Successfully.");
		}else{
			$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
		}
		redirect('payments');
			
	}
	
}