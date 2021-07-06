<?php 
include "../setting/config.php";
 session_start();
if(!$_SESSION['pr_user'])
{
	
	header("location:index.php");
}
else
{
	$pr_username = $_SESSION['pr_user'];
	$pr_name = $ravi->parent_info_select($pr_username);
	
	$parent_name_display = $pr_name->fetch_assoc();
}
?>