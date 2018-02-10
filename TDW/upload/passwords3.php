<?php
header('Content-type: application/json');
$host = “localhost”; //Your database host server
 $db = “CrossfitPotch”; //Your database name
 $user = “root”; //Your database user
 $pass = “root”; //Your password

$connection = mysql_connect($host, $user, $pass);

//Check to see if we can connect to the server
 if(!$connection)
 {
 die("Database server connection failed.");
 }
else
 {
 //Attempt to select the database
 $dbconnect = mysql_select_db($db, $connection);

//Retrieve the login details via POST
 $username = $_POST[‘username’] == 'alex';
 $password = $_POST[‘password’] == 'bob';

//Query the table
 $query = mysql_query(“SELECT * FROM CFP WHERE Email = ‘$username’ AND Password = ‘$password'”);

//check if results are returned
 $num = mysql_num_rows($query);

//if a record found matching query
 if ($num == 1)
 {
 echo ‘{“success”:1}';
 }
 else
 {
 echo ‘{“success”:0,”error_message”:”Username and/or password is invalid.”}';
 }
mysql_close();
 }
?>