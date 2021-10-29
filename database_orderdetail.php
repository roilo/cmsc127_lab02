<html>
  <head>
    <title>Order Detail</title>
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
    <h1>Order Detail Database</h1>

    <table>
      <thead>
        <tr>
          <th>Option</th>
          <th>Order Number</th>
          <th>Product Code</th>
          <th>Quantity Ordered</th>
          <th>Price per Product</th>
          <th>Order Line Number</th>
        </tr>
      </thead>
      <tbody>
        <?php
          // if (false) {
          //     $sql = "DELETE FROM orderdetails WHERE orderNumber='$row['orderNumber']'";
          // }
          $sql = "SELECT * FROM orderdetails";
          $result = $connect->query($sql);

          if ($result->num_rows > 0)
          {
            while ($row = $result->fetch_assoc())
            {
              echo '<tr>
                <td> <a href="">Edit</a> <a href="database_orderdetail.php/?action="delete"">Delete</a> </td>
                <td> <a href="">' . $row['orderNumber'] . '</a> </td>
                <td> <a href="">' . $row['productCode'] . '</a> </td>
                <td>' . $row['quantityOrdered'] . '</td>
                <td>' . $row['priceEach'] . '</td>
                <td>' . $row['orderLineNumber'] . '</td>
              </tr>';
            }
          }
        ?>
      </tbody>
    </table>


  </body>
</html>
