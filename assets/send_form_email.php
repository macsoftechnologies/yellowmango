<?php
if(isset($_POST['posted']))
{
    //getting form values
$name=trim($_POST['firstName']);
$name=trim($_POST['lastName']);
$email=trim($_POST['email']);
$subject="Urban rural development society";
$user_message=trim($_POST['message']);
// checking for empty values in form
if(empty($name) || empty($email) || empty($user_message))
{
    header("Location:index.php?a=3");
}
// Preparing mail body
$message="<b>Urban rural development society</b> \r\n<br>";
$message.= "<b>Email:</b>".$email."\r\n<br>";
$message.="<b>Full Name:</b>".$name."\r\n<br>";
$message.="<b>Message:</b>".$user_message."\r\n<br>";
//Assign variable To Enter Email address 
$to="lohith.146@gmail.com";
//Additional Headers
$headers="MIME-Version: 1.0"."\r\n";
$headers.="Content-type:text/html;charset=iso-8859-1"."\r\n";
$headers.='From:'.$email."\r\n";
//$headers.='Cc:'."\r\n";
//Responding mail function as
if(mail($to,$subject,$message,$headers))
{
    header("Location:index.html?e=5");
}
else{
    header("Location:index.html?e=7");
}
}
else
{
    header("Location:index.html?e=3");
}
?>