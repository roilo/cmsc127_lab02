<html>
  <head>
    <title>Product Line</title>
  </head>
  <body>
    <?php
      $server = "localhost";
      $user = "root";
      $pass = "";
      $db = "classicmodels";

      $connect = new mysqli($server, $user, $pass, $db);

      if ($connect->connect_error)
      {
        die("Connection failed: " . $connect->connect_error);
      }
    ?>
    <h1>Order Database</h1>

    <table>
      <thead>
        <tr>
          <th>Product Line</th>
          <th>Text Description</th>
          <th>HTML Description</th>
          <th>Image</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $sql = "SELECT * FROM productlines";
          $result = $connect->query($sql);

          if ($result->num_rows > 0)
          {
            while ($row = $result->fetch_assoc())
            {
              echo '<tr>
                <td>' . $row['productLine'] . '</td>
                <td>' . $row['textDescription'] . '</td>
                <td>' . $row['htmlDescription'] . '</td>
                <td>' . $row['image'] . '</td>
              </tr>';
            }
          }
        ?>
      </tbody>
    </table>


  </body>
</html>
