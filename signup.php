<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css" />
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous" />
    <!-- Lato font -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap"
        rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"/>
    <!-- Custom CSS -->
    <!-- <link rel="stylesheet" href="css/main.css" /> -->
    <link rel="stylesheet" href="css/login.css">
    <title>E-Store</title>
</head>
<body>
  <section class="form-signin">
    <form action="register.php" method="post">
      <div class="imgcontainer">
        <img class="avatar" src="images/registration.png" alt="Avatar">
    </div>
  <h1 class="h3 text-center mb-3 fw-normal p-3">Please sign up</h1>
      <div class="form-floating">
        <input type="text" class="form-control mb-2" name="r_name" placeholder="Name" id="r_name">
        <label for="r_name">Name</label>
        <?php if(isset($error_msg['r_name'])){
          echo "<div class='error'>".$error_msg['r_name']."</div>";
        }?>
      </div>
      <div class="form-floating">
        <input type="email" class="form-control mb-2" name="email" placeholder="name@example.com">
        <label for="email">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" name="pass" placeholder="Password">
        <label for="Password">Password</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" name="con_pass" placeholder="Confirm password">
        <label for="Password">Confirm passord</label>
      </div>
      <div class="form-floating">
        <input type="number" class="form-control mb-2" name="phone" placeholder="Number">
        <label for="number">Phone number</label>
      </div>
      <div class="form-floating">
        <input type="text" class="form-control mb-2" name="address" placeholder="Address">
        <label for="address">Your address</label>
      </div>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> I agree all statements in Terms of service
        </label>
      </div>
      <input type="submit" class="w-100 btn btn-lg btn-outline-primary mb-3"  name="rsubmit" value="Signup">
      <a href="login.php" class="text-muted">Signin here</a>
    </form>
  </section>
        <!-- Optional JavaScript; choose one of the two! -->
        <!-- <script src="js/reg.js"></script> -->
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
            crossorigin="anonymous"></script>
        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>
