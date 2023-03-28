<?php
$colors = ["red",20,"pink",13.23,"white","black"];

// $vibhu = array("Hyy",20,"pink",13.23,"white");
// echo $colors[1]."<br>";
// echo $colors[2]."<br>";
// echo $colors[3]."<br>";
// echo $colors[4]."<br>";
// echo $vibhu[0];

// $colors[0]="1st";
// $colors[1]="2nd";
// $colors[2]="3rd";

// echo "<pre>";
// print_r($colors);
// echo "</pre>";

// print_r($colors);



echo "<ul>";
for($i=0;$i<6;$i++){
    echo  "<li> $colors[$i] <br> </li>";
}
echo "</ul>";

?>