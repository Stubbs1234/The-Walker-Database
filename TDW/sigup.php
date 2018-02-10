<?php
session_start(); // Right at the top of your script
if (!isset($_SESSION['myusername'])) {
  header('Location: login.html');
  exit; 
}
?>
<html>
<head>
<title>Sign-Up</title>
</head>
<body id="body-color">
<div id="Sign-Up">
<fieldset style="width:30%"><legend>Registration Form</legend>
<table border="0">
<tr>
<form method="POST" action="sigupcheck.php">
<td>Company Name</td><td><input type="text" name="company"></td>
</tr>
<tr>
<td>First Name</td><td><input type="text" name="firstname"></td>
</tr>
<tr>
<td>Last Name</td><td><input type="text" name="lastname"></td>
</tr>
<tr>
<td>Username</td><td> <input type="text" name="username"></td>
</tr>
<tr>
<td>Password</td><td><input type="password" name="password"></td>
</tr>
<tr>
<td>Confirm Password</td><td> <input type="password" name="cpassword"></td>
</tr>
<tr>
<td>Email</td><td><input type="text" name="email"></td>
</tr>
<tr>
<td>Admin</td><td> <input type="text" name="admin"></td>
</tr>
<tr>
<td>Your Name</td><td><input type="text" name="create"></td>
</tr>
<tr>
<td><input id="button" type="submit" name="submit" value="Sign-Up"></td>
</tr>
</form>
</table>
</fieldset>
</div>
<!--<?php
if(isset($_GET['id'])){
echo 'Welcome to KeepIt '.$_GET['id'];
}else {
echo '(write) a 404 page';
}
?>-->
<?php
echo $_SESSION['username'];
?>
<?php
include 'database.php';

	// SQL query
	$strSQL =  "SELECT `username`, `password`, `status`, `company`, `email` FROM `users` WHERE 1";

	// Execute the query (the recordset $rs contains the result)
	$rs = mysql_query($strSQL);
	
	echo "<table border='1'>
<tr>
<th>Username</th>
<th>Company Name</th>
<th>Admin</th>
</tr>";
	
	// Loop the recordset $rs
	// Each row will be made into an array ($row) using mysql_fetch_array
	while($row = mysql_fetch_array($rs)) {

	   // Write the value of the column FirstName (which is now in the array $row)
	     echo "<tr>";
	     echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['company'] . "</td>";
  echo "<td>" . $row['status'] . "</td>";
  echo "</tr>";
}
echo "</table>";
	  //echo $row['id'];
	  //echo $row['cost'];


	// Close the database connection
	mysql_close();
	?>
</body>
</html>