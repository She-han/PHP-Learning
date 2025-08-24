<?php

  $name = "";
  $address = "";
  $email = "";

  $nameErr = "";
  $addressErr = "";
  $emailErr = "";

  if(isset($_POST['submitBtn'])){

    if(empty($_POST['name'])){
      $nameErr = "Missing";
    }else{
      $name = $_POST['name'];
    }

    if(empty($_POST['address'])){
      $addressErr = "Missing";
    }else{
      $address = $_POST['address'];
    }

    if(empty($_POST['mail'])){
      $emailErr = "Missing";
    }else{
      $email = $_POST['mail'];;
    }

  }
?>

<!DOCTYPE html>
<head>
  <style>
    .error{
      color:red;
    }
  </style>
</head>

<body>
  <h2>Form Validation</h2>
  <form action="" method="post">

    <label>Name</label>
    <input name="name" type="text" value="<?php echo $name; ?>" />
    <span class="error"><?php echo $nameErr; ?></span>
    </br>

    <label>Address</label>
    <input name="address" type="text" value="<?php echo $address; ?>"/>
    <span class="error"><?php echo $addressErr; ?></span>
    </br>

    <label>Email</label>
    <input name="mail" type="email" value="<?php echo $email; ?>" />
    <span class="error"><?php echo $emailErr; ?></span>
    </br>

    <input name="submitBtn" type="submit" value="Submit" />

  </form>
</body>
</html>

