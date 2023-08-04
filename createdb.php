<?php
$servername="localhost";
$username="root";
$password="";
$database="aryandb2";
$conn=mysqli_connect($servername,$username,$password,$database);
$sql="CREATE TABLE IF NOT EXISTS `info1`(`yourname` VARCHAR(30) NOT NULL  ,`youremail` VARCHAR(40) NOT NULL ,`yourpass` VARCHAR(20) NOT NULL)";
$result=mysqli_query($conn,$sql);
mysqli_close($conn);
echo("hi");
?>