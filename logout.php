<?php   
session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
echo"LOGGED OUT";
header("Location: http://localhost/vsc/login.html");
exit;

?>
