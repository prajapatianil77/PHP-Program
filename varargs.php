<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable Agruments</title>
</head>
<body>
    <?php
    
   
    function Add(...$a){
        $sum = 0;
        foreach($a as $m){
        $sum = $sum + $m;
        }
        echo "Sum is : ".$sum;
    }
    Add(10,20);

    ?>
</body>
</html>