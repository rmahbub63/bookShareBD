<?php 

        /*
         * Insert image data into database
         */
        
        //DB details
        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'bookshare';
        
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        
        // Check connection
        if($db->connect_error){
        	die("Connection failed: " . $db->connect_error);
        }
        
        // $dataTime = date("Y-m-d H:i:s");
        
        // //Insert image content into database
        // $insert = $db->query("INSERT into images (image, created) VALUES ('$imgContent', '$dataTime')");

        // //Define back slash so that you can use it anywhere later
        // defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);
        // // Define your website siteroot
        // defined("SITE_ROOT") ? null : define("SITE_ROOT", "C:".DS."xampp".DS."htdocs".DS."bookshare");
        // $file_upload_to=SITE_ROOT . DS . "uploads\adimages";
        // move_uploaded_file($image, $file_upload_to . DS . $_FILES['image']['name']);
        // if($insert){
        //     echo "File uploaded successfully.";
        // }else{
        //     echo "File upload failed, please try again.";
        // }
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];

        $image = $_FILES['file']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        $sql = "INSERT INTO test(name,email,phone,address,image) VALUES (?,?,?,?,?)";
        $stmt   = $db->prepare($sql);
        $stmt->bind_param('sssss', $name, $email, $phone, $address, $imgContent);

        if($stmt->execute())
        {
        	$res="Data Inserted Successfully:";
        	echo json_encode($res);
        }
        else {
        	$error="Not Inserted,Some Probelm occur.";
        	echo $error;
        }

    //Define back slash so that you can use it anywhere later
        defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);
    // Define your website siteroot
        defined("SITE_ROOT") ? null : define("SITE_ROOT", "C:".DS."xampp".DS."htdocs".DS."bookshare");
        $file_upload_to=SITE_ROOT . DS . "uploads";

        move_uploaded_file($_FILES["file"]["tmp_name"], $file_upload_to . DS . $_FILES['file']['name']);
    ?>