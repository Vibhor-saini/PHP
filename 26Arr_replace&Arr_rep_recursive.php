<?php
$food = array("apple","banana",1=>"guava","pineapple");
$veg = array("brinjal","pea");

$newarray=array_replace($food,$veg);

echo "<pre>";
print_r($newarray);
echo "</pre>";


$array1 = array("a"=>array("red"),"b"=>array("green","pink"));
$array2 = array("a"=>array("yellow"),"b"=>array("black"));


$newarray=array_replace_recursive($array1,$array2);

echo "<pre>";
print_r($newarray);
echo "</pre>";
?>