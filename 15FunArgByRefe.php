<?php

function first($num){
$num = $num + 5;
}

$digit = 5;
first($digit);
echo "Original value is = $digit <br>";



function second(&$num){
    $num= $num+20;
    }
second($digit);
echo "second value is = $digit <br>";

?>