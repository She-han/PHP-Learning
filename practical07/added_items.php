<?php
session_start();
include('conn.php');
mysqli_select_db($conn,'emarketing');

if(!isset($_SESSION['role']) || $_SESSION['role'] != 'seller'){
  header("location:login.php");
  exit();
}

$seller_id = $_SESSION['user_id'];

$sql = "select itemcode,itemname,price from item where seller_id = '".$seller_id."'";

$result = mysqli_query($conn,$sql);

if(!$result){
  die ("Data fetching error :".mysqli_error());
}

if(mysqli_num_rows($result)>0){

  echo "<h2>Added items data</h2>";
  echo "<table border = '1'>";
  echo "
      <tr>
        <th>Item Code</th>
        <th>Item Name</th>
        <th>Price</th>
      </tr>
  ";

  while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>" . $row['itemcode'] . "</td>";
    echo "<td>" . $row['itemname'] . "</td>";
    echo "<td>" . $row['price'] . "</td>";
    echo "</tr>";
  }
    echo "</table>";

  }else{
    echo "no data to show";
  }



?>