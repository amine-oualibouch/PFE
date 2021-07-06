<?php 
include "../setting/config.php";
 session_start();
if(!$_SESSION['t_user'])
{
	
	header("location:index.php");
}
else
{
	$t_username = $_SESSION['t_user'];
	$t_name = $ravi->teacher_info_select($t_username);
	
	$teacher_name_display = $t_name->fetch_assoc();
}
?>