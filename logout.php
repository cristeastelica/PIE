<?php
setcookie("TestCookie", "", time()-3600);  /* expire in 1 hour */
setcookie("TestCookie", "", time()-3600, "/", "localhost", 1);
header('refresh:1;url=index.php');
?>