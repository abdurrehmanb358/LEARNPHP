<<?php
$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
    
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
       $id =$_POST['id'];
// update data in table
$sql =  "UPDATE billo SET fname='$first_name',lname='$last_name',email='$email',phone='$phone' WHERE id=$id";


if ($conn->query($sql) === TRUE) {
  header("location:  /LEARNPHP/edex.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>