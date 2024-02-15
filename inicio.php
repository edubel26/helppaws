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
        <?php
         include("z-menu.php");
        ?>
    <div class="horizontal-padding vertical-padding">
        <section class="profile">
          <div class="profile-info">
            <h1 class="profile-title">HELP PAWS</h1>
            <p class="profile-details">
                trasmiter informacion al usuario sobre servicios que brindan 
                las entidades que pueden acoger las necesidades del usuario y su mascotas.
            </p>
            <a  href= "z-informacion.php" class="profile-bt"> Para más información</a>
          </div>
            <img
              class="profile-img"
              src="img/logo.png"
              alt="programador"
            /> 
        </section>
    </div>
    
</body>
<footer class="pie">Copyright &copy; Help Paws </footer>
</html>



