<?php
	session_start();
	
	$USN1 = $_POST['USN'];
	$password = $_POST['PASSWORD'];
	$confirm = $_POST['repassword'];
	
	$connect = mysqli_connect("localhost", "root", "","placement"); // Establishing Connection with Server
   // Selecting Database from Server
	
	if($password == $confirm) {
		if($sql = mysqli_query($connect,"UPDATE `placement`.`prilogin` SET `Password` ='$password' WHERE `prilogin`.`Username` = '$USN1'"));
		echo "<center>Password Reset Complete</center>";
		 header("location:index.php");
		session_unset();
	} else
	echo "Update Failed";
?>