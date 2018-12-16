<?php


$q = $_GET['q'];
$p = $_GET['ped'];

$conn = mysqli_connect("den1.mysql4.gear.host", "userinfo3", "Ha0Q7?qu~19k", "userinfo3");
	
	$query = "SELECT  password FROM login_info WHERE email = '$q'";
	
	
	$result1 = mysqli_query($conn, "SELECT COUNT(*) as quantity from login_info WHERE email = '$q'");
	$row = $result1->fetch_assoc();
	$num = $row['quantity'];
	
	if($num == 1)
	{
		$result = current(mysqli_query($conn, $query)->fetch_assoc());
		
		if(password_verify($p, $result)){
			echo "lol1";
		}
		else{
			echo "lol2";
		}
	}
	else{
		echo "lol3";
	}
?>