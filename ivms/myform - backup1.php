<?php 
include('db_connect_db_new.php');  
session_start();	
if($_SESSION["loggedIn"] == 0)
	 	header("location: index.php");
	$user_ = $_SESSION["user"];

?>
<html>
<head>
<!--  <meta http-equiv = "refresh" content = "10;url= front.php"/>  -->
 <link rel = "stylesheet" href= "BootStrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="navbar3.css">
   <script src= "BootStrap/js/bootstrap.min.js"></script>
  <script src="BootStrap/js/jQuery.min.js"></script>
 <script src="BootStrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="webcam/webmaster/webcam.js"></script>

<style>
html {
  position: relative;
  min-height: 100%;
}body {
  /* Margin bottom by footer height */
  margin-bottom: 40px;
}#head{
	  text-decoration:underline;
}input:required:invalid, input:focus:invalid, input:invalid {
    border-radius: 5px;
    border:soild 1px;

}input:required:valid, input:valid {
    border-radius: 5px;
}input[type='number'] {
    -moz-appearance:textfield;
}input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
}.affix {
      top:0;
      width: 100%;
      z-index: 9999 !important;
  }
 </style>

</head>

 <body  onload=display_ct();>
 
  <?php
	$success =0;

  if(!$link)
    die("error". mysqli_link_error());


  if($_SERVER["REQUEST_METHOD"] =="POST"){

  if(empty($_POST["name"]))
	$name_error = "Enter the Name Properly !";
   else
        $name = $_POST["name"];
 
  if(strlen($_POST["cno"]) != 10)
	$cno_error = "Enter Valid Contact number";
  else
	$cno = $_POST["cno"];

  if(empty($_POST["purpose"]))
	$p_error = "Enter Valid Purpose";
  else
	$p = $_POST["purpose"];
date_default_timezone_set("Asia/Kathmandu");
$timein = date("H:i:s");
$rid = rand(100000,900000);
$_SESSION["rid"] = $rid ;

$date = date("Y/m/d");
$ids = $_POST["ids"];
$veh = $_POST["veh"];
$comment = $_POST["comment"];
$day = date("d");
$month = date("m");
$year = date("Y");
$meet =$_POST["MeetingTo"];


    
 
  if(empty($name) || empty($cno) || empty($p) || strlen($cno)!=10)
	 $displayError = "You have not entered the details correctly !"; 
  else{
	$sql = "INSERT INTO info_visitor(Name, Contact, Purpose, meetingTo, day, 
                                 month, year, Date, TimeIN, ReceiptID, Status, ids, veh,
				 Comment,registeredBy) VALUES ('$name','$cno','$p',
				 '$meet', '$day', '$month', '$year', '$date',
				 '$timein','$rid','ONLINE', '$ids', '$veh', '$comment', 
				 '$user_')";

  if(mysqli_query($link,$sql)) 
	$success =1;   //redirection to the printing page.
  else
	echo "Error: " . $sql . "<br>" . mysqli_error($link);}

//echo "<h4>You will be redirected to the home page after 10 secs !</h4> ";
  if($success == 1)
	header('location: user_profile.php');
   }
?>
	<!--   Navigation Menu   -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" id = "li"><?php echo "Logged in as : ".$user_;?></a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="front.php" id = "li">Home</a></li>
      <li class="active"><a  href="myform.php">Add Visitor</a></li>
      <li ><a  id = "li" href="logoutform.php">Checked Out Visitors</a></li>
      <li><a id = "li" href="query_data.php">View Data</a></li> 
      <li><a id = "li" href="logout.php">Logout</a></li> 
    </ul>
  </div>
</nav>
<!-- time and date script -->

<script type="text/javascript"> 
function display_c(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct()',refresh)
}
function display_ct() {
      var date = new Date();
        var hours = date.getHours() > 12 ? date.getHours() - 12 : date.getHours();
        var am_pm = date.getHours() >= 12 ? "PM" : "AM";
        hours = hours < 10 ? "0" + hours : hours;
        var minutes = date.getMinutes() < 10 ? "0" + date.getMinutes() : date.getMinutes();
        var seconds = date.getSeconds() < 10 ? "0" + date.getSeconds() : date.getSeconds();
        time = hours + ":" + minutes + ":" + seconds + " " + am_pm;
document.getElementById('t1').innerHTML = time;
var x = new Date()
var x1=x.getMonth() + 1+ "/" + x.getDate() + "/" + x.getFullYear();
document.getElementById('t2').innerHTML = x1;
display_c();
 } 
 
</script>


<div style= "float:right; padding-right:200px;padding-top:10px;">
  <p id = "timeDisplay" > Time : <span id="t1"></span>
</p>
  <p id = "dateDisplay"> Date : <span id="t2"></span></p>
</div>	 
<div style="margin-left:220px;padding-bottom:12px">
  <h2>Add Visitor</h2>
  <p id = "redBoxSyndrome"><p>
</div>
  <div class="row" style="margin-left:220px">
   <div class="col-sm-6">
    <form class= "myForm" action= "<?php echo $_SERVER["PHP_SELF"];?>" method= "POST" id ="form">
      <?echo $displayError ;?>
	  <!--
	<div class="row">
         <div class="col-sm-7">
		 </div>
	</div>
		 -->
          <div class="form-group">
            <label for="name"> Name :</label> 
  <input autocomplete="off" class="form-control" type= "text" name ="name" placeholder= "Enter Visitor's Name." required id = "name"
         oninvalid="this.setCustomValidity(this.willValidate?'':'Name is required')" onblur="isEmpty('name')" onfocus="onfo('name')"
	 data-toggle="popover" title="Popover Header" data-content="Some content inside the popover" data-trigger = "onfocus"/>
          </div>
<div class="form-group">
<label for="cno"> Contact No. :</label> <span id = "span" style = "padding-bottom: 5px;float:right;"></span>
 <input autocomplete="off" class="form-control" type="number" maxlength="10" id = "ContactInfo" onkeyup = "Ccheck('ContactInfo')" 
	onblur = "isEmpty('ContactInfo')" onfocus = "onfo('ContactInfo')" name="cno" placeholder="Enter Contact Number." 
        oninvalid="this.setCustomValidity(this.willValidate?'':'Enter correct Contact number please')"
	data-toggle="popover" title="Popover Header" data-content="Some content inside the popover" data-trigger = "onfocus"/>
</div>
<div class="form-group">
<label for ="prps">Purpose :</label> 
<input autocomplete="off" class="form-control" type="text" name="purpose" placeholder="Enter Purpose Like Inverview/Meetings..." required id = "Purpose" 
       oninvalid="this.setCustomValidity(this.willValidate?'':'Enter your Purpose')" maxlength="30" onblur="isEmpty('Purpose')"
       data-toggle="popover" title="Popover Header" data-content="Some content inside the popover" data-trigger = "onfocus" />
</div>
  <div class="form-group">
   <label for = "meetingTo">Meeting to :</label>
    <input autocomplete="off" class="form-control" type="text" required name = "MeetingTo" id = "meetingTo" 
	   placeholder="Whom will you meet ?"       oninvalid="this.setCustomValidity(this.willValidate?'':'Whom do you want to meet ?')" maxlength="30"  onblur="isEmpty('meetingTo')"
	   data-toggle="popover" title="Popover Header" data-content="Some content inside the popover" data-trigger = "onfocus"/>
   </div>
   <div class="form-group">
   <label  for = "ids">Any National Id Details:</label>  
     <input autocomplete="off" class="form-control" type= "varchar" maxlength="50" name = "ids" height="50px" placeholder="Any Govt. Approved I'd Aadhar/PAN/DL/Etc..">
     <br>
 </div>
 <div class="form-group">
   <label  for = "veh">Vehicle No. Details If Any:</label>  
     <input autocomplete="off" class="form-control" type= "varchar" maxlength="30" name = "veh" height="50px" placeholder="Car Number/Bike Number/Etc.." >
     <br>
 </div>
<div class="form-group">
   <label  for = "comment">Comment :</label>  
     <input autocomplete="off" class="form-control" type= "varchar" maxlength="100" name = "comment" height="50px" placeholder="Like Laptop/Repair Tool Kit/Etc...">
     <br>
 </div>
<div>
 <input id="submitme" type="submit" name="submit_post" 
	class="btn btn-success" value="Submit" onclick="return emptys()"/>
 <input autocomplete="off" id="mydata" type="hidden" name="mydata">
		
  </div>
 </form>
</div>


    <div class="contentarea">
        <h1>
          
        </h1>
        <div class="camera">
            <video id="video">Camera not available.</video>
        </div>
        <div><button id="startbutton" >Take photo</button></div>
        <canvas id="canvas"></canvas>
        <!--
		<div class="output">
            <img id="photo" alt="The screen capture will appear in this box.">
        </div>
		-->
    </div>

    <script>
    /* JS comes here */
    (function() {

        var width = 350; // We will scale the photo width to this
        var height = 0; // This will be computed based on the input stream

        var streaming = false;

        var video = null;
        var canvas = null;
        var photo = null;
        var startbutton = null;

        function startup() {
            video = document.getElementById('video');
            canvas = document.getElementById('canvas');
            photo = document.getElementById('photo');
            startbutton = document.getElementById('startbutton');

            navigator.mediaDevices.getUserMedia({
                    video: true,
                    audio: false
                })
                .then(function(stream) {
                    video.srcObject = stream;
                    video.play();
                })
                .catch(function(err) {
                    console.log("An error occurred: " + err);
                });

            video.addEventListener('canplay', function(ev) {
                if (!streaming) {
                    height = video.videoHeight / (video.videoWidth / width);

                    if (isNaN(height)) {
                        height = width / (4 / 3);
                    }

                    video.setAttribute('width', width);
                    video.setAttribute('height', height);
                    canvas.setAttribute('width', width);
                    canvas.setAttribute('height', height);
                    streaming = true;
                }
            }, false);

            startbutton.addEventListener('click', function(ev) {
                takepicture();
                ev.preventDefault();
            }, false);

            clearphoto();
        }


        function clearphoto() {
            var context = canvas.getContext('2d');
            context.fillStyle = "#AAA";
            context.fillRect(0, 0, canvas.width, canvas.height);

            var data = canvas.toDataURL('image/png');
            photo.setAttribute('src', data);
        }

        function takepicture() {
            var context = canvas.getContext('2d');
            if (width && height) {
                canvas.width = width;
                canvas.height = height;
                context.drawImage(video, 0, 0, width, height);

                var data = canvas.toDataURL('img/png');
                photo.setAttribute('src', data);
            } 
			
			else {
                clearphoto();
            }
        }

        window.addEventListener('load', startup, false);
    })();
    </script>
	</body>
</html>
