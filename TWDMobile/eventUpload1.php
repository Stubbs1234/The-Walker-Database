<?php

$host = "localhost"; //Your database host server
$db = "walkers"; //Your database name
$user = "root"; //Your database user
$pass = "root"; //Your password
$table = "events";
	
	$name = (isset($_POST['namevent']) ? $_POST['namevent'] : null);
	$date1 = (isset($_POST['date']) ? $_POST['date'] : null);
	$time1 = (isset($_POST['time']) ? $_POST['time'] : null);
	$description1 = (isset($_POST['description']) ? $_POST['description'] : null);
	$org1 = (isset($_POST['org']) ? $_POST['org'] : null);
	//$_POST
	//$_GET
//$name = $_GET["namevent"];
		//$date1 = $_GET["date"];
		//$time1 = $_GET["time"];
		//$description1 = $_GET["description"];
		//$org1 = $_GET["org"];
		

$con = mysql_connect($host,$user,$pass) or die(mysql_error()); 
mysql_select_db($db,$con) or die(mysql_error()); 

$sql = "INSERT INTO `events`(`namevent`, `date`, `time`, `description`, `org`) VALUES ('$name','$date1','$time1','$description1','$org1')";
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
