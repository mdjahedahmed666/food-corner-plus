<?php
session_start();
if(!isset($_SESSION['email'])){
    header('location: login.php');
}else{

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

    <section class="sectionpadding">
        <div class="container">
        <h2 class="text-center p-4">Here all the list of your user</h2>
        <div class="m-2 float-start">
            
            <div class="card" style="width: 18rem;">
            <img src="images/avatar-4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Md Jahed Miah</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            </div>
        </div>

        <div class="m-2 float-start">
            
            <div class="card" style="width: 18rem;">
            <img src="images/avatar-4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Md Jahed Miah</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            </div>
        </div>

        
        </div>
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
<?php } ?>