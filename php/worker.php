<?php

Session_start();
if($_SESSION['logged_in'] != 1)
{
	$_SESSION['msg'] = "You must be logged in to complete the registration!";
	header("location: http://phirb.gearhostpreview.com/error.php");
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
		 $tablename = validMySQL(filter_input(INPUT_POST,'database_location',FILTER_SANITIZE_SPECIAL_CHARS), $conn);
		 $position = validMySQL(filter_input(INPUT_POST, 'position', FILTER_SANITIZE_SPECIAL_CHARS), $conn);
		 $qualifications = "";
		 $wages = validMySQL(filter_input(INPUT_POST, 'wage', FILTER_SANITIZE_SPECIAL_CHARS), $conn);
		 $contact_info = validMySQL(filter_input(INPUT_POST, 'contact_info', FILTER_SANITIZE_SPECIAL_CHARS), $conn);
		 $notes = validMySQL(filter_input(INPUT_POST, 'notes', FILTER_SANITIZE_SPECIAL_CHARS), $conn);
		 $user = $_SESSION['email'];
		 
		for($i = 1; $i < 16; $i++)
		{
			$temp = validMySQL(filter_input(INPUT_POST, 'qual' . $i, FILTER_SANITIZE_SPECIAL_CHARS), $conn);
			if($temp != ""){
				$qualifications .= $temp . "|\|";
			}
		}
		
		if(mysqli_connect_error()){
			$_SESSION['msg'] = "Uh oh! Could not connect!";
			header("location: http://phirb.gearhostpreview.com/error.php");
		}
		else{
			$sql = "INSERT INTO $tablename (user, position, qualifications, wage, contact, notes, active)
			values('$user', '$position', '$qualifications', '$wages', '$contact_info', '$notes', 'yes');";
			
			if($conn->query($sql)){
				$conn->close();	
				header("location: http://phirb.gearhostpreview.com/index.php");
			}
			else{
				echo "Error:" .$sql."<br>".$conn->error;
				
			}
			$conn->close();	
		}
?>