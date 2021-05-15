<?php
require 'includes/common.php';
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
		<title>Sign-up | LifeStyle Store</title>  
    </head>
    <body>
        <!-- Header -->
        <?php
        include('includes/header.php');
        ?>
        <!--Header end-->
        
        <!--Main content-->
        <div class="container-fluid decor_bg" id="content">
            <div class="row">
                <div class="container">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <h2>SIGN UP</h2>
                        <form  action="signup_script.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name" id="name" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email" name="email" id="email" required>
                                <?php echo filter_input(INPUT_GET, 'm1'); ?>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" id="password" pattern=".{6,}"  required>
                                <?php echo filter_input(INPUT_GET, 'm2'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" id="contact" required>
                                <?php echo filter_input(INPUT_GET, 'm3'); ?>
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="City" name="city" id="city" required>
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="Address" name="address" id="address" required>
                            </div>
                            
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
       <!--Main content-->

        <!--Footer-->
        <?php
        include('includes/footer.php');
        ?>
        <!--Footer end-->

    </body>
</html>

