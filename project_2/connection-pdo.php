<?php
include_once "config.php";

try {
    $pdoconn = new PDO("mysql:host=$host; dbname=$database", $user, $pwd);

}
catch(PDOException $e)
{
    die("Can not access DB ".$database.", ".$e->getMessage());
}
?>


