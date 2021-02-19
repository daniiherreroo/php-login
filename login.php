<?php

session_start();
header('location:index.php');

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'php_login_form');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$s = " select * from users where email = '$email' && password = '$password'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username'] = $email;
   
    header('location:home.php');
}else{
    header('location:index.php');
}

?>