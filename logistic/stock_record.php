<?php 
require_once "connection.php";

$query = mysqli_query($conn,"select * from stock_details") or die(mysqli_error($conn). "Error in sql query");
$num_rows = mysqli_num_rows($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Product Records</title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery3.6.min.js"></script>
  <script src="js/bootstrap3.4.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap.min.css"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
	<style>
	#record_table_paginate
	{
		float:right;
	}
	.dataTables_filter label
	{
		float:right;
	}
	</style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logistics</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
     <!--
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="fa fa-lock"></span> Logout</a></li>
      </ul> -->
    </div>
  </div>
</nav>
  
<div class="container">    
  <div class="row">
	<div class="panel panel-info">
	  <div class="panel-heading">Product Records</div>
	  <div class="panel-body" style="overflow:auto">
			<table class="table table-striped table-bordered" id="record_table">
				<thead>
					<tr>
						<td>Batch No</td>
						<td>Product ID</td>
						<td>Product Name</td>
						<td>Quantity</td>
						<td>Mfc. Date</td>
						<td>Year</td>
						<td>Updated On</td>
					</tr>
				</thead>
				<tbody>
					<?php 
						if($num_rows!=0)
						{
							while($result = mysqli_fetch_array($query))
							{
								echo "<tr>
										<td>".$result['batch_no']."</td>								
										<td>".$result['product_id']."</td>								
										<td>".$result['product_name']."</td>								
										<td>".$result['qty']."</td>								
										<td>".$result['manufacturing_date']."</td>								
										<td>".$result['year']."</td>								
										<td>".$result['updated_on']."</td>								
									</tr>";
							}
						}
					?>
				</tbody>
			</table>
	  </div>
	</div>
  </div>
</div>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap.min.js"></script>
<script>
$(document).ready(function () {
    $('#record_table').DataTable();
});
</script>