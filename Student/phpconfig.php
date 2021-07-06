<?php 
session_start();

if(@$_SESSION['st_user'])
{
	header("location:student/home.php");
}
 include "setting/config.php";
if(isset($_POST['student_signin']))
{
 $st_username = $_POST['st_username'];
	
	$st_password = $_POST['st_password']; 
	
	if($st_username=="" || $st_password=="")
	{
      echo "<script>alert('Please Fill Properly');</script>";
	}
	 else
	 {
	$go = $ravi->student_login_check($st_username,$st_password);
	if($go==1)
	{
		$_SESSION['st_user'] = $st_username;
		header("location:student/home.php");
	}
	else
	{
		echo "<script>alert('login failed');</script>";
	}
	 }
	
}

?>