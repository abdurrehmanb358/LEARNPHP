<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
  </head>


<body>

  


    <table align="center" border="1px" style="line-height:40px;">
           <t>
            <tr>
                <th colspan="7"><h2>STUNDENT DATA</h2></th>
            </tr>
        
            <th>id</th>
            <th>fname</th>
          <th>lname</th>
          <th>email</th>
          <th>phone</th>
          <th colspan="2">Opertion</th>
          
           </t>

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

$sql = "SELECT * FROM billo";
$result = $conn->query($sql);

if ($result->num_rows > 0) :
  // output data of each row
  while($row = $result->fetch_assoc()) :
  
  
  
  ?>
    <tr>
      <td><?php echo $row["id"]?></td>
      <td><?php echo $row["fname"]?></td>
    <td><?php echo $row["lname"];?></td>
    <td><?php echo $row["email"];?></td>
    <td><?php echo $row["phone"];?></td>
   <td>
    <a href='delete.php?id=<?php echo $row["id"] ?>'>DELETE </a>
    </td>
    <td>
    <a href='edit.php?id=<?php echo $row["id"] ?>'>EDIT </a>
    </td>

   
  </tr>

            
<?php
  endwhile;
endif;
$conn->close();

?>

      </table>
      

  
</body>
</html>