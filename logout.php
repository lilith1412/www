<?php
session_start();
unset($_SESSION["user_connected_id"]);
header("location: index.php")

 ?>
