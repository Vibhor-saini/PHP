<?php
echo"<pre>";
// print_r($_GET);
print_r($_POST);
// print_r($_REQUEST);
echo"</pre>";


echo"<pre>";
// print_r($_GET);
print_r($_SERVER);
echo"</pre>";

echo $_SERVER['PHP_SELF']."<br>";
echo $_SERVER['HTTP_HOST']."<br>";
?>