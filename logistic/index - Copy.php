<?php 
require_once "connection.php";

$query = mysqli_query($conn,"select * from stock_input") or die(mysqli_error($conn). "Error in sql query");
$num_rows = mysqli_num_rows($query);


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Index</title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery3.6.min.js"></script>
  <script src="js/bootstrap3.4.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">

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
	  <div class="panel-heading">Scan Product</div>
	  <div class="panel-body">
			<?php 
			// Include the qrlib file
			include 'phpqrcode/qrlib.php';
			if($num_rows!=0)
			{
				while($result = mysqli_fetch_array($query))
				{
					$text = $result['id'];
					
					$file = 'images/'.$result['product_image'];
					  // $ecc stores error correction capability('L')
					$ecc = 'L';
					$pixel_size = 3;
					$frame_size = 3;
					QRcode::png($text, $file, $ecc, $pixel_size, $frame_size);
				}
			}
			
			?>
	  </div>
	</div>
  </div>
</div>
</body>
</html>
