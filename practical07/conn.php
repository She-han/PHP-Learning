<?php
  $servername = "localhost";
  $username = "root";
  $dbname = "";
  $port = 4306;
  $pwd = "";

  $conn = mysqli_connect($servername,$username,$pwd,$dbname,$port);

  if(!$conn){
    die("connection failed" . mysqli_connect_error());
  }else{
    echo "connection succcess";
  }

?>