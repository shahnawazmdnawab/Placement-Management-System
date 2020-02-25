<?php
  session_start();
  if(isset($_SESSION["priusername"])){
  }
   else
	   header("location: index.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <!--favicon-->
        <link rel="shortcut icon" href="favicon.ico" type="image/icon">
        <link rel="icon" href="favicon.ico" type="image/icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>Principal - Student Details</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>  
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
         <?php
		  $Welcome = "Welcome";
          echo "<h1>" . $Welcome . "<br>". $_SESSION['priusername']. "</h1>";
		  ?>
        </header>
        <div class="profile-photo-container">
          <img src="images/profile-photo.jpg" alt="Profile Photo" class="img-responsive">  
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
          <li><a href="index.php" ><i class="fa fa-home fa-fw"></i>Dashboard</a></li>
            <li><a href="Students Eligibility.php" class="active"><i class="fa fa-users fa-fw"></i>HOD Details</a></li>
            
            <li><a href="manage-users.php" ><i class="fa fa-users fa-fw"></i>PTO Details</a></li>
            <li><a href="logout.php"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>
          </ul>  
        </nav>
      </div>
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                  <li>
                  <a href="../../Homepage/index.php">Home SDBCE</a>
                </li>
                <li>
                  <a href="../../Drives/index.php">Drives Homepage</a>
                </li>
                
                <li>
                  <a href="Change Password.php">Change Password</a>
                  </li>
              </ul>  
            </nav> 
          </div>
        </div>


         <div class="templatemo-content-container">


















 <div class="templatemo-content-container">
          <div class="templatemo-flex-row flex-content-row">
            <div class="templatemo-content-widget white-bg col-1">
            
            
         
          <div class="templatemo-flex-row flex-content-row">
            <div class="col-1">              
                    <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10"> ADD HOD </h2>
            
            <form action="eligibility.php" class="templatemo-login-form" method="POST" enctype="multipart/form-data">
      
              <div class="row form-group">
                                    
        <div class="col-lg-6 col-md-6 form-group">
                  <label for="sslc">Full Name</label>
                  <input type="text" name="sslc" class="form-control" id="sslc" placeholder="">
                </div>
        <div class="col-lg-6 col-md-6 form-group">
                  <label for="Pu">User Name</label>
                  <input type="text" name="pugg" class="form-control" id="Pu" placeholder="">
                </div>
                <div class="col-lg-6 col-md-6 form-group">
                  <label for="BE">Password</label>
                  <input type="password" name="beagg" class="form-control" id="BE" placeholder=""> </div>
      
                   <div class="col-lg-6 col-md-6 form-group">
                  <label for="BE">Branch</label>
                  <input type="text" name="branch" class="form-control" id="BE" placeholder=""> </div>

                <div class="col-lg-12 col-md-12 form-group" align="center"><br>
                <button type="submit" name="submit" class="templatemo-blue-button">submit</button>
                <button type="reset" class="templatemo-white-button">Reset</button>
              </div> 
 


                
              
            </form>
          </div>     
                    
            </div> 
             <div class="col-1">              
                    
                    <div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden">
              
                <div class="panel-heading templatemo-position-relative"><h2 class="text-uppercase">HOD List</h2></div>
                <div class="table-responsive">
                  <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <td>ID.</td>
                        <td>Full Name</td>
                        <td>User Name</td>
                        <td>Password</td>
                         <td>Branch</td>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
    

$connect = mysqli_connect("localhost", "root", "", "placement");
$sq = "SELECT * FROM hlogin";/* ORDER BY ApprovalDate DESC LIMIT $start_from, $num_rec_per_page*/
$res = mysqli_query ($connect,$sq); //run the query

while ($row= mysqli_fetch_array($res)) 
{ 

    echo"<tr>"; 
echo"<td>" . $row['Id'] . "</td>";  
 echo "<td>" . $row['Fullname'] . "</td>"; 

echo"<td>" . $row['Username'] . "</td>"; 
echo "<td>" . $row['Password'] . "</td>"; 
echo "<td>" . $row['Branch'] . "</td>";
 echo"</tr>"; 

}
?>                
                    </tbody>
                  </table>    
                </div>                          
              </div>
            </div>           
            </div>       
            </div>
                   
          </div> <!-- Second row ends -->
       
          </div>

          
          
          <footer class="text-right">
             <p>Copyright &copy; 2019 SDBCE-PMS | Developed by
              <a href="#" target="_parent">(s)Square</a></p>
          </footer>      
        </div>
      </div>
    </div>
    
    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->
    <script>
      $(document).ready(function(){
        // Content widget with background image
        var imageUrl = $('img.content-bg-img').attr('src');
        $('.templatemo-content-img-bg').css('background-image', 'url(' + imageUrl + ')');
        $('img.content-bg-img').hide();        
      });
    </script>
  </body>
</html>