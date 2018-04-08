<?php 

require_once '../functions/init.php';

$adno = $_POST['adno'];
$user_email = current_user_email();

// echo $adno;
// echo $user_email;
delete_ads_from_bookads_by_adno_and_email($adno,$user_email);

?>