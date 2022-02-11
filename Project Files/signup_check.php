<?php
$link=mysqli_connect('localhost','root','','news');
$firstname=$_POST['First'];
$lastname=$_POST['last'];
$roll_no=$_POST['roll_no'];
$branch=$_POST['select'];
$email=$_POST['email'];


if(!$link){ 
    die('Failed to connect to server'); 
    } 
    $query="INSERT INTO login_check VALUES('$firstname','$lastname','$email','$roll_no','$branch','0','0')";
    $result=mysqli_query($link,$query);
   if($result)
   {echo'<script type="text/javascript">
       window.onload = function () 
       { alert("Your Request has been Sent to Admin, please wait till the admin verify you !"); 
    }
</script>';

   }
         include "signup.htm";
           
        










?>