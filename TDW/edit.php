<?php
session_start();
?>
<html>
<head>
<title>Edit User</title>
</head>
<body>
<?php
include 'database.php';
if( isset($_GET['edit']) )
	{
		$id = $_GET['edit'];
		$res= mysql_query("SELECT * FROM users WHERE id='$id'");
		$row= mysql_fetch_array($res);
	}

if (isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $status = $_POST['status'];
    $org = $_POST['org'];
    $email = $_POST['email'];
    $create = $_POST['created_by'];
		$sql     = "UPDATE `users` SET `id`=$id,`firstname`=$firstname,`lastname`=$lastname,`username`=$username,`password`=$password,`status`=$status,`org`=$org,`email`=$email,`created_by`=$create WHERE 'id' = $id";
		//"UPDATE`users` SET (firstname, lastname, username, password, status, company, email, created_by) VALUES ('$firstname','$lastname','$username','$password','$status','$company','$email','$create') WHERE 'username'='$id'";
		//UPDATE users SET 'firstname'=$firstname, 'lastname'='$lastname', username='$username', password='$password', status='$status', company='$company', email='$email', created_by='$create' WHERE 'id' ='$id'";
		//"UPDATE `users` SET `id`=$id,`firstname`=$firstname,`lastname`=$lastname,`username`=$username,`password`=$password,`status`=$status,`company`=$company,`email`=$email,`created_by`=$create WHERE 'id' = $id"
		$res = mysql_query($sql) 
                                    or die("Could not update".mysql_error());}
		/*if ($row)
{
    echo "error";

}
else
{
    echo "succes";
	}*/
 
?>

<form action="edit.php" method="POST">
<p name="id">ID Number:<?php echo $row[id]; ?></p>
<p>Firstname:<input type="text" name="firstname" value="<?php echo $row[firstname]; ?>"><br></p>
<p>Lastname:<input type="text" name="lastname" value="<?php echo $row[lastname]; ?>"><br></p>
<p>Username:<input type="text" name="username" value="<?php echo $row[username]; ?>"><br></p>
<p>Password:<input type="password" name="password" value="<?php echo $row[password]; ?>"><br></p>
<p>Admin:<input type="text" name="status" value="<?php echo $row[status]; ?>"><br></p>
<p>Company:<input type="text" name="company" value="<?php echo $row[company]; ?>"><br></p>
<p>Email:<input type="text" name="email" value="<?php echo $row[email]; ?>"><br></p>
<p>Created By:<input type="text" name="created_by" value="<?php echo $row[created_by]; ?>"><br></p>
<input type="submit" name="submit" value="Update"/>
</form>
<!--"UPDATE `users` SET firstname=[$firstname],lastname=[value-3],`username`=[value-4],`password`=[value-5],`status`=[value-6],`company`=[value-7],`email`=[value-8],`created_by`=[value-9] WHERE 'id' = '$id'"-->
</body>
</html>
