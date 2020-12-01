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
* {
  box-sizing: border-box;
}

input[type=text] , input[type=number] , input[type=time]  ,select, textarea {

  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=file]  ,select, textarea {

  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}



label {
  padding: 20px 20px 20px 0;
  display: inline-block;

}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
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
                <li class="nav-item active">
                  <a class="nav-link" href="admin_add_train.php">Add Train </a>
                </li>
				
                <li class="nav-item">
                  <a class="nav-link" href="admin_add_route.php">Add Route</a>
                </li>
				
                <li class="nav-item ">
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
			  
	<form action="action_page.php" style="border:1px solid #ccc ">
        <div class="container">
			<br/>
			<h1 class="mainheading">Add New Train</h1>
			<hr>

				<div class="row">
				<div class="col-25">
				  <label for="Train"><b>Train No:</b></label>
				</div>
				<div class="col-75">
				    <input type="number" id="phone" name="phone" placeholder="Train No Here .." required>
				</div>
			    </div>
				
				<div class="row">
				<div class="col-25">
				  <label for="city"><b>Train Name:</b></label>
				</div>
				<div class="col-75">
				    <input type="text" id="phone" name="phone" placeholder="Train Name Here . ." required>
				</div>
			    </div>

			  <div class="row">
				<div class="col-25">
				  <label for="city"><b>From(Source):</b></label>
				</div>
				<div class="col-75">
				    <input type="text" id="phone" name="phone" placeholder="Source City Name" required>
				</div>
			  </div>
			  
			  <div class="row">
				<div class="col-25">
				  <label for="City"><b>To(Destination) :</b></label>
				</div>
				<div class="col-75">
				  <input type="text" id="phone" name="phone" placeholder="Destination City Here" required>
				</div>
			  </div>
			  
			  <div class="row">
				<div class="col-25">
				  <label for="City"><b>Departure Time :</b></label>
				</div>
				<div class="col-75">
				  <input type="time" id="phone" name="phone" placeholder="Destination City Here" required>
				</div>
			  </div>
			  
			  <div class="row">
				<div class="col-25">
				  <label for="text"><b>Travel Time :</b></label>
				</div>
				<div class="col-75">
				  <input type="time" id="phone" name="phone" placeholder="Distance in km/hr" required>
				</div>
			  </div>
			  
			  <div class="row">
				<div class="col-25">
				  <label for="text"><b>Distance :</b></label>
				</div>
				<div class="col-75">
				  <input type="text" id="phone" name="phone" placeholder="Distance in km/hr" required>
				</div>
			  </div>
			  
			  <div class="row">
				<div class="col-25">
				  <label for="number"><b>Image :</b></label>
				</div>
				<div class="col-75">
				  <input type="file" id="img" name="img" accept="image/*"></div>
			  </div>
			  
				<div class="row">
				  <button  style="margin:5px; width:49%"type="reset" class="btn btn-danger " value="reset">Reset</button>
				  <button  style="margin:5px; width:49%"type="submit" class="btn btn-success ">Add Route</button>
				</div>	
		</div>	
    </form>
    </body>
</html>

<?php

if(isset($_SESSION['error']))
{
session_destroy();
}

?>