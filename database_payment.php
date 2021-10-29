<html>
  <head>
    <title>Payment</title>
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
          <th>Customer Number</th>
          <th>Check Number</th>
          <th>Payment Date</th>
          <th>Amount</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $sql = "SELECT * FROM payments";
          $result = $connect->query($sql);

          if ($result->num_rows > 0)
          {
            while ($row = $result->fetch_assoc())
            {
              echo '<tr>
                <td> <a href="">' . $row['customerNumber'] . '</a> </td>
                <td>' . $row['checkNumber'] . '</td>
                <td>' . $row['paymentDate'] . '</td>
                <td>' . $row['amount'] . '</td>
              </tr>';
            }
          }
        ?>
      </tbody>
    </table>


  </body>
</html>
