<?php
class Show{
    public function __construct(){

    }


    public function addshow(){
        session_start();
include("../include/config.php");
extract($_POST);
if(!empty($_POST))
{
	if(! is_numeric($price))
	{
		$_SESSION['error']= "Enter Valid Price";
	}
	else
	{   
		$unq=uniqid();
		$q="insert into shows (show_m,show_t,show_s,show_time,show_date,show_price,show_unq) values($movie,$theatre,$screen,'$time','$date',$price,'$unq')";
		mysqli_query($con,$q);
		$uq="update movies set m_shw=1 where m_id=$movie";
		mysqli_query($con,$uq);
		$_SESSION['done']="Successfully Show Added";
		header("location:Show.php?sid=$unq&seat");
   }
}
	else
	{
		header("location:../admin/show.php");
	}
    }

    public function delshow(){
        include("../include/config.php");
session_start();
    if( !empty($_GET))
    {
	session_start();
	$id=$_GET['id'];
	$mid=$_GET['mid'];
	$dq="delete from shows where show_id=$id ";
	mysqli_query($con,$dq);
	//$uq="update movies set m_shw=0 where m_id=$mid";
	//mysqli_query($con,$uq);
	$_SESSION['del']="Successfully Deleted";
	header("location:../admin/show_manage.php");
	}
	else
	{
	header("location:../admin/show.php");
	}

    }
    public function addseats(){
        session_start();
include("../include/config.php");
$sid=$_GET['sid'];
 
     $sq="select * from shows where show_unq='".$sid."' ";
     $res=mysqli_query($con,$sq);
	 $row=mysqli_fetch_array($res);
	 $snm=$row['show_id'];
	for($i='A'; $i<='H'; $i++)
	{
		for($j=1; $j<=6; $j++)
		{
			$row=$i;
			$col=$j;
			$q1="insert into seat (seat_row,seat_col,seat_show) values ('$row','$col','$snm')";
			mysqli_query($con,$q1);
			
		}
	}
		header("location:../admin/show.php");
    }
}


$show= new Show(); 
if(isset($_GET["addshow"])){
    $show->addshow();
}

if(isset($_GET["delsh"])){
    $show->delshow();
}
if(isset($_GET["seat"])){
    $show->addseats();
}

?>