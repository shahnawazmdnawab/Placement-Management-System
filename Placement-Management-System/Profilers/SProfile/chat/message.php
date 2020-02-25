<?php
  session_start();
  if($_SESSION["username"]){
    
  }
   else {
     header("location: index.php");
   die("You must be Log in to view this page <a href='index.php'>Click here</a>");}
   
?>
<?php

include('database_connection.php');




?>
<!DOCTYPE html>
<html lang="en">
  
  <head>
    <!--favicon-->
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.rawgit.com/mervick/emojionearea/master/dist/emojionearea.min.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.rawgit.com/mervick/emojionearea/master/dist/emojionearea.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
        <link rel="shortcut icon" href="favicon.ico" type="image/icon">
        <link rel="icon" href="favicon.ico" type="image/icon">
      
    <link rel="shortcut icon" href="favicon.ico" type="image/icon">
    <link rel="icon" href="favicon.ico" type="image/icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Preferences</title>
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
          echo "<h1>" . $Welcome . "<br>". $_SESSION['username']. "</h1>";
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
            <li>
              <a href="login.php"><i class="fa fa-home fa-fw"></i>Dashboard</a>
            </li>
            <li>
              <a href="company.php"><i class="fa fa-bar-chart fa-fw"></i>Placement Drives</a>
            </li>
            <li>
              <a href="#" class="active"><i class="fa fa-sliders fa-fw"></i>Preferences</a>
            </li>
            <li>
              <a href="logout.php"><i class="fa fa-eject fa-fw"></i>Sign Out</a>
            </li>
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
                  <a href="../../Homepage/index.html" >Home SDBCE</a>
                </li>
                <li>
                  <a href="">Drives Homepage</a>
                </li>
                
                <li>
                  <a href="Change Password.php">Change Password</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>

        <div class="templatemo-content-container">
  <div class="panel panel-default table-responsive">  
  <div class="templatemo-content-widget no-padding">
 
     <div id="user_details"></div>   


  

  
 </div>
 </div>



    <footer class="text-right">
              <p>Copyright &copy; 2019 SDBCE-PMS | Developed by
             <a href="#" target="_parent">(s)Square</a>
        </p>
          </footer>
        </div>
      </div>
    </div>
    
    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <!-- jQuery -->
    <script type="text/javascript" src="js/bootstrap-filestyle.min.js"></script>
    <!-- http://markusslima.github.io/bootstrap-filestyle/ -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>
    <!-- Templatemo Script -->
  </body>

</html> 
<style>

.chat_message_area
{
 position: relative;
 width: 100%;
 height: auto;
 background-color: #FFF;
    border: 1px solid #CCC;
    border-radius: 3px;
}

#group_chat_message
{
 width: 100%;
 height: auto;
 min-height: 80px;
 overflow: auto;
 padding:6px 24px 6px 12px;
}

.image_upload
{
 position: absolute;
 top:3px;
 right:3px;
}
.image_upload > form > input
{
    display: none;
}

.image_upload img
{
    width: 24px;
    cursor: pointer;
}

</style>  


<script>  
$(document).ready(function(){

 fetch_user();

 setInterval(function(){
  update_last_activity();
  fetch_user();
 }, 5000);

 function fetch_user()
 {
  $.ajax({
   url:"fetch_user.php",
   method:"POST",
   success:function(data){
    $('#user_details').html(data);
   }
  })
 }

 function update_last_activity()
 {
  $.ajax({
   url:"update_last_activity.php",
   success:function()
   {

   }
  })
 }
 
});  
</script>
