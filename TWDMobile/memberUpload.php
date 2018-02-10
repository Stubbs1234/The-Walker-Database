<?php

$host = "localhost"; //Your database host server
$db = "walkers"; //Your database name
$user = "root"; //Your database user
$pass = "root"; //Your password
$table = "details";
	
	$firstname = (isset($_POST['firstname']) ? $_POST['firstname'] : null);
	$lastname = (isset($_POST['lastname']) ? $_POST['lastname'] : null);
	$housenumber = (isset($_POST['housenumber']) ? $_POST['housenumber'] : null);
	$streetname = (isset($_POST['streetname']) ? $_POST['streetname'] : null);
	$town = (isset($_POST['town']) ? $_POST['town'] : null);
	$county = (isset($_POST['county']) ? $_POST['county'] : null);
	$postcode = (isset($_POST['postcode']) ? $_POST['postcode'] : null);
	$homephone = (isset($_POST['homephone']) ? $_POST['homephone'] : null);
	$mobliephone = (isset($_POST['mobliephone']) ? $_POST['mobliephone'] : null);
	$date = (isset($_POST['date']) ? $_POST['date'] : null);
	$join = (isset($_POST['join']) ? $_POST['join'] : null);
	$email = (isset($_POST['email']) ? $_POST['email'] : null);
	$org = (isset($_POST['org']) ? $_POST['org'] : null);
	//$_POST
	//$_GET
//$name = $_GET["namevent"];
		//$date1 = $_GET["date"];
		//$time1 = $_GET["time"];
		//$description1 = $_GET["description"];
		//$org1 = $_GET["org"];
		

$con = mysql_connect($host,$user,$pass) or die(mysql_error()); 
mysql_select_db($db,$con) or die(mysql_error()); 

$sql = "INSERT INTO `details`(`firstname`, `lastname`, `housenumber`, `streetname`, `town`, `county`, `postcode`, `homephone`, `mobliephone`, `dateofbrith`, `joiningdate`, `email`, `org`) VALUES ('$firstname','$lastname','$housenumber','$streetname','$town','$county','$postcode','$homephone','$mobliephone','$date','$join','$email','$org')";
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