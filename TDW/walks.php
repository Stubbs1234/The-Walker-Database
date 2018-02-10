<html>
<body>
<?php
include 'database.php';
		$strSQL =  "SELECT * FROM walks";
 //"SELECT * FROM 'users' WHERE 'company' LIKE = @user1"

	// Execute the query (the recordset $rs contains the result)
	$rs = mysql_query($strSQL);
	
	echo "<table border='1'>
<tr>
<th>Walk Name</th>
<th>Miles</th>
<th>Area</th>
<th>Latitude</th>
<th>Longitude</th>


</tr>";
	
	// Loop the recordset $rs
	// Each row will be made into an array ($row) using mysql_fetch_array
	while($row = mysql_fetch_array($rs)) {

	   // Write the value of the column FirstName (which is now in the array $row)
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['miles'] . "</td>";
  echo "<td>" . $row['area'] . "</td>";
  echo "<td>" . $row['latitude'] . "</td>"; 
  echo "<td>" . $row['longitude'] . "</td>";
  echo "</tr>";
}
echo "</table>";
?>
</body>
</html>