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
		
		
		$email = validMySQL(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS), $conn);
		
		
		$result = $conn->query("SELECT * FROM login_info WHERE email='$email'");
		
		if($result->num_rows ==0){
			$_SESSION['msg'] = "Email does not exist";
			header("location: http://phirb.gearhostpreview.com/error.php");
		}
		else{
			$user = $result->fetch_assoc();
			
				if(password_verify($_POST['password'], $user['password'])){
					
					$_SESSION['email'] = $user['email'];
					$_SESSION['first_name']=$user['first_name'];
					$_SESSION['last_name'] = $user['last_name'];
					$_SESSION['active'] = $user['active'];
					
					$_SESSION['logged_in'] = "1";
					
					header("location: http://phirb.gearhostpreview.com/index.php");
				}
				else{
					$_SESSION['msg'] = "Wrong password";
					header("location: http://phirb.gearhostpreview.com/error.php");
					
				}
			
					
			
		}



?>