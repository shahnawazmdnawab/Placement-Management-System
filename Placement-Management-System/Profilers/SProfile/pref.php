<?php
  session_start();
  if($_SESSION["username"]){
    echo "Welcome, ".$_SESSION['username']."!";
  }
   else {
	   header("location: index.php");
}
   
?>
<?php
$connect = mysqli_connect("localhost", "root", "", "details"); // Selecting Database from Server
if(isset($_POST['submit']))
{ 
$fname = $_POST['Fname'];
$lname = $_POST['Lname'];
$USN = $_POST['USN'];
$sun = $_SESSION["username"];
$phno = $_POST['Num'];
$email = $_POST['Email'];
$date = $_POST['DOB'];
$course = $_POST['course'];
$branch = $_POST['Branch'];
$per = $_POST['Percentage'];
$puagg = $_POST['Puagg'];
$beaggregate = $_POST['Beagg'];
$back = $_POST['Backlogs'];
$cursem = $_POST['Cursem']; 
$detyear = $_POST['Dety'];

if($USN !=''||$email !='')
{
	if($USN==$sun)
   { 
    if(mysqli_query($connect,"INSERT INTO `details`.`basicdetail` ( `FirstName`, `LastName`, `Enrollment`, `Mobile`, `Email`, `DOB`, `Course`, `Semester`, `Branch`, `Tenth`, `Twelve`, `Cgpa`, `currentback`, `Year`, `Approve`) 
          VALUES ('$fname', '$lname', '$USN', '$phno', '$email', '$date', '$course', '$cursem','$branch', '$per', '$puagg', '$beaggregate', '$back', '$detyear', '0')"))
    {
				echo "<center>Details has been received successfully...!!</center>";
				header("location:login.php");
      }
	  
     
		else echo "FAILED";
}
else
echo "enter right enrollment";
header("location:login.php");


}
}
?>


<?php
$connect = mysqli_connect("localhost", "root", "", "details"); // Selecting Database from Server
if(isset($_POST['update']))
{ 
$fname = $_POST['Fname'];
$lname = $_POST['Lname'];
$USN = $_POST['USN'];
$sun = $_SESSION["username"];
$phno = $_POST['Num'];
$email = $_POST['Email'];
$date = $_POST['DOB'];
$course = $_POST['course'];
$branch = $_POST['Branch'];
$per = $_POST['Percentage'];
$puagg = $_POST['Puagg'];
$beaggregate = $_POST['Beagg'];
$back = $_POST['Backlogs'];
$cursem = $_POST['Cursem']; 
$detyear = $_POST['Dety'];
$sql = mysqli_query($connect,"SELECT * FROM `basicdetail` WHERE `Enrollment`='$USN'");
while ($row= mysqli_fetch_array($sql))	
{
	if($fname=='')
	{
		       
 $fname=$row['FirstName']; 
	}
if($lname=='')
	{
		       
 $lname=$row['LastName']; 
	}
	if($phno=='')
	{
		       
 $phno=$row['Mobile']; 
	}
if($email=='')
	{
		       
 $email=$row['Email']; 
	}
if($date=='')
	{
		       
 $date=$row['DOB']; 
	}
	if($course=='')
	{
		       
 $course=$row['Course']; 
	}
	if($cursem=='')
	{
		       
 $cursem=$row['Semester']; 
	}
	if($branch=='')
	{
		       
 $branch=$row['Branch']; 
	}
	
	if($per=='')
	{
		       
 $per=$row['Tenth']; 
	}
	if($puagg=='')
	{
		       
 $puagg=$row['Twelve']; 
	}
	if($beaggregate=='')
	{
		       
 $beaggregate=$row['Cgpa']; 
	}

	if($back=='')
	{
		       
 $fback=$row['Currentback']; 
	}
	if($detyear=='')
	{
		       
 $detyear=$row['Year']; 
	}

	$s=$row['Approve'];


}

if(mysqli_num_rows($sql) == 1)
	{
  
		if(mysqli_query($connect,"UPDATE `basicdetail` SET `FirstName`='$fname',`LastName`='$lname',`Mobile`='$phno',`Email`='$email',`Semester`='$cursem',`Cgpa`='$beaggregate',`Currentback`='$back'
           WHERE `Enrollment` = '$USN'"))
               {
				echo "<center>Data Updated successfully...!!</center>";
               }
	  
            else echo "<center>FAILED</center>";
		
	}	
	else echo "<center>NO record found for update</center>";
	
}
?>