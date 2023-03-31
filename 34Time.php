<?php
echo "Present hour is ". date("h")."<br>";
echo "Present hour is ". date("H")."<br>";
echo "Present Minute is ". date("i")."<br>";
echo "Present Second is ". date("s")."<br>";
echo "Present Maridiem is ". date("A")."<br>";
echo "Present Time is ". date(" d/m/Y h:i:s:a e")."<br>";
echo "Present Time is ". date("d/m/Y")."<br>";

date_default_timezone_set("Asia/Karachi");
echo "Present Time is ". date("h:i:s:a e" )."<br>";

?>