<?php
$con = mysqli_connect("db", "root", "root", "northwind");
$sql = "INSERT INTO customers (CustomerID, CompanyName, ContactName, ContactTitle, Address, City, Region, PostalCode, Country) VALUES ('".$_POST['CustomerID']."', '".$_POST['CompanyName']."', '".$_POST['ContactName']."', '".$_POST['ContactTitle']."', '".$_POST['Address']."', '".$_POST['City']."', '".$_POST['Region']."', '".$_POST['PostalCode']."', '".$_POST['Country']."')";
$result = mysqli_query($con, $sql);
header("location: index.php")

 ?>
