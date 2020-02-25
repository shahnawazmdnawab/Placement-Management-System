<?php
  session_start();
  if(isset($_SESSION["priusername"])){
  }
   else
	   header("location: index.php");
?>
<?php
$connect = mysqli_connect("localhost", "root", "", "placement"); // Selecting Database from Server
if(isset($_POST['submit']))
{ 
$fname = $_POST['sslc'];
$lname = $_POST['pugg'];
$USN = $_POST['beagg'];
$b = $_POST['branch'];
if(1)
{
  if(1)
   { 
    if(mysqli_query($connect,"INSERT INTO `placement`.`hlogin` ( `Fullname`, `Username`, `Password`,`Branch`)
          VALUES ('$fname', '$lname', '$USN','$b')"))
    {
        echo "<center>Details has been received successfully...!!</center>";
        header("location:Students Eligibility.php");
      }
    
     
    else echo "FAILED";
}
else
echo "enter right enrollment";
header("location:Students Eligibility.php");


}
}
?>

