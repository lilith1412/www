<?php
include 'header.php';
echo $header_html;
?>
<form action="show_brand_data.php" method="POST">
  <input type="text" name="brand_label"></input>
  <input type="submit"></input>
</form>
<?php
echo $footer_html;
?>
