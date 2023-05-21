<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="work";

$conn = mysqli_connect($servername, $username, $password,$dbname);
if(!$conn )  
{  
  die('Could not connect: ' . mysqli_error());  
}  
?>