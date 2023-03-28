<?php

// $age = array(
//     "vibhu" => 32,
//     "sugan" => 23,
//     "gorav" => 24,
//     "anu" => 25
// );

$age =[
    1 => 32,
    "sugan" => 23.36,
    "gorav" => "hello",
    "anu" => 25
];

$age["anu"] = 50;

echo "<pre>";
print_r($age);
var_dump($age);
echo "</pre>";

echo $age["anu"]."<br>";
echo $age[1]."<br>";
echo $age["gorav"];
?>