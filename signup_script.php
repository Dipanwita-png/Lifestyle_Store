<?php

require('includes/common.php');

$email = mysqli_real_escape_string($con, filter_input(INPUT_POST, 'email'));
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$regex_num = "/^[6789][0-9]{9}$/";

if (!preg_match($regex_email, $email)) {
    $m = "<span class='red'>Not a valid Email Id</span>";
    header("location: signup.php?m1=" . $m);exit;
}
$password = mysqli_real_escape_string($con, filter_input(INPUT_POST, 'password'));
if (strlen($password) < 6) {
    $m = "<span class='red'>Password length must be greater than 6</span>";
    header("location: signup.php?m2=" . $m);exit;
}
$contact = mysqli_real_escape_string($con, filter_input(INPUT_POST, 'contact'));
if (!preg_match($regex_num, $contact)) {
    $m = "<span class='red'>Not a valid phone number</span>";
    header("location: signup.php?m3=" . $m);exit;
}
$name = mysqli_real_escape_string($con, filter_input(INPUT_POST, 'name'));
$city = mysqli_real_escape_string($con, filter_input(INPUT_POST, 'city'));
$address = mysqli_real_escape_string($con, filter_input(INPUT_POST, 'address'));
$pass= md5($password);
$user_check_query = "SELECT * FROM users WHERE email = '$email' AND password = '$password' ";
$mysqli_result = mysqli_query($con, $user_check_query) or die(mysqli_error($con));

if(mysqli_num_rows($mysqli_result) > 0){	
    $m = "<span class='red'>Email Already Exists</span>";
    header("location: signup.php?m1=" . $m);exit;
}
else{	
    //use insert query and store the data in the database.
    $user_registration_query = "INSERT INTO users(name, email, password, contact, city, address) VALUES ('$name','$email','$pass','$contact','$city','$address')";
    $user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
    $_SESSION['id'] = mysqli_insert_id($con); 
    $_SESSION['email'] = $email;
    header("location: products.php");
    exit;
 } 

 $_SESSION['email'] = $email;

?>


