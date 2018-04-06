<?php
echo "Hello world";

$a = 5;
$b = true;
$array = [1, 5, 'hi'];
$array_primitive = array('hi', 'number', 6);
$as_arr = ['first' => '1', 6 => '2', 3];

$arr_sign = ['a', 'b', 'c', 'd', 'e', 'f'];

echo '</br>';

echo $as_arr['first']; // comment
echo '</br>';
echo $as_arr[6];
echo '</br>';
echo $as_arr[7];
echo '</br></br>';

//for($i = 0; $i < count($arr_sign); $i++){
//    echo $arr_sign[$i].', ';
//}
//
//echo '</br></br>';
//foreach ($arr_sign as $i){
//    echo $i;
//    echo '</br>';
//}
//
//echo '</br></br>';
//foreach ($as_arr as $key => $i){
//    echo $key;
//    echo '</br>';
//}

var_dump($arr_sign);
//die();
echo '</br>';
var_dump($b);
echo '</br>';
var_dump($_GET);