

<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style type="text/css">
    body{
      background-image:url('institute1.jpg');
      background-repeat:no-repeat;
      background-size:100% 70%;
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
                <div style="background-color:#FF5733;color:white;">
              <li class="nav-item">
                <a class="nav-link" href="login_form_new.htm"><b>LOG OUT</b></a>
              </li>
              </div>
              </div>
          </div>
        </div> 
      </nav><a class="nav-link" href="login_form_new.htm"><b>Go to Login page</b></a> <hr>
        <a class="nav-link" href="signup.htm"><b>Go to signup page</b></a>
      <div>
        <marquee style = "color:#2ECC71"> <b> WELCOME TO OUR OFFICIAL WEBSITE</b><br></marquee> 
        <marquee style = "color:white"> <b> INSTITUE OF NATIONAL IMPORTANCE</b></marquee>

      </div>
      <div>
        <?php
        
        if(isset($_SESSION['ADMIN']) && $_SESSION['ADMIN']==1) 
        {
            ?>
            <a type="button" class="btn btn-danger" href="edit_news.php">Edit News as Admin</a> &nbsp; &nbsp;
            <a type="button" class="btn btn-danger" href="accept.php">New user's verification</a>
            <?php
        }
        ?>
        <div><br><br> <hr>
        <marquee style = "color:yellow"> <b>Get the latest news about the institute !</b></marquee> <br><br>
        <marquee style = "color:red"> <b> NIRF RANKING ---   80 </b></marquee>

      </div>
     
      <div style="background-color:yellowgreen;font-size:20px ;margin-top:20vw;margin-left:500px ;" class="col-lg-4 col-md-6">
        <ul>
          <li>
           <span style = "color:blue; text-align:center;font-size:30px">* CSE's Placement's average 10 L.P.A </span>
          </li>
          <li>
          <span style = "color:blue; text-align:center;font-size:20px">* 15 Student got placed in Amazon in 2021-2022 <span>
          </li>
          <li>
          <span style = "color:blue; text-align:center;font-size:20px"> * Upcoming IIITDMJ coding competition is going to be held on 26th October
          </li>
        </ul>
      </div>

      <footer style = "background-color:#515A5A ">

<div class="container">

    <div class="row ">

        <div class="col-md-3 col-sm-3">

            <h4>About</h4>

            <ul>

                <li><a href="https://www.iiitdmj.ac.in/">Home</a></li>

                <li><a href="http://faculty.iiitdmj.ac.in" target="_blank">Faculty</a></li>

                <li><a href="pbi.iiitdmj.ac.in">PBI</a></li>

                <li><a href="https://www.iiitdmj.ac.in/rti.php">RTI</a></li>

                <li><a href="https://www.iiitdmj.ac.in/downloads/IIIT%20Act%2030_of_2014.pdf">IIIT Act</a></li>
                 <li><a href="https://www.iiitdmj.ac.in/downloads/The Gazette publication of Statutes of IIITDM Jabalpur.pdf">Statutes</a></li>

               
                <li><a href="https://www.iiitdmj.ac.in/maps_direction.php">Maps &amp; Directions</a></li>
               
                 <li><a href="https://www.iiitdmj.ac.in/downloads/taxi%20services.pdf">Taxi Services</a></li>
                 <li><a href="https://www.iiitdmj.ac.in/downloads/time table Detailed.pdf">Bus Time Table</a></li>
                 <li><a href="https://www.iiitdmj.ac.in/downloads/Organizational Chart.pdf">Organizational Chart</a></li>
                  <li><a href="https://www.iiitdmj.ac.in/downloads/RPN-2016(1).pdf">Recruitment and Promotion Norms-2016</a></li>
            </ul>

        </div>

        <div class="col-md-3 col-sm-3">

            <h4>Important Links</h4>

            <ul>

                

                <li><a href="ict.iiitdmj.ac.in">Electronics and ICT Academy</a></li>

                <li><a href="efee.iiitdmj.ac.in/efee">On Line Fee Payment</a></li>

                

                <li><a href="https://www.iiitdmj.ac.in/hindi.php">Hindi Notice Board</a></li>

                <li><a href="https://www.iiitdmj.ac.in/annual_report.php">Annual Report</a></li>
                 <li><a href="https://www.iiitdmj.ac.in/annual_account.php">Annual Account</a></li>
                  <li><a href="https://community.worldlibrary.in/?Affiliatikey=NDL-ZY1239" target="_blank">World e-book library</a></li>
                  <li><a href="https://cec.nic.in/Pages/Home.aspx" target="_blank">Consortium for Educational Communication(CEC)</a></li>
                   <li><a href="https://nad.gov.in/index.html" target="_blank">National Academic Depository(NAD)</a></li>
                   <li><a href="https://bmtpc.org/topics.aspx?mid=56&Mid1=180" target="_blank">Building Materials & Technology Promotion Council(BMTPC)</a></li>
                   <li><a href="https://www.iiitdmj.ac.in/downloads/IPR Policy Final V1 16_6_2020.pdf" target="_blank">Intellectual Property Policy(IPR)</a></li>
<li><a href="https://www.iiitdmj.ac.in/downloads/Equal_Opportunity Policy_IIITDM Jabalpur.pdf" target="_blank">Equal opportunity policy for persons with disabilities</a></li>
                   <li><a href="accessibility.php">Accessibility</a></li>
            </ul>

        </div>

        <div class="col-md-3 col-sm-3">

            <h4>Others</h4>

            <ul>
               
                <li><a href="https://www.iiitdmj.ac.in/STSCCell/">SC/ST and Minority Cell</a></li>

                <li><a href="https://www.iiitdmj.ac.in/womencell/index.html">Women Cell</a></li>
                <li><a href="downloads/Notification - Constitution of Grievance Redressal Cell.pdf">Grievance Redressal Cell</a></li>
                <li><a href="downloads/Constitution of Anti-Ragging Squad.pdf">Anti Ragging Squad</a></li>

                <li><a href="revista.iiitdmj.ac.in">Revista</a></li>
                 <li><a href="https://www.iiitdmj.ac.in/fitindia.iiitdmj.ac.in/" target="_blank">Fit India</a></li>

                <li><a href="https://www.iiitdmj.ac.in/contact.php">Contacts</a></li>

                <li><a href="https://www.iiitdmj.ac.in/tenders.php">Tenders</a></li>

                <li><a href="https://www.iiitdmj.ac.in/jobs.php">Jobs</a></li>
                <li><a href="rajbhasha.iiitdmj.ac.in" target="_blank">Sansthan Rajbhasha Vibhag</a></li>
                
                 <li>Closed Holiday <a href="https://www.iiitdmj.ac.in/downloads/Closed Holiday 2020.pdf">2020 </a> | <a href="https://www.iiitdmj.ac.in/downloads/Closed Holiday 2021.pdf"> 2021 </a></li>

                <li>Restricted Holiday <a href="https://www.iiitdmj.ac.in/downloads/RH 2020.pdf">2020 </a> | <a href="https://www.iiitdmj.ac.in/downloads/RH 2021.pdf"> 2021 </a></li>
            </ul>

        </div>

        <div class="col-md-3 col-sm-3">

            <h4>Contact us</h4>

            <ul>

                <li><a href="#">Indian Institute of Information Technology Design & Manufacturing Jabalpur</a></li>

                <li><a href="#">Dumna Airport Road, Dumna - 482005</a></li>

            </ul>

            <ul id="contacts_footer">

                <li><a href="https://www.iiitdmj.ac.in/downloads/IIITDMJ%20Telephone%20Directory.pdf" target="_blank">Phone Directory</a></li>

               
            </ul>
          <a href="https://twitter.com/iiitdmjbp" target="_blank"> <img src="https://www.iiitdmj.ac.in/img/twitter-24.png" /></a>
                <a href="https://www.facebook.com/iiitdm.jbp/" target="_blank"> <img src="https://www.iiitdmj.ac.in/img/facebook-24.png" /> </a>
        <a href="https://www.youtube.com/channel/UCODKL--xMCqXIK31cRdOWOw" target="_blank"> <img src="https://www.iiitdmj.ac.in/img/youtube-24.png" /> </a><a href="https://www.instagram.com/iiitdm_jabalpur/" target="_blank"><img src="https://www.iiitdmj.ac.in/img/instagram-24.png" /></a></a>
        
        <div><br /><br /><a href="https://moodle.iiitdmj.ac.in/" target="_blank"><img src="https://www.iiitdmj.ac.in/img/moodle-logo.png" width="26" height="26" />Moodle E-Learning Portal</a></div>
        </div>

    </div><!-- End row -->

</div><!-- End container -->

</footer><!-- End footer -->













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