<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$id = $_GET['id'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM billo where id = $id";
$result = $conn->query($sql);

$row = $result->fetch_assoc();



?>
<body>
<div> 
        
<center>
<form method="POST" action="update.php">
          <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
            FIRSTNAME:<input value="<?php echo $row['fname'] ?>" type="text" name="fname" placeholder="firstname"><br><br>
            LASTNAME:<input value="<?php echo $row['lname'] ?>" type="text" name="lname" placeholder="lastname"><br><br>
            EMAIL:<input value="<?php echo $row['email'] ?>" type="email" name="email" placeholder="email"><br><br>
            PHONE:<input value="<?php echo $row['phone'] ?>" type="number" name="phone" placeholder="phone"><br><br>
            <input type="submit" value="Update" name= "SEND">
            
</form>
</center>
</body>
</html>
