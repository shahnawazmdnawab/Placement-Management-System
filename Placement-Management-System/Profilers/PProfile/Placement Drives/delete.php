

<?php
//delete.php
$connect = mysqli_connect("localhost", "root", "", "details");
if(isset($_POST["id"]))
{
 foreach($_POST["id"] as $id)
 {
  $query = "insert into placed values(  '".$id."','".$_POST['company']."')";
  mysqli_query($connect, $query);
 }
}
?>