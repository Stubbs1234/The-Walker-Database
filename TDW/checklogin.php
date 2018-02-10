<?php
session_start();
include 'database.php';

// username and password sent from form 
 $myusername=$_POST['myusername']; 
 $mypassword=$_POST['mypassword']; 



// To protect MySQL injection (more detail about MySQL injection)
 $myusername = stripslashes($myusername);
 $mypassword = stripslashes($mypassword);
 $myusername = mysql_real_escape_string($myusername);
 $mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM users WHERE username='$myusername' and password='$mypassword'";
 $result=mysql_query($sql);



// Mysql_num_row is counting table row
 $count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION['myusername'] = $myusername;
$_SESSION['mypassword'] = $mypassword;
$info = mysql_fetch_array($result);
if($info['status'] == YES){
    header("location:admin.php?id=$myusername");
}
else
    header("location:homepage.php?id=$myusername");
}
else {
echo "Wrong Username or Password";

}
//$myusername = $_SESSION['myusername'];
 ?>


