<?php
include("config.php");
include('encfunction.php');

if(isset($_POST['lsubmit'])){
    $lemail=$_POST['lemail'];
    $lpass=$_POST['lpass'];
    $encrypass =  data_encryption($lpass, $lemail);

    $result=mysqli_query($conn,"SELECT * FROM `register` email='$lemail' AND password='$encrypass'");

    if(mysqli_num_rows($result)){
        //valid user
        session_start();
        $_SESSION['email']=$lemail;
        header('location: index.php');
    }else{
        echo "<script>alert('Incorrect username or password')</script>";
        header('location: login.php');
    }
}
?>