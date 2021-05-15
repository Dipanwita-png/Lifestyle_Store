<?php
require "includes/common.php";

$email = mysqli_real_escape_string($con, filter_input(INPUT_POST, 'email'));
$password = mysqli_real_escape_string($con, filter_input(INPUT_POST, 'password'));
$pass= md5($password);

$user_auth_query = "SELECT id, email, name, contact FROM users WHERE email = '$email' AND password = '$pass' ";
$mysqli_result = mysqli_query($con, $user_auth_query) or die(mysqli_error($con));

if(mysqli_num_rows($mysqli_result) == 0){	
    $m = "<span class='red'>Email or Password is incorrect</span>";
    header("location: login.php?m1=" . $m);exit;
}
else{	
    $row = mysqli_fetch_array($mysqli_result);
    $_SESSION['email'] = $row['email'];
    $_SESSION['id'] = $row['id'];
    
    header("location: products.php");
    exit;
 } 
?>


