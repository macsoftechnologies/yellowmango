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

require_once "connection.php";

$batch_no=(!empty($_REQUEST['batch_no'])) ? $_REQUEST['batch_no'] : "" ;
$product_id=(!empty($_REQUEST['product_id'])) ? $_REQUEST['product_id'] : "" ;
$product_name=(!empty($_REQUEST['product_name'])) ? $_REQUEST['product_name'] : "" ;
$product_image=(!empty($_REQUEST['product_image'])) ? $_REQUEST['product_image'] : "" ;
$qty=(!empty($_REQUEST['qty'])) ? $_REQUEST['qty'] : "" ;
$manufacturing_date=(!empty($_REQUEST['manufacturing_date'])) ? $_REQUEST['manufacturing_date'] : "" ;
$year=(!empty($_REQUEST['year'])) ? $_REQUEST['year'] : "" ;


$query = mysqli_query($conn,"insert into stock_details(batch_no,product_id,product_name,product_image,qty,manufacturing_date,year) values('".$batch_no."','".$product_id."','".$product_name."','".$product_image."','".$qty."','".$manufacturing_date."','".$year."') ");
if($query)
{
	$status=1;
	$message= "Data has been updated successfully. Redirecting please wait..";
}
else
{
	$status=0;
	$message= "Record Entry Failed. Redirecting please wait..";
}


if($status == 0)
{
	echo "<h2>".$message."</h2>";
	header("Refresh:2;url=index.php");
}
else
{
	echo "<h2>".$message."</h2>";
	header("Refresh:2;url=stock_record.php");
}



?>