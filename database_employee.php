<html>
  <head>
    <title>Employee</title>
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
    <h1>Employee Database</h1>

    <table>
      <thead>
        <tr>
          <th>Employee Number</th>
          <th>Employee Name</th>
          <th>Extension</th>
          <th>Email Address</th>
          <th>Office Code</th>
          <th>Reports To</th>
          <th>Job Title</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $sql = "SELECT * FROM employees";
          $result = $connect->query($sql);

          if ($result->num_rows > 0)
          {
            while ($row = $result->fetch_assoc())
            {
              echo '<tr>
                <td>' . $row['employeeNumber'] . '</td>
                <td>' . $row['firstName'] . ' ' . $row['lastName'] . '</td>
                <td>' . $row['extension'] . '</td>
                <td>' . $row['email'] . '</td>
                <td> <a href="">' . $row['officeCode'] . '</a> </td>
                <td> <a href="">' . $row['reportsTo'] . '</a> </td>
                <td>' . $row['jobTitle'] . '</td>
              </tr>';
            }
          }
        ?>
      </tbody>
    </table>


  </body>
</html>
