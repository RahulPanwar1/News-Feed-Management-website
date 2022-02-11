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
    $query="select Firstname, Lastname, Email, ROLL_NO,admin ,Branch ,authenticate from login_check";
    $result=mysqli_query($link,$query);
    while ($row = mysqli_fetch_assoc($result))
        {if( $row['Firstname']==$firstname && $row['Lastname']==$lastname  && $row['Branch']==$branch && $row['Email']==$email && $row['ROLL_NO']==$roll_no && $row['authenticate']==1)
        {echo'<script type="text/javascript">
                   window.onload = function () 
                   { alert("You are logged in"); 
                }
         </script>';
         session_start(); 
                $_SESSION['IS_AUTHENTICATED'] = 1;
                $_SESSION['ADMIN']=$row['admin'] ;
                
                include "main_page.php";
                
         goto chance;
                    
                }
            
        }
        echo'<script type="text/javascript">
                   window.onload = function () 
                   { alert("incorrect credentials"); 
                }
         </script>';
         include "Login_form_new.htm";
            chance:
        










?>