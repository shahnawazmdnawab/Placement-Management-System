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

if(1)
{
  if(1)
   { 
    if(mysqli_query($connect,"INSERT INTO `placement`.`plogin` ( `Fullname`, `Username`, `Password`)
          VALUES ('$fname', '$lname', '$USN')"))
    {
        echo "<center>Details has been received successfully...!!</center>";
header("location:manage-users.php");
      }
    
     
    else echo "FAILED";
}
else
echo "enter right enrollment";
header("location:manage-users.php");


}
}
?>
