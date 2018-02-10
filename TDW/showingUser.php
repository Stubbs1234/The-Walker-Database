<?php
session_start();
if (!isset($_SESSION['myusername'])) {
  header('Location: login.html');
  exit; 
}
?>
<html>
<head>
<title>Your Users</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="js/delete button.js"></script>
</head>
<body>
<div id="container">
<div id="head">
<!--<form name="form1" method="post" action="checklogin.php" align="right" style="width:500px;float:right;margin:15px"> 
Username
<input name="myusername" type="text" id="myusername">
Password
<input type="password" name="mypassword" id="mypassword"><input type="submit" name="Submit" value="Login">  
</form>-->
<!--<img src="images/logo1 copy 2.png" height="50" width="100">--><!--style="margin-left:600px;margin-right:800px"-->
<div class="imagehead"><img src="images/logo1 copy.png" height="50" Width="80" ></div>
</div>
<div id="nav">
<?php
include 'database.php';

/*$query="SELECT * FROM users WHERE username = '".$_SESSION['username']."'";


$result=mysql_query($query)or die(mysql_error());

while($user=mysql_fetch_array($result))
{

echo "Here are the files that have been upload from your users at ".$user['company'];

	$user['company'] = $user4;
}	*/
if (isset($_GET['org1']))
	{
		$orgName = $_GET['org1'];
		$strSQL =  "SELECT * FROM users WHERE org LIKE '%$orgName%'";
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
/*//SET @user1 = Apple
$cars[0] = "KeepIt";
$cars[1] = "Apple";
//$user['company'] = $user1;
$strSQL =  "SELECT * FROM users WHERE company LIKE '%$cars[0]%'";
 //"SELECT * FROM 'users' WHERE 'company' LIKE = @user1"

	// Execute the query (the recordset $rs contains the result)
	$rs = mysql_query($strSQL);
	
	echo "<table border='1'>
<tr>
<th>Id</th>
<th>Username</th>
<th>Company Name</th>
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
  echo "<td>" . $row['company'] . "</td>";
  echo "<td>" . $row['status'] . "</td>"; 
   echo "<td>"."<a href='edit.php?edit=$row[id]'>Edit</a>". "</td>"; 
  echo "<td>"."<a href='delete.php?delete=$row[id]'>Delete</a> "."</td>";
  echo "</tr>";
}
echo "</table>";*/
echo $row['username'];
	// Close the database connection
	mysql_close();
	?>
	</div>
	</div>
</body>
</html>