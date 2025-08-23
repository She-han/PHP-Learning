<?php

session_start();
include('conn.php');
mysqli_select_db($conn,'emarketing');

extract($_POST);

if($_POST['loginBtn']){

  $sql = "select user_id,role from user where username='".$username."' and password='".MD5($pwd)."'";

  $result = mysqli_query($conn,$sql);

  if(!$result){
    die("username or password incorrect".mysqli_error());
  }
  $row = mysqli_fetch_assoc($result);

  $_session['role']=$row['role'];
  $_session['user_id']=$row['user_id'];

  if($row['role']=='buyer'){
    header("location:viewitems.php");
  }elseif($row['role']=='seller'){
    header("location:additems.php");
  }else{
    header("location:login.php?error=1");
  }
}

mysqli_close($conn);
?>