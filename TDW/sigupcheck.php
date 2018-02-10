<?php
include 'database.php';
function NewUser()
{
	$company = $_POST['company'];
	$userName = $_POST['username'];
	$admin = $_POST['admin'];
	$password =  $_POST['password'];
	$email = $_POST ['email'];
	$firstname = $_POST ['firstname'];
	$lastname = $_POST ['lastname'];
	$create = $_POST ['create']; 
	$youremail = $_POST ['yourmail'];
	//INSERT  ([value-1],[value-2],[value-3],[value-4],[value-5])
	$query = "INSERT INTO `users`(`firstname`, `lastname`, `username`, `password`, `status`, `company`, `email`, `created_by`) VALUES ('$firstname','$lastname','$userName','$password','$admin','$company','$email','$create')";
	$data = mysql_query ($query)or die(mysql_error());
	if($data)
	{
	echo "YOUR REGISTRATION IS COMPLETED...";
	}
}

function SignUp()
{
if(!empty($_POST['username']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
{
	$query = mysql_query("SELECT * FROM users WHERE username = '$_POST[username]' AND password = '$_POST[passassword]'") or die(mysql_error());

	if(!$row = mysql_fetch_array($query) or die(mysql_error()))
	{
		newuser();
	}
	else
	{
		echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
	}
}
}
if(isset($_POST['submit']))
{
	SignUp();
}

// send e-mail to ...
$to=$email;

// Your subject
$subject= $create ."As created you an account on KeepIt";

// From
$header= $youremail;

// Your message
$message = "A warm welcome from KeepIt

Your account as been created by $create

You can now login to your account at KeepIt

login using your username and password that has been account by $create

Username: $userName
Password: $password

Please ask your account creater if they can change the your password using this email address: mailto:$youremail

Thanks
KeepIt
";
// send email
$sentmail = mail($to,$subject,$header,$message);

// if not found 
/*else {
echo "Not found your email in our database";
}*/

// if your email succesfully sent
if($sentmail){
echo "Account detail has been sent to" .$firstname;
}
else {
echo "Account details has not been sent to $firstname Please email the account details using your email server client";
}
//SELECT `username`, `password`, `status`, `company`, `email` FROM `users` WHERE 1
?>
