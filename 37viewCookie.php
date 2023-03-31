<?php
echo "Cookie name is: ".$_COOKIE['user'];
setcookie("user","",time()-(3600),"/");
?>