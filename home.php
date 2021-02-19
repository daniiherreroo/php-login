<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    
</head>
<body>
    <?php require 'header.php' ?>
    <a href="logout.php"> Cerrar Sesión </a>
    <h1>Bienvenido <?php echo $_SESSION['username']; ?> </h1> 
    <p>Usted ha iniciado sesión satisfactoriamente</p>

    <div class="form">   
        <div class="formulario">
            <form action="form.php" method="post">
                <h1>Formulario</h1>
                <input type="text" name="name" placeholder="Introduzca su nombre" required>
                <input type="text" name="apellido" placeholder="Introduzca sus apellidos" required>
                <input type="tel" id="phone" name="phone"pattern="[0-9]{9}" placeholder="Introduzca su número de teléfono" required>
                <textarea class="mensaje" name="mensaje" placeholder="Escriba su mensaje" required></textarea>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </div>

</body>
</html>