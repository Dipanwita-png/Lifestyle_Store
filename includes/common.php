<?php

if(!isset($_SESSION)) { 
        session_start(); 
} 

$con=mysqli_connect("remotemysql.com","lceWuP2gh7","BrRMiLT2dR","lceWuP2gh7")or die(mysqli_error($con));

?>
