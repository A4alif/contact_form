<?php 
  require('database.php');

  $sql = "SELECT * FROM user_info";
  $result = $conn-> query($sql);
  if($result){
    while($data = mysqli_fetch_assoc($result)){
    echo "Name : " . $data['name'] . "<br>";
    echo "Email : " . $data ['email'] . "<br>";
    echo $data ['message'] . "<br> <br>";
    }
  }
?>