<?php

     include "header.php";
?>
    
		
    <section class="ftco-section ftco-no-pb contact-section">
      <div class="container">
        <div class="row d-flex contact-info">
          <div class="col-md-3 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
          		
          		
	          </div>
          
          
          
          
    </section>
			
		<section class="ftco-section contact-section">
      <div class="container">
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form name="register" class="bg-light p-5 contact-form" method="post" action="#">
			<h6 align="center">sign up </h6>
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="yourname">
              </div>
              <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="youremail">
              </div>
              <div class="form-group">
                <input type="text" name="password" class="form-control" placeholder="password">
              </div>
              <div class="form-group">
                <textarea name="text" id="" name="conno" cols="30" rows="7" class="form-control"  placeholder="contectno"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" name="conno" value="Submit" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          
             
              
            </div>
          </div>
        </div>
      </div>
    </section>


    <footer class="ftco-footer ftco-section">
      <div class="container-fluid px-md-5">
        <div class="row mb-5">
          
          
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
	
            
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>



<?php
    if(isset($_POST['submit']))
	{
	    include "connect.php";
		
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$conno=$_POST['conno'];
		
		
		
		$qry="insert into register (yourname,youremail,password,contectno)values('$name','$email','$password','$conno')";
		
		$a=mysqli_query($con,$qry);
		if($a>0)
		{
		   echo"record insetred";
		}
		else
		{
		   echo"not"; 
		}
	}
	
?>