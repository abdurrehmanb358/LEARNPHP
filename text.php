<?php

$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);

}
  
$sql = "INSERT INTO billo (fname , lname , email , phone)
VALUES ('$first_name','$last_name', '$email','$phone')";
//  var_dump($sql);exit;
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("location: /LEARNPHP/contect.php");
