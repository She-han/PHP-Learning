<!DOCTYPE html>
<head></head>
<body>

<?php
  if(isset($_GET['error'])){
    echo "Username or Password Invalid";
  }
?>

  <h1>Login</h1>
  <form action="auth.php" method="post">
    <input name="username" type="text" required/></br>
    <input name="password" type="password" required/></br>
    <input name="loginBtn" type="submit" value="Login"/>
    <input type="reset" value="Clear"/>
  </form>

</body>
</html>



