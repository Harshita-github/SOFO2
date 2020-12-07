<?php
$folder="uploads/";

if(is_dir($folder))
{  // echo "sucessful";
    if($open=opendir($folder))
    {
        while(($file=readdir($open) !=false))
        {   //echo "sucesssful  ";
            if($file=='.' || $file=="..") continue;

            echo '<img src="uploads/'.$file.'"width="150" height=150>';
        }
    }
    closedir($open);
}
?>