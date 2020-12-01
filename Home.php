<?php
session_start();
?>

<!DOCTYPE html>
<meta charset="UTF-8">
<html>
    <head>
        <title>Railway Mangement System</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
        <link rel="stylesheet" href="styles.css">
		<style>
.wrap{
	background-color:#FFFFFF;
	padding:0 10px;
	border:solid 1px;
	-o-box-shadow: 10px 10px 5px #888;
	-moz-box-shadow: 10px 10px 5px #888;
	-webkit-box-shadow: 10px 10px 5px #888;
	box-shadow: 0px 0px 25px #666;

}

		</style>
    </head>
    <body data-spy="scroll" data-target="#navbarNav" data-offset="50">
	    
        <nav  class="navbar navbar-expand-lg navbar-dark bg-info fixed-top" style="font-family:Comic Sans MS">
            <a class="navbar-brand" href="#" >Railway Management System</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
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
				
				<li class="nav-item">
                  <a class="nav-link" href="registration_page.php">Register</a>
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
          

        <div class="jumbotron"  style="background-color: #D6EAF8;">
            <div class="row">
                <div class="  col-lg-6">
					  <br/><h1 class="welcome">Welcome to Pakistan Railways</h1>
					<div >
							<div  Style="float:right;">
							<hr />
							<marquee behavior="scroll" id="marq"  scrollamount=3 direction="up" height="190px" onmouseover="nestop()" onmouseout="nestrt()">
								<div>
									<p class="lead"><b>Welocme to Pakistan Railway Management System You can book your advance tickets here as well as you can look for any train to any given station at any given time.</b></p>
									<hr class="my-4">
									<p><b>Enjoy your journey with us and hope you contribute towards becoming a better Pakistani</b></p>
								</div>
							</marquee>
							</div>
				    </div>
                              
                </div>
                         <div class="col-lg-6">
						 <br/>
                             <img src="1abc.jpg" alt="">
                         </div>
		
            </div> 
	
        </div>

<!--

    Modals
-->
<marquee class="marque" bgcolor="#50AAB4 "  scrolldelay="1"><h5>Welcome To Railway Reservation Booking Tickets Book and Enjoy The Journey</h5></marquee>


<div id="loginModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg" role="content">
        <div class="modal-content">
            <div class="modal-header" id="clr2">
                <h4 class="modal-title" style="font-family:Didot, serif; font-size: 30px;" > 
                    Login
                </h4>
                <button type="button" class="close" data-dismiss="modal">
                    &times;

                </button>
            </div>
            <div class="modal-body" id="clr">
                <form action="" id="clr1" >
                    <div class="mylogin" >
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
						<button style=" width:49.5%" type="button" class="btn btn-danger " class="close" data-dismiss="modal"><a> Close </a> </button>
                        <button  style=" width:49.5%" type="submit" class="btn btn-success "> <a style="color:#ffffff; text-decoration:none; "  href="passenger_home.php" > Login </a> </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

  <!--
      End of Modals
  --><about class="aboutus">
      <h1 class="mainheading">About Us</h1>
	  <hr/>
    
    <p id="p1">Pakistan Railways forms the life line of the country by catering to its needs for large scale movement of freight as well as passenger traffic. It not only contributes to its economic growth but also promotes national integration.

Pakistan Railways endeavours to run the trains strictly in accordance to time table. The progressive freight train support organization operated by professional management and competent staff endeavours to provide reliable, competitive and economical service of recognized standards to its customers.

Pakistan Railways provides an important mode of Transportation in the farthest corners of the country and brings them closer for Business, sightseeing, pilgrimage and education. It has been a great integrating force and forms the life line of the country by catering to its needs for large scale movement of people and freight.</p>
    
	<hr>
     </about> 

	<div >
		  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2054307.817490307!2d70.3224257437878!3d30.25868053810176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38db52d2f8fd751f%3A0x46b7a1f7e614925c!2sPakistan!5e0!3m2!1sen!2sus!4v1604577758887!5m2!1sen!2sus"width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
    <!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script>
      $('#log_in').click(function(){
                $('#loginModal').modal();

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