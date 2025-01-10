<?php 
$server ="localhost";
$name ="root"
$email = "";
$messages = "";
$dbname ="CLASSIC VIBE";
$con = mysqli_connect($server, $name , $email , $messages , $dbname);

if(!$con)
{
    echo "not connected";
}

else
{
    echo"connected";
}
?>