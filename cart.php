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

  <!-- Menu Section Start -->
  <section class="container pt-5">
    <div class="py-5 text-center">
      <img class="d-block mx-auto mt-5 pt-4" src="images/payment.png" alt="" width="80" height="80">
      <h2>Your Carts</h2>
      <p class="lead">Here all the carts that you have selected</p>
    </div>

    <div class="row">
      <div class="col-lg-3 col-md-4 d-block">
        <div class="card w-100">
          <img src="images/burger.jpg" class="img-fluid img-thumbnail" alt="Burgar">
          <div class="card-body">
            <h5 class="card-title">Burgar</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk
              of the card's content.</p>
            <p>Price: $02</p>
            <a href="#" class="btn btn-primary">Delete Cart</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 d-block">
        <div class="card w-100">
          <img src="images/burger.jpg" class="img-fluid img-thumbnail" alt="Burgar">
          <div class="card-body">
            <h5 class="card-title">Burgar</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk
              of the card's content.</p>
            <p>Price: $02</p>
            <a href="#" class="btn btn-primary">Delete Cart</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 d-block">
        <div class="card w-100">
          <img src="images/burger.jpg" class="img-fluid img-thumbnail" alt="Burgar">
          <div class="card-body">
            <h5 class="card-title">Burgar</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk
              of the card's content.</p>
            <p>Price: $02</p>
            <a href="#" class="btn btn-primary">Delete Cart</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 d-block">
        <div class="card w-100">
          <img src="images/burger.jpg" class="img-fluid img-thumbnail" alt="Burgar">
          <div class="card-body">
            <h5 class="card-title">Burgar</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk
              of the card's content.</p>
            <p>Price: $02</p>
            <a href="#" class="btn btn-primary">Delete Cart</a>
          </div>
        </div>
      </div>
    </div>

    <div class="row g-5">
      <div class="col-md-7 col-lg-8">
        <form class="needs-validation" novalidate>
          <hr class="my-4">
          <h4 class="mb-3">Payment</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
              <label class="form-check-label" for="credit">Bkash</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="debit">Rocket</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="paypal">Nogod</label>
            </div>
          </div>

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Your Number</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Transaction Id</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required>
            </div>
          </div>

          <hr class="my-4">
          <button class="w-100 btn btn-outline-primary btn-lg mb-4" type="submit">Order now</button>
        </form>
      </div>
    </div>
  </section>
  <!-- Menu Section End -->
  <?php
 include("partials/footer.php");
 ?>
</body>

</html>
<?php } ?>
