<?php

session_start();
include('conn.php');

if(!isset($_SESSION['Role']) || $_SESSION['Role'] != 'buyer'){
  header("location:login.php");
  exit();
}

$today = date('Y-m-d');

$sql = "select Iname,price,discount,discountClose from LDItems";

$result = mysqli_query($conn,$sql);

if(!$result){
  die("fetch error :".mysqli_error());
}

?>

<!DOCTYPE html>
<head></head>
<body>
  <h1>Clothing Items</h1>
  Prices on: <?php echo $today; ?>

  <table border="1">
    <tr>
      <td>Name</td>
      <td>price</td>
      <td>Discount</td>
      <td>Availability</td>
    </tr>

    <?php
      if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
          echo "<tr>";
          echo "<td>" .$row['Iname']. "</td>";
          echo "<td>" .$row['price']. "</td>";

          $disprice = ($row['price']*$row['discount'])/100;
          echo "<td>" .number_format($disprice,2). "</td>";

          if($row['discountClose']>$today){
            echo "<td>Available</td>";
          }else{
            echo "<td>Unavailable</td>";
          }
        }
      }else{
        echo "no data found";
      }
    ?>

  </table>
</body>
</html>