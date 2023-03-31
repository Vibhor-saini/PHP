<?php
$color = ["red","yellow","green","blue","pink"];

// $newarray=array_slice($color,-2,2);
$newarray=array_slice($color,-2,2,true);

echo "<pre>";
print_r($newarray);
echo "</pre>";
?>