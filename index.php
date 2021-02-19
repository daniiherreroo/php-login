<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login & Signup</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
    <?php require 'header.php' ?>
    <div class="contenedor-form">
        <div class="toggle">
            <span>Registrarse</span>
        </div>
        
        <div class="formulario">
            <h1>Iniciar Sesión</h1>
            <form action="login.php" method="post">
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <input type="submit" value="Iniciar Sesión">
            </form>
        </div>
        
        <div class="formulario">
            <h1>Registrarse</h1>
            <form action="signup.php" method="post">
                <input type="name" name="name" placeholder="Introduzca su nombre" required>
                <input type="email" name="email" placeholder="Introduzca su Email" required>
                <input type="password" name="password" placeholder="Introduzca una contraseña" required>
                <input type="submit" value="Registrarse">
            </form>
        </div>
    </div>
    <script src="js/jquery-3.1.1.min.js"></script>    
    <script src="js/main.js"></script>
</body>
</html>