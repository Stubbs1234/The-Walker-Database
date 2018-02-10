<?php
$host="localhost";  
$username="root";  
$password="root";
$db_name="walkers";  
$tbl_name="users"; 
$tbl_name2="walks";
$tbl_name3="events";

 mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
 mysql_select_db("$db_name")or die("cannot select DB");
 ?>