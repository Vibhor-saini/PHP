<?php

$marks = [

    "krishna" => [
    "vibhu" => 23,
    "sugab" => 26,
    "himanshu" => 253
    ],

    "salman" => [
        "vibhu" => 43,
        "sugab" => 56,
        "himanshu" => 653
    ],
    "
    kasim" => [
        "vibhu" => 93,
        "sugab" => 06,
        "himanshu" => 953
    ]
];


echo "<table border='2px' cellpadding='5px'>
<tr>
<th>Student Name</th>
<th>Student Number</th>
</tr>";
foreach($marks as $key=>$v1){
    echo "<tr><td>$key<td>";
    foreach($v1 as $v2){
        echo $v2;
    }
    echo "<tr>";
}
echo "</table>";


// echo "<table>";
echo "<pre>";
print_r($marks);

echo "</pre>";

// echo "</table>";

?>