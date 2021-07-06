<?php 
session_start();

if(@$_SESSION['pr_user'])
{
	header("location:parents/home.php");
}
 include "setting/config.php";
if(isset($_POST['parents_signin']))
{
 $pr_username = $_POST['pr_username'];
	
	$pr_password = $_POST['pr_password']; 
	
	if($pr_username=="" || $pr_password=="")
	{
      echo "<script>alert('Please Fill Properly');</script>";
	}
	 else
	 {
	$go = $ravi->parent_login_check($pr_username,$pr_password);
	if($go==1)
	{
		$_SESSION['pr_user'] = $pr_username;
		header("location:parents/home.php");
	}
	else
	{
		echo "<script>alert('login failed');</script>";
	}
	 }
	
}

?>