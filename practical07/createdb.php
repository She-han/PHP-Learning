<?php
include('conn.php');

$sql = "CREATE DATABASE IF NOT EXISTS emarketing";

$result = mysqli_query($conn,$sql);

if(!$result){
  die ("Error creating db" . mysqli_error());
}else{
  echo "database created";
}

mysqli_select_db($conn,'emarketing');

$sql3 = "CREATE TABLE IF NOT EXISTS user (
          user_id int auto_increment primary key, 
          username varchar(100), 
          password varchar(100), 
          role varchar(50))";

$result2 = mysqli_query($conn,$sql3);

if(!$result){
  die("user table creating error " . mysqli_error());
}else{
  echo "user table created successfully";
}

$sql2 = "CREATE TABLE IF NOT EXISTS item (
          itemcode int auto_increment primary key, 
          itemname varchar(100), 
          price decimal(10,2), 
          seller_id int,
          FOREIGN KEY(seller_id) REFERENCES user(user_id))";

$result2 = mysqli_query($conn,$sql2);

if(!$result){
  die("item table creating error " . mysqli_error());
}else{
  echo "item table created successfully";
}

$sql4 = "CREATE TABLE IF NOT EXISTS cart (
          cart_id int auto_increment primary key, 
          itemcode int,           
          buyer_id int,            
          seller_id int, 
          FOREIGN KEY(itemcode) REFERENCES item(itemcode), 
          FOREIGN KEY(buyer_id) REFERENCES user(user_id))";

$result2 = mysqli_query($conn,$sql4);

if(!$result){
  die("cart table creating error " . mysqli_error());
}else{
  echo "cart table created successfully";
}


mysqli_close($conn);
?>