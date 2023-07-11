<?php
session_start();
include_once('comm/connection.php');
//Start register section controller-------------------------
if(isset($_POST['register'])){
	$username= $_REQUEST['username'];
	$email= $_REQUEST['email'];
	$password= $_REQUEST['password'];
	$destination = $_FILES['img']['name'];
$filetemp = $_FILES['img']['tmp_name'];
$img_location = "img/".date('Y-m-d-h-m-s').uniqid().str_replace(" ","-",$destination);
	move_uploaded_file($filetemp,$img_location);
	$insert_data="INSERT INTO admin_register(username,email,password,image)VALUES('$username','$email','$password','$img_location')";
	$insert_sql=mysqli_query($con,$insert_data);
	if(!$insert_sql){
		die("data cannot inserted!".mysqli_error($insert_sql));
	}else{
		header("location:login.php");
	}
}
//start login section controller--------------------.

	
if(isset($_POST['login'])){
	$uemail= $_REQUEST['uemail'];
	$upassword= $_REQUEST['password'];
	
if($uemail && $upassword){
	$sql="SELECT * FROM admin_register WHERE email='$uemail'";
	$insert_sql=mysqli_query($con,$sql);
	$data = mysqli_fetch_assoc($insert_sql);
	$getemail = $data['email'];
	$getpassword = $data['password'];
	if($uemail == $getemail && $upassword == $getpassword){
		$user_name = $_SESSION['username'] = $data['username'];
		$user_pic = $_SESSION['img'] = $data['image'];
		$msg=
		header("location:index.php");
		
	}
	else
	{
		header('location:login.php?msg=your email or password not match!');
	}
}
	}

//----------------------------------------------------------------------
// above in the php script:

 












//-----------------------------------------------------------------------
//Start Profile section controller-------------------------
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
$img_location = "img/".date('Y-m-d-h-m-s').uniqid().str_replace(" ","-",$destination);
	move_uploaded_file($filetemp,$img_location);
	$title= $_POST['title'];
	$pname= $_POST['pname'];
	$details= $_POST['details'];
	$signature= $_POST['signature'];
	$link1= $_POST['link1'];
	$link2= $_POST['link2'];
	$link3= $_POST['link3'];
	$link4= $_POST['link4'];
	$link5= $_POST['link5'];
	$insert_data = "INSERT INTO profile(Name,birth,Nationality,Address,Phone,Email,Image,Title,ProfileName,Details,Signature,Facebook,Twitter,Google_plus,LinkedIN,Pinterest) VALUES ('$name','$birth','$nationality','$address','$phone','$email','$img_location','$title','$pname','$details','$signature','$link1','$link2','$link3','$link4','$link5')";
$insert_sql=mysqli_query($con,$insert_data);
	if(!$insert_sql)
	{
		die("data cannot inserted!".mysqli_error($insert_sql));
	}
	else
	{
		header("location:manage_profile.php");
	}
	mysqli_close($con);
}
//start Profile update section controller---------------
if(isset($_POST['Update_profile_submit']))
{
	$pro_id=$_REQUEST['pro_id'];
	$name= $_POST['name'];
	$birth= $_POST['birth'];
	$nationality= $_POST['nationality'];
	$address= $_POST['address'];
	$phone= $_POST['phone'];
	$email= $_POST['email'];
	$destination = $_FILES['img']['name'];
$filetemp = $_FILES['img']['tmp_name'];
$img_location = "img/".date('Y-m-d-h-m-s').uniqid().str_replace(" ","-",$destination);
	move_uploaded_file($filetemp,$img_location);
	$title= $_POST['title'];
	$pname = $_POST['pname'];
	$details= $_POST['details'];
	$signature= $_POST['signature'];
	$link1= $_POST['link1'];
	$link2= $_POST['link2'];
	$link3= $_POST['link3'];
	$link4= $_POST['link4'];
	$link5= $_POST['link5'];
	$insert_data = "UPDATE profile SET Name='$name',birth='$birth',Nationality='$nationality',Address='$address',Phone='$phone',Email='$email',Image='$img_location',Title='$title',ProfileName='$pname',Details='$details',Signature='$signature',Facebook='$link1',Twitter='$link2',Google_plus='$link3',LinkedIN='$link4',Pinterest='$link5' WHERE id=$pro_id";
$insert_sql=mysqli_query($con,$insert_data);
	if(!$insert_sql)
	{
		die("data cannot inserted!".mysqli_error($insert_sql));
	}
	else
	{
		header("location:manage_profile.php");
	}
	mysqli_close($con);
}
//end Profile section controle------------------------
// start Protfolio Controller---------------
if(isset($_POST['portfolio_submit'])){
	
	$catagary= $_REQUEST['catagary'];
	$link= $_REQUEST['link'];
	$destination = $_FILES['img']['name'];
$filetemp = $_FILES['img']['tmp_name'];
$img_location = "img/".date('Y-m-d-h-m-s').uniqid().str_replace(" ","-",$destination);
	move_uploaded_file($filetemp,$img_location);
	$insert_data="INSERT INTO portfolio(section,link,image)VALUES('$catagary','$link','$img_location')";
	$insert_sql=mysqli_query($con,$insert_data);
	if(!$insert_sql){
		die("data cannot inserted!".mysqli_error($insert_sql));
	}else{
		header("location:manage_Portfolio.php");
	}
}
// start Protfolio update Controller---------------
if(isset($_POST['portfolio_update_submit'])){
	$portfolio_id=$_REQUEST['portfolio_id'];
	$catagary= $_REQUEST['catagary'];
	$link= $_REQUEST['link'];
	
	$destination = $_FILES['img']['name'];
$filetemp = $_FILES['img']['tmp_name'];
$img_location = "img/".date('Y-m-d-h-m-s').uniqid().str_replace(" ","-",$destination);
	move_uploaded_file($filetemp,$img_location);
	
	$insert_data="UPDATE portfolio SET section='$catagary',link='$link',image='$img_location' WHERE id=$portfolio_id";
	$insert_sql=mysqli_query($con,$insert_data);
	if(!$insert_sql){
		die("data cannot inserted!".mysqli_error($succ));
	}else{
		header("location:manage_Portfolio.php");
	}
}
// End Protfolio Controller---------------
//Start Skill Achievement-----------
if(isset($_POST['skill_update_submit'])){
	$skill_id=$_REQUEST['skill_id'];
	$skillname= $_REQUEST['skillname'];
	$SuccessRate= $_REQUEST['SuccessRate'];
	$insert_data="UPDATE skill_achievement SET SkillName='$skillname',SuccessRate='$SuccessRate' WHERE id=$skill_id ";
	$insert_sql=mysqli_query($con,$insert_data);
	if(!$insert_sql){
		echo"data not added";
	}else{
		header("location:manage_Portfolio.php");
	}
}
//Start update Skill Achievement-----------
if(isset($_POST['skill_submit'])){
	
	$skillname= $_REQUEST['skillname'];
	$SuccessRate= $_REQUEST['SuccessRate'];
	$insert_data="INSERT INTO skill_achievement(SkillName,SuccessRate) VALUES ('$skillname','$SuccessRate')";
	$insert_sql=mysqli_query($con,$insert_data);
	if(!$insert_sql){
		echo"data not added";
	}else{
		header("location:manage_skill.php");
	}
}
//End Skill Achievement-----------
//Start Work Experience-----------
if(isset($_POST['work_submit'])){
	
	$WorkNames= $_REQUEST['WorkNames'];
	$Period= $_REQUEST['Period'];
	$Projectcomplete= $_REQUEST['Projectcomplete'];
	$WorkingHoure= $_REQUEST['WorkingHoure'];
	$insert_data="INSERT INTO work_experience(WorkNames,Period,Projectcomplete,WorkingHoure
)VALUES('$WorkNames','$Period','$Projectcomplete','$WorkingHoure')";
	$insert_sql=mysqli_query($con,$insert_data);
	if(!$insert_sql){
		echo"data not added";
	}else{
		header("location:manage_work.php");
	}
}
//Start Update Work Experience-----------
if(isset($_POST['work_update_submit'])){
	$con_id=$_REQUEST['work_id'];
	$WorkNames= $_REQUEST['WorkNames'];
	$Period= $_REQUEST['Period'];
	$Projectcomplete= $_REQUEST['Projectcomplete'];
	$WorkingHoure= $_REQUEST['WorkingHoure'];
	$insert_data="UPDATE work_experience SET WorkNames='$WorkNames',Period='$Period',Projectcomplete='$Projectcomplete',WorkingHoure='$WorkingHoure' WHERE id=$con_id";
	$insert_sql=mysqli_query($con,$insert_data);
	if(!$insert_sql){
		echo"data not added";
	}else{
		header("location:manage_work.php");
	}
}
//End Work Experience-----------
//Start Education ---------
if(isset($_POST['education_submit']))
{
	$place= $_POST['place'];
	$category= $_POST['category'];
	$year= $_POST['year'];
	$details= $_POST['details'];
	$destination = $_FILES['img']['name'];
$filetemp = $_FILES['img']['tmp_name'];
$img_location = "img/".date('Y-m-d-h-m-s').uniqid().str_replace(" ","-",$destination);
	move_uploaded_file($filetemp,$img_location);
	
	$succ = mysqli_query($con,"INSERT INTO education(Institute,Department,Session,Details,InstituteLogo) VALUES ('$place','$category','$year','$details','$img_location')");
	if(!$succ)
	{
		echo"data not added";
	}
	else
	{
		header("location:manage_education.php");
	}
	mysqli_close($con);
}
//Start Update Education ---------
if(isset($_POST['education_update_submit']))
{
	$edu_id=$_REQUEST['edu_id'];
	$place= $_POST['place'];
	$category= $_POST['category'];
	$year= $_POST['year'];
	$details= $_POST['details'];
	$destination = $_FILES['img']['name'];
$filetemp = $_FILES['img']['tmp_name'];
$img_location = "img/".date('Y-m-d-h-m-s').uniqid().str_replace(" ","-",$destination);
	move_uploaded_file($filetemp,$img_location);
	
	$succ = mysqli_query($con,"UPDATE education SET Institute='$place',Department='$category',Session='$year',Details='$details',InstituteLogo='$img_location'  WHERE id=$edu_id");
	if(!$succ)
	{
		die("data cannot inserted!".mysqli_error($succ));
	}
	else
	{
		header("location:manage_education.php");
	}
	mysqli_close($con);
}
//End Education ---------
//Start My Blog ---------
if(isset($_POST['blog_submit'])){
	$ulogin=$_SESSION['username'];
	$heading= $_REQUEST['heading'];
	$Postdetail= $_REQUEST['Postdetail'];
	date_default_timezone_set("Asia/Dhaka");
	$date=date("d-M-Y");
	$destination = $_FILES['img']['name'];
$filetemp = $_FILES['img']['tmp_name'];
$img_location = "img/".date('Y-m-d-h-m-s').uniqid().str_replace(" ","-",$destination);
	move_uploaded_file($filetemp,$img_location);
	
	$insert_data="INSERT INTO my_blog(profile_name,heading,date_time,postdetail,image)VALUES('$ulogin','$heading','$date','$Postdetail','$img_location')";
	$insert_sql=mysqli_query($con,$insert_data);
	if(!$insert_sql){
		echo"data not added";
	}else{
		header("location:manage_blog.php");
	}
}
//Start Updte My Blog ---------
if(isset($_POST['blog_update_submit'])){
	$blog_id=$_REQUEST['blog_id'];
	$heading= $_REQUEST['heading'];
	$Postdetail= $_REQUEST['Postdetail'];
	date_default_timezone_set("Asia/Dhaka");
	$date=date("d-M-Y");
	$destination = $_FILES['img']['name'];
$filetemp = $_FILES['img']['tmp_name'];
$img_location = "img/".date('Y-m-d-h-m-s').uniqid().str_replace(" ","-",$destination);
	move_uploaded_file($filetemp,$img_location);
	
	$insert_data="UPDATE my_blog SET heading='$heading',postdetail='$Postdetail',image='$img_location' WHERE id=$blog_id";
	$insert_sql=mysqli_query($con,$insert_data);
	if(!$insert_sql){
		echo"data not added";
	}else{
		header("location:manage_blog.php");
	}
}
//End  My Blog ---------
//Start Address-------------
if(isset($_POST['submit'])){
	
	$phone= $_REQUEST['phone'];
	$email= $_REQUEST['email'];
	$address= $_REQUEST['address'];
	$website= $_REQUEST['website'];
	$insert_data="INSERT INTO contact(phone,email,address,website)VALUES('$phone','$email','$address','$website')";
	$insert_sql=mysqli_query($con,$insert_data);
	if(!$insert_sql){
		echo"data not added";
	}else{
		header("location:manage_address.php");
	}
}
//Start Update Address-------------
if(isset($_POST['contact_update_submit'])){
	$con_id=$_REQUEST['con_id'];
	$phone= $_REQUEST['phone'];
	$email= $_REQUEST['email'];
	$address= $_REQUEST['address'];
	$website= $_REQUEST['website'];
	$insert_data="UPDATE contact SET phone='$phone',email='$email',address='$address',website='$website' WHERE id=$con_id ";
	$insert_sql=mysqli_query($con,$insert_data);
	if(!$insert_sql){
		echo"data not added";
	}else{
		header("location:manage_address.php");
	}
}
//End Address-------------
//Start Contact Us Section---------------
if(isset($_POST['contactus_submit'])){
	$your_name=$_REQUEST['your_name'];
	$email= $_REQUEST['email'];
	$company_name= $_REQUEST['company_name'];
	$message= $_REQUEST['message'];
	
	$insert_data="INSERT INTO contact_us(your_name,email,company_name,Message) VALUES ('$your_name','$email','$company_name','$message') ";
	$insert_sql=mysqli_query($con,$insert_data);
	if(!$insert_sql){
		echo"Massage Not Send";
	}else{
		header("location:../resume-horizontal.php");
	}
}
?>