<!DOCTYPE html>
<head></head>
<body>

<?php
  if(isset($_GET['error'])){
    echo "Username or Password Invalid";
  }
?>

  <form style = "box-sizing:border-box; border:1px solid black; padding:20px" action= "authentication.php" method = "POST">

    <label>Username</label>
    <input name="username" type="text" required/></br> 

    <label>Password</label>
    <input name="pwd" type="password" required/></br>

    <input name="loginBtn" type="submit" value="Login"/>
    <input type="reset" value="Clear"/>

    <p>If you are new user create account from <a href=register.php>here</a></p>
  </form>

</body>
</html>

