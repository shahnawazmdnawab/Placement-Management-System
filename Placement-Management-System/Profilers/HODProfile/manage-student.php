<?php
  session_start();
 if (isset($_SESSION['husername'])){
   
	   }
   else {
	   header("location: index.php");
  }
   
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
    <title>Manage Students</title>
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
          echo "<h1>" . $Welcome . "<br>". $_SESSION['husername']. "</h1>";
		 echo "<br>";
		 echo "<h1>(</h1>";
		    echo "<h1>" . $_SESSION['department']. "</h1>";   
            echo "<h1>)</h1>";			
		  ?>
        </header>
        <div class="profile-photo-container">
          <img src="images/profile-photo.jpg" alt="Profile Photo" class="img-responsive">  
          <div class="profile-photo-overlay"></div>
        </div>      
        <!-- Search box -->
        <form class="templatemo-search-form" role="search" >
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
            <li><a href="login.php"><i class="fa fa-home fa-fw"></i>Dashboard</a></li>
            <li><a href="manage-student.php" class="active"><i class="fa fa-users fa-fw"></i>Manage Students</a></li>
           
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
                <li><a href="../../Homepage/index.php">Home SDBCE</a></li>
                <li><a href="../../Drives/index.php">Drives</a></li>
                     <li><a href="#">Notification</a></li>
                
              </ul>  
            </nav> 
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget no-padding">
            <div class="panel panel-default table-responsive">
              <table class="table table-striped table-bordered templatemo-user-table">
                <thead>
                  <tr>
              
                     
                    
					<td><a  class="white-text templatemo-sort-by">First Name </a></td>
                    <td><a class="white-text templatemo-sort-by">Last Name </a></td>
                    <td><a class="white-text templatemo-sort-by">Enrollment</a></td>
                    <td><a  class="white-text templatemo-sort-by">Mobile</a></td>
					   <td><a class="white-text templatemo-sort-by">Email</a></td>
                       <td><a  class="white-text templatemo-sort-by">Dob </a></td>
   <td><a class="white-text templatemo-sort-by">Course</a></td>               
   <td><a  class="white-text templatemo-sort-by">Semester</a></td>
     <td><a  class="white-text templatemo-sort-by">Branch</a></td>
   <td><a  class="white-text templatemo-sort-by">SSLC Percentage </a></td>
   <td><a class="white-text templatemo-sort-by">PU Percentage</a></td>
			      <td><a  class="white-text templatemo-sort-by">BE Aggregate</a></td>
			      <td><a  class="white-text templatemo-sort-by">Current Backlogs </a></td>
				     <td><a  class="white-text templatemo-sort-by">Year Of Passing </a></td>
				   <td><a  class="white-text templatemo-sort-by">Approve</a></td>
            <td><a  class="white-text templatemo-sort-by">Delete</a></td>
				  </thead>
			   </tr>
			   
			   <?php
$p = $_SESSION['department'];
$num_rec_per_page=15;
$connect = mysqli_connect("localhost", "root", "", "details");
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$start_from = ($page-1) * $num_rec_per_page; 
$sql = "SELECT * FROM basicdetail WHERE Approve=0 and Branch='$p' LIMIT $start_from, $num_rec_per_page"; 
$rs_result = mysqli_query($connect,$sql); //run the query

while ($row = mysqli_fetch_assoc($rs_result)) 
{ 

            print "<tr>"; 
 
print "<td>" . $row['FirstName'] . "</td>"; 
print "<td>" . $row['LastName'] . "</td>"; 
print "<td>" . $row['Enrollment'] . "</td>"; 
print "<td>" . $row['Mobile'] . "</td>"; 
print "<td>" . $row['Email'] . "</td>";
print "<td>" . $row['DOB'] . "</td>"; 
print "<td>" . $row['Course'] . "</td>"; 
print "<td>" . $row['Semester'] . "</td>";
print "<td>" . $row['Branch'] . "</td>"; 
print "<td>" . $row['Tenth'] . "</td>"; 
print "<td>" . $row['Twelve'] . "</td>"; 
print "<td>" . $row['Cgpa'] . "</td>";
print "<td>" . $row['Currentback'] . "</td>";

print "<td>" . $row['Year'] . "</td>";?> 
<td>
<input style="display:inline-block;" type="checkbox" name="customer_id[]" class="delete_customer"  value="<?php echo $row['Enrollment'];?>"/>
                                            
                      </td>

<?php
 echo"<td><b><a class='btn btn-success'  href='delstu.php?Id={$row['Enrollment']}'>
        Delete</a></b></td>";

print "</tr>"; 

}
?> 

                </tbody>
              </table>  
			  </div>
			  </div>
			  </div> 
 <div class="pagination-wrap">
    <button type="button" name="btn_delete" id="btn_delete" class="templatemo-blue-button" onclick="window.location.reload();">Approve</button>
</div>
  <div class="pagination-wrap">
  <ul class="pagination">
 
			  <?php 
		
$num_rec_per_page=15;
$connect = mysqli_connect("localhost", "root", "", "details");
$sql = "SELECT * FROM basicdetail where Approve=0 and Branch='$p'"; 
$rs_result = mysqli_query($connect,$sql); //run the query
$total_records = mysqli_num_rows($rs_result);  //count number of records
$totalpage = ceil($total_records / $num_rec_per_page); 

 
$currentpage = (isset($_GET['page']) ? $_GET['page'] : 1);
	 if($currentpage == 0)
	{
	   
	}
	else if( $currentpage >= 1  &&  $currentpage <= $totalpage  )
	{
	
		if( $currentpage > 1 && $currentpage <= $totalpage)
			{
				
				$prev = $currentpage-1;
				echo "<li><a  href='manage-student.php?page=".$prev."'><</a></li>";
				
			}
	
	if($totalpage > 1){
$prev = $currentpage-1;
	for ($i=$prev+1; $i<=$currentpage+2; $i++){
		echo "<li><a href='manage-student.php?page=".$i."'>".$i."</a></li>";
  }
  }
	
	
	if($totalpage > $currentpage  )
	{
		$nxt = $currentpage+1;
		echo "<li><a  href='manage-student.php?page=".$nxt."' >></a></li>";
	}

	 echo "<li><a>Total Pages:".$totalpage."</a></li>";
}	
 ?> 
</ul>
</div>

<br><br><center><label class="control-label" for="inputNote"><center><h2>OR</h2></center> <br/> <br/>To View All Student Click Link below:</label><br/>
			   <br/>
			   <a href="manage-users1.php" class="templatemo-blue-button">View All</a></center>				  
            </form>
              
            
          <div class="templatemo-flex-row flex-content-row">
            <div class="col-1">
           
          </div> 
         <div> <footer class="text-right">
		 <br>
           <p>Copyright &copy; 2019 SDBCE-PMS | Developed by
              <a href="#" target="_parent">(s)Square</a>
          </br>
		  </footer></div>         
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


<script>
$(document).ready(function(){
 
 $('#btn_delete').click(function(){
  
 
   var id = [];


   $(':checkbox:checked').each(function(i){
    id[i] = $(this).val();
     console.log(id[0]);
   });
    
   if(id.length === 0) //tell you if the array is empty
   {
    alert("Please Select atleast one checkbox");
   }
   else
   {
    $.ajax({
     url:'manage-student.php',
     method:'POST',
     data:{id:id},
     success:function()
     {
      for(var i=0; i<id.length; i++)
      {
       $('tr#'+id[i]+'').css('background-color', '#ccc');
       $('tr#'+id[i]+'').fadeOut('slow');
      }
     }
     
    });alert("Inserted");
   }
   
  
  
 });
 
});
</script>
<?php
//delete.php

$connect = mysqli_connect("localhost", "root", "", "details");
if(isset($_POST["id"]))
{
 foreach($_POST["id"] as $id)
 {
  $query = "update basicdetail set Approve=1 where Enrollment='".$id."'";
  mysqli_query($connect, $query);
 }
  
}
/*if(isset($_POST['']))
{

  
}*/

?>