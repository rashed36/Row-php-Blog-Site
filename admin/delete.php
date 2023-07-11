<?php
// DataBase Connection-----
include 'comm/connection.php';

// Delete Profile --------
if(isset($_REQUEST['profile_id'])){
$id=$_REQUEST['profile_id'];
$q =mysqli_query($con,"DELETE FROM profile WHERE id =$id");
mysqli_query($con,$q);
header('location:manage_profile.php');
}

//delete Protfolio
if(isset($_REQUEST['portfolio_id'])){
$id=$_REQUEST['portfolio_id'];
$q =mysqli_query($con,"DELETE FROM portfolio WHERE id =$id");
mysqli_query($con,$q);
header('location:manage_Portfolio.php');
}

// Delete Skill----------
if(isset($_REQUEST['skill_id'])){
$id=$_REQUEST['skill_id'];
$q =mysqli_query($con,"DELETE FROM skill_achievement WHERE id =$id");
mysqli_query($con,$q);
header('location:manage_skill.php');
}

// Delete Work Exprince-------
if(isset($_REQUEST['work_id'])){
$id=$_REQUEST['work_id'];
$q =mysqli_query($con,"DELETE FROM work_experience WHERE id =$id");
mysqli_query($con,$q);
header('location:manage_work.php');
}

// Delete Education------
if(isset($_REQUEST['education_id'])){
$id=$_REQUEST['education_id'];
$q =mysqli_query($con,"DELETE FROM education WHERE id =$id");
mysqli_query($con,$q);
header('location:manage_education.php');
}

// delete my Blog--------
if(isset($_REQUEST['blog_id'])){
$id=$_REQUEST['blog_id'];
$q =mysqli_query($con,"DELETE FROM my_blog WHERE id =$id");
mysqli_query($con,$q);
header('location:manage_blog.php');
}

// Delete Contact-------------
if(isset($_REQUEST['contact_id'])){
$id=$_REQUEST['contact_id'];
$q =mysqli_query($con,"DELETE FROM contact WHERE id =$id");
mysqli_query($con,$q);
header('location:manage_address.php');
}


?>