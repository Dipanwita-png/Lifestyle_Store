<?php 
require('includes/common.php');

$user_id = $_SESSION['id'];
$order_id = filter_input(INPUT_GET, 'id');

$remove_cart_query = "DELETE FROM users_items WHERE id ='$order_id'";
$remove_cart_result = mysqli_query($con, $remove_cart_query) or die(mysqli_error($con));
header("location: cart.php");
exit;
?>
