<!DOCTYPE html>
<html>

<head>
  <!-- bootstrap plugin -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>

    <style>
      span {
        color: red;
      }
    </style>
</head>

<body style="background-color: #0e1022;">

  <h1 class="text-light text-center py-3">IIITDMJ TIMES</h1>
  
  <form class = "bg-light text-dark text-center p-4" style="margin: 0 20%; border-radius: 5px;" action="update_news.php" method="post">
  

    <div class="container">

      <img src="https://www.iiitdmj.ac.in/placement.iiitdmj.ac.in/images/iiitdmjlogo2.png" alt="" class="img-fluid">
      <!-- <h1>NEWS</h1> -->
      <hr>

      <p> <b> -PLEASE ENTER THE FOLLOWING DETAILS- </b> </p>
      <hr><br>


      <p>
        <label for="user"> <b>Heading</b> </label><span>*</span> &nbsp;
        <input type="text" name="heading" required="required" placeholder="ABC" class="w-25"/> &nbsp;
        
      </p> <br />

      <p>
        <label for="roll_user"> <b>Description</b> </label><span>*</span> &nbsp;
        <textarea rows="10" cols="50" name = "description"> Enter </textarea>
       
      
      </p> <br />

      

      <p>
        <label for="Category"> <b>Category</b></label> <span>*</span>&nbsp;
        <select name="select" class="w-25">
          <option value="academics">Academics</option>
          <option value="events">Upcoming Events</option>
          <option value="cricket">Cricket</option>
          <option value="football">Football</option>
          <option value="placements">Last year placements records</option>
          <option value="internship">Internships</option>
        </select>
      </p> <br />


      

      <br><br><br>

      <button type="submit"  value="submit" class="btn btn-success" >Update</button>
      <a class="nav-link" href="main_page.php"><b>Go to main page</b></a>
      <br><br>

    </div>
    </div>
  </form>

</body>

</html>