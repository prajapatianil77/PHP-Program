<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Function</title>
</head>
<body>
    <?php
    $arr1 = array("Mon","Tue","Wed","Sat");
    $arr2 = array("Mon","Wed","Thus","Feb","Tue");
    $arr3 = array("Mon","Wed","Fri","Jan","Sat");

//   Q1  //  $intersect = array_intersect($arr1,$arr2);  // give intersection value in the given array.
    // print_r($intersect);
    // echo "<br>";


//    Q2 // $diff = array_diff($arr1, $arr2);   // this compare arr1 to arr2 and give different value in arr1.
    // print_r($diff);
    // echo "<br>";


//    Q3  // $arr4 = array("BTECH","MBBS","NURSING","BTECH","MBBS");  // this give unique value for the array.
    // $unique = array_unique($arr4);
    // print_r($unique);
    // echo "<br>";


//  Q4 // $arr5 = array(2,3,4,5,6,7,8,9);
    // function multi($a){
    //     return $a *2;
    // }
    // $newarray = array_map('multi',$arr5);    
    // print_r($newarray);


 // Q5  // $arr6 = array(10,12,23,30,35,47);
    // function oddeven($n){
    //     if($n%2==0)
    //     return "Even";
    //     else 
    //     return "Odd";
        
    // }
    // $new = array_map('oddeven',$arr6);
    // print_r($new);

        
//   Q6   // $arr5 = array(0,2,3,4,5,6,7,8,9);
    //     function factorial($n){
    //         $fact = 1;
    //         while($n!=0){
    //         $fact = $fact*$n;
    //         $n--;}

    //        return $fact;
    //         }

    //         $new = array_map('factorial',$arr5);
    //         print_r($new);  
          

//   Q7  // $arr = range(1,10,);   // range function give continious value.
    // print_r($arr);



    ?>
</body>
</html>