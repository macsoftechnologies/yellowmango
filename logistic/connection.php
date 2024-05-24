<?php 
ob_start();
session_start();

$conn = mysqli_connect("localhost","yelloya2_logic","~MHag~K~QWL&") or die("Error in establishing database connection");
$db = mysqli_select_db($conn,"yelloya2_logic");
?>