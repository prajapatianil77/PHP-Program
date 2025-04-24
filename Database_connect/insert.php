<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data to Database</title>
</head>
<body><center>
    <form action="" method ="post">
        <table>
        <tr><th><label for="Rollno">Roll No:</label></th>
        <td><input type="text" name = "Rollno"></td></tr>

        <tr><th> <label for="Name">Name :</label></th>
        <td><input type="text" name = "name"></td></tr>

        <tr><th><label for="Class">Class :</label></th>
         <td><input type="text" name = "Class"></td></tr>
  
        <tr><th> <label for="Cteacher">Class Teacher :</label> </th>
         <td><input type="text" name ="Cteacher"></td> </tr>   
           
        

        </table>
        <input type="submit" value = "Insert" name ="insertbtn">
        <!-- <input type="submit" value = "Show Data" name ="showbtn"> -->
        </tbody>
    </form>
    <?php
   

    if(isset($_POST['insertbtn'])){

    $rollno = $_POST['Rollno'];
    $name = $_POST['name'];
    $class = $_POST['Class'];
    $kteacher = $_POST['Cteacher'];

    $mycon = mysqli_connect("localhost","root","","school");
    $sql = "insert into student values(?,?,?,?)";
    $ps = $mycon->prepare($sql);
    $ps->bind_param("isis",$rollno,$name,$class,$kteacher);
    $ps->execute();
    echo "<br> Data inserted in Database ";
    

    }



    ?>
    </center>
</body>
</html>