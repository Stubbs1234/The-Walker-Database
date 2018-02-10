<?php
include 'database.php';
if( isset($_GET['delete']) )
	{
		$id = $_GET['delete'];
		$delete = mysql_query("DELETE FROM users WHERE id = '$id'");
		$del = mysql_query($delete);

	}

if ($del)
{
    echo "error";

}
else
{
    echo "succes";
    // close connection 
    mysql_close();
}
?>
