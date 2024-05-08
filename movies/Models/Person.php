<?php 
class Person{
protected $pid; 
protected $name;
protected $role;
protected $email;
protected $password;

public function __construct(){
}

public function getuser_Id() {
    return $this->pid;
}

public function getUsername() {
    return $this->name;
}

public function getEmail() {
    return $this->email;
}

public function getPassword() {
    return $this->password;
}
public function getRole() {
    return $this->role;
}
public function login() {
    include('../include/config.php');
session_start();
extract($_POST);
if(! empty($_POST))
{
$c = 0;
$sq=mysqli_query($con,"select * from register where r_email='".addslashes($email)."' and r_pwd='".addslashes($pwd)."' ");
$row=mysqli_fetch_assoc($sq);
 if(! empty($row))
{
    $c = 1;
    global $c;
    if($row['r_status']==0)
    {
        $_SESSION['error']="YOur Account is Blocked!";
    header("location:../login.php");
    }
    else
    {
        $t=time();
$_SESSION['client']['nm']=$row['r_nm'];
$_SESSION['client']['uid']=$row['r_id'];
$_SESSION['client']['status']=true;
        header('location:../index.php');
        $login=$email.' Is Logged in';
$uq="insert into activity (ac_nm,ac_time) values('$login','$t')";
mysqli_query($con,$uq);
    }
    $c=2;
}
if($c != 1){
$sq="select * from admin where a_unm='".addslashes($email)."' and a_pwd='".addslashes($pwd)."' ";
$res=mysqli_query($con,$sq);
$row=mysqli_fetch_assoc($res);
if(! empty($row))
{
$_SESSION['admin']['nm']=$row['a_nm'];
$_SESSION['admin']['uid']=$row['a_id'];
$_SESSION['admin']['status']=true; 
        header('location:../admin/index.php');
}}
elseif($c == 2){
    header('location:../index.php');
}
else
{
    $_SESSION['error']="Enter Valid Email Or Password!";
    header("location:../login.php");
}

}
else
{
$_SESSION['error']="please enter email or password!";
header("location:../login.php");
}
}

public function logout(){
    session_start();
    session_destroy();
    header('location:../index.php');
}



}

?>