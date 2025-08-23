<?php
session_start();
include('conn.php');

if(!isset($_SESSION['role']) || $_SESSION['role'] != 'seller'){
  header("location:login.php");
  exit();
}

$seller_id = $_SESSION['seller'];

$sql = "select itemcode,itemname,price where seller_id = '".$seller_id."'";

$result = mysqli_query($conn,$sql);

if(!$result){
  die ("Data fetching error :".mysqli_error());
}

$row = mysqli_fetch_assoc($result);

echo "
  <table border='1'>
    <tr>
      <th>Item Code</th>
      <th>Item Name</th>
      <th>Price</th>
    </tr>
  </table>
";



?>