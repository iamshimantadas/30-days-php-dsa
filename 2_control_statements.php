<?php

// even odd code
$a = 21;
if(($a%2)==0){
    echo "even";
}else{
    echo "odd"; // odd
}
echo "<br/>";


// gcd of 2 numbers
function gcd(int $a, int $b){
    while($b !=0){
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}
function lcm(int $a, int $b){
    return ($a * $b)/gcd($a, $b);
}

echo "your gcd: ".gcd(14, 4);
echo "<br/>";
echo "your lcm: ".lcm(14, 4);
echo "<br/>";
// lcm of 2 numbers


/** grade system
 * 90 - 100 => AA
 * 80 - 90 => A+
 * 70 - 80 => A
 * 50 - 70 => B+
 * 30 - 50 => B
 * 20 - 30 => C+
 * < 20 => FAIL
 */
$mark = 98;
$value = intval($mark/10);
switch($value){
    case 9:
        echo "AA";
        break;
    case 8:
        echo "A+";
        break;
    case 7:
        echo "A";
        break;
    case 6:
        echo "B+";
        break;
    case 5:
        echo "B+";
        break;
    case 4:
        echo "B";
        break;
    case 3:
        echo "B";
        break;
    case 2:
        echo "C+";
        break;                
    default:
        echo "FAIL";
        break;        
}
echo "<br/>";

/** FACTORIAL OF number */
function fact_convert(int $a){
    $fact = 1;
    $i = 1;
    while($i <= $a){
        $fact = $fact * $a;
        $a--;
    }
    return $fact;
}
echo "Your fact value: ".fact_convert(5);
echo "<br/>";


/** loops - for , while, do-while, foreach */
$arr = ["wordpress", "laravel", "ci"];
$i=0;

// while($i < sizeof($arr)){
//     echo $arr[$i];
//     echo "<br/>";
//     $i++;
// }

// do{
//     echo $arr[$i];
//     echo "<br/>"; 
//     $i++;
// }while($i < sizeof($arr));

foreach($arr as $key => $value){
    echo "Key: ".$key." ".$value;
    echo "<br/>";
}
