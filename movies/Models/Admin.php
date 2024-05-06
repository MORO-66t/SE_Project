<?php

class Admin{

    public function __construct(){

    }





public function showUser(){
    include("../include/config.php");
	session_start();
    $sq=mysqli_query($con,"select * from register");
    $co=1;
  while($row=mysqli_fetch_assoc($sq))    	
                {
                   echo'<tr>';
                 echo'<td>'.$co.'</td>';
                 echo'<td>'.$row['r_nm'].'</td>';
                 echo'<td>'.$row['r_gender'].'</td>';
                echo'<td>'.$row['r_age'].'</td>';
                echo'<td>'.$row['r_email'].'</td>';
                echo'<td>'.$row['r_mno'].'</td>';
                echo'<td>'.date('d-m-Y',$row['r_time']).'</td>';
               echo'<td>';


  echo'<a href="user_edit.php?id='.$row['r_id'].'" class="btn btn-success btn-sm">Edit</a>';
               echo'<a href="../Models/Admin.php?id='.$row['r_id'].'&del=1" class="btn btn-danger btn-sm">Delete</a></td>';
               $co++;
               }
}

public function editUser(){
    include("../include/config.php");
session_start();
extract($_POST);
    if( !empty($_POST))
    {
	$uq="update  register set 
r_nm='$rnm',
r_age='$age',
r_gender='$gender',
r_email='$email',
r_mno='$mno'
  where r_id=$id ";
	mysqli_query($con,$uq);
	$_SESSION['update']="Successfully Updated";
	header("location:../admin/user_manage.php");
	}
	else
	{
	header("location:../admin/index.php");
	}
}

public function updateUser(){
}
public function delUser(){  
    include("../include/config.php");
    session_start();
    if( !empty($_GET))
    {
	session_start();
	$id=$_GET['id'];
	$dq="delete from register where r_id=$id ";
	mysqli_query($con,$dq);
	$_SESSION['del']="Successfully Deleted";
	header("location: ../admin/user_manage.php");
	}
	else
	{
	header("location: ../admin/user_manage.php");
	}

}

}

$admin_ob = new Admin();

if(isset($_GET['del'])){
$admin_ob->delUser();
}

if(isset($_GET['ed'])){
    $admin_ob->editUser();   
}

?>