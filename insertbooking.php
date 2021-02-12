<?php
include 'datasource.php';
$packgname=$_POST['pckgname'];
$cname=$_POST['cname'];
$email=$_POST['email'];
$Contact=$_POST['cont'];
$date=$_POST['date'];
//$dep=$_POST['dep'];
//$Address=$_POST['Address'];
//$date=$_POST['jdate'];
$sql="INSERT INTO `starresort`.`booking` (`id`, `cname`, `pckgname`, `email`, `con`, `date`) VALUES (NULL, '$packgname', '$cname', '$email', '$Contact','$date')";
echo $sql;
if($empmgt->query($sql)==TRUE){
    header("Location:thankpage.php");
    echo "Insert successfully";
}
else{
    echo "Error:" . $query ."<br>" .$empmgt->error;
}       