<?php
//database connection.....
include_once('connection/connection.php');
//insert profile value.....
if(isset($_POST['profile_submit']))
{
	$name= $_POST['name'];
	$birth= $_POST['birth'];
	$nationality= $_POST['nationality'];
	$address= $_POST['address'];
	$phone= $_POST['phone'];
	$email= $_POST['email'];
	$destination = $_FILES['img']['name'];
	$filetemp = $_FILES['img']['tmp_name'];
	$title= $_POST['title'];
	$pname= $_POST['pname'];
	$details= $_POST['details'];
	$signature= $_POST['signature'];
	$link1= $_POST['link1'];
	$link2= $_POST['link2'];
	$link3= $_POST['link3'];
	$link4= $_POST['link4'];
	$link5= $_POST['link5'];
profile_submit($name,$birth,$nationality,$address,$phone,$email,$destination,$filetemp,$title,$pname,$details,$signature,$link1,$link2,$link3,$link4,$link5);
}
function profile_submit($name,$birth,$nationality,$address,$phone,$email,$destination,$filetemp,$title,$pname,$details,$signature,$link1,$link2,$link3,$link4,$link5)
{
	$img_location = "img/".date('Y-m-d-h-m-s').uniqid().str_replace(" ","-",$destination);
	move_uploaded_file($filetemp,$img_location);
	$insert_data = "INSERT INTO profile(Name,birth,Nationality,Address,Phone,Email,Image,Title,ProfileName,Details,Signature,Facebook,Twitter,Google_plus,LinkedIN,Pinterest) VALUES ('$name','$birth','$nationality','$address','$phone','$email','$img_location','$title','$pname','$details','$signature','$link1','$link2','$link3','$link4','$link5')";
	global $con;
    $insert_sql=mysqli_query($con,$insert_data);
	if(!$insert_sql)
	{
		die("data cannot inserted!".mysqli_error($insert_sql));
	}
	else
	{
		header("location:table.php");
	}
	mysqli_close($con);
}
?>