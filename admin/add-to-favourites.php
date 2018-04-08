<?php 

require_once '../functions/init.php';

$adno = $_POST['adno'];
$user_email = current_user_email();

// echo $adno;
// echo $user_email;
add_book_to_favourite_list($adno,$user_email);

?>