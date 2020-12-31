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
                  <a class="nav-link" href="passenger_home.php">Home <span class="sr-only">(current)</span></a>
                </li>
				
                <li class="nav-item active">
                  <a class="nav-link" href="book_ticket.php">Book Ticket</a>
                </li>
				
                <li class="nav-item ">
                  <a class="nav-link " href="traintiming.php" >Train Schedule</a>
                </li>
				
				<li class="nav-item">
                  <a class="nav-link" href="All Booking Record.php">Records</a>
                </li>
				
				<li class="nav-item">
                  <a class="nav-link" href="profile.php">Profile</a>
                </li>
				
				<li class="nav-item">
                  <a class="nav-link" href="Home.php">Logout</a>
                </li>
				
            </div>
          </nav>
		  
		  
          <div id="mycarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block img-fluid" src="7a.jpg" alt="pizza">
                </div> 
            </div>
          </div>
		 <br/><hr/>
		 <h1 class="mainheading">Search Train</h1>
          <hr/>
		  <aside class="mt-0" >
                <h4 style="text-align:left; padding: 0px 45px; ">Enter following details to search the required train:</h4>
          </aside>
	      	<br/>

         

		<div class="myDiv" >
		  <form action="/action_page.php"  >
			<label for="fname"><b>From City :</b></label>
			<select id="fromcity" name="fromcity">
			  <option value="Lahore">Lahore</option>
			  <option value="Karachi">Karachi</option>
			  <option value="Islamabad">Islamabad</option>
			  <option value="Rawalpindi">Rwalpindi</option>
			  <option value="Queta">Queta</option>
			  <option value="Peshawar">Peshawar</option>
			  <option value="Bahawalpur">Bahawalpur</option>
			  <option value="Okara">Okara</option>
			</select>

			<label for="lname"><b>To City :</b></label>
			<select id="fromcity" name="fromcity">
			  <option value="Karachi">Karachi</option>
			  <option value="Lahore">Lahore</option>
			  <option value="Islamabad">Islamabad</option>
			  <option value="Rawalpindi">Rwalpindi</option>
			  <option value="Queta">Queta</option>
			  <option value="Peshawar">Peshawar</option>
			  <option value="Bahawalpur">Bahawalpur</option>
			  <option value="Okara">Okara</option>
			</select>
			
			<label for="Date"><b>Date :</b></label>
			</br>
			<input type="date" placeholder="Date" min="2018-10-30" max="" required name="t1" >
			<br></br>
		  
		  
			<div  class="form-row">
				  <button  style="margin:5px; width:49%"  type="button" class="btn btn-success "  onclick="asd()"> <a > Search </a> </button>
				  <button style="margin:5px; width:49%" type="reset" class="btn btn-danger " value="reset"><a> Reset</a> </button>
			</div>
							
			
		  </form>
		</div>
<form  id="asd" action="">
<br/>	<hr/>
<h1 class="mainheading">Available Trains</h1>
<hr/>

</div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <img src="5.jpg" alt="Train image"  height="270px" width="320px">
                </div>
                <div class="col-lg-6">
                    <h1>Karachi Express</h1>
                    <h5>Type:</h5>
                    <p class="pp">Middle class</p>
                    <h5>Travel:</h5>
                    <p class="pp">Lahore to Karachi</p> 
                    <h5>Fare:</h5>
                    <p class="pp">Rs-/4000</p>
                
                </div>
				<div class="col-lg-2">
                    <a href="view_ticket.php" class="btn btn-primary">Book Now</a>
                
                </div>
            </div>
        </div>


		   <br/>	<hr/><br/>
		   
		   <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <img src="1c.jpg" alt="Train image"  height="270px" width="320px">
                </div>
               <div class="col-lg-6">
                    <h1>Shalimar Express</h1>
                    <h5>Type:</h5>
                    <p class="pp">Middle class</p>
                    <h5>Travel:</h5>
                    <p class="pp">Lahore to Karachi</p> 
                    <h5>Fare:</h5>
                    <p class="pp">Rs-/1000</p>
                
                </div>
				<div class="col-lg-2">
                    <a href="view_ticket.php" class="btn btn-primary">Book Now</a>
                
                </div>
            </div>
        </div>
		

		   <br/>	<hr/><br/>
		 <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <img src="2d.jpg" alt="Train image"  height="270px" width="320px">
                </div>
               <div class="col-lg-6">
                    <h1>Karakoram Express</h1>
                    <h5>Type:</h5>
                    <p class="pp">Low class</p>
                    <h5>Travel:</h5>
                    <p class="pp">Lahore to Karachi</p> 
                    <h5>Fare:</h5>
                    <p class="pp">Rs-/4000</p>
                
                </div>
				<div class="col-lg-2">
                    <a href="view_ticket.php" class="btn btn-primary">Book Now</a>
                
                </div>
            </div>
        </div>  
		   
		   
		   <br/>	<hr/><br/>
		   
		    <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <img src="2c.jpg" alt="Train image"  height="270px" width="320px">
                </div>
               <div class="col-lg-6">
                    <h1>Tezgam Express</h1>
                    <h5>Type:</h5>
                    <p class="pp">First class</p>
                    <h5>Travel:</h5>
                    <p class="pp">Lahore to Karachi</p> 
                    <h5>Fare:</h5>
                    <p class="pp">Rs-/4000</p>
                
                </div>
				<div class="col-lg-2">
                    <a href="view_ticket.php" class="btn btn-primary">Book Now</a>
                
                </div>
            </div>
        </div> 

</form>




    <footer class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1>Complain Section</h1>
                    <form>
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Email address</label>
                          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Your Complain</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            <button type="button" class="btn btn-danger mt-3">Submit Complain</button>
                        </div>
                        </form>
                </div>
                <div class="col-lg-6 ">
                    <h1><span class="fa fa-address-card"></span>Contact Info</h1>
                    <p class="mt-5"><span>Gmail:pakrailways@foster.com</span></p>
                    <p class="mt-3"><span ><i class="fa fa-phone"></i>Phone No:</span><span>+92345-2984137</span></p>
                    <p class="mt-3"><span ><i class="fa fa-fax "></i>Telephone No:</span> <span>419037238</span></p>
                </div>
            </div>
        </div>
    </footer>
	
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
    <script type="text/javascript">
		 
		   window.onload=function(){
		   document.getElementById('asd').style.display="none";
		   }
		function asd()
		{
			   
			document.getElementById("asd").style.display="block";
		}
    </script>
    </body>
</html>

<?php

if(isset($_SESSION['error']))
{
session_destroy();
}

?>