<?php
$x = 16;
$y = 20;
function vibhu(){
     global $x , $y ;
    echo "$x , $y is inside function <br>";
}
vibhu();
echo "$x is outside function";

?>