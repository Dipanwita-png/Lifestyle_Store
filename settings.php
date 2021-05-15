<?php
        require('includes\common.php');
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
		<title>Settings | LifeStyle Store</title>
    </head>
    <body>
        <!-- Header -->
        <?php
        include('includes\header.php');	
        ?>
        <!--Header end-->
        
        <!--Main content-->
        <div class="container-fluid" id="content">
            <div class="row">
                <div class="col-md-4 col-md-offset-4" id="settings-container">
                    <div class="login-panel panel ">
                        <div class="panel-heading">
                            <h3 class="">Change Password</h3>
                        </div>
                        <div class="panel-body">
                            <form class="form" role="form" action="settings_script.php" method="POST">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Old Password" name="old_password" type="password" value="">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="New Password" name="new_password" type="password" value="">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Confirm New Password" name="confirm_new_password" type="password" value="">
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-sm btn-primary">Change</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
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