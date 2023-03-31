<?php
// $food = array("a"=>"apple","b"=>"banana","c"=>"pineapple");
// $veg=array("a"=>"pea","e"=>"lemon" , 55 , 66);

// $newarray= array_merge($food,$veg);
// $newarray= array_merge_recursive($food,$veg);
// $newarray = $food + $veg;

$color = ["red","yellow","green"];
$num = ["1","2","3"];

$newarray = array_combine($color,$num);
echo "<pre>";
print_r($newarray);
echo "</pre>";
?>