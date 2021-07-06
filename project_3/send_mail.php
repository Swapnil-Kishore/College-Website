 <?php
include_once("connection-pdo.php");

$charset="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvxy0123456789";
$ranpwd=substr(str_shuffle($charset), 0,6);

    $username = $_POST['username'];
    $email = $_POST['email'];


    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        echo "Invalid email id. Please give correct email id";
    }

else{
   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;   //Authetication
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "kabirpreeti22@gmail.com";
   $mail ->Password = "Qwerty!@#123";
   $mail ->SetFrom("kabirpreeti22@gmail.com");
   $mail ->Subject = "DO NOT REPLY";
   $mail ->Body = "Your current password for username " .$username." is ".$ranpwd;
   $mail ->AddAddress($email);

   if(!$mail->Send())
   {
       echo "Mail Cannot Be Sent";
   }
   else
   {
       echo "Password has been sent to your email id . Try logging in with your username and password";

       $sql = "INSERT INTO register(username,email,rpswd,pswd) VALUE('$username','$email','$ranpwd','$ranpwd')";
       $query  = $pdoconn->prepare($sql);
       $query->execute();
   }
}
   //Go to xampp->php->php Configuration file->php_openssl.dll, remove the ;

?>






   

