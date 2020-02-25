<?php
  session_start();
 if (isset($_SESSION['pusername'])){
	   }
   else {
	   header("location: index.php");
   }
   
?>

<?php 

$id = $_GET['Id'];


$conn = mysqli_connect("localhost", "root", "","details");


// sql to delete a record
$sql ="DELETE FROM drive WHERE CompName='$id'"; 
$sq = "DELETE FROM branch WHERE CompName='$id'";
if (mysqli_query($conn,$sql)&&mysqli_query($conn,$sq)) {
	header('Location:CompanyDetails.php'); //If book.php is your main page where you list your all records
    exit;
 
} else {
    echo "Error deleting record";
}
?>