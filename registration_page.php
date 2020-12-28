<?php
session_start();
$conn = mysqli_connect("localhost","root","","myrailway");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
if (isset($_POST['submit']))
{

$username=$_POST['username'];
$name=$_POST['name'];
$email=$_POST['email'];
$phoneno=$_POST['phoneno'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$pw=$_POST['pw'];
$cpw=$_POST['cpw'];
$sql = "INSERT INTO customers (username, name, email, phoneno, address, gender, age) VALUES ('$username', '$name','$email','$phoneno', '$address', '$gender',  '$age');";
	if(mysqli_query($conn, $sql))
{  
	$message = "You have been successfully registered";
}
else
{  
	$message = "Could not insert record"; 
}

$sql1 = "INSERT INTO user_login (username, passwords) VALUES ('$username', '$pw');";
	if(mysqli_query($conn, $sql1))
{  
	$message = "You have been successfully registered";
}
else
{  
	$message = "Could not insert record"; 
}

	echo "<script type='text/javascript'>alert('$message');</script>";

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
		<SCRIPT src="validationregistration.js"></SCRIPT>
        <style>
	
			body{
			background-image:url(1bb.jpg);
			background-size: cover;
			font-family: arial;
            }
			
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


			input[type=reset]:hover {
			  background-color: #45a049;
			}
			 </style>

 
    </head>
	
    <body data-spy="scroll" data-target="#navbarNav" data-offset="50">
	    <div id="loginModal" class="modal fade" role="dialog">
			<div class="modal-dialog modal-lg" role="content">
				<div class="modal-content">
					<div class="modal-header" id="clr2">
						<h4 class="modal-title" style="font-family:Didot, serif; font-size: 30px;"> 
							Login
						</h4>
						<button type="button" class="close" data-dismiss="modal">
							&times;

						</button>
					</div>
					<div class="modal-body" id="clr">
						<form action="" id="clr1" >
							<div class="mylogin">
								<div ><label for="namee" class=" col-form-label"><b>Username :</b></label></div>
								<div ><input type="text " name="namee" id="namee" placeholder="Name" class=" form-control" ></div>
								<div >
									<label for="passwordd" class="col-form-label"><b>Password : </b></label>
								</div>
								<div >
									<input type="password" name="passwordd" id="passwordd" placeholder="Password" class=" form-control">
								</div>
								<div style="text-align: right;">
									<label  for="password" class="col-form-label"><a href="#" > Forgot Password? </a></label>
								</div>
								<div class="form-check ">
									<input type="checkbox" name="box" id="box" class="form-check-input">
									<label for="box" class="form-check-label mb-1">Remeber me</label>
							</div>
								<button  style="width:49.5%;" type="button" class="btn btn-danger " class="close" data-dismiss="modal"><a style="color:#ffffff; text-decoration:none;"> Close </a> </button>
								<button  style="width:49.5%;" type="submit" class="btn btn-success " > <a style="color:#ffffff;   text-decoration:none; "  href="passenger_home.php" > Login Test</a> </button>
							</div>
							
						</form>

					</div>
				</div>

			</div>

		</div>


			<nav  class="navbar navbar-expand-lg navbar-dark bg-info fixed-top" style="font-family:Comic Sans MS">
					<a class="navbar-brand" href="#" >Railway Management System</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					  <span class="navbar-toggler-icon"></span>
					</button>
				  
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
					  <ul class="navbar-nav ml-auto">
						<li class="nav-item ">
						  <a class="nav-link" href="Home.php">Home <span class="sr-only">(current)</span></a>
						</li>
						<!--
						<li class="nav-item">
						  <a class="nav-link" href="#">Search</a>
						</li>
						-->
						<li class="nav-item ">
						  <a class="nav-link " href="places.php" >Famous Places</a>
						
						</li>
						<li class="nav-item" active>
						  <a class="nav-link active" href="registration_page.php">Register</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link " id="log_in" data-toggle="Modal" data-target="#loginmodal" href="#" aria-disabled="true">Login</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" href="#process">Contact</a>
						</li>
					  </ul>

					</div>
				  </nav>

				  
			<form action="registration_page.php" name="registration_page" method="post" style="border:1px solid #ccc;" onsubmit="return validate()">
			
				<div class="container" style="background: transparent;background: rgba(72,168,179,0.5);">
					<h1 class="signupheading">Sign Up</h1>
					<div class="signup">

						<p>Please fill in this form to create an account.</p>
						<hr>
					
					  <div class="row">
						<div class="col-25">
						  <label for="name"><b>Full Name :</b></label>
						</div>
						<div class="col-75">
						  
						  <input class="form-control" type="text" id="name" name="name" placeholder="First Name & Last Name" required>
						</div>
					  </div>
					  
					  <div class="row">
						<div class="col-25">
						  <label for="username"><b>Username :</b></label>
						</div>
						<div class="col-75">
						  <input class="form-control" type="text" id="username" name="username" placeholder="Alphabets & Digits" required>
						</div>
					  </div>
					  
					  <div class="row">
						<div class="col-25">
						  <label for="email"><b>Email:</b></label>
						</div>
						<div class="col-75">
						  <input class="form-control" type="text" id="email" name="email" placeholder="Example@gmail.com" required>
						</div>
					  </div>
					  
					  <div class="row">
						<div class="col-25">
						  <label for="phoneno"><b>Phone No.:</b></label>
						</div>
						<div class="col-75">
						  <input class="form-control" type="text" id="phoneno" name="phoneno" maxlength="11" placeholder="03xxxxxxxxx" required>
						</div>
					  </div>
					  
					  <div class="row">
						<div class="col-25">
						  <label for="address"><b>Address:</b></label>
						</div>
						<div class="col-75">
						  <input class="form-control" type="text" id="address" name="address" placeholder="Current Address Here . .">
						</div>
					  </div>
						
					  <div class="row">
						<div class="col-25">
						  <label for="gender"><b>Gender:</b></label>
						</div>
						<div class="col-75">
						<INPUT type="radio" name="gender" value="Male" align="center" id="gender">Male
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="radio" name="gender" value="Female" align="center" id="gender">Female
						</div>
					  </div>

					  <div class="row">
						<div class="col-25">
						  <label for="age"><b>Age :</b></label>
						</div>
						<div class="col-75">
						  <input class="form-control" type="number" id="age" name="age" placeholder="Ener your Age Here. .">
						</div>
					  </div>

					  <div class="row">
						<div class="col-25">
						  <label for="password"><b>Password:</b></label>
						</div>
						<div class="col-75">
						  <input class="form-control" type="password" id="pw" name="pw" placeholder="Enter Password" required>
						</div>
					  </div>  
					 
					  <div class="row">
						<div class="col-25">
						  <label for="password"><b>Repeat Password:</b></label>
						</div>
						<div class="col-75">
						  <input class="form-control" type="password" id="cpw" name="cpw" placeholder="Repeat Password" required>
						</div>
					  </div> 
					   <div class="row">
							<p><b>By creating an account you agree to our</b> <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
					   </div>	
						<div class="row">
							<button style=" width:49.5%"  class="btn btn-warning " TYPE="Reset" value="Reset" id="reset">Reset</button>
							<button  style=" width:49.5%" TYPE="Submit" value="Submit" name="submit" id="submit"  onclick="if(!this.form.tc.checked){alert('You must agree to the terms first.');return false}" class="btn btn-success ">  Signup</button>
							
				        </div>
				
				    </div>
				</div>

            </form>

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
			  $('#log_in').click(function(){
						$('#loginModal').modal();

					});

		</script> 


    </body>
</html>

