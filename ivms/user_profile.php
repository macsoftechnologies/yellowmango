<?php 
include('db_connect_db_new.php');  
  session_start();	$r_id = $_SESSION['rid'];
	$sql = "SELECT * FROM info_visitor WHERE ReceiptID = $r_id";
  $re = mysqli_query($link, $sql);
  $result = mysqli_fetch_array($re, MYSQLI_ASSOC);
	
?>
<html>
<head>
<title> User Profile </title>
<meta charset="UTF-8">
<meta content="text/html; charset=windows-1252" http-equiv="content-type">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="BootStrap/css/bootstrap.min.css">
<style>
@media print {
/* style sheet for print goes here */
.hide-from-printer{  display:none; }
}
</style> 
</head>
<body style="padding:20px;">
	<table style="width:450px;margin:auto;border-collapse: collapse; border: 1px solid #000000;">
		<caption style="text-align:center;font-size:24px;"> <b> Welcome To Havells India Ltd.-Neemrana </b></caption>
		<tbody>
			<tr style="height:32px; width:450px; margin:0;">
				<td style="height:32px; margin:0; padding:5px 5px" >
				<b>Date:</b> <?php echo $result['Date'];?> <br/><br/>
				<b>Time In:</b> <?php echo $result['TimeIN']?>
				</td>
				<td style="height:32px; margin:0; padding:5px 5px" rowspan="1">
				<img src="<?php echo $result['profile_photo']; ?>" style="width:160px; height:120px;float:right;border:solid thin #ddd;">
				</td>
			</tr>
			
			<tr style="height:32px; width:450px; margin:0;border-top:solid thin #ddd;">
				<td colspan='2' style="height:32px; width:40px;margin:0; padding:5px 5px"><b>Name:</b> <?php echo $result['Name'];?></td>
			</tr>
			
			<tr style="height:32px; width:450px; margin:0;">
				<td colspan='2' style="height:32px;margin:0; padding:5px 5px; line-height:2.6rem"><b>Contact No:</b> <?php echo $result['Contact']?> </td>
			</tr>
			<tr style="height:32px; width:450px; margin:0;">
				<td colspan='2' style="height:32px;margin:0; padding:5px 5px; line-height:2.6rem"><b>Purpose:</b> <?php echo $result['Purpose']; ?> </td>
			</tr>
			<tr style="height:32px; width:450px; margin:0;">
				<td colspan='2' style="height:32px;margin:0; padding:5px 5px; line-height:2.6rem"><b>Meeting:</b> <?php echo $result['meetingTo']; ?> </td>
			</tr>
			<tr style="height:32px; width:450px; margin:0;">
				<td colspan='2' style="height:32px;margin:0; padding:5px 5px; line-height:2.6rem"><b>Receipt ID:</b> <?php echo $result['ReceiptID']; ?> </td>
			</tr>
			<tr style="height:32px; width:450px; margin:0;">
				<td colspan='2' style="height:32px;margin:0; padding:5px 5px; line-height:2.6rem"><b>Id Details:</b> <?php echo $result['ids']; ?> </td>
			</tr>
			<tr style="height:32px; width:450px; margin:0;">
				<td colspan='2' style="height:32px;margin:0; padding:5px 5px; line-height:2.6rem"><b>Vehicle Details:</b> Signature of Security Guard <?php echo $result['veh']; ?> </td>
			</tr>
			<tr style="height:32px; width:450px; margin:0;">
				<td colspan='2' style="height:32px;margin:0; padding:5px 5px;line-height:2.6rem"><b>Comment:</b>  <?php echo $result['Comment']; ?> </td>
			</tr>
		</tbody>
		<tfoot style="border-top:solid thin #000">
			<tr style="height:50px; width:450px; margin:0;">
				<td colspan="2" style="height:40px; width:40px;margin:0; padding:5px 5px;font-weight:700">Signature of Meeting Person</td>
			</tr>
			<tr style="height:50px; width:450px; margin:0;">
				<td colspan="2" style="height:40px; width:40px;margin:0; padding:5px 5px;font-weight:700">Signature of Security Guard</td>
			</tr>
		</tfoot>
	</table>


    <div style="text-align:center;margin-top:20px;">
		<button type="button" id="button" class="btn btn-info hide-from-printer"
        onclick="window.print()" value="Print Badge">Print Badge</button> 
		<a type="button" id="button" class="btn btn-default hide-from-printer" href="front.php">Back </a>
	</div>
  </body>
</html>
