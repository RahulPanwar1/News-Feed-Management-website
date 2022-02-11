<?php
$link=mysqli_connect('localhost','root','','news');
if(!$link){ 
    die('Failed to connect to server'); 
    } 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="card.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style type="text/css">
    body{
      background-image:url('money5.jpeg');
      background-repeat:no-repeat;
      background-size:100% 75%;
      
    }
    </style>
    <title> IIITDM JABALPUR NEWS PORTAL</title>
  </head>
  <p style = "text-align:center"></p>
  <body style = background>

<nav class="navbar navbar-expand-lg navbar-light " style="background-color: blue;padding:10px;">
        <div class="container-fluid">
        
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <img src="book.png" width=40 height=40 style="margin-left:50px;"/>
                <div  style="padding-left:10px;padding-right:100px">
                  
                    <div style="background-color:white;">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="academics.php"><b>ACADEMICS</b></a>
              </li>
            </div>
                    </div>

            <img src="flag1.png" width=40 height=40 style="margin-left:50px;"/>
            <div  style="padding-left:10px;padding-right:100px">
                <div style="background-color:white;">
              <li class="nav-item">
                <a class="nav-link" href="events.php"><b>UPCOMING EVENTS</b></a>
              </li>
              </div>
              </div>
              <img src="football.png" width=40 height=40 style="margin-left:50px;"/>
              <div  style="padding-left:10px;padding-right:100px">
                <div style="background-color:white;">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <b>SPORTS</b>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="cricket.php"><b>Cricket</b></a></li>
                  <li><a class="dropdown-item" href="football.php"><b>Football</b></a></li>
                </ul>
              </li>
              </div>
              </div>
              <img src="dollar.jpg" width=40 height=40 style="margin-left:50px;"/>
              <div  style="padding-left:10px;padding-right:100px">
                <div style="background-color:white;">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <b>PLACEMENTS RECORDS</b>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="placement.php"><b>Last Year Placement Records</b></a></li>
                  <li><a class="dropdown-item" href="internship.php"><b>Internships</b></a></li>
                  
                </ul>
              </li>
              </div>
            </div>
            <div  style="padding-left:10px;padding-right:100px">
                <div style="background-color:yellow;">
              <li class="nav-item">
                <a class="nav-link" href="main_page.php"><b>Go to main page</b></a>
              </li>
              </div>
              </div>
          </div>
        </div>
      </nav>
        <div class="container">
        <span style = "color:green; text-align:center;font-size:50px"> WELCOME..! </span> 
      <h1 style = "color: red;text-align:center"> TOP HEADLINES </h1> <hr>
      <marquee style = "color:green;text-align:center" ><b>GOOGLE RECORD PLACEMENTS THIS YEAR HIGHEST PACKAGE 5 CR RUPEES</b></marquee>
      <li style = "text-align:center;color:black"><b>IIITDM STUDENTS GET THEIR DREAM JOB IN SILICON VALLEY USA</b></li>
      <marquee style = "color:orange;text-align:center"><b>TECH GIANTS WILL STARTS THEIR PLACEMETS ROUNDS IN JANUARY 2022</b></marquee>
      <h2 style="margin-top:100px;margin-bottom:50px;text-align:center;color:blue"> LATEST NEWS !!</h2> <hr>
      <div class="row container">
      <?php
        $query="SELECT * FROM detail WHERE category='placements'";
        $result=mysqli_query($link,$query);
        while ($row = mysqli_fetch_assoc($result))
        {?>
          <!-- //        <div class="col-lg-4 col-md-6 col-sm-12 " style="margin-bottom:100px">
          //            <h3 style="margin-bottom:50px">
          //                < ?php echo $row['News_heading']; ?>
          //        </h3>
          //        <p>
          //         < ?php
          //         echo $row['news_description'] ;
          //         ?>
          //         </p>
          //        </div> -->
                      <div class ="bg-dark text-light card col-md-6 col-lg-3 px-5 py-3 mx-5"  style="margin-bottom:100px">
                              </article>
                              <article class="content">
                                  <h3><?php echo $row['News_heading']; ?></h3>
                                  <p><?php
                               echo $row['news_description'] ;
                               ?></p>
                              </article>
                          </div>
                   <?php    
                  }
          
                ?>
              </div>
              </diV>
    </div>   <!-- End container -->
        <hr class="add_bottom_30">
		<div class="row add_bottom_30">
        	<div class="col-md-12 text-center">
            <h2>Our Recruiters</h2>
            <p class="lead"></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 p-3 mx-5">
                <p><img src="company.jpg" alt="Pic" class="img-responsive"></p>
           </div>
        </div>
        </div><!-- End container -->
    <!-- Footer section -->
<footer style = "background-color:#515A5A">

<div class="container" id="nav-footer">
	<div class="row text-left">
		<div class="col-md-3 col-sm-3">
			<h4><a href="faculty.php" style="color:#FFFFFF;">FACULTIES</a></h4>
			<ul>
			
			
 

						
				
				
			</ul>
		</div><!-- End col-md-4 -->
		<div class="col-md-3 col-sm-3">
			<h4>RESEARCH GROUP</h4>
			<ul>
				<li><a href="http://ive.iiitdmj.ac.in/">IMAGE AND VISION ENGINEERING GROUP</a></li>
				<li><a href="http://race.iiitdmj.ac.in/">ROBOTICS, AUTOMATION AND CONTROL ENGINEERING</a></li>
				<li><a href="http://serg.iiitdmj.ac.in/">SOFTWARE ENGINEERING RESEARCH GROUP</a></li>
				<li><a href="http://srg.iiitdmj.ac.in/">SECURITY RESEARCH GROUP</a></li>
			</ul>
		</div><!-- End col-md-4 -->
		<div class="col-md-3 col-sm-3">
			<h4>Quick Links</h4>
			<ul>
				<li><a href="http://www.iiitdmj.ac.in/">IIITDM Jabalpur</a></li>
				<li><a href="http://placement.iiitdmj.ac.in">Placement Cell</a></li>
				<li><a href="aboutus.php">About Us</a></li>
				<li><a href="http://ict.iiitdmj.ac.in/index.html">El ICT Academy</a></li>
				
				
				<li><a href="webteam.php">Web Team</a></li>
			</ul>
		</div><!-- End col-md-4 -->
		<div class="col-md-3 col-sm-3">
			<ul id="follow_us">
				<li><a href="#"><i class="icon-facebook"></i></a></li>
				<li><a href="#"><i class="icon-twitter"></i></a></li>
				<li><a href="#"><i class=" icon-google"></i></a></li>
			</ul>
			<ul>
				<li><strong class="phone">+91-761 2794094</strong><br><small>Mon - Fri / 9.00AM - 05.00PM</small></li>
				<!-- <li>Questions? <a href="#">question@iiitdmj.ac.in</a></li> -->
			</ul>
		</div><!-- End col-md-4 -->
	</div><!-- End row -->
</div>
<!-- <div id="copy_right">© 1998-2014</div> -->
</footer>






       <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>