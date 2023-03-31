<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Form</title>
</head>
<body>
<form action="<?php  echo $_SERVER["PHP_SELF"] ?>" method="POST">
    <!-- <form action="testform.php" method="POST"> -->
        Name: <input type="text" name="fname"><br><br>
        Age: <input type="text"name="age"><br><br>
        <input type="submit" name="save">
    </form>

    <?php

if(isset($_POST['save'])){
    echo $_POST['fname']."<br>";
    echo $_POST['age']."<br>";
}

   ?>
</body>
</html>