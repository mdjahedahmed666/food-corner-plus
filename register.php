<?php

include("config.php");
include('encfunction.php');

if(isset($_POST['rsubmit'])){
  $r_id=uniqid()."-".uniqid();

  $r_name=$_POST['r_name'];
  if(strlen($r_name)<3 || strlen($r_name)>30){
    $error_msg['r_name']="Name should be 3-30 char";
  }
  $remail=$_POST['email'];
  $rpass=$_POST['pass'];
  $rcon_pass=$_POST['con_pass'];
  $rphone=$_POST['phone'];
  $raddress=$_POST['address'];
  $encrypass =  data_encryption($rpass, $remail);
}

$insert_query="INSERT INTO `register`(`id`,`fullname`, `email`, `password`, `phonenumber`, `address`) VALUES ('$r_id','$r_name','$remail','$encrypass','$rphone','$raddress')";
$check=mysqli_query($conn,$insert_query);
header("login.php");

$duplicate_email=mysqli_query($conn,"SELECT * FROM `register` WHERE email='$remail' AND ");

    // $pattern = "/^[a-zA-Z .]+$/";
    // $mpattern = "/^(\+88)?-?01[3-9]\d{8}$/";
    // $epattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/";
    // $ppattern= "/^((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[?!*#$@%&])).{6,20}$/";
    
    

    
    // elseif(!preg_match($epattern,$remail)){
    //   echo "put a valid email";
    //   header('location: signup.php');
    // }
    // elseif(!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $rpass)){
    //   echo "Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
    //   header('location: signup.php');
    // }
    // elseif(!preg_match($rpass,$rcon_pass)){
    //   echo "<script>alert('password and confirm passord not matched')</script>";
    //   header('location: signup.php');
    // }
    // elseif(!preg_match($mpattern,$rphone)){
    //   echo "<script>alert('put a valid number')</script>";
    //   header('location: signup.php');
    // }
    // elseif(strlen($raddress)<3 || strlen($raddress)>30){
    //   echo "<script>alert('usernameshould be 3-20 char')</script>";
    //   header('location: signup.php');
    // }
    // elseif(mysqli_num_rows($duplicate_email)>0){
    //         echo "<script>alert('email already taken')</script>";
    //         header('location: signup.php');
    // }
    // else{
    //     if(!mysqli_query($conn,$insert_query)){
    //         echo "<script>alert('Data not inserted')</script>";
    //     }
    //     else{
    //         echo "<script>alert('Registration is successful')</script>";
    //         header('location: login.php');
    //     }
        
    // }

?>