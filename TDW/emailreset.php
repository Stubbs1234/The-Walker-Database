<?php
$_GET['reset']
if($_POST['action']=="password")
{
    $email      = mysqli_real_escape_string($connection,$_POST['email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Validate email address
    {
        $message =  "Invalid email address please type a valid email!!";
    }
    else
    {
        $query = "SELECT id FROM users where email='".$email."'";
        $result = mysqli_query($connection,$query);
        $Results = mysqli_fetch_array($result);
 
        if(count($Results)>=1)
        {
            $message = "Your password reset link send to your e-mail address.";
            $to=$email;
            $subject="Forget Password";
            $from = 'info@phpgang.com';
            $body='Hi, <br/> <br/>Your Membership ID is '.$Results['id'].' <br><br>Click here to reset your password http://demo.phpgang.com/login-signup-in-php/reset.php?encrypt='.$encrypt.'&action=reset   <br/> <br/>--<br>PHPGang.com<br>Solve your problems.';
            $headers = "From: " . strip_tags($from) . "\r\n";
            $headers .= "Reply-To: ". strip_tags($from) . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
 
            mail($to,$subject,$body,$headers);
        }
        else
        {
            $message = "Account not found please signup now!!";
        }
    }
}
?>