<?php
include 'datasource.php';
$packgname=$_POST['packagename'];
$cost=$_POST['cost'];
$cat=$_POST['cat'];
//$email=$_POST['email'];
//$Contact=$_POST['cont'];
//$dep=$_POST['dep'];
//$Address=$_POST['Address'];
//$date=$_POST['jdate'];
$sql="INSERT INTO `starresort`.`package_tbl` (`p_id`, `p_name`, `p_cost`,`cat`) VALUES (NULL, '$packgname', '$cost','$cat')";
//echo $sql;
if($empmgt->query($sql)==TRUE){
//    header("Location:thankpage.php");
    echo "Insert successfully";
}
else{
    echo "Error:" . $query ."<br>" .$empmgt->error;
}       