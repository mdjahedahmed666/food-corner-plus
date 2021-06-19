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
<!-- Plan Section -->

<section class="mt-5 pt-4">
    <div class="container">
        <div class="col">
<div class="pricing-header p-3 pb-md-4 mx-auto text-center">
    <h1 class="display-5 fw-normal mt-5 pt-5">Start eating healthy today</h1>
    <p class="fs-5 text-muted">Quickly build an effective pricing table for your potential customers with this Bootstrap example.</p>
  </div>
</div>

<div class="col-md-12">
  <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
    <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-3">
          <h4 class="my-0 fw-normal">Starter</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">$50<small class="text-muted fw-light">/mo</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>only one meal</li>
            <li>order from 8am to 12pm</li>
            <li>X</li>
            <li>Free Delivery</li>
          </ul>
          <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up now</button>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-3">
          <h4 class="my-0 fw-normal">Pro</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">$100<small class="text-muted fw-light">/mo</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>1 meal 10 days</li>
            <li>Order 24/7</li>
            <li>Access to newest Creations</li>
            <li>Free delivery</li>
          </ul>
          <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up now</button>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm border-primary">
        <div class="card-header py-3 text-white bg-primary border-primary">
          <h4 class="my-0 fw-normal">Premium</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">$199<small class="text-muted fw-light">/mo</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>1 meal every day</li>
            <li>Order 24/7</li>
            <li>Access to newest creations</li>
            <li>Free delivery</li>
          </ul>
          <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up now</button>
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