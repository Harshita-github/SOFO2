<?php

/*
$con=mysqli_connect('localhost','root');
if($con)
{
    echo "Connection Sucessful;"
}
else
{
    echo " no Connection";
}
mysqli_select_db($con,'photo');*/

$host='localhost';
$user='root';
$pass='';
$db='photo';

$con=mysqli_connect($host,$user,$pass,$db);
//if($con)
//echo 'conneted sucessfuly';

$user_id=$_POST['uname'];
$password=$_POST['psw'];
$query="SELECT password FROM userdata WHERE email='$user_id' ";
$rs=mysqli_query($con,$query);
while($row = $rs->fetch_assoc()) {
               $pwd=$row["password"];
  }
if($pwd==$password)
{
    echo "login successful";
}
else{
    echo "Incorect Password !! TRY AGAIN";
}



?>