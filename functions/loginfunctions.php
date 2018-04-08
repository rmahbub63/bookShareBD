<?php



function email_exists($email){
	$sql = "SELECT id FROM user WHERE email = '$email'";
	$result = query($sql);
	if(row_count($result) == 1){
		return true;
	}else{
		return false;
	}
}

function contact_number_exists($contact_number){
	$sql = "SELECT id FROM user WHERE contact_number = '$contact_number'";
	$result = query($sql);
	if(row_count($result) == 1){
		return true;
	} else{
		return false;
	}
}

function send_email($email,$subject,$msg,$headers){
	return mail($email, $subject,$msg,$headers);
}


/******* validation user registration functions ****/
function validate_user_registration(){

	$errors = [];
	$min = 3;
	$max = 50;
	$mid = 11;
	$midl = 14;

	if($_SERVER['REQUEST_METHOD'] == "POST"){

		$name       =clean($_POST['name']);
		$contact_number        =clean($_POST['contact_number']);
		$email            =clean($_POST['email']);
		$password         =clean($_POST['password']);
		$confirm_password =clean($_POST['confirm_password']);



		if(strlen($name) < $min){
			$errors[] = "Your name can not be less than {$min} characters";
		}



		if(contact_number_exists($contact_number)){
			$errors[] = " Sorry contact number is already exist ";

		}

		if(strlen($contact_number) < $mid){
			$errors[] = "Your username can not be less than {$mid} characters";
		}

		if(strlen($contact_number) > $max){
			$errors[] = "Your username can not be more than {$midl} characters";
		}

		if(email_exists($email)){
			$errors[] = " Sorry email is already exist ";

		}

		if(strlen($email) > $max){
			$errors[] = "Your email can not be more than {$max} characters";
		}

		if($password !== $confirm_password){
			$errors[] = "Your password field do not match";
		}

		if(!empty($errors)){
			foreach ($errors as $error){
				echo validation_errors($error);
			}
		}else {
			if(register_user($name,$contact_number,$email,$password)){
				
				set_message("<p class='bg-success text-center'>Please check your email and spam folder</p>");
				redirect("index.php");
			}else{
				set_message("<p class='bg-danger text-center'>Sorry we could not register you</p>");
				redirect("index.php");
			}
		}

		}//post request


    }// function



    /******* Register user ****/
    function register_user($name,$contact_number,$email,$password){

    	$name = escape($name);
    	$contact_number = escape($contact_number);
    	$email = escape($email);
    	$password = escape($password);


    	if(email_exists($email)){
    		return false;
    	}else if(contact_number_exists($contact_number)){
    		return false;
    	}else {
    		$password = md5($password);
    		$validation_code = md5($contact_number + microtime());

    		$sql = "INSERT INTO user(name,contact_number,email,password,validation_code,active)";
    		$sql.= "VALUES('$name','$contact_number','$email','$password','$validation_code',0)";
    		$result = query($sql);
    		confirm($result);

    		$subject = "Activate Account";
    		$msg = "Please click the link below to activate your account
    		http://localhost/login/activate.php?email=$email&code=$validation_code ";

    		$headers ="From: BookShareBd.com";

    		send_email($email,$subject,$msg,$headers);

    		return true;
    	}
    }

    /***Activate user function ****/

    function activate_user(){
    	if($_SERVER['REQUEST_METHOD'] == "GET"){
    		if(isset($_GET['email'])){

    			$email = clean($_GET['email']);
    			$validation_code = clean($_GET['code']);


    			$sql = "SELECT id FROM user WHERE email = '".escape($_GET['email'])."' AND validation_code = '".escape($_GET['code'])."' ";
    			$result = query($sql);
    			confirm($result);

    			if(row_count($result)==1){

    				$sql2 = "UPDATE user SET active = 1, validation_code = 0 where email = '".escape($email)."' AND validation_code = '".escape($validation_code)."'";
    				$result2 = query($sql2);
    				confirm($result2);
    				set_message( "<p class='bg-success'>Your account has been activated please login</p>");
    				redirect("login.php");
    			}else{
    				set_message( "<p class='bg-danger'>Your account could not be activated</p>");
    				redirect("login.php");
    			}
    		}
    	}

    }

    /******* validation user login functions ****/

    function validate_user_login(){

    	$errors = [];
    	$min = 3;
    	$max = 20;

    	if($_SERVER['REQUEST_METHOD'] == "POST"){

    		$email            =clean($_POST['email']);
    		$password         =clean($_POST['password']);
        $remember_me      =0;
        if(isset($_POST["remember_me"])){
          $remember_me = $_POST["remember_me"];
        }

        if(empty($email)){
         $errors[] = "Email field can not be empty";
       }

       if(empty($password)){
         $errors[] = "Password field can not be empty";
       }

       if(!empty($errors)){
         foreach ($errors as $error){
          echo validation_errors($error);
        }
      }else{
       if(login_user($email,$password,$remember_me)){
        redirect("admin");
      }else {
        echo validation_errors("Your credentials are not correct");
      }
    }



  }
}


/******* user login functions ****/
function login_user($email,$password,$remember_me){
 $sql = "SELECT password, id FROM user where email = '".escape($email)."' AND active = 1";
 $result = query($sql);

 if(row_count($result) == 1){
  $row = fetch_array($result);
  $db_password = $row['password'];

  if(md5($password) == $db_password ){

    if($remember_me){
      set_cookie_for_remember_me($email, $password);
    }

    $_SESSION['email'] = $email;

    return true;
  }
}
else{
  return false;
}

}


function set_cookie_for_remember_me($email, $password)
{   $hour = time() + 3600 * 2;
  setcookie('username', $email, $hour, "/");
  setcookie('password', $password, $hour, "/");
}

/**************** Display current user ************/
function current_user_email(){
 if(isset($_SESSION['email'])){
  $email = $_SESSION['email'];
  return $email;
}else {
  return false;
}
}

/******* user login functions ****/

function is_logged_in(){
 if(isset($_SESSION['email'])){
			// return true;
  redirect("admin");
}elseif(isset($_COOKIE["username"]) && isset($_COOKIE["password"])){
 $_SESSION['email'] = $_COOKIE["username"];
 redirect("admin");
} else {
  return false;
}
}


/****************** loggedin check in admin ***************/

function is_logged_in_admin(){
 if(isset($_SESSION['email'])){
      // return true;
  // redirect("admin");
}elseif(isset($_COOKIE["username"]) && isset($_COOKIE["password"])){
 $_SESSION['email'] = $_COOKIE["username"];
 // redirect("admin");
} else {
 redirect("../");
}
}

/************************* login check ************************/

function logged_in_check(){
 if(isset($_SESSION['email'])){
  return true;
  // redirect("admin");
}elseif(isset($_COOKIE["username"]) && isset($_COOKIE["password"])){
 $_SESSION['email'] = $_COOKIE["username"];
 return true;
} else {
  return false;
}
}


/************** Get User Info By Email **********************/

function get_current_user_info(){
  $mail = current_user_email();
  $query = query("SELECT * FROM user where email = '$mail' AND active = 1");
  confirm($query);
  $row = fetch_array($query);
  return $row;
}


/****************** Update user from profile ********************/

function update_user_from_profile(){
  if($_SERVER['REQUEST_METHOD'] == "POST"){

    $name           = escape($_POST['name']);
    $contact_number        = escape($_POST['contact_number']);
    $city              = escape($_POST['city']);
    $address          = escape($_POST['address']);
    $image               = $_FILES['file']['name'];
    $tmp_image           = $_FILES['file']['tmp_name'];

    $image_path               = "uploads/users/".$image;

    $mail = current_user_email();

    move_uploaded_file($tmp_image, SITE_ROOT_USER . DS . $image);

    $query = query("UPDATE user set name='$name',contact_number='$contact_number',city='$city',address='$address', image='$image_path' WHERE email='$mail'");
    confirm($query); 
  }
}


?>