<html>
  <head>
    <title>Product</title>
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
          <th>Product Code</th>
          <th>Product Name</th>
          <th>Product Line</th>
          <th>Product Scale</th>
          <th>Product Vendor</th>
          <th>Product Description</th>
          <th>Quantity in Stock</th>
          <th>Price</th>
          <th>MSRP</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $sql = "SELECT * FROM products";
          $result = $connect->query($sql);

          if ($result->num_rows > 0)
          {
            while ($row = $result->fetch_assoc())
            {
              echo '<tr>
                <td>' . $row['productCode'] . '</td>
                <td>' . $row['productName'] . '</td>
                <td> <a href="">' . $row['productLine'] . '</a> </td>
                <td>' . $row['productScale'] . '</td>
                <td>' . $row['productVendor'] . '</td>
                <td>' . $row['productDescription'] . '</td>
                <td>' . $row['quantityInStock'] . '</td>
                <td>' . $row['buyPrice'] . '</td>
                <td>' . $row['MSRP'] . '</td>
              </tr>';
            }
          }
        ?>
      </tbody>
    </table>


  </body>
</html>
