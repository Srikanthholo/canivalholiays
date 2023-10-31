<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "george.serro@carnivalholidays.co.in";
$subject = "Mail From website";
 
  

$txt ="\r\n Name :". $name . "\r\n Email :" . $email . "\r\n Message :" . $message;
$headers = "From: noreply@carnivalholidays.co.in";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>