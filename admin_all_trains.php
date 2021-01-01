<?php
session_start();
?>
<?php

$db = mysqli_connect("localhost","root","","myrailway");  // database connection

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>

<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<title>Railway Mangement System</title>
        
		
    <head>
		<title>Railway Management System</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
		<link rel="stylesheet" href="styles.css">
    <style>
  
table.center {
  margin-left: auto;
  margin-right: auto;
}
</style>
    </head>
    <body data-spy="scroll" data-target="#navbarNav" data-offset="50">
        <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top" style="font-family:Comic Sans MS">
            <a class="navbar-brand" href="#">Railway Management System</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                  <a class="nav-link" href="admin_add_train.php">Add Train </a>
                </li>
				
                <li class="nav-item">
                  <a class="nav-link" href="admin_add_route.php">Add Route</a>
                </li>
				
                <li class="nav-item active">
                  <a class="nav-link " href="admin_all_trains.php" >View Trains <span class="sr-only">(current)</span></a>
                </li>
				
				<li class="nav-item">
                  <a class="nav-link" href="admin_all_routes.php">View Route</a>
                </li>
				
				<li class="nav-item">
                  <a class="nav-link" href="admin_booking_details.php">Booking Details</a>
                </li>
				
				<li class="nav-item">
                  <a class="nav-link" href="home.php">Logout</a>
                </li>
				
            </div>
          </nav>
		  
		  
          <div id="mycarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block img-fluid" src="1e.jpg"alt="pizza">
                </div> 
            </div>
          </div>
  <br/>
		


<h1 class="mainheading">All Trains Record</h1>
	    	<hr/><br/>

<table class="center" border="9" cellpadding="20" cellspacing="60" width="80%">
  <tr>
    <th>   Train No.   </th>
	<th>   Train Name   </th>
	<th>   From Station   </th>
	<th>   To Station   </th>
	<th>   Distance   </th>
	<th>   Business Seats   </th>
	<th>   Economical Seats   </th>
	<th>   Standard Seats   </th>
	<th>   Image   </th>
  </tr>

<?php

 // Using database connection file here

$records = mysqli_query($db,"select * from trains"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['TrainNo']; ?></td>
    <td><?php echo $data['TrainName']; ?></td>
	<td><?php echo $data['FromStation']; ?></td>
    <td><?php echo $data['ToStation']; ?></td>
	<td><?php echo $data['TotalDistance']; ?></td>
    <td><?php echo $data['BusinessSeats']; ?></td>
	<td><?php echo $data['EconomicalSeats']; ?></td>
    <td><?php echo $data['StandardSeats']; ?></td>
	
    <td><img src="<?php echo $data['Img']; ?>" width="100" height="100"></td>
  </tr>	
<?php
}
?>

</table>

<?php mysqli_close($db);  // close connection ?>
			  
    </body>
</html>

<?php

if(isset($_SESSION['error']))
{
session_destroy();
}

?>


























































									
