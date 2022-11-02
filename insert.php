<?php

define("servename","localhost");
define("username","root");
define("password","");
define("db","iotdemodb");

$con = mysqli_connect(servename,username,password,db);


$temperature=$_GET['Temperature'];
$humidity=$_GET['Humidity'];
$groupName=$_GET['groupName'];

$sql = "INSERT INTO tempdata (Temperature,Humidity, groupName)
VALUES ('$temperature','$humidity', '$groupName')";

if (mysqli_query($con, $sql)) 
echo "New record created successfully";
?>