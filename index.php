
       <?php
       include 'header.php';
       echo $header_html;
        ?>

        <table class="table">
          <thead>
            <tr>
              <td>Tabla</td>
              <td>&nbsp;</td>
            </tr>
          </thead>
        <tbody>
          <?php


          echo '<tr>';
            echo '<td>';
              echo 'Clientes';
            echo '</td>';
            echo '<td>';
              echo '<a href="./customers/index.php">Gestionar</a>';
            echo '</td>';
          echo '</tr>';

          ?>
        </tbody>
        </table>
        <?php echo $footer_html; ?>
