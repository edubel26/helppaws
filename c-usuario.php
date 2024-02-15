<?php 
include("c-seguridad_cliente.php");
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
         include("C-menu.php");
        ?>
    </header>
    <img class="logo-menu"
                height='130'
                width='130'
                src='img/logo.png' 
                alt='Help Paws'
            /> 
    <section class="about-section text-center" id="about">
  
    <div class='contenedor'> 
    <div class='contenedor-botones'>
        <link href='css/menu_imag.css' rel='stylesheet'>
        
        <figure>
        <a href="c-registro_mascota.php"><img src='img/menu/b1.png' ></a>
        </figure>
        <figure>
        <a href="c-lista_de_paginas_vacunas.php"><img src='img/menu/b2.png'  ></a>
        </figure>
        <figure>
        <a href="c-lista_de_paginas_esterilizacion.php"><img src='img/menu/b3.png' ></a>     
        </figure>
        <figure>
        <a href="c-reporte_maltrato.php"><img  clas='img'src='img/menu/b4.png'></a>
        </figure>  
        </div>
        </section>      
        
</body>
    <footer class="pie-pag">Copyright &copy; Help Paws </footer>
</html>