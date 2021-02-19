<?php

header('location:home.php');


$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'php_login_form');

$name = $_POST['name'];
$apellido = $_POST['apellido'];
$phone = $_POST['phone'];
$mensaje = $_POST['mensaje'];

$s = "insert into datos values ('$name' , 
                                '$apellido' ,
                                '$phone' ,
                                '$mensaje')";

$result=mysqli_query($con, $s);                         

if(!$result){
    echo "Se produjo un error";
}else{
    echo "datos guardados correctamente";
}

?>