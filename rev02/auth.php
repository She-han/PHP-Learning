<?php

session_start();
include('conn.php');

if(isset($_POST['loginBtn'])){

  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "select Uname,Role from User where Uname = '".$username."' and Pwd = '".$password."'";

  $result = mysqli_query($conn,$sql);

  if(!$result){
    die("user not found :".mysqli_error());
  }

  $row = mysqli_fetch_assoc($result);

  $_SESSION['Role'] = $row['Role'];
  $_SESSION['Uname'] = $row['Uname'];

  if($row['Role']=='buyer'){
    header("location:view.php");
  }elseif($row['Role']=='admin'){
    header("location:admin.php");
  }else{
    header("location:login.php?error=1");
  }
}
mysqli_close($conn);
?>