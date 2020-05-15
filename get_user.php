<?php
$q = intval($_GET['q']);
require('database.php');

$sql="SELECT firstName, lastName, email, userID FROM users_plovdiv WHERE email = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Email</th>
<th>UserID</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['firstName'] . "</td>";
  echo "<td>" . $row['lastName'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['userID'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>