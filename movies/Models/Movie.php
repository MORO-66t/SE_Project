<?php

class Movie {
private $movie_id;
private $movie_name;
private $movie_date;
private $movie_cast;
private $movie_d;
private $movie_director;
private $movie_banner;
private $movie_shows;
private $movie_active;

public function __construct($id=-1) {
    if($id != -1){
    include("../include/config.php");
    $sq="select *  from movies where m_id=$id ";
	$res=mysqli_query($con,$sq);
	$row=mysqli_fetch_assoc($res);
    $this->movie_id=$id;
    $this->movie_name = $row['m_nm'];
    $this->movie_date = $row['m_date'];
    $this->movie_cast = $row['m_cnm'];
    $this->movie_director = $row['m_dnm'];
    $this->movie_d = isset($row['m_des']) ? $row['m_des'] : null;
    $this->movie_banner = $row['m_banner'];
    $this->movie_shows = $row['m_shw'];
    $this->movie_active = $row['m_status'];}
    
}
public function getMovieId() {
    return $this->movie_id;
}

public function getMovieName() {
    return $this->movie_name;
}

public function getMovieDate() {
    return $this->movie_date;
}

public function getMovieCast() {
    return $this->movie_cast;
}

public function getMovieDirector() {
    return $this->movie_director;
}

public function getMovieDescription() {
    return $this->movie_d;
}

public function getMovieBanner() {
    return $this->movie_banner;
}

public function getMovieShows() {
    return $this->movie_shows;
}

public function getMovieActive() {
    return $this->movie_active;
}

public function addmovie() {
    include("../include/config.php");
    session_start();
extract($_POST);
extract($_FILES);
$error=array();
if(! empty($_POST))
 {
    // include('../include/config.php');
    $sq=mysqli_query($con,"select * from movies where m_nm='$mnm' ");
$row=mysqli_fetch_assoc($sq);   
 $ext=strtoupper(substr($_FILES['banner']['name'],-4));
    if(!empty($row)) 
    {
    $error[]="This Movie Already Added";
    header("location:../admin/movie.php");
    }
    else if(empty($_FILES))
    {
    	$error[]="Please Upload Image";
    } 
    else if(!($ext=='.JPG' || $ext=='.PNG'|| $ext=='.GIF' || $ext=='JPEG'))
    {
    $error[]="Upload Proper Image This Type Is Invalid";	
    }
    else if(! empty($error))
    {
    $_SESSION['error']=$error;	
    header("location:../admin/movie.php");
    }
 else{
    
 	$t=time();
 	$banner=$t.'_'.$_FILES['banner']['name'];
    move_uploaded_file($_FILES['banner']['tmp_name'],'../upload/'.$banner);
	
    $q="insert into movies (m_nm,m_date,m_cnm,m_dnm,m_des,m_banner) values ('$mnm','$rdate','$cnm','$dnm','$des','$banner')";
    mysqli_query($con,$q);
    $_SESSION['done']="Successfully Added";
    header("location: ../admin/movie.php");
    } }
    else
    {
    header("location: ../admin/movie.php");
    }
}
public function del_movie(){
    include("../include/config.php");
session_start();
    if( !empty($_GET))
    {
	session_start();
	$id=$_GET['id'];
	$dq="delete from movies where m_id=$id ";
	mysqli_query($con,$dq);
	$_SESSION['del']="Successfully Deleted";
	header("location: ../admin/movie_manage.php");
	}
	else
	{
	header("location:../admin/movie.php");
	}
}

public function movie_edit(){
    include("../include/config.php");
    session_start();
    extract($_POST);
    extract($_FILES);
    $error=array();
    $ext=strtoupper(substr($_FILES['banner']['name'],-4));
        if( !empty($_POST))
        {
             if(empty($_FILES))
        {
            $error[]="Please Upload Image";
        } 
        else if(!($ext=='.JPG' || $ext=='.PNG'|| $ext=='.GIF' || $ext=='JPEG'))
        {
        $error[]="Upload Proper Image This Type Is Invalid";	
        }
        else if(! empty($error))
        {
        $_SESSION['error']=$error;	
        header("location:../admin/movie_edit.php");
        }
        else
        {
        $t=time();
         $banner=$t.'_'.$_FILES['banner']['name'];
        move_uploaded_file($_FILES['banner']['tmp_name'],'../upload/'.$banner);	
        $bd = $_GET["bd"];
        if (!$bd)
        header("location: mo.php?&m_nm='$mnm', m_date='$rdate', m_cnm='$cnm', m_dnm='$dnm', m_des='$des', m_banner='$banner' where m_id=$bd ");
        $uq="update  movies set m_nm='$mnm', m_date='$rdate', m_cnm='$cnm', m_dnm='$dnm', m_des='$des', m_banner='$banner' where m_id=$bd ";
        mysqli_query($con,$uq);
        $_SESSION['update']="Successfully Updated";
        header("location:../admin/movie_manage.php");
        }
    }
        else
        {
        header("location:movie.php");
        }
    
}

}

extract($_POST);
$mo = new Movie(-1);
if (isset($add))
{
    $mo->addmovie();
}
if (!empty($_GET) && isset($_GET["del"]))
{
    $mo->del_movie();
}

if (!empty($_GET) && isset($_POST["ed"])){
     $mo->movie_edit();
}

?>