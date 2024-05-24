<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addashboard extends CI_Controller {

	public function __Construct(){
		parent::__Construct();
		$this->load->model('UserModel', 'um');
		$this->admin = $this->session->userdata('admin_id');
		is_adlogged_in();
	}

	public function index()
	{
		$data['page_title'] = "Admin";
		$data['customers'] = $this->um->CustomerDetails('tbl_customer',[])->result_array();
		$data['users'] = $this->um->getAdminDtata('tbl_admin',['role_id' => 2])->result_array();
		$data['products'] = $brands = $this->um->ProdcutDetails('tbl_products',['status' => 1])->result_array();
		$data['orders'] = $this->um->OrderDataDetails('tbl_order',[])->result_array();
		$data['orde'] = count($data['orders']);
// 		echo "<pre>";
// 		print_r(count($data['orders']));
// 		exit;
		$data['weekly'] = $this->um->WeeklyCitiesDetails('tbl_weekly_cities',[])->result_array();
		$data['daily'] = $this->um->DailyCitiesDetails('tbl_daily_cities',[])->result_array();

		$brands = $this->um->ProdcutDetails('tbl_products',[]);
		$brandProducts = [];
		if($brands->num_rows() > 0){
			foreach ($brands->result() as $key => $bnd) {
				$prod = $this->um->PriceDetails("tbl_price",['product_id' => $bnd->product_id])->result_array();
				array_push($brandProducts, array('stock' => $bnd->stock, 'outward' => $bnd->outward, 'product_id' => $bnd->product_id, 'product_image' => $bnd->product_image, 'min_max_price' => $bnd->min_max_price, 'product_name' => $bnd->product_name, 'sizes' => $prod));
			}
		}
		$data['bProducts'] = $brandProducts;
		$this->settemplate->dashboard("admin/dashboard",$data);
	}

	public function changePassword()
	{
		$data['page_title'] = "Change Password";
		$data['adminId'] = $this->admin;
		$this->settemplate->dashboard("admin/changePassword",$data);
	}

	public function update($adminId)
	{
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
       	$this->form_validation->set_rules('new_pasword', 'New Password', 'required|matches[password]');
		if ($this->form_validation->run() == FALSE)
		{	
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
			$this->index();
		}		
		else	
		{
			$whr = ['admin_id'=> $adminId];
			$userData = [
				'password' => md5($this->input->post('password'))
			];
			
			$lastId = $this->um->updateData("tbl_admin",$userData,$whr);
			if($lastId > 0){
				$this->session->set_flashdata('success_msg', "Password Updated successfully.");
			}else{
				$this->session->set_flashdata('error_msg',  "Failed, Please try again.");
			}
			redirect('addashboard/changePassword');
		}
	}	
}