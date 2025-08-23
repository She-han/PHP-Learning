<?php
include('conn.php');
mysqli_select_db($conn,'emarketing');


if(isset($_POST['signupBtn'])){

  $username = $_POST['username'];
  $password = $_POST['password'];
  $role = $_POST['role'];

  $pwd = MD5($password);
  
  $sql = "insert into user(username,password,role) values
          ('$username','$pwd','$role')";

  $result = mysqli_query($conn,$sql);

  if(!$result){
    die("data insert error :".mysqli_error());
  }else{
    header("location:login.php");
  }
}

?>

<!DOCTYPE html>
<head></head>
<body>
  <form action="" method="post">
    <label>Username :</label>
    <input name="username" type="text" required/><br/>
    <label>Password :</label>
    <input name="password" type="password" required/><br/>

    <label>Role :</label>
    <select name="role">
      <option value="buyer">Buyer</option>
      <option value="seller">Seller</option>
    </select><br/>

    <input name="signupBtn" type="submit" value="Sign up"/>
    <input type="reset" value="clear"/>

  </form>
</body>
</html>