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

input[type=text] ,input[type=date],input[type=password], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

input[type=radio], select, textarea {
  width:8%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 10px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
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
                <li class="nav-item ">
                  <a class="nav-link" href="passenger_home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="book_ticket.php">Book Ticket</a>
                </li>
				
                <li class="nav-item ">
                  <a class="nav-link " href="traintiming.php" >Train Timing</a>
                </li>
				
				<li class="nav-item">
                  <a class="nav-link" href="All Booking Record.php">Records</a>
                </li>
				
				<li class="nav-item active" >
                  <a class="nav-link" href="profile.php">Profile</a>
                </li>
				
				<li class="nav-item">
                  <a class="nav-link" href="home.php">Logout</a>
                </li>
              </ul>

            </div>
          </nav>
		  
    <form action="action_page.php" style="border:1px solid #ccc ">
        <div class="container">
			<br/>
			<h1 class="mainheading">Profile Setting</h1>
			<hr>

			  <div class="row">
				<div class="col-25">
				  <label for="name"><b>Full Name :</b></label>
				</div>
				<div class="col-75">
				  <input type="text" id="name" name="name" placeholder="Enter Name" required>
				</div>
			  </div>
			  
			  <div class="row">
				<div class="col-25">
				  <label for="username"><b>Username :</b></label>
				</div>
				<div class="col-75">
				  <input type="text" id="username" name="username" placeholder="Enter Username" required>
				</div>
			  </div>
			  
			  <div class="row">
				<div class="col-25">
				  <label for="email"><b>Email:</b></label>
				</div>
				<div class="col-75">
				  <input type="text" id="email" name="email" placeholder="Enter Email" required>
				</div>
			  </div>
			  
			  <div class="row">
				<div class="col-25">
				  <label for="Phone"><b>Phone No.:</b></label>
				</div>
				<div class="col-75">
				  <input type="text" id="phone" name="phone" placeholder="Enter Phone no." required>
				</div>
			  </div>
			  
			  <div class="row">
				<div class="col-25">
				  <label for="address"><b>Address:</b></label>
				</div>
				<div class="col-75">
				  <input type="text" id="address" name="address" placeholder="Enter Address">
				</div>
			  </div>
			  
				<div class="row">
				  <button  style="margin:5px; width:49%"type="button" class="btn btn-danger ">Cancel</button>
				  <button  style="margin:5px; width:49%"type="submit" class="btn btn-success ">Save Changes</button>
				</div>
				
				<div class="row">
				  <button  style="margin:5px; width:100% "type="button " class="btn btn-info "><a  style="color:#ffffff; text-decoration:none; " id="ticket" class="lin" data-toggle="Modal" data-target="#Ticketmodal" aria-disabled="true">Change Password</a></button>
 
				</div>
				
		</div>
		
    </form>
	
		
  
       		
<div id="TicketModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg" role="content">
        <div class="modal-content">
            <div class="modal-header" id="clr2">
                <h4 class="modal-title"> 
                    Change Password
                </h4>
                <button type="button" class="close" data-dismiss="modal">
                    &times;

                </button>
            </div>
            <div class="modal-body" id="clr">
                <form action="" id="clr1">
                    <div class="form-group row">
                        <div class="col-sm-3 offset-sm-1">
                        <label for="password" class=" col-form-label"><b>Old Password :</b></label>
                        </div>
						
                        <div class="col-sm-5">
                        <input type="password" name="number" id="number"  class=" form-control" >
                        </div>
                    </div>
					
                    <div class="form-group row">
                        <div class="col-sm-3 offset-sm-1">
                            <label for="password" class="col-form-label"><b>New Password :</b></label>
                        </div>
                        <div class="col-sm-5">
                            <input type="password" class="form-control" name="username" id="usename" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-3 offset-sm-1">
                            <label for="password" class="col-form-label"><b>Confirm Password :</b></label>
                        </div>
                        <div class="col-sm-5">
                            <input type="password" class="form-control" name="pin" id="pin">
                        </div>
                    </div>
					
					
					<div  class="form-row">
		                  <button style="margin:5px; width:20%" type="button" class="btn btn-danger " class="close"><a> Close</a> </button>
						  <button  style="margin:5px; width:20%" type="submit" class="btn btn-success "> <a  style="color:#ffffff; text-decoration:none; " href="profile.php" class="lin">Update</a> </button>
	                </div>
					
                </form>

            </div>
        </div>

    </div>

</div>
<footer class="mt-5" id="process">
	    <div class="container">
            <div class="row">
                <div class="col-lg-6">
				    <h1><span class="fa fa-question-circle"></span> Complain Section</h1>
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
                    <h1><span class="fa fa-user"></span> Contact Info</h1>
                    <p class="mt-5"><span><i class="fa fa-envelope" aria-hidden="true"></i>    Gmail : pakrailways@foster.com</span></p>
                    <p class="mt-3"><span ><i class="fa fa-phone" aria-hidden="true"></i>  Phone No :+92345-2984137</span></p>
                    <p class="mt-3"><span ><i class="fa fa-fax "></i>                      Telephone No :419037238</span></p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>	
    <script>
          $('#ticket').click(function(){
                    $('#TicketModal').modal();
    
                });
            </script>


    </body>
</html>


<?php

if(isset($_SESSION['error']))
{
session_destroy();
}

?>