<?php
$veg=array("1"=>"carrot","2"=>"pea","3"=>"pea");
$fruit = array(
   
    "a"=>"orange",
    "b"=>"guava",
    "c"=>"grapes"
    
);


$newarray = array_map(null,$fruit,$veg);

echo "<pre>";
 print_r($newarray);
 echo "</pre>";

function name($value,$value2){
   return [$value => $value2];
}
?>