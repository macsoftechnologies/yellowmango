<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Area extends CI_Controller {

	public function __Construct(){
		parent::__Construct();
		$this->load->model('UserModel', 'um');
		$this->admin = $this->session->userdata('admin_id');
		is_adlogged_in();
	}

	public function index()
	{
		$data['page_title'] = "Area";
		$data['areas'] = $this->um->AreaDetails('tbl_shipping_charges',['status' => 1]);
		$this->settemplate->dashboard("area/index",$data);
	}

	public function create()
	{
		$data['page_title'] = "Area Create";
		$this->settemplate->dashboard("area/create",$data);
	}

	public function insert()
	{
		$this->form_validation->set_rules('area','Area', 'trim|required');
		$this->form_validation->set_rules('pincode', 'Pincode','trim|required');
		$this->form_validation->set_rules('charge', 'Charge','trim|required');

		if ($this->form_validation->run() == FALSE)
		{	
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
			$this->create();
		}		
		else	
		{

			$date = date('Y-m-d H:i:s');
			
			$userData = [
				'area' => $this->input->post('area'),
				'pincode' => $this->input->post('pincode'),
				'charge' => $this->input->post('charge'),
                'created_at' => $date
			];

			$userId = $this->um->insertData("tbl_shipping_charges",$userData);

			if($userId > 0){

			$this->session->set_flashdata('success_msg',  "Area Created Successfully.");
			    redirect('area');
			}else{

				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
				redirect('area/create');
			}
			
		}
	}

	public function edit($shipping_charge_id)
	{
		$data['page_title'] = "Products";
		$data['areas'] = $this->um->AreaDetails('tbl_shipping_charges',['shipping_charge_id' => $shipping_charge_id])->row_array();
		$this->settemplate->dashboard("area/edit",$data);
	}

	public function update($shipping_charge_id)
	{
		$this->form_validation->set_rules('area','Area', 'trim|required');
		$this->form_validation->set_rules('pincode', 'Pincode','trim|required');
		$this->form_validation->set_rules('charge', 'Charge','trim|required');
		if ($this->form_validation->run() == FALSE)
		{	
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
			$this->edit($shipping_charge_id);
		}		
		else	
		{
			$whr = ['shipping_charge_id'=> $shipping_charge_id];
			$userData = [
				'area' => $this->input->post('area'),
				'pincode' => $this->input->post('pincode'),
				'charge' => $this->input->post('charge'),
                'created_at' => $date
			];
			
			$lastId = $this->um->updateData("tbl_shipping_charges",$userData,$whr);
			if($lastId > 0){
				$this->session->set_flashdata('success_msg', "Area Updated successfully.");
			}else{
				$this->session->set_flashdata('error_msg',  "Failed, Please try again.");
			}
			redirect('area');
		}
	}

	public function delete($shipping_charge_id)
	{
		
		$whr = ['shipping_charge_id' => $shipping_charge_id];
		$producteData = [
			'status' => 0
		];

		$productId = $this->um->updateData("tbl_shipping_charges",$producteData,$whr);
		if($productId > 0){
			$this->session->set_flashdata('success_msg',  "Area Remove Successfully.");
		}else{
			$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
		}
		redirect('area');
	}

	public function show($product_id)
	{
		$data['page_title'] = "Products";
		$data['products'] = $this->um->ProdcutDetails('tbl_products',['product_id' => $product_id])->row_array();
		$data['price'] = $this->um->PriceDetails("tbl_price",['product_id' => $product_id]);

		$this->load->library('ciqrcode');
		$params['data'] = base_url().'home/product_details/'.$product_id;
		$params['level'] = 'H';
		$params['size'] = 10;
		$params['savename'] = FCPATH.$product_id.'.png';
		$this->ciqrcode->generate($params);
		$data['qrImage'] = base_url().$product_id.'.png';
		$this->settemplate->dashboard("products/show",$data);
	}

	public function updateprice($price_id)
	{
		
		$whr = ['price_id' => $price_id];
		$producteData = [
			'price' => $this->input->post('price')
		];

		$productId = $this->um->updateData("tbl_price",$producteData,$whr);
		if($productId > 0){
			$this->session->set_flashdata('success_msg',  "Price Updated Successfully.");
		}else{
			$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
		}
		redirect('products');
	}
	
}