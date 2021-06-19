<?php 
session_start();
if(!isset($_SESSION['email'])) {
    header('location: login.php');
} else {


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
            <div class="float ">
                <div class="col-md-4 col-lg-2 col-sm-12  m-2">
                    <div class="card" style="width: 15rem;">
                        <img src="images/avatar-4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Burger</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the
                                card's content.</p>
                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                            <a href="#" class="btn btn-outline-primary btn-sm">Submit</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="float">
                <div class="col-md-4 col-lg-2 col-sm-12 m-2">
                    <div class="card" style="width: 15rem;">
                        <img src="images/avatar-4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Burger</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the
                                card's content.</p>
                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                            <a href="#" class="btn btn-outline-primary btn-sm">Submit</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="float">
                <div class="col-md-4 col-lg-2 col-sm-12 m-2">
                    <div class="card" style="width: 15rem;">
                        <img src="images/avatar-4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Burger</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the
                                card's content.</p>
                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                            <a href="#" class="btn btn-outline-primary btn-sm">Submit</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="float">
                <div class="col-md-4 col-lg-2 col-sm-12 m-2">
                    <div class="card" style="width: 15rem;">
                        <img src="images/avatar-4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Burger</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the
                                card's content.</p>
                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                            <a href="#" class="btn btn-outline-primary btn-sm">Submit</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                        </div>
                    </div>
                </div>
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