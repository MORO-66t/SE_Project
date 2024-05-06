<?php

class User{
    public $userid;
    public $username;
    public $email;
    public $password;
    public $age;
    public $gender;
    public $phone;
    public $re_time;

    public function __construct($id){
        include("../include/config.php");
        $sq="select *  from register where r_id=$id ";
        $res=mysqli_query($con,$sq);
        $row=mysqli_fetch_assoc($res);
        $this->userid = $row['r_id'];
        $this->username= $row['r_nm'];
        $this->email= $row['r_email'];
        $this->password= $row['r_pwd'];
        $this->age= $row['r_age'];
        $this->gender= $row['r_gender'];
        $this->phone= $row['r_mno'];
        $this->re_time= $row['r_time'];

    } 
    public function getuser_Id() {
        return $this->userid;
    }
    
    public function getUsername() {
        return $this->username;
    }
    
    public function getEmail() {
        return $this->email;
    }
    
    public function getPassword() {
        return $this->password;
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
}

?>