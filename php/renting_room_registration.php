<?php

Session_start();

if($_SESSION['logged_in'] != 1)
{
	$_SESSION['msg'] = "You must be logged in to complete the registration!";
	header("location: errormsg.php");
}

function validMySQL($var, $dbc) {
$var=stripslashes($var);
$var=htmlentities($var);
$var=strip_tags($var);
$var=mysqli_real_escape_string($dbc, $var);
return $var;
}

		$host="den1.mysql4.gear.host";
		$dbusername= "userinfo3";
		$dbpassword = "Ha0Q7?qu~19k";
		$dbname = "userinfo3";
		
		$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
		
		 $location = validMySQL(filter_input(INPUT_POST, 'Location', FILTER_SANITIZE_SPECIAL_CHARS), $conn);
		 $description = validMySQL(filter_input(INPUT_POST, 'description', FILTER_SANITIZE_SPECIAL_CHARS), $conn);
		
		 $price = validMySQL(filter_input(INPUT_POST, 'price', FILTER_SANITIZE_SPECIAL_CHARS), $conn);
		 $phone_number = validMySQL(filter_input(INPUT_POST, 'PhoneNumber', FILTER_SANITIZE_SPECIAL_CHARS), $conn);
		 $email = validMySQL(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS), $conn);
		 $notes= validMySQL(filter_input(INPUT_POST, 'notes', FILTER_SANITIZE_SPECIAL_CHARS), $conn);
		 $user = $_SESSION['email'];
		

		
		if(mysqli_connect_error()){
			$_SESSION['msg'] = "Uh oh! Could not connect!";
			header("location: errormsg.php");
			die(); 
		}
		else{
			$sql = "INSERT INTO room_for_rent (user, location, description, price, phone_number, email, notes, active)
			values('$user', '$location', '$description' , '$price','$phone_number', '$email', '$notes', 'yes');";
			
			
			if($conn->query($sql)){
			
			}
			else{
				echo "Error:" .$sql."<br>".$conn->error;
				
			}
			$conn->close();	
			
			$target_dir = "images/";
			
			for($i = 1; $i <= 4; $i++){
			
			$tempname = "fileToUpload".$i;
	if(isset($_FILES[$tempname])){
			$target_file = $target_dir . basename($_FILES[$tempname]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
			
			if(isset($_POST["submit"])){
				$check = getimagesize($_FILES[$tempname]["tmp_name"]);
				
				if($check !== false){
					$uploadOk = 1;
				}
				else{
					$uploadOk = 0;
				}
				
			}
			if(file_exists($target_file)){
				$uploadOk = 0;
			}
			if($_FILES[$tempname]['size'] > 500000){
				$uploadOk = 0;
			}
			
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"&& $imageFileType != "gif" ) {
				$uploadOk = 0;
			}
			if ($uploadOk == 1) {
				
				if (move_uploaded_file($_FILES[$tempname]["tmp_name"], $target_file)) {
					header("location: http://phirb.gearhostpreview.com/index.php");
				}
		
			}
			}
			}


		}
?>