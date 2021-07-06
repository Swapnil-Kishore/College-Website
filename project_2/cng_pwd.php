<?php
include_once("connection-pdo.php");


        $username=$_REQUEST['username'];
        $cpassword=$_REQUEST['cpassword'];
        $npassword=$_REQUEST['npassword'];
        $rnpassword=$_REQUEST['rnpassword'];
        if($npassword===$rnpassword)
        {
        $sql ="UPDATE `register` SET `pswd`='$npassword' WHERE `username`='$username' AND `pswd`='$cpassword' ";
        $query  = $pdoconn->prepare($sql);
        $query->execute();
        $sql = "SELECT * FROM register WHERE username='$username' AND pswd='$npassword'";       

        $query  = $pdoconn->prepare($sql);
        $query->execute();
        $count=$query->rowCount();

        if($count>0)
            echo 'PASSWORD CHANGED SUCCESSFULLY. Go Back and login with new password';
        else
            echo 'INCORRECT USERNAME OR PASSWORD';
        }
        else
            echo 'THE PASSWORDS DO NOT MATCH';
?>
