<?php

Session_start();


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
		
		$password = password_hash(validMySQL(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS), $conn), PASSWORD_BCRYPT);
		$email = validMySQL(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS), $conn);
		$fName = validMySQL(filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_SPECIAL_CHARS), $conn);
		$lName = validMySQL(filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_SPECIAL_CHARS), $conn);
		$hash = md5(rand(0,1000));
		
		$result = $conn->query("SELECT * FROM login_info WHERE email='$email'") or die($mysqli0>error());
		
		

		if(mysqli_connect_error()){
			die();
		}
		else if($result->num_rows >0)
		{
			$_SESSION["msg"] = "Email taken!";
			header("location: http://phirb.gearhostpreview.com/error.php");
			
		}
		else{
			$sql = "INSERT INTO login_info (first_name, last_name, email, password, hash)
			values('$fName', '$lName', '$email', '$password', '$hash');";
			
			
			if($conn->query($sql)){
				
				header("location:http://phirb.gearhostpreview.com/index.php");
			}
			else{
				echo "Error:" .$sql."<br>".$conn->error;
				header("location: http://phirb.gearhostpreview.com/error.php");
			}
			$conn->close();	
		}






?>