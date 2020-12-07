<?php
function emptyInputLogin($email, $password)
{
   
$result;
if(empty($email) || empty($password))
{
    $result=true;
}
else{
    $result=false;
}
return $result;


}

?>