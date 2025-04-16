<?php

// indexed array
$arr = ['laravel', 'codigniter', 'wordpress', 'drupal'];
foreach($arr as $key => $value){
    echo $key." ".$value;
    echo "<br/>";
}

// associative array
$brr = ['name'=>'laravel', 'author'=>'taylor', 'type'=>'app', 'lang'=>'php'];
foreach($brr as $key => $value){
    echo "Key: $key"." "."Value: $value";
    echo "<br/>";
}

// multidimentional array
$crr = [['wordpress', 'woocommerce', 'contact form 7'], ['laravel', 'rest api', 'livewire']];
foreach($crr as $single_arr){
    print_r($single_arr);
    echo "<br/>";
    foreach($single_arr as $key => $value){
        echo "Key: $key"." "."Value: $value";
        echo "<br/>";
    }
}

echo "<br/><br/> **************************** <br/><br/>";

$brr = ['name'=>'laravel', 'author'=>'taylor', 'type'=>'app', 'lang'=>'php'];
echo "Array length: ".sizeof($brr);
echo "<br/>";

// assigning array to another array
$new_arr = $brr;
echo "Array length: ".sizeof($new_arr);
foreach($new_arr as $key => $value){
    echo "Key: $key"." "."Value: $value";
    echo "<br/>";
}

// 1. add mew element into array
echo "*****************************************";
$brr = ['laravel', 'codigniter', 'wordpress', 'drupal'];
$brr[] = 'Yii';
foreach($brr as $key => $value){
    echo "Key: $key"." "."Value: $value";
    echo "<br/>";
}
$brr = ['name'=>'laravel', 'author'=>'taylor', 'type'=>'app', 'lang'=>'php'];
$brr['command'] = 'artisan';
foreach($brr as $key => $value){
    echo "Key: $key"." "."Value: $value";
    echo "<br/>";
}
echo "<br/>";


// 2. remove element from array with re-indexing
echo "*****************************************";
$arr = ['laravel', 'codigniter', 'wordpress', 'drupal'];
unset($arr[1]);
$arr = array_values($arr); // required for only indexed array
foreach($arr as $key => $val){
    echo $key." ".$val;
    echo "<br/>";
}
