<?php
        require('includes/common.php');
        
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
		<title>Cart | LifeStyle Store</title>
    </head>
    <body>
        <div class="container-fluid" id="content">
        <!-- Header -->
        <?php
        include('includes/header.php');
        ?>
        <!--Header end-->
        
        <!--Main content-->
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Item Number</th>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tbody>
                            <?php
                            
                                $user_id = $_SESSION['id'];
        
                            $innerjoin_query="SELECT items.id,name,price,users_items.id FROM items INNER JOIN users_items ON items.id = users_items.item_id WHERE users_items.user_id='$user_id' AND status ='Added to cart'";
                            $innerjoin_result = mysqli_query($con,$innerjoin_query) or die(mysqli_error($con));
                                
                            if(mysqli_num_rows($innerjoin_result)==0)
                            {
                                echo "Add items to the cart first!";
                            }
                            else {
                                $i=0;
                                $sum=0;
                                while ($row = mysqli_fetch_array($innerjoin_result)){
                                    $i++;
                                ?>
                            <tr>
                                <td><?php echo $i;?></td>
                                <td><?php echo $row['name'];?></td>
                                <td><?php echo 'Rs '.$row['price']; 
                                                $sum+=$row['price'];
                                    ?>
                                </td>
                                <td><?php
                                        echo '<a href="cart-remove.php?id='.$row['id'].'" class="remove_item_link"> Remove</a>';
                                        ?>  
                                </td>
                            </tr>
                            <?php		
                                }
                            
                                echo '
                                <tr>
                                    <td></td>
                                    <td>Total</td>
                                    <td>Rs '.$sum.'</td>
                                    <td> <a href="success.php" class="btn btn-primary">Confirm Order</a> </td>
                                </tr>';
                            } 
                            ?>  
                        </tbody>
                    </table>
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
