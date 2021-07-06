<?php
include_once("connection-pdo.php");

if(isset($_POST['login']))
{
    if(empty($_POST['username']) || empty($_POST['password']))
    {
        $message='ALL FIELDS ARE REQUIRED.';
    }
    else
    {

        $sql = "SELECT * FROM `register` WHERE username=:username AND pswd=:password";

        $query  = $pdoconn->prepare($sql);
        $query->execute(
            array(
                'username'=>$_POST["username"],
                'password'=>$_POST["password"]
            )
        );
        $arr_login=$query->fetchAll(PDO::FETCH_ASSOC);
        $temp_password='';
        foreach($arr_login as $val)
        {
           $rpswd= $val['rpswd'];
           $pswd=$val['pswd'];

        }
        $count=$query->rowCount();
        if($count>0)
        { 
            if($pswd===$rpswd)
            header('location: change.php');
            else
            header('location: BS3/home.html');
        }
        else
        {
            $message='WRONG USERNAME OR PASSWORD';
        }



    }
}


?>

<!DOCTYPE html>
<html>
<head>
<title>KGEC | Student Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="KgecLogo.png" type="image">
<body>
    <div class="loginbox">
    <img src="logo.png" class="avatar">
        <h1>Login Here</h1>
        <?php
        if(isset($message))
        {
            echo '<h1 style="font-size: 14px; color: #f1f1f1; font-family: "Arial Hebrew", Arial, sans-serif;">'.$message.'</h1>';
        }
        ?>
        <form method="POST" action="">
            <p>Username</p>
            <input type="text" id="username" name="username" placeholder="Enter Username"/>
            <p>Password</p>
            <input type="password" id="password" name="password" placeholder="Enter Password"/>
            <input type="submit" name="login" value="Login"/>
            <a href="#">Lost your password?</a><br>
            <a href="index.html">Don't have an account?</a>
        </form>
        
    </div>

</body>
</head>
</html>