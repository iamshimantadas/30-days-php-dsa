<?php


/** data types 
 * interger
 * string
 * boolean
 * array
 * object
 * NULL
*/

$a = 20;
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

 ?>