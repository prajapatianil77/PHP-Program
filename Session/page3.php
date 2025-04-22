<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page 3 in session</title>
</head>
<body><center>
    <?php
    session_start();
    $uname = $_SESSION['uname'];
    $upass = $_SESSION['upass'];

    echo "Name :".$uname." on page 3";
    echo "<br>Password :".$upass;

    session_unset();
    session_destroy();
    
    ?>
    
    </center>
</body>
</html>