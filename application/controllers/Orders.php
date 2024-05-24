<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Orders extends CI_Controller {



	public function __Construct(){

		parent::__Construct();

		$this->load->model('UserModel', 'um');

		$this->admin = $this->session->userdata('admin_id');

		is_adlogged_in();

	}



	public function index()
	{

		$data['page_title'] = "Orders";

		$data['from_date'] = '';
		$data['to_date'] = '';
		$data['city'] = '';
		$data['appartment'] = '';
		$data['appartment_name'] = '';
		$data['consignment_date'] = '';
		$data['status'] = '';
		$data['gated_community_type'] = '';
		$data['postal_code1'] = '';
		

		$data['orders'] = $this->um->OrderDetailsThisYear('tbl_order o',[]);
		
		//$data['cities'] = $this->um->DailyCities('tbl_daily_cities');
		$data['cities'] = $this->um->GetCities('tbl_community');
		
		$orderProducts = [];

		$order = $this->um->orderDetailsThisYear("tbl_order o",[]);

		if($order->num_rows() > 0){

			foreach ($order->result() as $key => $ord) {

				$cartItems = $this->um->cartItemDetails("tbl_cart c",['c.order_status' => $ord->order_id]);

				$address = $this->um->OrderAddress('tbl_order_address',['order_id' => $ord->order_id])->row_array();

				array_push($orderProducts, array('order_txn' => $ord->order_txn,'tab' => $ord->tab,'created_at' => $ord->created_at, 'delivery_date' => $ord->delivery_date,'shipping_fee' => $ord->shipping_fee,'community_discount_val'=> $ord->community_discount_val,'community_discount_percentage'=>$ord->community_discount_percentage, 'is_gated_community'=>$ord->is_gated_community,'total_price' => $ord->total_price,'sub_total_amount' => $ord->sub_total_amount,'town_mandal' => $ord->town_mandal, 'city' => $ord->city, 'district' => $ord->district,'state' => $ord->state, 'address1' => $ord->address1,'address2' => $ord->address2, 'email' => $ord->email, 'postal_code' => $ord->postal_code, 'postal_code1' => $ord->postal_code1, 'status' => $ord->status, 'cartData' => $cartItems, 'address' => $address));

			}

		}

		$data['orderData'] = $orderProducts;

		// echo "<pre>";
		// print_r($data['orderData']);
		// exit;

		$this->settemplate->dashboard("orders/index",$data);

	}



	public function vieworderDetails($order_id)

	{

		$data['page_title'] = "Orders";

		$data['orders'] = $this->um->OrderDetails('tbl_order o',['o.order_id' => $order_id])->row_array();

		$data['cartitems'] = $this->um->cartItemDetails('tbl_cart c',['c.order_status' => $order_id]);

		$data['address'] = $this->um->OrderAddress('tbl_order_address',['order_id' => $order_id])->row_array();

		$this->settemplate->dashboard("orders/vieworders",$data);

	}

	public function search()
	{
		$data['page_title'] = "Reports";
		$data['from_date'] = date('d-m-Y', strtotime($this->input->post('from_date')));
		$data['to_date'] = date('d-m-Y', strtotime($this->input->post('to_date')));
		$from = date('Y-m-d', strtotime($this->input->post('from_date')));
		$to = date('Y-m-d', strtotime($this->input->post('to_date')));
		$status = $this->input->post('status');
		$data['postal_code1'] = $pincode = $this->input->post('postal_code1');
		
		
		
		$gated_community_type = $this->input->post('gated_community_type');
		
	
       
	    $data['from_date'] = $this->input->post('from_date');
		$data['to_date'] = $this->input->post('to_date');
		
		$data['status'] = $status ;
		if($gated_community_type=="gated")
		{
			$city = $this->input->post('city');
			
			if(!empty($this->input->post('appartment')))
			{
				$raw_appartment = explode("-",$this->input->post('appartment'));
				$appartment = $raw_appartment[1];
				$community_id = $raw_appartment[0];
			}
			else
			{ 
				$appartment = "";
				$community_id = "";
				
			}
			
			$consignment_date = $this->input->post('consignment_date');
			
			$order = $this->um->checkOrderDetailsForCommunity('tbl_order o',$from,$to,$status,$city,$appartment,$consignment_date, $pincode);
		
			
			$data['city'] = $city;
			$data['appartment'] = $appartment;
			$data['consignment_date'] = $consignment_date;
			$data['community_id'] = $community_id;
			
			$data['gated_community_type'] = "gated";
			$data['orders'] = $order;
			
		}
		else
		{
		    $order = $this->um->checkOrderDetailsForCommunity3456('tbl_order o',$from,$to,$status, $pincode);
// 			$order = $this->um->checkOrderDetails('tbl_order o',[]);
			
			$data['city'] = "";
			$data['appartment'] = "";
			$data['consignment_date'] = "";
			$data['community_id'] = "";
			
			$data['gated_community_type'] = "non-gated";
			$data['orders'] = $order;
		}
		
		$orderProducts = [];

		if($order->num_rows() > 0){

			foreach ($order->result() as $key => $ord) {

				$cartItems = $this->um->cartItemDetails("tbl_cart c",['c.order_status' => $ord->order_id]);

				$address = $this->um->OrderAddress('tbl_order_address',['order_id' => $ord->order_id])->row_array();

				array_push($orderProducts, array('order_txn' => $ord->order_txn,'tab' => $ord->tab,'created_at' => $ord->created_at, 'delivery_date' => $ord->delivery_date,'shipping_fee' => $ord->shipping_fee,'community_discount_val'=> $ord->community_discount_val,'community_discount_percentage'=>$ord->community_discount_percentage, 'is_gated_community'=>$ord->is_gated_community,'total_price' => $ord->total_price,'sub_total_amount' => $ord->sub_total_amount,'town_mandal' => $ord->town_mandal, 'city' => $ord->city, 'district' => $ord->district,'state' => $ord->state, 'address1' => $ord->address1,'address2' => $ord->address2, 'email' => $ord->email, 'postal_code' => $ord->postal_code, 'status' => $ord->status, 'cartData' => $cartItems, 'address' => $address));

			}

		}

		$data['orderData'] = $orderProducts;
		
		
	   $data['cities'] = $this->um->GetCities('tbl_community');
		
	   
	   
        $this->settemplate->dashboard("orders/index",$data);
	}


	public function excelgenerateXls($userids = null) {

		require_once APPPATH."/third_party/PHPExcel.php";

		 // $orders = $this->um->OrderDetails('tbl_order o',[])->result_array();

		 $orders = $this->um->cartItemCartItemDetails('tbl_cart c',[])->result_array();

        $objPHPExcel = new PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);

        // set Header   
        $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'Sno');  
		$objPHPExcel->getActiveSheet()->SetCellValue('B1', 'Date');  
		$objPHPExcel->getActiveSheet()->SetCellValue('C1', 'Customer Name');  
		$objPHPExcel->getActiveSheet()->SetCellValue('D1', 'Email');  
		$objPHPExcel->getActiveSheet()->SetCellValue('E1', 'Mobile number');  
		$objPHPExcel->getActiveSheet()->SetCellValue('F1', 'Order Id');  
		$objPHPExcel->getActiveSheet()->SetCellValue('G1', 'Product Name');  
		$objPHPExcel->getActiveSheet()->SetCellValue('H1', 'Quantity');  
		$objPHPExcel->getActiveSheet()->SetCellValue('I1', 'Total Price');
		$objPHPExcel->getActiveSheet()->SetCellValue('J1', 'Block');
		$objPHPExcel->getActiveSheet()->SetCellValue('K1', 'Home Type'); 
		$objPHPExcel->getActiveSheet()->SetCellValue('L1', 'Street Name'); 
		$objPHPExcel->getActiveSheet()->SetCellValue('M1', 'Area'); 
		$objPHPExcel->getActiveSheet()->SetCellValue('N1', 'Postal Code');
		$objPHPExcel->getActiveSheet()->SetCellValue('O1', 'Note');
		$objPHPExcel->getActiveSheet()->SetCellValue('P1', 'Status');

        // set Row
        $objPHPExcel->getActiveSheet()->getStyle('A1:P1')->getFont()->setBold(true);
        $rowCount = 2;
        $status = 0;
        if(count($orders) > 0){
        	for ($j=0; $j < count($orders); $j++) { 

        		$objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $j+1);

        		$objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, date('d-m-Y ',strtotime($orders[$j]['created_at'])));
	            $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, $orders[$j]['customer_name'].$orders[$j]['last_name']);
	            $objPHPExcel->getActiveSheet()->SetCellValue('D' . $rowCount, $orders[$j]['email']);
	            // $objPHPExcel->getActiveSheet()->SetCellValue('D' . $rowCount, $userObj[$j]['tot_amount']);
	            $objPHPExcel->getActiveSheet()->SetCellValue('E' . $rowCount, $orders[$j]['mobile_number']);
	            $objPHPExcel->getActiveSheet()->SetCellValue('F' . $rowCount, $orders[$j]['order_txn']);
	            $objPHPExcel->getActiveSheet()->SetCellValue('G' . $rowCount, $orders[$j]['product_name']);
	            $objPHPExcel->getActiveSheet()->SetCellValue('H' . $rowCount, $orders[$j]['quantity']);
	            $objPHPExcel->getActiveSheet()->SetCellValue('I' . $rowCount, "$".$orders[$j]['total_price']);
	            $objPHPExcel->getActiveSheet()->SetCellValue('J' . $rowCount, $orders[$j]['block']);
	            $objPHPExcel->getActiveSheet()->SetCellValue('K' . $rowCount, $orders[$j]['home_type']);
	            $objPHPExcel->getActiveSheet()->SetCellValue('L' . $rowCount, $orders[$j]['street']);
	            $objPHPExcel->getActiveSheet()->SetCellValue('M' . $rowCount, $orders[$j]['land_mark']);
	            $objPHPExcel->getActiveSheet()->SetCellValue('N' . $rowCount, $orders[$j]['postal_code']);
	            $objPHPExcel->getActiveSheet()->SetCellValue('O' . $rowCount, $orders[$j]['address']);

	            if($orders[$j]['status'] == 1) {
	            	$status = 'Paid';
	            }else if($orders[$j]['status'] == 2){
	            	$status = 'Pending';
	            }if($orders[$j]['status'] == 3){
	            	$status = 'Delevered';
	            }else {
	            	$status = 'Cancelled';
	            }
	            $objPHPExcel->getActiveSheet()->SetCellValue('P' . $rowCount, $status);
	            $rowCount++;
	        }
	    }
        $filename = "VeeraMango Orders List". date("Y-m-d-H-i-s").".csv";
        header('Content-Type: application/vnd.ms-excel'); 
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0'); 
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'CSV');  
        $objWriter->save('php://output'); 
 
    }

    public function statusupdate($order_id)
	{
		
		$whr = ['order_id' => $order_id];
		$producteData = [
			'status' => $this->input->post('status')
		];

		$productId = $this->um->updateData("tbl_order",$producteData,$whr);
		if($productId > 0){
			if($this->input->post('status') == 2) {
				$this->session->set_flashdata('success_msg',  "Processing Order");

			}else if($this->input->post('status') ==  3){
				$this->session->set_flashdata('success_msg',  "Order Shipped Successfully.");

			}else {
				$this->session->set_flashdata('success_msg',  "Order Delevered Successfully.");

			}
			
		}else{
			$this->session->set_flashdata('error_msg',  "Failed, Somthing went wrong.");
		}
		redirect('orders');
	}


	public function changeQuantity()

	{

		$response = array();



		$order_id = $this->input->post('order_id');

		$status = $this->input->post('status');


		$updatecart =  [

			'status' => $status

		];



		$whr = ['order_id' => $order_id];



		





		$updateId = $this->um->updateData('tbl_order',$updatecart, $whr);



		if($updateId > 0){

			if($status == 1) {
               $name = "Ordered";
			}else if($status == 2){
               $name = "Processing";
			}else if($status == 3){
               $name = "Shipped";
			}else {
				$name = "Delevered";
			}

			$response['status'] = "pass";
			$response['statusdata'] = $name;

		}else{

			$response['status'] = "fail";

		}

		

		echo  json_encode($response);

	}

	public function getTotalDatatcartItemList()

	{

		$response = array();

		$response['orders'] =  $this->um->OrderDetails("tbl_order o",[]);

		// $this->load->view('test', $response);

		$this->load->view('ordertest', $response);

		

		// echo json_encode($response);

	}
	
	
	function deleteOrder($id="0")
	{
		
		$id = $this->uri->segment('3');
				
		$query=$this->um->delete_Order($id);
		$this->session->set_flashdata('success_msg',  "Order Deleted Successfully.");
		
		redirect('orders');
    	
	}
	

}