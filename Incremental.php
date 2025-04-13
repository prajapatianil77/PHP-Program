<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Increment Decrement</title>
</head>
<body>
    <?php
    $a = 5;
    $b = ++$a;
    $c = $b--;
    $a = ++$b;
    $d = $a + ++$a + $a++;
    echo "a = ".$a."<br>";
    echo "b = ".$b."<br>";
    echo "c = ".$c."<br>";
    echo "d = ".$d;
    ?>
</body>
</html>