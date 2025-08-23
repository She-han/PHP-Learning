<?php
session_start();

include('conn.php');
mysqli_select_db($conn,'emarketing');

if(!isset($_SESSION['role']) || $_SESSION['role'] != 'seller'){
  header("location:login.php");
  exit();
}

$message = "";

if(isset($_POST['addBtn'])){
  
  $seller_id = $_SESSION['user_id'];
  extract($_POST);

  $sql = "insert into item (itemcode,itemname,price,seller_id) values
          ('$itemcode','$itemname','$price','$seller_id')";

  $result = mysqli_query($conn,$sql);

  if(!$result){
    $message="error :".mysqli_error();
  
  }else{
    $message="Item added successfully";
  }
}
?>

<!DOCTYPE html>
<head></head>
<body>

  </br>
  <a href='signout.php'>Sign Out</a></br>
  <a href='added_items.php'>View Items</a></br>

  <form action="" method="post" >
    <label>Item Code : </label>
    <input name="itemcode" type="text" required/></br>

    <label>Item Name : </label>
    <input name="itemname" type="text" required/></br>

    <label>Price : </label>
    <input name="price" type="text" required/></br>

    <input name="addBtn" type="submit" value="Add Item" required/></br>
  </form>

  <?php
    if(!empty($message)){
      echo "$message";
    }
  ?>

</body>
</html>

