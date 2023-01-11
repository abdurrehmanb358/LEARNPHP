<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
while($rows= mysqli_fetch_assoc($result))
{
  print_r($rows)
?>
          <tr>
            <td><?php echo $rows.['fname'];?></td>
            <td><?php echo $rows.['lname'];?></td>
            <td><?php echo $rows.['email'];?></td>
            <td><?php echo $rows.['phone'];?></td>
          </tr>
        <?php
       
}
?>
</body>
</html>