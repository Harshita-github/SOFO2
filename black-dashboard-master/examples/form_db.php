<?php

session_start();
$host='localhost';
$user='root';
$pass='';
$db='photo';

$con=mysqli_connect($host,$user,$pass,$db);
if(isset($_POST['submit']))
{
    $email=$_SESSION['email'];
    $ques1=$_POST['Question1'];
    $ques2=$_POST['Question2'];
    $ques3=$_POST['Question3'];
    $ques4=$_POST['Question4'];
    $ques5=$_POST['Question5'];
    $ques6=$_POST['Question6'];
    $ques7=$_POST['Question7'];

$sql="UPDATE formdata SET ques1='$ques1', ques2='$ques2',ques3='$ques3',ques4='$ques4',ques5='$ques5',ques6='$ques6',ques7='$ques7' WHERE email='$email' ";
$query=mysqli_query($con,$sql);
if($query)
echo 'data inserted sucessful';

header("location:dashboard.html");
exit();


}

else
{
   header("location: loginPage.php");
    exit();
}







?>