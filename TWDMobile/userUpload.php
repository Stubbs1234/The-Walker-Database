<?php

$host = "localhost"; //Your database host server
$db = "walkers"; //Your database name
$user = "root"; //Your database user
$pass = "root"; //Your password
$table = "users";
	
	$firstname = (isset($_POST['firstname']) ? $_POST['firstname'] : null);
	$lastname = (isset($_POST['lastname']) ? $_POST['lastname'] : null);
	$username = (isset($_POST['username']) ? $_POST['username'] : null);
	$password = (isset($_POST['password']) ? $_POST['password'] : null);
	$org = (isset($_POST['org']) ? $_POST['org'] : null);
	$status = (isset($_POST['status']) ? $_POST['status'] : null);
	$email = (isset($_POST['email']) ? $_POST['email'] : null);
	$create = (isset($_POST['create']) ? $_POST['create'] : null);
	//$_POST
	//$_GET
//$name = $_GET["namevent"];
		//$date1 = $_GET["date"];
		//$time1 = $_GET["time"];
		//$description1 = $_GET["description"];
		//$org1 = $_GET["org"];
		

$con = mysql_connect($host,$user,$pass) or die(mysql_error()); 
mysql_select_db($db,$con) or die(mysql_error()); 

$sql = "INSERT INTO `users`(`firstname`, `lastname`, `username`, `password`, `status`, `org`, `email`, `created_by`) VALUES ('$firstname','$lastname','$username','$password','$status','$org','$email','$create')";
	$res = mysql_query($sql,$con) or die(mysql_error());



if($res) {          
$response = array('status' => '1');                 
} else {
die("Query failed");
}

echo json_encode($res);
exit();
mysql_close($con);
/*mysql_close($con);
if ($res) {
    echo "success";
}else{
    echo "faild";
}*/

?>