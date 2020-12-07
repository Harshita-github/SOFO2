<?php
$host='localhost';
$user='root';
$pass='';
$db='photo';

$con=mysqli_connect($host,$user,$pass,$db);
if($con)
echo 'conneted sucessfuly';
$email="samridhimangla13@gmail.com";
//$sql="insert into userdata (email,password) values ( 'samridhimangla13@gmail.com','mangla') ";
//$query=mysqli_query($con,$sql);
$sql="INSERT INTO formdata email values '$email'"; 
$query=mysqli_query($con,$sql);
if($query)
echo 'data inserted sucessful';
?>