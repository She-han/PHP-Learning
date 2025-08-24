<?php

$servername = "localhost";
$username = "root";
$pwd = "";

$dbname = "LDFashion";
$port = "4306";

$conn = mysqli_connect($servername,$username,$pwd,$dbname,$port);

if(!$conn){
  die("db connetion failed :".mysqli_connect_error());
}else{
  echo "connection succesful";
}

?>