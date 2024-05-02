<?php
session_start();
include('../../config.php');

$uid=$_GET['mid'];

mysqli_query($con,"DELETE FROM tbl_login WHERE user_id='$uid'");
 $_SESSION['success']="User Deleted";
header("location:view_user.php");
?>