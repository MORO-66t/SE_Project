<?php
    class Contact{

    private $co_id;
    private $co_nm;
    private $co_mno;
    private $co_email;
    private $co_msg;
    private $co_time;

    public function __construct(){
        
    }


    public function sendemassage(){
        session_start();
        include('../include/config.php');
        extract($_POST);
        $error=array();
        $time=time();
        if(! empty($_POST))
        {
            if(!is_numeric($mno))
        {
        $error[]="Enter Valid   Mobile Number";	
        }
           else if(strlen($mno)<10 || strlen($mno)>10) 
           {
            $error[]="Enter Valid 10 digit Mobile Number";
           }
           if(!empty($error))
           {
               $_SESSION['error']=$error;
           header("location: ../contact.php");
           }
           else
           {
            // header("location:contact.php?$nm,'$mno,$email,$msg,$time");
         $q="insert into  contact (co_nm,co_mno,co_email,co_msg,co_time) values('$nm','$mno','$email','$msg','$time')";
         mysqli_query($con,$q);
         $_SESSION['done']="your message send successfully";
         $cont='you have new message <a href="contact_manage.php">View</a>';
         $csq="insert into activity (ac_nm,ac_time)
         values('$cont','$time')";
         mysqli_query($con,$csq);
         header("location:../contact.php");
         }
       }
        else
        {
            header("location: ../contact.php");
        }
    }

    public function deleteMassage(){
        include("../include/config.php");
    session_start();
    if( !empty($_GET))
    {
	session_start();
	$id=$_GET['id'];
	$dq="delete from contact where co_id=$id ";
	mysqli_query($con,$dq);
	$_SESSION['del']="Successfully Deleted";
	header("location: ../admin/contact_manage.php");
	}
	else
	{
	header("location: ../admin/contact_manage.php");
	}
    }
    public function recieveMessage(){
        include("../include/config.php");
        $sq=mysqli_query($con,"select * from contact");
        $co=1;
      while($row=mysqli_fetch_assoc($sq))    	
                    {
             $tt=date('d-m-Y',$row['co_time']);
                       echo'<tr>';
                     echo'<td>'.$co.'</td>';
                     echo'<td>'.$row['co_nm'].'</td>';
                     echo'<td>'.$row['co_email'].'</td>';
                     echo'<td>'.$row['co_mno'].'</td>';
                     echo'<td>'.$row['co_msg'].'</td>';
                     echo'<td>'.$tt.'</td>';
                   echo'<td><a href="contact_delete.php?id='.$row['co_id'].'&del=1 ">Delete</a></td>';
                   $co++;
                   }
    }

    }

    $cont =new Contact();

    if(isset($_GET["send"])){
        $cont->sendemassage();
    }
    if(isset($_GET["del"])){
        $cont->deleteMassage();
    }
?>