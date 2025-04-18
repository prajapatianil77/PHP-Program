<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    
</head>
<body><center>
    <form action="" method="post">
        <h1>Login Page</h1>
        <div class="username">
            <label for="uname">User Name :</label>
            <input type="text" placeholder ="Enter your name..." name = 'username'>
        </div>
        <div class="password">
            <label for="upass">Password :</label>
            <input type="password" placeholder = "Enter password..." name = 'userpass'>
        </div>
        <div class="btn">
            <input type="submit" value = "Submit" name = 'submitbtn'>
            <input type="submit" value = "Reset" name = 'resetbtn'>

        </div>

    </form>
    <?php
    if(isset($_POST['submitbtn'])){

        $user = $_POST['username'];
        $password = $_POST['userpass'];

        if(strcmp($user,"Anil Prajapat")==0 and $password=="2212")
            header("location:first.php");

        else
        echo "<h1><br>Invalid User</h1>";

    }
  
    ?>
    </center>
</body>
</html>