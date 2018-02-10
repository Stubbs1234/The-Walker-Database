<?php 
include 'database.php';
/*$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="root"; // Mysql password 
$db_name="walkers"; // Database name 
$tbl_name="events"; // Table name 

// Connect to server and select database.
 mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
 mysqli_select_db("$db_name")or die("cannot select DB");*/
 
if (isset($_POST['submit'])){
$namewalk = $_POST['name'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  $description = $_POST['description'];
  $org = $_POST['org'];
  
$sql=mysql_query("INSERT INTO `events`(`namevent`, `date`, `time`, `description`, `org`) VALUES ('$namewalk','$date','$time','$description','$org')");


 $result=mysql_query($sql);
}
// if successfully insert data into database, displays message "Successful". 
 if($result){
 echo "ERROR";
 }
 else {
 header('Location: index.html');
 }

// close connection 
 mysql_close();
?>