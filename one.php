
<html>
<head>
Test Mysql connection
</head>
<body>
</body>

</html>


<?php
// Create connection
$con=mysqli_connect("nrdb.db.11488569.hostedresource.com","nrdb","Password@123","nrdb");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
// to retrive data
$result = mysqli_query($con,"SELECT * FROM user");


echo "<table border='1'>
<tr>
<th>Name</th>
<th>Password</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['password'] . "</td>";
  echo "</tr>";
  }
echo "</table>";


mysqli_close($con);


?>