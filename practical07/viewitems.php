<?php
session_start();
include('conn.php');
mysqli_select_db($conn,'emarketing');

if(!isset($_SESSION['role']) || $_SESSION['role'] != 'buyer'){
  header("location:login.php");
  exit();
}

$sql = "select * from item";

$result = mysqli_query($conn,$sql);

if(!$result){
  die("data fetching error :".mysqli_error());
}

if(mysqli_num_rows($result)>0){

  echo "
  <table border='1'>
    <tr>
      <th>itemcode</th>
      <th>itemname</th>
      <th>price</th>
      <th>seller id(item added)</th>
    </tr>";

  while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>" .$row['itemcode']. "</td>";
    echo "<td>" .$row['itemname']. "</td>";
    echo "<td>" .$row['price']. "</td>";
    echo "<td>" .$row['seller_id']. "</td>";
    echo "</tr>";
  }
    echo "</table>";
}else{
  echo "no data to show";
}

?>