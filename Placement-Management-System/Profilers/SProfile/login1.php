<?php
	session_start();
	$username = $_POST['username'];
	$password  = $_POST['password'];
	
	if ($username&&$password)
	{
	/*	$connect = mysql_connect("localhost","root","") or die("Couldn't Connect");
		mysql_select_db("placement") or die("Cant find DB");

/*
number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);


*/
		
		$connect = mysqli_connect("localhost", "root", "", "placement");
		
		$query = "SELECT * FROM sslogin WHERE Enrollment='$username' and Password='$password'";
		
		$numrows = mysqli_query($connect,$query);
		
		if ($numrows!='')
		{
			while($row = mysqli_fetch_array($numrows))
			{
				$dbusername = $row['Enrollment'];
				$dbpassword = $row['Password'];
				
			}
			if ($username==$dbusername&& $password==$dbpassword)
			{
				  echo "<center>Login Successfull..!! <br/>Redirecting you to HomePage! </br>If not Goto <a href='index.php'> Here </a></center>";
			  echo "<meta http-equiv='refresh' content ='3; url=index.php'>";
				$_SESSION['username'] = $username;
				//$_SESSION['Name'] = mysql_query("SELECT Name FROM slogin WHERE USN='$username'");
			} else{
				$message = "Username and/or Password incorrect.";
  			echo "<script type='text/javascript'>alert('$message');</script>";
			  echo "<center>Redirecting you back to Login Page! If not Goto <a href='index.php'> Here </a></center>";
			  echo "<meta http-equiv='refresh' content ='1; url=index.php'>";
			}
		}else
			die("User not exist");
	}
	else
	die("Please enter USN and Password");
	?>