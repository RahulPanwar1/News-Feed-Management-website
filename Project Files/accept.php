<html>
    <body style = "background-color:green">
<?php
$link=mysqli_connect('localhost','root','','news');

if(!$link){ 
    die('Failed to connect to server'); 
    } 
    $query="select Firstname, Lastname, Email, ROLL_NO from login_check where authenticate = 0";
    $result=mysqli_query($link,$query);
    while ($row = mysqli_fetch_assoc($result))
    {?><p>
        <div class="col-lg-4 col-md-6 col-sm-12 " style="margin-bottom:100px; background-color:yellow;text-align:center;">
            <h1 style="margin-bottom:50px">
        <?php
        echo "Name: ".$row['Firstname']."  ".$row['Lastname']."<br>Email:  ".$row['Email']."<br> Roll No: ".$row['ROLL_NO'];
        ?>
        
        </h1>
        <form class = "bg-light text-dark text-center p-4" style="margin: 0 20%; border-radius: 5px;" method="post">
        <button type="submit" value="submit" class="btn btn-success" name="accept"  >ACCEPT </button>
        <button type="submit" value="submit" class="btn btn-success" name="reject"  >REJECT </button>
        
        </form>
        </p>
        <?php
        if(isset($_POST['accept']))
        {$email = $row['Email'];
            $qry="UPDATE login_check SET authenticate =1 WHERE Email='$email'";
            $results=mysqli_query($link,$qry);

        }
        if(isset($_POST['reject']))
        {$email = $row['Email'];
            $qry="DELETE FROM login_check WHERE Email='$email'";
            $results=mysqli_query($link,$qry);
        }
    }
    ?>
    <a class="nav-link" href="main_page.php"><b>Go to main page</b></a>
</body>
</html>