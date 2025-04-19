<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Application</title>
    <link rel="stylesheet" href="style.css">
</head>
<body><center>
    <form action="" method ="post">
    <h2>Login Detail </h2>

   <div class="div1"> <label for="name">Full Name</label>
    <input type="text" name= "uname" required>
    </div>

   <div class="div2"> <label for="password">Password :</label>
    <input type="password" name = "upass" required>
    </div>

    <div class="div3"><input type="submit" value ="Submit" name = "submitbtn">
    </div>
    </form>
    <?php
    
   if (isset($_POST['submitbtn'])){
    $uname = $_POST['uname'];
    $upass = $_POST['upass'];
        if($uname=="Anil Prajapat" and $upass == "12345"){
            header("location:index.html");
        }
        else{
            echo "<h1> Invalid User </h1>";
        }

    }
    ?>
    </center>
</body>
</html>