<?php
session_start();
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

input[type=text],input[type=date], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}




</style>
    </head>
    <body>
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
				
                <li class="nav-item ">
                  <a class="nav-link" href="admin_add_route.php">Add Route</a>
                </li>
				
                <li class="nav-item ">
                  <a class="nav-link " href="admin_all_trains.php" >View Trains <span class="sr-only">(current)</span></a>
                </li>
				
				<li class="nav-item ">
                  <a class="nav-link" href="admin_all_routes.php">View Route</a>
                </li>
				
				<li class="nav-item active">
                  <a class="nav-link" href="admin_booking_details.php">Booking Details</a>
                </li>
				
				<li class="nav-item">
                  <a class="nav-link" href="home.php">Logout</a>
                </li>
				
            </div>
          </nav>
 
      <div class="container">
	        <br/>
			<h1 class="mainheading">Booking details</h1>
			
			<hr>
			<aside class="mt-0" >
                <h4 style="text-align:left; ">Select anyone of these to see the further details :</h4>
            </aside>
			
            <div class="row">
			
			<div class="col-lg-4">
				<a href="admin_booking_more.php">
                    <div class="card" style="width: 18rem; length:12rem;" >
                        <img src="8.jpeg" class="card-img-top" alt="..." >
                        <div class="card-body" >
						  <h5 class="card-title">Karachi Express</h5>
                          <p class="card-text"><h6>Type:</h6> Middle class</p>
                          <p class="card-text"><h6>Travel:</h6> Lahore to Karachi</p>
                          <p class="card-text"><h6>Fare:</h6> Rs-/4000</p>
                      </div>
                    </div>
				</a>
            </div>
			
            <div class="col-lg-4">
			    <a href="admin_booking_more.php">
                    <div class=" card" style="width: 18rem; length:12rem;">
                        <img src="9.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Shalimar Express</h5>
                          <p class="card-text"><h6>Type:</h6> Middle class</p>
                          <p class="card-text"><h6>Travel:</h6> Lahore to Karachi</p>
                          <p class="card-text"><h6>Fare:</h6>Rs-/1000</p>
                        </div>
                    </div>
				</a>
            </div>
					
            <div class="col-lg-4">
				<a href="admin_booking_more.php">
                    <div class="card" style="width: 18rem; length:12rem;">
                        <img src="10.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
				
                          <h5 class="card-title">Akbar Express</h5>
                          <p class="card-text"><h6>Type:</h6> Business class</p>
                          <p class="card-text"><h6>Travel:</h6> Quetta TO Jacobabad Junction</p>
                          <p class="card-text"><h6>Fare:</h6> Rs-/2850</p>
                          
                        </div>
                     </div>
				</a>	
            </div>  
        
            </div>
			<br/>
			
			<div class="row">
                <div class="col-lg-4">
				  <a href="admin_booking_more.php">
                    <div class="card" style="width: 18rem; length:12rem;">
                        <img src="8.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
						  <h5 class="card-title">Tezgam Express</h5>
                          <p class="card-text"><h6>Type:</h6> First class</p>
                          <p class="card-text"><h6>Travel:</h6> Lahore to Karachi</p>
                          <p class="card-text"><h6>Fare:</h6> Rs-/4000</p>
                    
                      </div>
                    </div>
					</a>
                </div>
                    
        
            </div>
          </div>
    </body>
</html>

<?php

if(isset($_SESSION['error']))
{
session_destroy();
}

?>