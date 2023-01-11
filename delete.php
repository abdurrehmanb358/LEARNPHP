<?php
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
$roll = $_GET["id"];
// sql to delete a record
$sql = "DELETE FROM billo WHERE  id =$roll";

if ($conn->query($sql) === TRUE) {
  header("location:  /LEARNPHP/edex.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>