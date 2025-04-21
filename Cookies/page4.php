<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page 4 in cookie</title>
</head>
<body><center>
    <?php
     $uname = $_COOKIE['uname'];
     $upass = $_COOKIE['upass'];
 
     echo "User Name : ".$uname;
     echo "<br>Password :".$upass;
    ?>
    
    </center>
</body>
</html>