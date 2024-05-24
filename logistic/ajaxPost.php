<?php 
function output($Return=array())
{
    /*Set response header*/
    @header('Cache-Control: no-cache, must-revalidate');
    @header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
	@header("Access-Control-Allow-Origin: *");
	@header("Content-Type: application/json; charset=UTF-8");
    /* Final JSON response */
    exit(json_encode($Return));
    die;
}
$Response=array("status"=>0,"message"=>"");

require_once "connection.php";

$id=(!empty($_REQUEST['id'])) ? $_REQUEST['id'] : "" ;

$query = mysqli_query($conn,"select * from stock_input where id='".$id."' "); 
$num_rows = mysqli_num_rows($query);
if($num_rows!=0)
{
	$record = mysqli_fetch_array($query);
	
	$query = mysqli_query($conn,"insert into stock_details(batch_no,product_id,product_name,product_image,qty,manufacturing_date,year) values('".$record['batch_no']."','".$record['product_id']."','".$record['product_name']."','".$record['product_image']."','".$record['qty']."','".$record['manufacturing_date']."','".$record['year']."') ");
	
	$update = mysqli_query($conn,"update stock_input set status='1' where id='".$id."' ");
	
	if($update)
	{
		$Response['status']=1;
		$Response['message']= "Product Scanned Successfully.";
	}
	else
	{
		$Response['status']=0;
		$Response['message']= "Update Failed";
	}
	output($Response);
}
else
{
	$Response['status']=0;
	$Response['message']= "No Record found";
	output($Response);
}

?>