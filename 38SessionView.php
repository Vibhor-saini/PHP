<?php

session_start();

// print_r($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session view</title>
</head>
<body>
    <?php

    if(isset($_SESSION["color"])){
  echo "color : ".$_SESSION["color"];
    }else{
        echo "not set";
    }
    ?>
</body>
</html>