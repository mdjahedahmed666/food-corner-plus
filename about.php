<?php 
session_start();
if(!isset($_SESSION['email'])) {
    header('location: login.php');
} else {


?>


<!DOCTYPE html>
<html lang="en">

<?php
include("partials/head.php");
?>

<body>
<?php
  include("partials/header.php");
  ?>

<!-- Page Header -->
  <section class=" pt-5 mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto pt-5 mt-5 text-center">
                <h1>Our Staff</h1>
                <p>We are trying our best to give better service.</p>
            </div>
        </div>
    </div>
  <div id="staff" class="py-5 text-center bg-dark text-white">
    <div class="container">
      <h1>Introduction</h1>
      <hr>
      <div class="row">
        <div class="col-md-3">
          <img src="images/review-2.jpg" alt="" class="img-fluid rounded-circle mb-2 img-box">
          <h4>Jane Doe</h4>
          <small>Marketing Manager</small>
        </div>
        <div class="col-md-3">
          <img src="images/review-3.jpg" alt="" class="img-fluid rounded-circle mb-2 img-box">
          <h4>Sara Williams</h4>
          <small>Business Manager</small>
        </div>
        <div class="col-md-3">
          <img src="images/review-1.jpg" alt="" class="img-fluid rounded-circle mb-2 img-box">
          <h4>John Doe</h4>
          <small>CEO</small>
        </div>
        <div class="col-md-3">
          <img src="images/review-1.jpg" alt="" class="img-fluid rounded-circle mb-2 img-box">
          <h4>Steve Smith</h4>
          <small>Web Developer</small>
        </div>
      </div>
    </div>
  </div>
  </section>
  <?php
 include("partials/footer.php");
 ?>
</body>

</html>
<?php } ?>