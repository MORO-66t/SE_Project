<?php
include("Person.php");
class User extends Person{
    private $age;
    private $gender;
    private $phone;
    private $re_time;


    public function __construct($id=-1){
        if($id> 0){
        include("../include/config.php");
        $sq="select *  from register where r_id=$id ";
        $res=mysqli_query($con,$sq);
        $row=mysqli_fetch_assoc($res);
        $this->pid = $row['r_id'];
        $this->name= $row['r_nm'];
        $this->email= $row['r_email'];
        $this->password= $row['r_pwd'];
        $this->age= $row['r_age'];
        $this->gender= $row['r_gender'];
        $this->phone= $row['r_mno'];
        $this->re_time= $row['r_time'];
        $this->role = "User";
        }

    } 

    
    public function getAge() {
        return $this->age;
    }
    
    public function getGender() {
        return $this->gender;
    }
    
    public function getPhone() {
        return $this->phone;
    }
    
    public function getReTime() {
        return $this->re_time;
    }

    public function changePass(){
        include("../include/config.php");
        extract($_POST);
        session_start();
        $error=array();
        if(!empty($_POST))
        {
	    $sq="select * from register where r_id=$id";
	    $res=mysqli_query($con,$sq);
	    $row=mysqli_fetch_array($res);
	
	if($opwd!=$row['r_pwd'])
	{
		$error[]="your old password is incorrect";
	}
	elseif($pwd!=$cpwd)
	{
		$error[]="your password do not match";
	}
	if(!empty($error))
	{
		$_SESSION['error']=$error;
		header("location:../changepass.php");
	}
	else
	{
		$uq="update register set r_pwd='$pwd' where r_id=$id ";
		mysqli_query($con,$uq);
		$_SESSION['done']="password successfully changed";
		header("location:../changepass.php");
	}
}
else
{
	header("location:changepass.php");
}
    }



public function register(){
    session_start();
    include('../include/config.php');
    extract($_POST);
    $error=array();
    $time=time();
    if(! empty($_POST))
    {
    	if(! is_numeric($mno))
    {
    	$error[]="Enter Valid Mobile Number";
    }
    else if(strlen($mno)<10 || strlen($mno)>10)        {
    	$error[]="Enter Valid 10 digit Mobile Number";
    }
    if($pwd!=$cpwd)
    {
   	$error[]="Password Do Not Match";  
    }
else  if(strlen($pwd)<6)
    {
 	$error[]="Enter minimum 6 Digit Password";
    }
    $sq="select * from register where r_email='$email' and r_mno='$mno' ";
    $res=mysqli_query($con,$sq);
    $row=mysqli_fetch_assoc($res);
    if($email==$row['r_email'] || $mno==$row['r_mno'])
    {
    	$error[]="This Account is Already Exists";
    }
    if(! empty($error))
    {
    	$_SESSION['error']=$error;
      header("location: ../register.php");
     }
     else
     {
$q="insert into  register (r_nm,r_age,r_gender,r_mno,r_email,r_pwd,r_time) values('$nm','$age','$gender','$mno','$email','$pwd','$time')";
        mysqli_query($con,$q);
    $_SESSION['done']="registered successfully";
    $login=$email.' Is Registered';
	$uq="insert into activity (ac_nm,ac_time) values('$login','$time')";
	mysqli_query($con,$uq);
    header("location: ../login.php");
   }
   }
    else
    {
    	header("location: ../register.php");
    }
}

}
$user = new User();
if(isset($_GET['ch'])){
    $user->changePass();
}
if(isset($_GET['log'])){
    $user->login();
}
if(isset($_GET['re'])){
    $user->register();
}
if(isset($_GET['out'])){
    $user->logout();
}
?>