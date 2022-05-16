
       <?php
       include 'header.php';
       echo $header_html;
        ?>

        <table class="table">
          <thead>
            <tr>
              <td>CustomerID</td>
              <td>CompanyName</td>
              <td>City</td>
            </tr>
          </thead>
        <tbody>
          <?php

          $con = mysqli_connect("db", "root", "root", "northwind");

          $sql = "SELECT * FROM customers";
          if($result = mysqli_query($con, $sql)){
          while($row = mysqli_fetch_array($result)){
          echo '<tr>';
            echo '<td>';
              echo $row['CustomerID'];
            echo '</td>';
            echo '<td>';
              echo $row['CompanyName'];
            echo '</td>';
            echo '<td>';
              echo $row['City'];
            echo '</td>';
          echo '</tr>';
          }
        }
        mysqli_close($con);
          ?>
        </tbody>
        </table>
        <?php echo $footer_html; ?>
