<?php

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
 
class ExcelExport extends CI_Controller 
{

	public function __Construct(){
		parent::__Construct();
		$this->load->model('UserModel', 'um');
	}
 
  public function index() 
  {
		$from = date('Y-m-d', strtotime($this->input->post('from_date')));
		$to = date('Y-m-d', strtotime($this->input->post('to_date')));
		$status = $this->input->post('status');
		$pincode= $this->input->post('postal_code1');
		
		$gated_community_type = $this->input->post('gated_community_type');
		
		
		if($gated_community_type=="gated")
		{
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
			
			$city = $this->input->post('city');
			$consignment_date = $this->input->post('consignment_date');
			$pincode= $this->input->post('postal_code1');

			$orders = $this->um->checkOrderDetailsForCommunity('tbl_order o',$from,$to,$status,$city,$appartment,$consignment_date,$pincode);
			
			$name = "";
			if($city!="")
			{
				$name = $city;
			}
			if($appartment!="")
			{
				$name .="-".$appartment;
			}
			
			if($consignment_date!="")
			{
				$name .="-".$consignment_date;
			}
			
			$fileName = 'gated-orders-'.$name.'.xlsx';
		}
 
		else
		{
			$orders = $this->um->checkOrderDetailsForCommunity3456('tbl_order o',$from,$to,$status,$pincode);
			
			$fileName = 'non-gated-orders.xlsx';
		}
 
  
		$spreadsheet = new Spreadsheet();

		$sheet = $spreadsheet->getActiveSheet();
		
		if($gated_community_type=="non-gated")
		{
			$sheet->setCellValue('A1', 'S.no');
			$sheet->setCellValue('B1', 'Name');
			$sheet->setCellValue('C1', 'Mobile no');
			$sheet->setCellValue('D1', 'Product');       
			$sheet->setCellValue('E1', 'Total Price');       
			$sheet->setCellValue('F1', 'Payment'); 
		}	
		else
		{
			$sheet->setCellValue('A1', 'S.no');
			$sheet->setCellValue('B1', 'Name');
			$sheet->setCellValue('C1', 'Mobile no');
			$sheet->setCellValue('D1', 'Block');
			$sheet->setCellValue('E1', 'Flat No.');
			$sheet->setCellValue('F1', 'Product');       
			$sheet->setCellValue('G1', 'Total Price');       
			$sheet->setCellValue('H1', 'Payment'); 
		}
		$rows = 2;
	  
		//$orders = $this->um->OrderDetails('tbl_order o',[]);  
		
		if($orders->num_rows() > 0)
		{
			
			$counter = 0;
			foreach ($orders->result() as $key => $ord) 
			{
				$counter++;
				
				$products_row ="";
				
				$cartItems = $this->um->cartItemDetails("tbl_cart c",['c.order_status' => $ord->order_id]);
				
				
				
				if($cartItems->num_rows() > 0)
				{
					$item_counter = 0;
					
					foreach ($cartItems->result() as $key1 => $crt) 
					{
						
						$item_counter++;
						
						$products_row.= $item_counter.". ".$crt->product_name." (".$crt->quantity.") \n";
					}
					
				}
				
				
				$sno = $counter;
				$name = $ord->customer_name1." ".$ord->last_name1;
				$mobile = $ord->mobile_number1;
				$block = $ord->block;
				$city = $ord->city;
				$appartment = $ord->appartment;
				$consignment_date = $ord->consignment_date;
				$flat_no = $ord->flat_no;
				$product = $products_row;
				$total_price = $ord->total_price;
				$payment = ($ord->tab =="Pay") ? "Paid" : $ord->tab;
				
				
				if($gated_community_type=="non-gated")
				{
					$sheet->setCellValue('A' . $rows, $sno);
					$sheet->setCellValue('B' . $rows, $name);
					$sheet->setCellValue('C' . $rows, $mobile);
					$sheet->setCellValue('D' . $rows, $product);
					$sheet->setCellValue('E' . $rows, $total_price);
					$sheet->setCellValue('F' . $rows, $payment);
				}
				else
				{
					$sheet->setCellValue('A' . $rows, $sno);
					$sheet->setCellValue('B' . $rows, $name);
					$sheet->setCellValue('C' . $rows, $mobile);
					$sheet->setCellValue('D' . $rows, $block);
					$sheet->setCellValue('E' . $rows, $flat_no);
					$sheet->setCellValue('F' . $rows, $product);
					$sheet->setCellValue('G' . $rows, $total_price);
					$sheet->setCellValue('H' . $rows, $payment);
				}
				$rows++;
			}
		}
		
		$writer = new Xlsx($spreadsheet);

		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment; filename="'. urlencode($fileName).'"');
		$writer->save('php://output');

  }
 
  public function allProducts() 
  {
		
	    $from = date('Y-m-d', strtotime($this->input->post('from_date')));
		$to = date('Y-m-d', strtotime($this->input->post('to_date')));
		$status = $this->input->post('status');
		$pincode= $this->input->post('postal_code1');
		
		$gated_community_type = $this->input->post('gated_community_type');
		
		if($gated_community_type=="gated")
		{
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
			
			$city = $this->input->post('city');
			$consignment_date = $this->input->post('consignment_date');
			
			$orders = $this->um->checkOrderDetailsForCommunity('tbl_order o',$from,$to,$status,$city,$appartment,$consignment_date,$pincode);
			
			
			$name = "";
			if($city!="")
			{
				$name = $city;
			}
			if($appartment!="")
			{
				$name .="-".$appartment;
			}
			
			if($consignment_date!="")
			{
				$name .="-".$consignment_date;
			}
			
			$fileName = 'gated-productlist-'.$name.'.xlsx';
			
		}
 
		else
		{
			$orders = $this->um->checkOrderDetailsForCommunity3456('tbl_order o',$from,$to,$status,$pincode);
			
			$fileName = 'non-gated-productlist.xlsx';  
		}
	  
	    $output_array =  array();
		
		if($orders->num_rows() > 0)
		{

			$query = $this->db->query("select * from tbl_products");
			$rows = $query->num_rows();
			if($rows!=0)
			{
				$record = $query->result_array();
				
				for($i=0;$i<count($record);$i++)
				{
					$product_id = $record[$i]['product_id'];
					$product_name = $record[$i]['product_name'];
					$product_qty = 0; 
					foreach ($orders->result() as $key => $ord) 
					{
						$order_id = $ord->order_id;
						
						$sub_query = $this->db->query("select quantity as qty from tbl_cart where product_id='".$product_id."' and order_status='".$order_id."'  ");
						$sub_rows = $sub_query->num_rows();
						if($sub_rows!=0)
						{
							$res = $sub_query->row_array();							
							$product_qty = $product_qty+ $res['qty'];
						}
					}
					
					if($product_qty !=0)
					{
						array_push($output_array,array("product_id"=>$product_id,"product_name"=>$product_name,"product_qty"=>$product_qty));
					}
				}
			}
			
		}
		
		
		$spreadsheet = new Spreadsheet();

		$sheet = $spreadsheet->getActiveSheet();
		$sheet->setCellValue('A1', 'S.no');
		$sheet->setCellValue('B1', 'Product Name');
		$sheet->setCellValue('C1', 'Product Count');  
		$rows = 2;
		if(count($output_array)!=0)
		{
			$counter = 0;
			for($i=0;$i<count($output_array);$i++)
			{
				$counter++;
				
				$sno = $counter;
				$product_name = $output_array[$i]['product_name'];
				$product_qty = $output_array[$i]['product_qty'];
				
				$sheet->setCellValue('A' . $rows, $sno);
				$sheet->setCellValue('B' . $rows, $product_name);
				$sheet->setCellValue('C' . $rows, $product_qty);
				$rows++;
				
			}
		}
		
		
		$writer = new Xlsx($spreadsheet);

		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment; filename="'. urlencode($fileName).'"');
		$writer->save('php://output');
  }
 
 
}