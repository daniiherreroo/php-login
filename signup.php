<?php

session_start();
header('location:index.php');

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'php_login_form');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$s = " select * from users where email = '$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo" Ya existe este usuario";
}else{
    $reg= " insert into users(name, email, password) values('$name' , '$email' , '$password')";
    mysqli_query($con, $reg);
    echo" Usted se ha registrado satisfactoriamente";
}
?>