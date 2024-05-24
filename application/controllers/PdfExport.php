<?php
class PdfExport extends CI_Controller 
{

	public function __Construct(){
		parent::__Construct();
		$this->load->model('UserModel', 'um');
	}
 
	public function index()
	 {
		  
		  $gated_community_type = $this->input->post('gated_community_type');
			
		  $html="
				<html>
					<head>
						<style>
							#orders {
							  font-family: Arial, Helvetica, sans-serif;
							  border-collapse: collapse;
							  width: 100%;
							}

							#orders td, #orders th {
							  border: 1px solid #ddd;
							  padding: 8px;
							}

							#orders tr:nth-child(even){background-color: #f2f2f2;}

							#orders tr:hover {background-color: #ddd;}

							#orders th {
							  padding-top: 12px;
							  padding-bottom: 12px;
							  text-align: left;
							  background-color: #04AA6D;
							  color: white;
							}
						</style>
					</head>
				<body>
					<h2> Order List </h2> <br/>
				<table id='orders'> 
					<thead>
						<tr>
							<th>S.no</th>
							<th>Name</th>
							<th>Mobile no</th>";
							
							if($gated_community_type=="gated")
							{
								 $html.="<th>Block</th>
							<th>Flat No.</th>";
							}
							
							$html.="
							<th>Product</th>
							<th>Total Price</th>
							<th>Payment</th>
						</tr>
					</thead>
					<tbody>";
		 
			$from = date('Y-m-d', strtotime($this->input->post('from_date')));
			$to = date('Y-m-d', strtotime($this->input->post('to_date')));
			$status = $this->input->post('status');
			$pincode= $this->input->post('postal_code1');
			
			
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
				
				$fileName = 'gated-orders-'.$name.'.pdf';
				
			}
	 
			else
			{
				$orders = $this->um->checkOrderDetailsForCommunity3456('tbl_order o',$from,$to,$status,$pincode);
				
				$fileName = 'non-gated-orders.pdf';  
			}
	 
	 
	 
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
							
							$products_row.= $item_counter.". ".$crt->product_name." (".$crt->quantity.") <br/>";
						}
						
					}
					
					
					$sno = $counter;
					$name = $ord->customer_name1." ".$ord->last_name1;
					$mobile = $ord->mobile_number1;
					$block = $ord->block;
					$flat_no = $ord->flat_no;
					$product = $products_row;
					$total_price = $ord->total_price;
					$payment = ($ord->tab =="Pay") ? "Paid" : $ord->tab;
					$city = $ord->city;
					$appartment = $ord->appartment;
					$consignment_date = $ord->consignment_date;
					
					
					if($gated_community_type=="gated")
					{
						$html.="<tr>
								<td>".$sno."</td>
								<td>".$name."</td>
								<td>".$mobile."</td>
								<td>".$block."</td>
								<td>".$flat_no."</td>
								<td>".$product."</td>
								<td>".$total_price."</td>
								<td>".$payment."</td>
							</tr>";
					}
					else
					{
						$html.="<tr>
								<td>".$sno."</td>
								<td>".$name."</td>
								<td>".$mobile."</td>
								<td>".$product."</td>
								<td>".$total_price."</td>
								<td>".$payment."</td>
							</tr>";
					}
				}
			}
			
			$html.="</tbody>
					</table>
					</body>
					</html>";
		 
		  $mpdf = new \Mpdf\Mpdf();
		  //$html = $this->load->view('html_to_pdf',[],true);
		  
		  $mpdf->WriteHTML($html);
		  $mpdf->AddPage('L');
		  //$mpdf->Output(); // opens in browser
		  $mpdf->Output($fileName,'D'); 
	}
 
	
    public function allProductsPdf() 
   {
	  
		$from = date('Y-m-d', strtotime($this->input->post('from_date')));
		$to = date('Y-m-d', strtotime($this->input->post('to_date')));
		$status = $this->input->post('status');
		
		$gated_community_type = $this->input->post('gated_community_type');
		$pincode= $this->input->post('postal_code1');
		
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
			
			$fileName = 'gated-productlist-'.$name.'.pdf';
		
		}
 
		else
		{
			$orders = $this->um->checkOrderDetailsForCommunity3456('tbl_order o',$from,$to,$status,$pincode);
			$fileName = 'non-gated-productlist.pdf';  
			
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
		
		 $html="
				<html>
					<head>
						<style>
							#orders {
							  font-family: Arial, Helvetica, sans-serif;
							  border-collapse: collapse;
							  width: 100%;
							}

							#orders td, #orders th {
							  border: 1px solid #ddd;
							  padding: 8px;
							}

							#orders tr:nth-child(even){background-color: #f2f2f2;}

							#orders tr:hover {background-color: #ddd;}

							#orders th {
							  padding-top: 12px;
							  padding-bottom: 12px;
							  text-align: left;
							  background-color: #04AA6D;
							  color: white;
							}
						</style>
					</head>
				<body>
					<h2> Product List </h2> <br/>
				<table id='orders'> 
					<thead>
						<tr>
							<th>S.no</th>
							<th>Product Name</th>
							<th>Product Count</th>
						</tr>
					</thead>
					<tbody>";
					

		if(count($output_array)!=0)
		{
			$counter = 0;
			for($i=0;$i<count($output_array);$i++)
			{
				$counter++;
				
				$sno = $counter;
				$product_name = $output_array[$i]['product_name'];
				$product_qty = $output_array[$i]['product_qty'];
				
				
				$html.="<tr>
								<td>".$sno."</td>
								<td>".$product_name."</td>
								<td>".$product_qty."</td>
							</tr>";
							
			}
		}
		
		$html.="</tbody>
					</table>
					</body>
					</html>";
		 
	  $mpdf = new \Mpdf\Mpdf();
	  //$html = $this->load->view('html_to_pdf',[],true);
	  $mpdf->WriteHTML($html);
	  //$mpdf->Output(); // opens in browser
	  $mpdf->Output($fileName,'D'); 
  }
  
 
 
}