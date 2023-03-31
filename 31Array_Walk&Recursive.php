<?php$veg=array("1"=>"carrot","2"=>"pea");


$fruit = array(
    $veg,
    "a"=>"banana",
    "b"=>"guava",
    "c"=>"grapes",
    "d"=>"papaya",
    "e"=>"fig"
);

// array_walk($fruit,"myfunction"); //for associative and index array.
array_walk_recursive($fruit,"myfunction");


function myfunction($value,$key){
    echo "$key: $value<br>";
}

echo "<pre>";
 print_r($fruit);
 echo "</pre>";
?>

