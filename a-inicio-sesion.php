<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=divice-width">
    <title>Help Paws</title>
    <link rel="website icon" type="png" href="img/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,700;1,300&display=swap" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css"
    />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet"  href="css/nav.css">
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/experiences.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/formurario.css">
    <link rel="stylesheet" href="css/administrador.css">
    <script defer src="js/app.js"></script>
</head>
<body>
    <header class="topheader">
        <?php
         include("z-menu.php");
        ?>
    </header>
    <img class="logo-menu"  
                height='130'
                width='130'
                src='img/logo.png' 
                alt='Help Paws'
            /> 
        <section class="form-register">
            <h2 class="titulo">Inicio de sesion</h2> 
            <form  action="administrador.php" method="POST" name="fgdfghfg">   
            <input  class="controls" type="text" name="correo electronico"  placeholder="correo electronico:">
            <input  class="controls" type="password" name="contrasenia"  placeholder="contraseña">
            <!--<span id="show-hide-passwd" action="hide" class="input-group-addon glyphicon glyphicon glyphicon-eye-open"></span>-->
            <input  class="controls" type="text" name="suma" placeholder="¿Cuál es el resultado de 1+2?">  
            <input class="botons" type="submit" value="Inicio de sesion">
            </form>  
            <p> No tengo cunta <a href="a-crear-cuenta.php"> registrarse</a></p>           
        </section>            
        
</body>
    <footer class="pie-pag">Copyright &copy; Help Paws </footer>
</html>

        
            
