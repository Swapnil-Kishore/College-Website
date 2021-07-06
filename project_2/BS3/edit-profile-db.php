<?php
include_once("connection-pdo.php");

$roll=$_REQUEST['roll'];
$regno=$_REQUEST['regno'];
$fname=$_REQUEST['fname'];
$mname=$_REQUEST['mname'];
$lname=$_REQUEST['lname'];
$dob=$_REQUEST['dob'];
$bgrp=$_REQUEST['bgrp'];
$sex=$_REQUEST['sex'];
$sname=$_REQUEST['sname'];
$percent=$_REQUEST['percent'];
$ssname=$_REQUEST['ssname'];
$spercent=$_REQUEST['spercent'];
$course=$_REQUEST['course'];
$stream=$_REQUEST['stream'];
$semester=$_REQUEST['semester'];
$phno=$_REQUEST['phno'];
$email=$_REQUEST['email'];
$address=$_REQUEST['address'];

$sql = "INSERT INTO `profile`(`roll`, `regno`, `fname`, `mname`, `lname`, `dob`, `bgrp`, `sex`, `sname`, `percent`, `ssname`, `spercent`, `course`, `stream`, `semester`, `phno`, `email`, `address`) VALUES ('$roll','$regno','$fname','$mname','$lname','$dob','$bgrp','$sex','$sname','$percent','$ssname','$spercent','$course','$stream','$semester','$phno','$email','$address')";
$query  = $pdoconn->prepare($sql);
$query->execute();
$count=$query->rowCount();
if($count>0)
echo 'Successfully edited';
else
echo 'Could not edit';

?>

