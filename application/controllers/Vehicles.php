<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehicles extends CI_Controller {

	public function __Construct(){
		parent::__Construct();
		$this->load->model('UserModel', 'um');
		$this->user_id = $this->session->userdata('user_id');
		$this->email = $this->session->userdata('email');
	}
	
	public function index()
	{
		$data['page_title'] = "Motor Hire Purchase System";
		$data['motor'] = $this->um->VehicleDetails("tbl_vehicles",['status' => 1]);
		$this->settemplate->dashboard("vehicles/index",$data);
	}

	public function create()
	{
		$data['page_title'] = "Motor Hire Purchase System";
		$data['customers'] = $this->um->CustomerDetails('tbl_customer',[]);
		$data['products'] = $this->um->ProdcutDetails('tbl_products',[]);
		$this->settemplate->dashboard("vehicles/create",$data);
	}

	public function insert()
	{
		$this->form_validation->set_rules('customer_id', 'Customer Name', 'trim|required');
		$this->form_validation->set_rules('new_ic', 'New IC', 'trim|required');
		if ($this->form_validation->run() == FALSE)
		{	
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
			$this->create();
		}		
		else	
		{

			$customers = $this->um->CustomerDetails('tbl_customer',['customer_id' => $this->input->post('customer_id')])->row_array();
			$products = $this->um->ProdcutDetails('tbl_products',['product_id' => $this->input->post('product_id')])->row_array();
			$date = date('Y-m-d H:i:s');
			$vehicleData = [
				'customer_id' => $this->input->post('customer_id'),
				'customer_name' => $customers['customer_name'],
				'new_ic' => $this->input->post('new_ic'),
				'guarantor_name' => $this->input->post('guarantor_name'),
				'product_id' => $this->input->post('product_id'),
				'product_name' => $products['product_name'],
				'product_brand' => $this->input->post('product_brand'),
				'product_model' => $this->input->post('product_model'),
				'purchase_type' => $this->input->post('purchase_type'),
				'registration_number' => $this->input->post('registration_number'),
				'price' => $this->input->post('price'),
				'processing_fees' => $this->input->post('processing_fees'),
				'registration_charges' => $this->input->post('registration_charges'),
				'deposit' => $this->input->post('deposit'),
				'finance_price' => $this->input->post('finance_price'),
				'tenor' => $this->input->post('tenor'),
				'interest_charges' => $this->input->post('interest_charges'),
				'rate_of_interest' => $this->input->post('rate_of_interest'),
				// 'rental_charges' => $this->input->post('rental_charges'),
				'emi' => $this->input->post('emi'),
				'total_price' => $this->input->post('total_price') + $this->input->post('deposit'),
				'engine_number' => $this->input->post('engine_number'),
				'chassis_number' => $this->input->post('chassis_number'),
				'credit_source' => $this->input->post('credit_source'),
				'type' => $this->input->post('type'),
				'created_at' => $date
			];

			$vehicleId = $this->um->insertData("tbl_vehicles",$vehicleData);
			if($vehicleId > 0){

				$this->session->set_flashdata('success_msg',  "Motor Hire Purchase System Created Successfully.");
			}else{
				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
			}
			redirect('vehicles');
		}
	}

	public function edit($id)
	{
		$data['page_title'] = "Vehicle";
		$data['vehicle'] = $this->am->getupdatevehicleDetails("tbl_vehicle_details",['id' => $id]);
		$this->settemplate->addashboard("vehicles/edit",$data);
	}

	public function update($id)
	{
		$this->form_validation->set_rules('name_of_the_policy_holder', 'Name Of The PolicyHolder', 'trim|required');
		$this->form_validation->set_rules('policy_holder_father_name', 'PolicyHolder FatherName', 'trim|required');
		$this->form_validation->set_rules('product', 'Product', 'trim|required');
		$this->form_validation->set_rules('insured_address', 'Insured Address', 'trim|required');
		$this->form_validation->set_rules('registration_number', 'Registration Number', 'trim|required');
		$this->form_validation->set_rules('make', 'Make', 'trim|required');
		$this->form_validation->set_rules('sub_type', 'Sub Type', 'trim|required');
		$this->form_validation->set_rules('model', 'Model', 'trim|required');
		$this->form_validation->set_rules('cc_kw', 'CC_KW', 'trim|required');
		$this->form_validation->set_rules('mfg_year', 'Manufacture Year', 'trim|required');
		$this->form_validation->set_rules('seat_cap', 'Seat Cap', 'trim|required');
		$this->form_validation->set_rules('chasis_no', 'Chasis No', 'trim|required');
		$this->form_validation->set_rules('engine_number', 'Engine Number', 'trim|required');
		$this->form_validation->set_rules('vehicle_idv', 'Vehicle IDV', 'trim|required');
		$this->form_validation->set_rules('elec_acc', 'Elec Acc', 'trim|required');
		$this->form_validation->set_rules('non_elec_acc', 'Non Elec Acc', 'trim|required');
		$this->form_validation->set_rules('side_car', 'Sidebar', 'trim|required');
		$this->form_validation->set_rules('trailer_reg_no', 'Trailer Reg No', 'trim|required');
		$this->form_validation->set_rules('cng_lpg_unit', 'CNG/LPG Unit', 'trim|required');
		$this->form_validation->set_rules('total_sum_insured', 'Total Sum Insured', 'trim|required');
		$this->form_validation->set_rules('total_premium', 'Total Premium', 'trim|required');
		if ($this->form_validation->run() == FALSE)
		{	
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
			$this->edit($id);
		}		
		else	
		{
			$whr = ['id'=> $id];
			$date = date('m-d-Y');
			$vehicleData = [
				'name_of_the_policy_holder' => $this->input->post('name_of_the_policy_holder'),
				'policy_holder_father_name' => $this->input->post('policy_holder_father_name'),
				'product' => $this->input->post('product'),
				'period_of_insurence_from' => $date,
				'period_of_insurence_to' => $date,
				'policy_issued_on' => $date,
				'insured_address' => $this->input->post('insured_address'),
				'registration_number' => $this->input->post('registration_number'),
				'make' => $this->input->post('make'),
				'sub_type' => $this->input->post('sub_type'),
				'model' => $this->input->post('model'),
				'cc_kw' => $this->input->post('cc_kw'),
				'mfg_year' => $this->input->post('mfg_year'),
				'seat_cap' => $this->input->post('seat_cap'),
				'chasis_no' => $this->input->post('chasis_no'),
				'engine_number' => $this->input->post('engine_number'),
				'vehicle_idv' => $this->input->post('vehicle_idv'),
				'elec_acc' => $this->input->post('elec_acc'),
				'non_elec_acc' => $this->input->post('non_elec_acc'),
				'side_car' => $this->input->post('side_car'),
				'trailer_reg_no' => $this->input->post('trailer_reg_no'),
				'cng_lpg_unit' => $this->input->post('cng_lpg_unit'),
				'total_sum_insured' => $this->input->post('total_sum_insured'),
				'total_premium' => $this->input->post('total_premium'),
				'customer_phone' => $this->input->post('customer_phone'),
				'agent_phone' => $this->input->post('agent_phone')
			];

			$vehicleId = $this->im->updateData("tbl_vehicle_details",$vehicleData,$whr);
			if($vehicleId > 0){
				$this->session->set_flashdata('success_msg',  "Vehicle Updated Successfully.");
			}else{
				$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
			}
			redirect('vehicle');
		}
	}

	// public function show($id)
	// {
	// 	$data['page_title'] = "Vehicle show";
	// 	$data['vehicle'] = $this->am->getvehicleDetails("tbl_vehicle_details",['id' => $id]);
	// 	$data['settings'] = $this->am->getSettings("tbl_settings",['status' => 1]);

	// 	$this->load->library('ciqrcode');
	// 	$params['data'] = base_url().'search/download/'.$id;
	// 	$params['level'] = 'H';
	// 	$params['size'] = 10;
	// 	$params['savename'] = FCPATH.$id.'.png';
	// 	$this->ciqrcode->generate($params);
	// 	$data['qrImage'] = base_url().$id.'.png';
		
	// 	$this->settemplate->addashboard("vehicles/show",$data);
	// }

	public function getPricevalue($value='')
	{
		$response = array();
		// echo "<pre>";
		// print_r($this->input->post('name'));
		// exit;
		$checkUser = $this->um->getPriceData("tbl_products",$this->input->post('product_id'));
		$checkBrand = $this->um->getProductBrandData("tbl_products",$this->input->post('product_id'));
		$checkModel = $this->um->getProductModelData("tbl_products",$this->input->post('product_id'));
		if($checkUser != ""){
			$response['res'] = "pass";
			$response['price'] = $checkUser;
			$response['product_brand'] = $checkBrand;
			$response['product_model'] = $checkModel;
			// $response['outward'] = $checkquantitythree;
		}else{
			$response['res'] = "fail";
		}
		echo json_encode($response);
	}

	public function getCustomersvalue($value='')
	{
		$response = array();
		// echo "<pre>";
		// print_r($this->input->post('name'));
		// exit;
		$checkUser = $this->um->getICCData("tbl_customer",$this->input->post('customer_id'));
		$checkPassport = $this->um->getPassportData("tbl_customer",$this->input->post('customer_id'));
		$guarantor = $this->um->getGuarantorData("tbl_customer",$this->input->post('customer_id'));
		if($checkUser != ""){
			$response['res'] = "pass";
			$response['new_ic'] = $checkUser;
			$response['passport'] = $checkPassport;
			$response['guarantor_name'] = $guarantor;
		}else{
			$response['res'] = "fail";
		}
		echo json_encode($response);
	}


	public function show($vehicle_id)
	{
		$data['page_title'] = "Motor Hire Purchase System";
		$data['motor'] = $this->um->VehicleDetails("tbl_vehicles",['vehicle_id' => $vehicle_id])->row_array();
		$this->settemplate->dashboard("vehicles/show",$data);
	}



}