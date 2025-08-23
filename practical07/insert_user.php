<?php
include('conn.php');

mysqli_select_db($conn,'emarketing');

$pwdb =MD5("buyerpwd123");
$pwds =MD5("sellerpwd123");

$sql = "INSERT INTO user(username, password, role) 
        values ('buyer1','$pwdb', 'buyer'),
               ('seller1','$pwds', 'seller')";

$result = mysqli_query($conn,$sql);

if(!$result){
  die("insert error". mysqli_error());
}else{
  echo "<br/>insert success";
}
?>