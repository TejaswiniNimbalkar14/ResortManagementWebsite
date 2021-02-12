<?php

$servername="localhost";
$username="root";
$password="";
$dbname="starresort";

$empmgt = new mysqli($servername, $username, $password, $dbname );
if(!$empmgt)
{
    trigger_error('Could not connect to mysql:' .mysqli_connect_error());
}
 else
     {
   
     return $empmgt;
     echo 'connect';
 }

        


?>

