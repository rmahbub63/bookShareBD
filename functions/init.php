<?php ob_start();

session_start();

include("bookfunctions.php");
include("loginfunctions.php");
include("helperfuntions.php");
include("db.php");


define('BASEURL', '/bookshare/');
//Define back slash so that you can use it anywhere later
defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);
    // Define your book upload siteroot
defined("SITE_ROOT") ? null : define("SITE_ROOT", "C:".DS."xampp".DS."htdocs".DS."bookshare". DS . "admin" . DS . "uploads/books");
// Define user image ipload siteroot
defined("SITE_ROOT_USER") ? null : define("SITE_ROOT_USER", "C:".DS."xampp".DS."htdocs".DS."bookshare". DS . "admin" . DS . "uploads/users");
?>