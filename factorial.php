<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <?php
    function factorial($n){
        $f = 1;
        while($n!=0){
            $f = $f*$n;
            $n--;
        }
        return $f;  // return by value.
    }
    $m = factorial(5);
    echo "Factorial of no. is : ".$m;
    ?>
</body>
</html>