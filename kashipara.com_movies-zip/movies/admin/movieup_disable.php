<?php
include("../include/config.php");
session_start();
    if( !empty($_GET))
    {
	session_start();
	$id=$_GET['id'];
	$uq="update  upmovies set um_status=0 where um_id=$id ";
	mysqli_query($con,$uq);
	$_SESSION['disable']="Successfully Disabled";
	header("location:movieup_manage.php");
	}
	else
	{
	header("location:movie.php");
	}

?>