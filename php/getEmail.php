<?php


$q = $_GET['q'];


$conn = mysqli_connect("den1.mysql4.gear.host", "userinfo3", "Ha0Q7?qu~19k", "userinfo3");
	
	
	$result1 = mysqli_query($conn, "SELECT COUNT(*) as quantity from login_info WHERE email = '$q'");
	$row = $result1->fetch_assoc();
	$num = $row['quantity'];
	
	if($num == 1)
	{
		echo "yes";
	}
	else{
		echo "no";
	}
?>