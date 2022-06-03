<?php
session_start();
$con = mysqli_connect("db", "root", "root", "northwind");
$sql = "SELECT * FROM users where email ='".$_POST['email']."' and password = md5('".$_POST['password']."')";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result) == 1){
  $user = mysqli_fetch_array($result);
  $_SESSION["user_connected_id"] = $user["id"];
  header("location: index.php");
}else{
  header("location: error.php");
}

 ?>
