<?php
class Theatre{
    private $t_id;
    private $t_name;
    private $t_city;
    private $t_time;
    private $t_status;
    private function __construct($id=-1){
        if($id> 0){
        include("../include/config.php");
        $sq="select *  from theatre where t_id=$id ";
        $res=mysqli_query($con,$sq);
        $row=mysqli_fetch_assoc($res);
        $this->t_id=$row["t_id"]; 
        $this->t_name=$row["t_nm"]; 
        $this->t_city=$row["t_city"];
        $this->t_time=$row["t_time"];
        $this->t_status=$row["t_status"];
        }
    }
    public function getTId() {
        return $this->t_id;
    }
    
    public function getTName() {
        return $this->t_name;
    }
    
    public function getTCity() {
        return $this->t_city;
    }
    
    public function getTTime() {
        return $this->t_time;
    }
    
    public function getTStatus() {
        return $this->t_status;
    }


    public function addtheatre(){
        include('../include/config.php');
session_start();
$time=time();
extract($_POST);
if(! empty($_POST))
 {
$sq=mysqli_query($con,"select * from theatre where t_nm='$tnm' ");
$row=mysqli_fetch_assoc($sq);
    if($tnm==$row['t_nm'])
    {
    $_SESSION['error']="This Theatre Is Already Exists";
    header("location: ../admin/theatre.php");
    }
    else
    {
    $q="insert into theatre (t_nm,t_city,t_time) values ('$tnm','$city','$time')";
    mysqli_query($con,$q);
    $_SESSION['done']="Successfully Added";
    header("location: ../admin/theatre.php");
    }
 }
else
{
header("location: ../admin/theatre.php");
}
}

public function deltheatre(){ 
    include("../include/config.php");
    session_start();
    if( !empty($_GET))
    {
	session_start();
	$id=$_GET['id'];
	$dq="delete from theatre where t_id=$id ";
	mysqli_query($con,$dq);
	$_SESSION['del']="Successfully Deleted";
	header("location:../admin/theatre_manage.php");
	}
	else
	{
	header("location:../admin/theatre.php");
	}

}

public function addScreen(){
    include('../include/config.php');
session_start();
$time=time();
extract($_POST);
if(! empty($_POST))
 {
$sq=mysqli_query($con,"select * from screen where s_nm='$snm' ");
$row=mysqli_fetch_assoc($sq);
    
    
    $q="insert into screen (s_nm,s_theatre,s_time) values ('$snm','$stheatre','$time')";
    mysqli_query($con,$q);
    $_SESSION['done']="Successfully Added";
    header("location: ../admin/screen.php");
 }
else
{
header("location: ../admin/screen.php");
}
}

public function delScreen(){
    include("../include/config.php");
    session_start();
    if( !empty($_GET))
    {
	session_start();
	$id=$_GET['id'];
	$dq="delete from screen where s_id=$id ";
	mysqli_query($con,$dq);
	$_SESSION['del']="Successfully Deleted";
	header("location:../admin/screen_manage.php");
	}
	else
	{
	header("location:../admin/screen.php");
	}
}


}


$the = new Theatre();

if(isset($_GET["add"])) 
{
    $the->addtheatre();
}

if(isset($_GET["del"])){
    $the->deltheatre();
}
if(isset($_GET["dels"])){
    $the->delScreen();
}
if(isset($_GET["adds"])){
    $the->addScreen();
}
?>