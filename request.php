<?php
$host='localhost';
$user='root';
$pass='';
$db='photo';

$con=mysqli_connect($host,$user,$pass,$db);
echo"sucessful";

if (isset($_POST["reset_pwd"]))
{
    $userEmail=$_POST["email"];
    $query="SELECT password FROM userdata WHERE email='$userEmail' ";
$rs=mysqli_query($con,$query);
while($row = $rs->fetch_assoc()) {
               $pwd=$row["password"];
  }
  
   /* $to =$userEmail;
    $subject ='PASSWORD';
    $message ='<p> Your passowrd is </p';
    $message .='.$pwd.';
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .="From: <softwareinformation12@gmail.com>"."\r\n";
   // $headers .="Reply-To:samridhimangla4@gmail.com .\r\n";
    //$headers .="Content-type:text/html"."\r\n";
    mail($to,$subject,$message,$headers);*/

    //header("Location:forgot_pwd.php?reset=sucess");
$to_email = 'samridhimangla13@gmail.com';
$subject = "Simple Email Test via PHP";
$body = "Hi,nn This is test email send by PHP Script";
$headers = "From: <softwareinformation12@gmail.com>"."\r\n";
 
if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}

}



?>