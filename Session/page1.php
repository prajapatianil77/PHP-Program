<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page1 in session</title>
</head>
<body><center>
    <?php
    $uname = $_POST['uname'];
    $upass = $_POST['upass'];

    echo "Name :".$uname." on page 1";
    echo "<br>Password :".$upass;

    session_start();
    
    $_SESSION['uname'] = $uname;
    $_SESSION['upass'] = $upass;

   ?>
    <form action="page2.php" method = post>
    <input type="submit" value = "Next">
    
    </form>
    </center>
</body>
</html>