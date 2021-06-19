<?php 
session_start();
if(isset($_SESSION['email'])) {
  header('location: index.php');
} else {

?>
<!DOCTYPE html>
<html lang="en">
    <?php
    include("adminpartials/head.php");
    ?>
<body>

<section class="form-signin">
    <form action="index.php"  method="post">
        <div class="imgcontainer">
            <img class="avatar" src="images/profile.png" alt="Avatar">
        </div>
      
      <h1 class="h3 text-center mb-3 fw-normal p-3">Please sign in</h1>
  
      <div class="form-floating mb-3">
        <input type="email" class="form-control" name="email" placeholder="name@example.com" required>
        <label for="email">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" name="password" placeholder="Password" required>
        <label for="Password">Password</label>
      </div>
  
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-outline-primary mb-3" type="submit">Sign in</button>
      <a href="signup.php" class="text-muted">Signup here</a>
    </form>
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
<?php }?>