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

<!-- Actions -->
<section id="actions" class="pt-5 mt-5 mb-4 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-3 mt-5">
                <a href="#" class="btn btn-success mt-5">
                    <i class="fas fa-lock"></i> Change Password
                </a>
            </div>
            <div class="col-md-3 mt-5">
                <a href="#" class="btn btn-danger mt-5 mb-2">
                    <i class="fas fa-trash"></i> Delete Account
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Profile -->
<section id="profile">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center p-3">Your Profile</h4>
                    </div>
                    <div class="cart-body">
                        <form>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control p-2 mb-2" value="Md Jahed Miah">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control p-2 mb-2" value="mdjahedahmed12@gmail.com">
                            </div>
                            <div class="form-group">
                                <label for="bio">Bio</label>
                                <textarea class="form-control p-2 mb-5" rows="8" cols="20" name="editor1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae deleniti quo eveniet at tempore amet iste sed dolorem, porro dolorum quia assumenda nesciunt sapiente. Cum, culpa. Quibusdam alias fugit inventore, accusamus ullam exercitationem delectus ex, reiciendis incidunt placeat minus earum?</textarea>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <h3>Your Avatar</h3>
                <img src="images/avatar2.png" alt="" class="d-block img-fluid mb-3">
                <div class="d-grid gap-2">
                <button class="btn btn-primary btn-block">Edit Image</button>
                <button class="btn btn-danger btn-block mb-5">Delete Image</button>
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