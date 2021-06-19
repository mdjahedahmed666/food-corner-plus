

<!DOCTYPE html>
<html lang="en">
<?php
include("partials/head.php");
?>
<body>

  <?php
  include("partials/header.php");
  ?>

  <?php
  include("partials/hero.php");
  ?>
 
  <?php
  include("partials/features.php");
  ?>

  <!-- Favourit Food -->
  <section class="meals pt-5 pb-5">
    <div class="container">
      <div class="row">
        <h2 class="text-center text-white pt-5">Popular Food</h2>
        <p class="text-center text-white  fs-5 text mb-5">
          You’re always busy. No time for cooking. So let's take care of that,
          we’re really good at it.
        </p>
        <ul class="showcase">
          <li>
            <figure class="meal-img">
              <img src="images/1.jpg" alt="" />
            </figure>
          </li>
          <li>
            <figure class="meal-img">
              <img src="images/2.jpg" alt="" />
            </figure>
          </li>
          <li>
            <figure class="meal-img">
              <img src="images/3.jpg" alt="" />
            </figure>
          </li>
          <li>
            <figure class="meal-img">
              <img src="images/4.jpg" alt="" />
            </figure>
          </li>
        </ul>
        <ul class="showcase">
          <li>
            <figure class="meal-img">
              <img src="images/5.jpg" alt="" />
            </figure>
          </li>
          <li>
            <figure class="meal-img">
              <img src="images/6.jpg" alt="" />
            </figure>
          </li>
          <li>
            <figure class="meal-img">
              <img src="images/7.jpg" alt="" />
            </figure>
          </li>
          <li>
            <figure class="meal-img">
              <img src="images/8.jpg" alt="" />
            </figure>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- Popular Food Section End -->

  <?php
  include("partials/working.php");
  ?>

 <?php
 include("partials/review.php");
?>

 <?php
 include("partials/footer.php");
 ?>

 
</body>

</html>
