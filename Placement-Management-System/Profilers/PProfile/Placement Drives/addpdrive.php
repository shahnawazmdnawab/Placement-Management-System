<?php
  session_start();
  if($_SESSION["pusername"]){
  }
   else {
	   header("location: ../index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
  
  <head>
    <!--favicon-->
   
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/templatemo-style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   </head>
 
  <body>
  	
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
         <?php
		  $Welcome = " How are You?";
          echo "<h1>" . $Welcome . "<br>". $_SESSION['pusername']. "</h1>";
		  ?>
        </header>
        <div class="profile-photo-container">
          <img src="../images/profile-photo.jpg" alt="Profile Photo" class="img-responsive">
          <div class="profile-photo-overlay"></div>
        </div>
        <!-- Search box -->
        <form class="templatemo-search-form" role="search">
          <div class="input-group">
            <button type="submit" class="fa fa-search"></button>
            <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
          </div>
        </form>
        <div class="mobile-menu-icon">
          <i class="fa fa-bars"></i>
        </div>
        <nav class="templatemo-left-nav">
           <ul>
            <li><a href="../login.php"><i class="fa fa-home fa-fw"></i>Dashboard</a></li> 
            <li><a href="../Placement Drives.php" class="active"><i class="fa fa-home fa-fw"></i>Placement Drives</a></li>           
            <li><a href="../manage-users.php"><i class="fa fa-users fa-fw"></i>View Students</a></li>
        
            <li><a href="../Students Eligibility.php"><i class="fa fa-sliders fa-fw"></i>Students Eligibility</a></li>
            <li><a href="../logout.php"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>
          </ul>  
        </nav>
      </div>
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
               <li><a href="../../../Homepage/index.php">Home SDBCE</a></li>
                <li><a href="../../../Drives/index.php">Drives Home</a></li>
                <li><a href="../Notif.php">Notifications</a></li>
              
              </ul>
            </nav>
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">ADD PLACEMENT DRIVE</h2>
            <p>Update drive</p>
            <form action="insertcomp.php" class="templatemo-login-form" method="POST" enctype="multipart/form-data">
              
			    
                <div class="col-lg-6 col-md-6 form-group">
                  <label for="inputFirstName">Company Name</label>
                  <input type="text" name="compny" class="form-control" id="inputFirstName" placeholder="company" >
                </div>
				
				
                <div class="col-lg-6 col-md-6 form-group">
                  <label for="DOB">Date</label>
                  <input type="date" name="date" class="form-control" id="DOB" placeholder="DD/MM/YYYY">
              	
				</div>
	 <label >Branch</label> 
<div class="col-lg-12 form-group"> 

                    <div class="margin-right-15 templatemo-inline-block col-lg-2">
                      <input type="checkbox" name="cse" id="cse" value="CSE" >
                      <label for="cse" class="font-weight-400"><span></span>CSE</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block col-lg-2">                      
                      <input type="checkbox" name="me" id="me" value="ME">
                      <label for="me" class="font-weight-400"><span></span>ME</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block col-lg-2">
                      <input type="checkbox" name="ee" id="ee" value="ECE">
                      <label for="ee" class="font-weight-400"><span></span>ECE</label>                      
                    </div>
                    <div class="margin-right-15 templatemo-inline-block col-lg-2">
                      <input type="checkbox" name="ce" id="ce" value="CE">
                      <label for="ce" class="font-weight-400"><span></span>CE</label>                      
                    </div>
                    <div class="margin-right-15 templatemo-inline-block col-lg-2">
                      <input type="checkbox" name="it" id="it" value="IT">
                      <label for="it" class="font-weight-400"><span></span>IT</label>                      
                    </div> 
                </div>



				
				<div class="col-lg-6 col-md-6 form-group">
                  <label for="sslc">SSLC/10th Aggregate</label>
                  <input type="text" name="sslc" class="form-control" id="sslc" placeholder="">
                </div>
				
				<div class="col-lg-6 col-md-6 form-group">
                  <label for="Pu">12th/Diploma Aggregate</label>
                  <input type="text" name="puagg" class="form-control" id="Pu" placeholder="">
                </div>
				
				<div class="col-lg-6 col-md-6 form-group">
                  <label for="BE">BE Aggregate</label>
                  <input type="text" name="beagg" class="form-control" id="BE" placeholder="" >
                </div>
				
                <div class="col-lg-6 col-md-6 form-group">
                  <label class="control-label templatemo-block">Current Backlogs</label>
                  <select name="curback" class="form-control">
                    <option value="select">Numbers</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                  </select>
                </div>
				
				<div class="col-lg-6 col-md-6 form-group">
                  <label class="control-label templatemo-block">Year Of Passing</label>
                  <select name="year" class="form-control">
                     <option value="">Years</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                  </select>
                </div>
			
				<div class="row form-group">
				<div class="col-lg-6 col-md-6 form-group">				
                  <label for="inputFirstName">Other Details</label>
                  <textarea rows="3" name="odetails" class="form-control" id="inputFirstName" placeholder="Details"></textarea>
				  </div>
</div>				  
          <br>
              <div class="form-group text-right">
                <button type="submit" name="submit" class="templatemo-blue-button">submit</button>
                <button type="reset" class="templatemo-white-button">Reset</button>
              </div>
            </form>
          </div>
          <footer class="text-right">
          		<p>Copyright &copy; 2019 SDBCE-PMS | Developed by
              <a href="#" target="_parent">(s)square</a>
			  </p>
          </footer>
        </div>
      </div>
    </div>
  </body>
</html>


<?php
/*$connect = mysqli_connect("localhost", "root", "", "details");; // Establishing Connection with Server
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
    }


$query = "INSERT INTO `details`.`drive`(`CompName`,`Tenth`,`Twelve`,`Cgpa`,`Currentback`,`Year`,`ODetails`)
    VALUES ('$cname', '$per', '$puagg', '$beaggregate', '$back', '$hisofbk', '$otherdet')";
    

if (mysqli_query($connect, $query)) {

  $q="INSERT INTO `details`.`branch`(`CompName`,`CSE`,`ME`,`IT`,`EE`,`CE`)
    VALUES ('$cname', '$cse', '$me', '$it', '$ee', '$ce')";

  if (mysqli_query($connect, $q)) {

                    echo "<script> alert('Record is Inserted');</script>";
                    
}
                  }

      else die("FAILED");
} else
  die("Feild Canniot be left blank");
} else
  die("You don't have Privilages");

/*

$connect = mysqli_connect("localhost", "root", "", "placement");
    
    $query = "INSERT INTO `details`.`addpdrive`(`CompanyName`,`Date`,`C/P`,`PVenue`,`SSLC`,`PU/Dip`,`BE`,`Backlogs`,`HofBacklogs`,`DetainYears`,`ODetails`)
    VALUES ('$cname', '$date', '$campool', '$poolven', '$per', '$puagg', '$beaggregate', '$back', '$hisofbk', '$breakstud', '$otherdet')";
    
    $numrows = mysqli_query($connect,$query);


*/

?>