<?php

require 'dbh.inc.php';

// defensive programming, exit the program early if something is wrong
// remember to use the ‘exit()’ function to kill the program.
  if (!isset($_SESSION['userId'])) {
        echo readfile("podpage.html");
        exit();
      }


  $sql = "SELECT * FROM users";
  $result = mysqli_query($sql);

//associative array

  $row = mysqli_fetch_assoc($result);


?>

<!DOCTYPE html>
<html>
<head>
  <title>Crossing the Pods</title>
</head>
<body>

  <table width="600" border="2" cellspacing="2" cellpadding="2">
    <tr>
      <th>User ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email Address</th>
    <?php

      while ($result=$records) {
        echo "<tr>";

        echo "<td>".$records['user_id']."</td>";
        echo "<td>".$records['user_first']."</td>";
        echo "<td>".$records['user_last']."</td>";
        echo "<td>".$records['user_email']."</td>";

        echo "</tr>";
      }
      //end while
      ?>

    </tr>

  </table>

</body>
</html>

		

	



