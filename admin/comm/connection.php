<?php


     $servername='localhost';
     $username='root';
     $password='';
    $database='bdtask';

    $con = mysqli_connect($servername,$username,$password);
if(!$con)
{
	echo"not conected";
}
$sql = mysqli_select_db($con,"$database");
if(!$sql)
{
	echo"not selected db";
}

    
?>