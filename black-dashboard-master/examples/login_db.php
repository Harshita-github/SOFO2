<?php

$host='localhost';
$user='root';
$pass='';
$db='photo';

$con=mysqli_connect($host,$user,$pass,$db);
require_once 'functions.php';
if(isset($_POST['submit']))
{   
    $email=$_POST["email"];
    $password=$_POST["psw"];

if(emptyInputLogin($email,$password) !=false)
{
    header("location:loginPage.php?error=emptyinput");
    exit();
}

$query="SELECT password FROM userdata WHERE email='$email' ";
$rs=mysqli_query($con,$query);
while($row = $rs->fetch_assoc()) {
               $pwd=$row["password"];
  }
 if( $pwd == $password)
 {
session_start();
$_SESSION["email"]=$email;
$_SESSION["psw"]=$password;
$email=$_SESSION['email'];
$query="SELECT * FROM formdata WHERE email='$email'";
$rs=mysqli_query($con,$query);
while($row = $rs->fetch_assoc()) {
               $ques1=$row["ques1"];
  }
  echo "$ques1";
  if($ques1 !=NULL)
  {
    header("location: dashboard.html");
    exit();
  }
  else
  {
    header("location: Form.php");
    exit();
  }
//header("location: Form.php");
//exit();
  }
  else{
    if($pwd==NULL)
    {
      header("location: loginPage.php?error=wronguser");
      exit();
    }
    else
    {
    header("location: loginPage.php?error=wronglogin");
    exit();}
  }

}
else{
    header("location: loginPage.php");
    exit();
}
?>