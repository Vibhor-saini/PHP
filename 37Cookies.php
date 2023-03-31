<?php
$cookie_name = "user";
$cookie_value = "vibhor saini";

setcookie($cookie_name,$cookie_value,time()+(3600),"/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php cookie</title>
</head>
<body>
<?php

if(!isset($_COOKIE[$cookie_name])){
 echo "cookie is not set";
}else{
echo $_COOKIE[$cookie_name];
}
?>
</body>
</html>