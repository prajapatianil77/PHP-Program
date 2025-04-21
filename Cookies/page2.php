<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> page 2 in cookie</title>
</head>
<body><center>
    <?php
    $uname = $_POST['uname'];
    $upass = $_POST['upass'];

    echo "User Name : ".$uname;
    echo "<br>Password :".$upass;

    $ckname = "uname";
    $ckvalue = $uname;
    $ckpass = "upass";
    $ckpassvalue = $upass;

    setcookie("uname",$ckvalue);
    setcookie("upass",$ckpassvalue);
    ?>
    <form action="page3.php" method = "post">
        <input type="submit" value = "Submit" name = "submitbtn">
    </form>

    </center>
</body>
</html>