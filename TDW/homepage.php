<?php
session_start(); // Right at the top of your script
if (!isset($_SESSION['myusername'])) {
  header('Location: login.html');
  exit; 
}
?>

<html>
<head>
<head>
<title>The Walkers Database</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<!--height="50" Width="80"-->
<div id="container">
<div id="head">
<div class="imagehead1"><img src="images/logo1 copy.png"></div>
<!--<div class="logoutbut"><form method="get" action="logout.html" style="width:100px"><button type="submit">log Out</button></form><div>
<div class="logname">--><?php
include 'database.php';




$query="SELECT * FROM users WHERE username = '".$_SESSION['myusername']."'";
$result=mysql_query($query)or die(mysql_error());

while($user=mysql_fetch_array($result))
{

echo $user['org'];

}?>
<div class="imagehead"><a class="button" href="walks.php">Walks</a></div>
<div class="imagehead"><a class="button" href="events.php?org=$user[org]">Events</a></div>
<div class="imagehead"><a class="button" href="edity.php">Edit Your Account</a></div>
</div>
<!--</div>-->
</div>
<div id="bar">




</div>
<div id="nav">
<?php
include 'database.php';




$query="SELECT * FROM users WHERE username = '".$_SESSION['myusername']."'";
$result=mysql_query($query)or die(mysql_error());

while($user=mysql_fetch_array($result))
{

echo "Here are the files that have been upload from your users at ".$user['org'];
echo "<a href='events.php?org=$user[org]'>Event</a>";

}
mysql_close();
$Username = $_SESSION['myusername'];
$_SESSION['username'] = $Username;
/*if(isset($_GET['id'])){
echo 'Welcome to KeepIt '.$_GET['id'];
}else {
echo '(write) a 404 page';
}*/
?>
<form method="get" action="file.html">
    <button type="submit">Upload Files</button>
    </form>
<!--<?php
if ($handle = opendir('upload/')) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            echo "<a href=\"uploads/$entry\">$entry</a><br>";
        }
    }
    closedir($handle);
}  
?>-->
<a href="sigup.php">signup</a>
<!--<a href="walks.php">walks</a>-->


</div>
</div>
</body>
</html>