<?php

/** data types 
 * interger
 * double
 * string
 * boolean
 * array
 * object
 * NULL
*/

$a = 20;
echo gettype($a);
echo "<br/>";

$a = 20.7;
echo gettype($a);
echo "<br/>";

$a = "20";
echo gettype($a);
echo "<br/>";

$a = true;
echo gettype($a);
echo "<br/>";

$a = ["laravel", "wordpress", "drupal"];
echo gettype($a);
echo "<br/>";

class Bird{
    public $name;
    function __construct(){
        $this->name = "eagle";
    }
}

$brd = new Bird();
echo gettype($brd);
echo "<br/>";

$a = NULL;
echo gettype($a);
echo "<br/>";

$a = array('name'=>'laravel', 'type'=>'powerfull backend');
$a = json_encode($a, true);
echo "<b>".gettype($a)."</b>";
echo "<br/>";

/** typecasting - helps one variable value change into another value */
$a = "200.4535";
echo gettype($a);
echo "<br/>";
$a = intval($a); // double -> integer
echo gettype($a);
echo "<br/>";

$a = "455";
$a = intval($a); // string -> integer
echo gettype($a);
echo "<br/>";

// swaping of array elements
function swap_arr($arr){
    $point = 0;
    $point2 = sizeof($arr) - 1;
    for($i=0; $i<sizeof($arr);$i++){
        if($point < $point2){
            $temp = $arr[$point];
            $arr[$point] = $arr[$point2];
            $arr[$point2] = $temp;
            $point++;
            $point2--;
        }
    }
    return $arr;
}

print_r(swap_arr([10, 30, 78, -67]));

 ?>