<?php 
 $name = $_POST['your_name'];
 $email = $_POST['your_email'];
 $message = $_POST['your_message'];
 

 // Database connection
 $link = new mysqli('localhost','root','','contact_form1');
  if($link === false){
    die("Couldn't Connect to Database" . mysqli_connect_errno());
  }
  $sql = "INSERT INTO user_info (name,email,message) VALUES ('$name', '$email', '$message')";
  if(mysqli_query($link,$sql)){
    echo "Message Send Successfully";
  } else {
    echo "Error : Could not able to execute sql " . mysqli_error($link);
  }

  mysqli_close($link);
?>