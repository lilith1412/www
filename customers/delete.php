<?php
session_start();
$con = mysqli_connect("db", "root", "root", "northwind");
$sql = "DELETE FROM customers where CustomerID = '".$_GET['id']."'";
$result = mysqli_query($con, $sql);
$_SESSION["alert"] = 'Cliente eliminado correctamente';
header("location: index.php")
 ?>
