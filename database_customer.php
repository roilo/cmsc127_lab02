<html>
  <head>
    <title>Customer</title>
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
    <h1>Customer Database</h1>

    <table>
      <thead>
        <tr>
          <th>Customer Number</th>
          <th>Customer Name</th>
          <th>Contact Name</th>
          <th>Phone Number</th>
          <th>Address</th>
          <th>Sales Rep Employee Number</th>
          <th>Credit Limit</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $sql = "SELECT * FROM customers";
          $result = $connect->query($sql);

          if ($result->num_rows > 0)
          {
            while ($row = $result->fetch_assoc())
            {
              echo '<tr>
                <td>' . $row['customerNumber']
                  . '<a href="">Orders</a>'
                  . '<a href="">Payments</a>' . '</td>
                <td>' . $row['customerName'] . '</td>
                <td>' . $row['contactFirstName'] . ' ' . $row['contactLastName'] . '</td>
                <td>' . $row['phone'] . '</td>
                <td>' . $row['addressLine1'] . ' ' . $row['addressLine2']
                  . ', ' . $row['city'] . ', ' . $row['state'] . ', '
                  . ' ' . $row['country'] . ', ' . $row['postalCode'] . '</td>
                <td> <a href="">' . $row['salesRepEmployeeNumber'] . '</a> </td>
                <td>' . $row['creditLimit'] . '</td>
              </tr>';
            }
          }
        ?>
      </tbody>
    </table>


  </body>
</html>
