<html>
  <head>
    <title>Office</title>
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
    <h1>Office Database</h1>

    <table>
      <thead>
        <tr>
          <th>Office Code</th>
          <th>City</th>
          <th>Phone</th>
          <th>Address</th>
          <th>Territory</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $sql = "SELECT * FROM offices";
          $result = $connect->query($sql);

          if ($result->num_rows > 0)
          {
            while ($row = $result->fetch_assoc())
            {
              echo '<tr>
                <td>' . $row['officeCode'] . '</td>
                <td>' . $row['city'] . '</td>
                <td>' . $row['phone'] . '</td>
                <td>' . $row['addressLine1'] . ' ' . $row['addressLine2']
                  . ', ' . $row['state'] . ', ' . $row['country']
                  . ', ' . $row['postalCode'] . '</td>
                <td>' . $row['territory'] . '</td>
              </tr>';
            }
          }
        ?>
      </tbody>
    </table>


  </body>
</html>
