<!DOCTYPE html>
<html lang="en">
<head><center>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page 3 in cookie</title>
</head>
<body>
    <?php
    $uname = $_COOKIE['uname'];
    $upass = $_COOKIE['upass'];

    echo "User Name : ".$uname;
    echo "<br>Password :".$upass;
    ?>

     <form action="page4.php" method = "post">
        <input type="submit" value = "Submit" name = "submitbtn">
    </form>

    </center>
</body>
</html>