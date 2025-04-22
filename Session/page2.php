<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page 2 in session</title>
</head>
<body><center>
    <?php
    session_start();
    $uname = $_SESSION['uname'];
    $upass = $_SESSION['upass'];

    echo "Name :".$uname." on page 2";
    echo "<br>Password :".$upass;
    
    ?>
    <form action="page3.php" method = post>
        <input type="submit" value = 'Next'>
    </form>
    </center>
</body>
</html>