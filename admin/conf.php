<?php 
session_start();

 include "setting/config.php";

if(isset($_POST['admin_signin']))
{
	
	$admin_username = mysqli_real_escape_string($ravi->hackme(),$_POST['admin_username']);
    $admin_password = mysqli_real_escape_string($ravi->hackme(),$_POST['admin_password']);
	if($admin_username=="" AND $admin_password=="")
	{
		echo "<script>alert('Enter Your Username & Password');</script>";
	}
	else
	{
		$melogin = $ravi->meadmin_check($admin_username,$admin_password);
			if($melogin==1)
	{
	$_SESSION['meadmin'] = 	$admin_username;
		header("location:admin/home.php");
	}
		
		
	else
	{
		echo "<script>alert('Email Or Password does not matched');</script>";
	}
	
	}
}

?>