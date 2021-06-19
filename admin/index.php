<?php
$email="mdjahedahmed12@gmail.com";
$pass="admin";

session_start();
if(isset($_SESSION['email'])){

}
else{
  if(isset($_POST['email'])){
    if($_POST['email']==$email && $_POST['password']==$pass ){
      $_SESSION['email']=$email;
      header('location: index.php');
  
    }else{
      echo "<script>alert('Incorrect email or password')</script>";
      header('location: login.php');
    }
  }else{
    header('location: login.php');
  }
  
}
?>

<!DOCTYPE html>
<html lang="en">
<?php
include("adminpartials/head.php");
?>
<body>

<?php
include("adminpartials/header.php");
?>

      <section class="productform">
        <h2>Manage your Website from here</h2>

      </section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.min.js"></script>


<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
    integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script> -->
</body>
</html>