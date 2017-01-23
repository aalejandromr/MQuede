<?php

$servername = "localhost";
$username = "root";
$password = "root";
$db = "mquede";
$conn = new mysqli($servername,$username,$password, $db);

if($conn->connect_error){
  die("Connection failder: " . mysqli_connect_error());
}
else{
  
}