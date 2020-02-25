<?php
  session_start();
  if(isset($_SESSION["priusername"])){
   
  }
   else
	   header("location: index.php")
?>
<?php 

$id = $_GET['Id'];


$conn = mysqli_connect("localhost", "root", "","placement");


// sql to delete a record
$sql = "DELETE FROM hlogin WHERE Id= $id"; 

if (mysqli_query($conn, $sql)) {
    header('Location:login.php'); //If book.php is your main page where you list your all records
    exit;
} else {
    echo "Error deleting record";
}
?>