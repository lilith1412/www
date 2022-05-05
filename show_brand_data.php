<?php
include 'header.php';
echo $header_html;
$car_brands = array("Volvo" => array("country" => "Germany", "since" => "1956"),
                    "Mercedes" => array("country" => "Germany", "since" => "1945"),
                    "McLaren" => array("country" => "Italy", "since" => "1942"),
                    "Lada" => array("country" => "Russia", "since" => "1975"));
?>
<a href="index.php">Volver</a><br><br>
<?php
if(array_key_exists('brand_label', $_REQUEST) && array_key_exists($_REQUEST['brand_label'], $car_brands)){
  echo '<div>';
  echo '<b>Marca:'.$_REQUEST['brand_label'].'</b><br>';
  echo '<b>Procedencia:'.$car_brands[$_REQUEST['brand_label']]['country'].'</b><br>';
  echo '<b>Desde:'.$car_brands[$_REQUEST['brand_label']]['since'].'</b><br>';
  echo '</div>';
}else{
  echo 'No se encuentra la marca seleccionada.';
}


 ?>

<?php
echo $footer_html;
?>
