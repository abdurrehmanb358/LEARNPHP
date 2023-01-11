<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .gg {
        text-align: center;
        color: black;
    }

    .ll {
        text-align: center;
    }
</style>

<body>
<div> 
        <?php
include "Manue.php" ?>
    </div>
    <div class="gg">
        <h1>CONTECT FORM</h1>
    </div>
    <div class="ll">
    
<form method="POST" action="text.php">
            FIRSTNAME:<input type="text" name="fname" placeholder="firstname"><br><br>
            LASTNAME:<input type="text" name="lname" placeholder="lastname"><br><br>
            EMAIL:<input type="email" name="email" placeholder="email"><br><br>
            PHONE:<input type="number" name="phone" placeholder="phone"><br><br>
            <input type="submit" value="Submit" name= "SEND">
            
</form>



</html>
