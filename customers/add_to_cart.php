<?php
session_start();

if(isset($_SESSION["cart"][$_GET["id"]])){
  $_SESSION["cart"][$_GET["id"]]["qty"]++;
}else{
  $_SESSION["cart"][$_GET["id"]]["qty"] = 1;
}
$_SESSION["alert"] = 'Cliente añadido al carrito correctamente. ';
header("location: index.php")

 ?>
