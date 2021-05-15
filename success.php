<?php
        require('includes/common.php');
        $remove_cart_query = "UPDATE users_items SET status ='Confirmed' WHERE status ='Added to cart'  ";
        $remove_cart_result = mysqli_query($con, $remove_cart_query) or die(mysqli_error($con));
?>
<!DOCTYPE html>
<html lang="en">
    <head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
		<!--jQuery library--> 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!--Latest compiled and minified JavaScript--> 
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>Success | LifeStyle Store</title>
    </head>
    <body>
        <!-- Header -->
        <?php
        include('includes/header.php');
        ?>
        <!--Header end-->
        <br><br><br><br>
        <!--Main content-->
        <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h3 align="center">Your order is confirmed. Thank you for shopping with us.</h3><hr>
                    <p align="center"><a href="products.php">Click here</a> to purchase any other item.</p>
                </div>
            </div>
        </div>
        <!--Main content end-->

        <!--Footer-->
        <?php
        include('includes/footer.php');
        ?>
        <!--Footer end-->
    </body>
</html>

