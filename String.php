<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String in Php</title>
</head>
<body>
    <?php
    $str = "This is a string";
    $l = strlen($str);  // give the lenght of string, space included.
    echo $str."<br>";
    echo "Length of this string is : ".$l;


    $w = str_word_count($str);          // give word count in the string.
    echo "<br>Word in this string : ".$w;

    $newstr = chunk_split($str, 2 ,".");   //use to add anything on give no. in the string in contineous .
    echo "<br>".$newstr."<br>";

    $newarray = str_split($str,4);
    print_r($newarray);     // give array of 4 letter on every index.

    $uprstr = strtoupper($str);   // conver a whole string in uppercase.
    echo "<br>".$uprstr;

    $lowstr = strtolower($str);
    echo "<br>".$lowstr;    //conver a whole string in lowercase.

    $str1 = "This is me me me ";
    $substr = substr_count($str1,"me",);   // use to count repeated word.
    echo "<br>".$str1;
    echo "<br> me is repeated ".$substr." time.";

    $firstupr = ucwords($str);  // convert first letter in uppercase of all string.
    echo "<br>".$firstupr;

    $first_letterupr = ucfirst($str);
    echo "<br>".$first_letterupr;    // it only convert starting letter in uppercase.

    if(strcmp($str,$str1)==0)   // use to compare the string and if string is same then return 0.
        echo "<br>".$str." and ".$str1. "is Same";
    else 
        echo "<br>".$str." and ".$str1. "is Not same";  
    

    ?>
</body>
</html>