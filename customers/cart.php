
       <?php
       include '../header.php';
       echo $header_html;

      echo "<pre>".var_dump($_SESSION["cart"])."</pre>";
        ?>
        <div class="container-fluid p-5 bg-primary text-white text-center">
          <h1>Carrito de compras</h1>
          <p>Esta es la lista de Customers agregados al carrito</p>
        </div>
        <table class="table">
          <thead>
            <tr>
              <td>CustomerID</td>
              <td>Cantidad</td>
              <td>&nbsp;</td>
            </tr>
          </thead>
        <tbody>
          <?php

          foreach ($_SESSION["cart"] as $key => $value) {
            echo '<tr>';
              echo '<td>';
                echo $key;
              echo '</td>';
              echo '<td>';
                echo $value["qty"];
              echo '</td>';
              echo '<td>';
                echo '<a href="remove_from_cart.php?id='.$key.'">Disminuir</a>&nbsp;&nbsp;';
                echo '<a href="remove_from_cart.php?remove_all=1&id='.$key.'">Eliminar</a>';
              echo '</td>';
            echo '</tr>';
          }


          ?>
        </tbody>
        </table>
        <?php echo $footer_html; ?>
