<?php 
session_start();

if(@$_SESSION['t_user'])
{
	header("location:teacher/home.php");
}
 include "setting/config.php";
if(isset($_POST['teacher_signin']))
{
 $t_username = $_POST['t_username'];
	
	$t_password = $_POST['t_password']; 
	
	if($t_username=="" || $t_password=="")
	{
      echo "<script>alert('Please Fill Properly');</script>";
	}
	 else
	 {
	$go = $ravi->teacher_login_check($t_username,$t_password);
	if($go==1)
	{
		$_SESSION['t_user'] = $t_username;
		header("location:teacher/home.php");
	}
	else
	{
		echo "<script>alert('login failed');</script>";
	}
	 }
	
}

?>