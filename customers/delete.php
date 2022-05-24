<?php
$con = mysqli_connect("db", "root", "root", "northwind");
$sql = "DELETE FROM customers where CustomerID = '".$_GET['id']."'";
$result = mysqli_query($con, $sql);
header("location: index.php")
 ?>
