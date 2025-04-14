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

 ?>