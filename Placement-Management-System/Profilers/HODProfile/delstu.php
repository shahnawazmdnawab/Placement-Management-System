<?php
  session_start();
 if (isset($_SESSION['husername'])){
   
	   }
   else {
	   header("location: index.php");
  }
   
?>
<?php 

$id = $_GET['Id'];


$conn = mysqli_connect("localhost", "root", "","details");


// sql to delete a record
$sql = "DELETE FROM basicdetail WHERE Enrollment='$id'"; 

if (mysqli_query($conn, $sql)) {
    header('Location:manage-student.php'); //If book.php is your main page where you list your all records
    exit;
} else {
    echo "Error deleting record";
}
?>