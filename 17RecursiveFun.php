<?php

function vibhu($name){
// echo "Hello $name";

if($name<=10){
    echo "$name<br>";

  vibhu($name + 1);
}
}
vibhu(1);
?>