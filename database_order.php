<html>
  <head>
    <title>Order</title>
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
          <th>Order Number</th>
          <th>Order Date</th>
          <th>Required Date</th>
          <th>Shipped Date</th>
          <th>Status</th>
          <th>Comments</th>
          <th>Customer Number</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $sql = "SELECT * FROM orders";
          $result = $connect->query($sql);

          if ($result->num_rows > 0)
          {
            while ($row = $result->fetch_assoc())
            {
              echo '<tr>
                <td>' . $row['orderNumber'] . '</td>
                <td>' . $row['orderDate'] . '</td>
                <td>' . $row['requiredDate'] . '</td>
                <td>' . $row['shippedDate'] . '</td>
                <td>' . $row['status'] . '</td>
                <td>' . $row['comments'] . '</td>
                <td> <a href="">' . $row['customerNumber'] .'</a> </td>
              </tr>';
            }
          }
        ?>
      </tbody>
    </table>


  </body>
</html>
