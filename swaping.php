<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swaping of Number</title>
</head>
<body>
    <?php
    $a = 10; 
    $b = 20;
    function swap(&$a, &$b){        //copy by reference 
      
        $c = $a;
        $a = $b;
        $b = $c;

    }
   
    echo "Before swaping A and B : ".$a." ".$b;
    swap($a,$b);
    echo "<br>After swaping A and B : ".$a." ".$b;

    // $a = 10;
    // $b = 20;
    // function swap($a, $b){      //copy by value 
      
    //     $c = $a;
    //     $a = $b;
    //     $b = $c;

    // }
   
    // echo "Before swaping A and B : ".$a." ".$b;
    // swap($a,$b);
    // echo "<br>After swaping A and B : ".$a." ".$b;
    ?>
</body>
</html>