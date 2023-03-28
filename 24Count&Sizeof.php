<?php
$color = ["red","pink","white","black","red"];

// echo count($color)."<br>";
// echo sizeof($color);

$hello = [
    
    "color" => ["red","pink","white","black"],
    "fruits" => ["banana","grapes","gauava"]
];

// $len= count($color)."<br>";
// $len= sizeof($color)."<br>";


echo "<pre>";
print_r(array_count_values($color))."<br>";
echo "</pre>";
for($i=0;$i<$len;$i++){
    echo $color[$i]."<br>";
}
?>