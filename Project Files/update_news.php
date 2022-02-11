<?php

$heading=$_POST['heading'];
$description=$_POST['description'];
$select=$_POST['select'];
$link=mysqli_connect('localhost','root','','news');
if(!$link){ 
    die('Failed to connect to server'); 
    } 
    $query="INSERT INTO detail VALUES ('$heading','$description','$select')";
    $result=mysqli_query($link,$query);
    echo'<script type="text/javascript">
                   window.onload = function () 
                   { alert("News has been updated"); 
                }
         </script>';
    include "main_page.php";
    
?>