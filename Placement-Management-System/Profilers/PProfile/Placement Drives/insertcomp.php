<?php
  session_start();
  if($_SESSION["pusername"]){
  }
   else {
     header("location: ../index.php");
   }
?>
<?php
$connect = mysqli_connect("localhost", "root", "", "details");; // Establishing Connection with Server
// Selecting Database from Server
if(isset($_POST['submit']))
{ 
$cname = $_POST['compny'];
$date = $_POST['date'];
$cse = $_POST['cse'];
$me = $_POST['me'];
$ee = $_POST['ee'];
$ce = $_POST['ce'];
$it = $_POST['it'];

$per = $_POST['sslc'];
$puagg = $_POST['puagg'];
$beaggregate = $_POST['beagg'];
$back = $_POST['curback'];
$hisofbk = $_POST['year'];
//$breakstud = $_POST['break'];
$otherdet = $_POST['odetails'];
if($cname !=''||$date !='')
{
    /*if($query = mysqli_query("INSERT INTO `details`.`addpdrive`(`CompanyName`,`Date`,`C/P`,`PVenue`,`SSLC`,`PU/Dip`,`BE`,`Backlogs`,`HofBacklogs`,`DetainYears`,`ODetails`)
    VALUES ('$cname', '$date', '$campool', '$poolven', '$per', '$puagg', '$beaggregate', '$back', '$hisofbk', '$breakstud', '$otherdet')")){
                      echo "<center>Drive Inserted successfully</center>";
    }*/


$query = "INSERT INTO `details`.`drive`(`CompName`,`Tenth`,`Twelve`,`Cgpa`,`Currentback`,`Year`,`ODetails`)
    VALUES ('$cname', '$per', '$puagg', '$beaggregate', '$back', '$hisofbk', '$otherdet')";
    

if (mysqli_query($connect, $query)) {

  $q="INSERT INTO `details`.`branch`(`CompName`,`CSE`,`ME`,`IT`,`EE`,`CE`)
    VALUES ('$cname', '$cse', '$me', '$it', '$ee', '$ce')";

  if (mysqli_query($connect, $q)) {

                 //   echo "<script> alert('Record is Inserted');</script>";
                    echo "<script>window.location.href='addpdrive.php'</script>";
                    
}
                  }

      else die("FAILED");
} else
  die("Feild Canniot be left blank");
}

/*

$connect = mysqli_connect("localhost", "root", "", "placement");
    
    $query = "INSERT INTO `details`.`addpdrive`(`CompanyName`,`Date`,`C/P`,`PVenue`,`SSLC`,`PU/Dip`,`BE`,`Backlogs`,`HofBacklogs`,`DetainYears`,`ODetails`)
    VALUES ('$cname', '$date', '$campool', '$poolven', '$per', '$puagg', '$beaggregate', '$back', '$hisofbk', '$breakstud', '$otherdet')";
    
    $numrows = mysqli_query($connect,$query);


*/

?>