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
    <section class="productform m-sm-5">
        <div class="container">
            <h2 class="text-center p-4">Add Item to Menu</h2>
            <form>

                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" id="title" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" placeholder="Price">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" rows="3"></textarea>
                  </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" id="image" placeholder="Image">
                </div>
                <div class="form-group d-grid gap-2">
                <input type="submit" class="btn btn-outline-primary mt-2" value="submit">
                </div>
                </form>
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