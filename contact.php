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
  <section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto pt-5 text-center">
                <h1 class="mt-5 pt-5">Contact Us</h1>
                <p>You can easily contact with us by clicking submit button.</p>
            </div>
        </div>

       <div class="row">
        <div class="col-md-4">
          <div class="card mb-5">
            <div class="card-body">
              <h4>Get In Touch</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, odio!</p>
              <h4>Address</h4>
              <p>550 Main st, Boston MA</p>
              <h4>Email</h4>
              <p>test@test.com</p>
              <h4>Phone</h4>
              <p>(555) 555-5555</p>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card p-4">
            <div class="card-body">
              <h3 class="text-center">Please fill out this form to contact us</h3>
              <hr>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group mb-2">
                    <input type="text" class="form-control" placeholder="First Name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Last Name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mb-2">
                    <input type="text" class="form-control" placeholder="Email">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Phone Number">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group mb-2">
                    <textarea class="form-control" placeholder="Message"></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group d-grid gap-2">
                    <input type="submit" value="Submit" class="btn btn-outline-primary">
                  </div>
                </div>
              </div>
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