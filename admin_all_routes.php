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
				
                <li class="nav-item ">
                  <a class="nav-link" href="admin_add_route.php">Add Route</a>
                </li>
				
                <li class="nav-item ">
                  <a class="nav-link " href="admin_all_trains.php" >View Trains <span class="sr-only">(current)</span></a>
                </li>
				
				<li class="nav-item active">
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
                    <img class="d-block img-fluid" src="1b.jpg"alt="pizza">
                </div> 
            </div>
          </div>
		 
		  <h1 class="mainheading">All Routes Record</h1>
	      <hr/><br/>
		  
		<table  class="center" border="9" cellpadding="20" cellspacing="60" width="80%">
        	<tr>
        		<th>   Route ID   </th>	
        		<th>   Train Name   </th>
				<th>   Route  </th>
				<th>   Business Class Fare  </th>
				<th>   Economical Class Fare   </th>
				<th>   Standard Class Fare   </th>
				<th>   Departure Time   </th>
				<th>   Arrival Time   </th>
				<th>   Distance   </th>
				
        	</tr>
        	
			<?php
				$username = "root"; 
				$password = ""; 
				$database = "myrailway"; 
				
				// CREATE CONNECTION

				$mysqli = new mysqli("localhost", $username, $password, $database); 

				//	check connection
				if ($mysqli->connect_error) 
				{
					die("Connection failed: " . $conn->connect_error);
				}

				$query = "SELECT RouteID,TrainName,CONCAT(FromStation,' to ',ToStation),BusinessClassFare,EconomicalClassFare,StandardClassFare,ArrivalTime,Departuretime,TotalDistance FROM route";

				if($result = $mysqli->query($query))
				{
					while ($row = $result->fetch_assoc())
					{
						$RouteID = $row["RouteID"];
						$trainname = $row["TrainName"];
						$Route = $row["CONCAT(FromStation,' to ',ToStation)"];
						$BusinessClassFare = $row["BusinessClassFare"];
						$EconomicalClassFare = $row["EconomicalClassFare"];
						$StandardClassFare = $row["StandardClassFare"];
						$ArrivalTime = $row["ArrivalTime"];
						$Departuretime = $row["Departuretime"];
						$TotalDistance = $row["TotalDistance"];

						echo '<tr> 
									<td>'.$RouteID.'</td> 
									<td>'.$trainname.'</td> 
									<td>'.$Route.'</td> 
									<td>'.$BusinessClassFare.'</td> 
									<td>'.$EconomicalClassFare.'</td> 
									<td>'.$StandardClassFare.'</td> 
									<td>'.$ArrivalTime.'</td> 
									<td>'.$Departuretime.'</td> 
									<td>'.$TotalDistance.'</td> 
								</tr>';
					}
					$result->free();
				}
			?>
		</table>
		<br/>
		<br/>
		<br/>
    </body>
</html>

<?php

if(isset($_SESSION['error']))
{
session_destroy();
}

?>