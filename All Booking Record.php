<?php
session_start();
?>
<!DOCTYPE html>
<html>
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
				
                <li class="nav-item">
                  <a class="nav-link" href="book_ticket.php">Book Ticket</a>
                </li>
				
                <li class="nav-item ">
                  <a class="nav-link " href="#" >Train Timing</a>
                </li>
				
				<li class="nav-item" active>
                  <a class="nav-link" href="all booking record.php">Records</a>
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
		  <hr/> 
		  <h1 class="mainheading">All Booking History</h1>
	      <hr/><br/>
		  
		  <table  class="center" border="9" cellpadding="20" cellspacing="20" width="80%">
        	<tr>
        		<th>   Booking ID   </th>	
        		<th>   Customer Name   </th>
				<th>   Booking Date   </th>
				<th>   Travel Date   </th>
				<th>   Total Fair   </th>
				<th>   View Ticket   </th>
				
        	</tr>
        	<tr>
        		<th> 1 </th>
        		<td>  </td>
				<td> </td>
        		<td>  </td>
				<td> </td>
        		<td> <button  style ="width:100%" type="submit" class="btn btn-info">View</button></td>
        	</tr>
        	<tr>
        		<th> 2 </th>
        		<td>  </td>
				<td> </td>
        		<td>  </td>
				<td> </td>
				<td> <button  style ="width:100%" type="submit" class="btn btn-info">View</button></td>
        	</tr>
        	<tr>
        		<th> 3 </th>
        		<td>  </td>
				<td> </td>
        		<td>  </td>
				<td> </td>
        		<td> <button  style ="width:100%" type="submit" class="btn btn-info">View</button></td>
        	</tr>
        	<tr>
        		<th> 4 </th>
        		<td>  </td>
				<td> </td>
        		<td>  </td>
				<td> </td>
        		<td> <button  style ="width:100%" type="submit" class="btn btn-info">View</button></td>
        	</tr>
        	<tr>
        		<th> 5 </th>
        		<td>  </td>
				<td> </td>
        		<td>  </td>
				<td> </td>
        		<td> <button  style ="width:100%" type="submit" class="btn btn-info">View</button></td>
        	</tr>	
        <table>	

		
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
    </body>
</html>

<?php

if(isset($_SESSION['error']))
{
session_destroy();
}

?>