<?php
if( isset($_GET['org1']) )
	{
		$orgN = $_GET['org1'];
		$strSQL =  "SELECT * FROM users WHERE company LIKE '%$orgN%'";
 //"SELECT * FROM 'users' WHERE 'company' LIKE = @user1"

	// Execute the query (the recordset $rs contains the result)
	$rs = mysql_query($strSQL);
	
	echo "<table border='1'>
<tr>
<th>Id</th>
<th>Username</th>
<th>Group</th>
<th>Admin</th>
<th>Edit</th>
<th>Delete</th>

</tr>";
	
	// Loop the recordset $rs
	// Each row will be made into an array ($row) using mysql_fetch_array
	while($row = mysql_fetch_array($rs)) {

	   // Write the value of the column FirstName (which is now in the array $row)
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['org'] . "</td>";
  echo "<td>" . $row['status'] . "</td>"; 
   echo "<td>"."<a href='edit.php?edit=$row[id]'>Edit</a>". "</td>"; 
  echo "<td>"."<a href='delete.php?delete=$row[id]'>Delete</a> "."</td>";
  echo "<td>"."<a href='emailreset.php?reset=$row[id]'>Send Email for Password Reset</a> "."</td>";
  echo "</tr>";
}
echo "</table>";

	}
	?>