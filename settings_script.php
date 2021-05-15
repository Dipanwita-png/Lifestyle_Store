<?php 
require('includes/common.php');

$email = $_SESSION['email'];
if($email==null){
	header('location: index.php');
        exit;
}
$password = filter_input(INPUT_POST, 'old_password');
$password_new = filter_input(INPUT_POST, 'new_password');
$password_confirm = filter_input(INPUT_POST, 'confirm_new_password');

if("$password_new"!="$password_confirm")
{
    echo "The new password and it's confirm are not same...";
    header("location: settings.php");
    exit;
    
}
 else 
 {
    $password_select_query = "SELECT password FROM users WHERE email = '$email' AND password = '$password'";
    $mysqli_sel_result = mysqli_query($con, $password_select_query) or die(mysqli_error($con));
    $row = mysqli_fetch_array($mysqli_sel_result);
    if($row['password']!="$password")
    {
        header("location: settings.php");
        exit;
    }
    else
    {
        $password_update_query = "UPDATE users SET password = '$password_new' WHERE email = '$email' AND password = '$password'";
        $mysqli_result = mysqli_query($con, $password_update_query) or die(mysqli_error($con));
        {
            header("location: products.php");
            exit;
        }
    }
}
?>


