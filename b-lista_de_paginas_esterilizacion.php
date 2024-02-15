<?php
include ("b-seguridad-administrador.php");
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
         include("z-menu-administrador.php");
        ?>
    </header>
    <img class="logo-menu" 
                height='130'
                width='130'
                src='img/logo.png' 
                alt='Help Paws'
            /> 
    <div class="segundo-fondo">
        <section class="profile1">
            <div class="profile-info1">
                <h2 class="profile-title1">Esterilización Mascotas </h2>
                <a class="profile-details1" href="https://bogota.gov.co/mi-ciudad/ambiente/esterilizacion-gratuita-de-animales-en-bogota-cupos-horarios-y-mas">alcaldia de bogota</a><br/>
            </div>
            <img class="profile-img1"
                src='img/perro.png' 
                alt='perro'
            />
        </section>
    </div>
    </br>
    </br>
      <center><a href="b-vista_USUARIO.php">Regresar al MENU</a></center>
    </body>
    <footer class="pie-pag">Copyright &copy; Help Paws </footer>
</html>