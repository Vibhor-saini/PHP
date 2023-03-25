<?php

$a = 111;

if(($a>=80)&&($a<=100) ){
echo  "Merit <br>";
}
elseif(($a>=60)&&($a<=79)){
echo  "Ist Devision <br>";
}
elseif(($a>=45)&&($a<=59)){
echo  "IInd Devision <br>";
}
elseif(($a>=33)&&($a<=44)){
echo  "IIIrd Devision <br>";
}
elseif($a<33){
echo  "Fail <br>";
}
else{
    echo "invalid entry <br>";
}

?>