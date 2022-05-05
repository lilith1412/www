
       <?php
       include 'header.php';
       echo $header_html;
          $car_brands = array("Volvo" => array("country" => "Germany", "since" => "1956"),
                              "Mercedes" => array("country" => "Germany", "since" => "1945"),
                              "McLaren" => array("country" => "Italy", "since" => "1942"),
                              "Lada" => array("country" => "Russia", "since" => "1975"));
        ?>

        <table class="table">
          <thead>
            <tr>
              <td>Marca</td>
              <td>Procedencia</td>
              <td>Desde</td>
            </tr>
          </thead>
        <tbody>
          <?php
          echo var_dump($_GET);
          echo '----------------<br>';
          echo var_dump($_POST);
          if(array_key_exists('brand_label', $_REQUEST) && array_key_exists($_REQUEST['brand_label'], $car_brands)){
            $brand_data = $car_brands[$_REQUEST['brand_label']];
            echo '<tr>';
              echo '<td>';
              echo '<a href="index.php?brand_label='.$_REQUEST['brand_label'].'">'.$_REQUEST['brand_label'].'</a>';
              echo '</td>';
              echo '<td>';
                echo $brand_data['country'];
              echo '</td>';
              echo '<td>';
                echo $brand_data['since'];
              echo '</td>';
            echo '</tr>';
          }else{
          foreach ($car_brands as $brand_label => $brand_data) {
          echo '<tr>';
            echo '<td>';
              echo '<a href="show_brand_data.php?brand_label='.$brand_label.'">'.$brand_label.'</a>';
            echo '</td>';
            echo '<td>';
              echo $brand_data['country'];
            echo '</td>';
            echo '<td>';
              echo $brand_data['since'];
            echo '</td>';
          echo '</tr>';
          }
        }
          ?>
        </tbody>
        </table>
        <?php echo $footer_html; ?>
