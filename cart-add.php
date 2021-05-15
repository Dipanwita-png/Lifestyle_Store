<?php 
require('includes/common.php');

$user_id = $_SESSION['id'];
$item_id = filter_input(INPUT_GET, 'id');

$add_cart_query = "INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id','$item_id', 'Added to cart') ";
$mysqli_result = mysqli_query($con, $add_cart_query) or die(mysqli_error($con));

	header("location: products.php");
        exit;

?>
        