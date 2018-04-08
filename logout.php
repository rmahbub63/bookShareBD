<?php include("functions/init.php");

session_destroy();
$cookie_name = $_COOKIE["username"];
unset($_COOKIE[$cookie_name]);
// empty value and expiration one hour before
setcookie($cookie_name, '', time() - 3600);

echo "string";

die();

redirect("login.php");


