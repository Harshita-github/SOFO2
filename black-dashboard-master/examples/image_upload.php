<?php
session_start();
$host='localhost';
$user='root';
$pass='';
$db='photo';

$con=mysqli_connect($host,$user,$pass,$db);

if(isset($_POST['submit']))
{
    $file=$_FILES["file"];
    $fileName=$_FILES['file']['name'];
    $fileTmpName=$_FILES['file']['tmp_name'];
    $fileSize=$_FILES['file']['size'];
    $fileError=$_FILES['file']['error'];
    $fileType=$_FILES['file']['type'];

    $fileExt=explode('.',$fileName);
    $fileActualExt=strtolower(end($fileExt));

    $allowed=array('jpg','jpeg','png','pdf');
    $email=$_SESSION["email"];
    if(in_array($fileActualExt,$allowed))
    {
        if($fileError===0)
        {
            if($fileSize <1000000)
            {
               $fileNameNew=uniqid('',true).".".$fileActualExt;
               $sql=" INSERT INTO image (email,Filename,file) VALUES ('$email','$fileNameNew','$fileName')";
               $query=mysqli_query($con,$sql);
               if($query)
                echo 'data inserted sucessful';
               $fileDestination='uploads/'.$fileNameNew;
               move_uploaded_file($fileTmpName,$fileDestination);
               header("location :tables.php?upload=sucess");

            }
            else{
                echo "Your file is too big!!";
            }
        }
        else{
            echo " there was an error";
        }
    }
    else{
        echo "You can't upload of file this type";
    }
}