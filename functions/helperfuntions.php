<?php 

/******* helper function ****/
	function clean($string){
		
		return htmlentities($string);
	}

	function redirect($location){
		
		return header("Location: {$location}");
		
	}

	function set_message($message){
		if(!empty($message)){
			$_SESSION['message'] = $message;
		}else {
			$message = "";
		}
	}

	function display_message(){
		if(isset($_SESSION['message'])){
			
			echo $_SESSION['message'];
			unset($_SESSION['message']);
		}
	}

	function token_generator(){
		
		$token = $_SESSION['token'] = md5(uniqid(mt_rand(),true));
		
			return $token;
		
	}

function validation_errors($error){
	$error_message = <<<DELIMITER
			<div class="alert alert-danger alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <strong>Warning!</strong> $error
			</div>
DELIMITER;

	return $error_message;
}


function last_id(){

global $con;

return mysqli_insert_id($con);


}


/*******END of  helper function ****/

 ?>