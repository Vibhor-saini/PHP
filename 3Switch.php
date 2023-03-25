<?php

$day = 2;
switch($day){
    case 1: case 2; 
        echo "Today is Sunday <br>";
    break;
    // case 2: 
    //     echo "Today is Monday <br>";
    // break;
    case 3: 
        echo "Today is Tuesday <br>";
    break;
    case 4: 
        echo "Today is Wednesday <br>";
    break;
    case 5: 
        echo "Today is Thursday <br>";
    break;
    case 6: 
        echo "Today is Friday <br>";
    break;
    case 7: 
        echo "Today is Saturday <br>";
    break;

    default:
    echo "Enter the valid week day <br>";
}
?>