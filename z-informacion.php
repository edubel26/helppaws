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

    <section class="experiences" id="experience">
              <img src="img/wave.svg" alt="división" class="wave" >
              <div class="experiences-body">
                  <h2 class="experiences-title"><img 
                                height='100'
                                 width='450'
                              src='img/nombre.png' 
                               alt='Help Paws'              
                               /></h2>
                           
                  <div class="experiences-grid">
                    <div class="empty"></div>
              <div class="line"></div> 
                    <div class="experience">
                <div class="experience-date">¿Quiénes somos?</div>
                <div class="experience-description">
                Somos un aplicativo web que está enfocado en el traspaso de información de servicios veterinarios a través de links, que los llevara a las páginas y sitos webs que cubren dichas necesidades “vacunación, estetización y maltrato” y así poder eliminar indirectamente el maltrato animal. 
                </div>
              </div>
              <div class="experience experience_left">
                <div class="experience-date">Visión</div>
                <div class="experience-description">
                Atreves de esta aplicación web tenemos como objetivo bajar indirectamente los índices de abandono y maltrato en la ciudad de Bogotá en la localidad de Ciudad Bolívar, luego que tengamos un dominio con buen desempeño con el enfoque de la aplicación web con un buen apoyo de la comunidad nos ampliaremos a municipios, departamentos y así poder hacer un cubrimiento a nivel nacional con posibilidad de llegar a nivel mundial.   
                </div>
              </div>
              <div class="line"></div>
              <div class="empty"></div>
              <div class="empty"></div>
              <div class="line"></div>
              <div class="experience">
                <div class="experience-date">Misión </div>
                <div class="experience-description">
                En el 2024 Con apoyo de los ciudadanos llegaremos a la meta de expandir nuestra aplicación web, cumpliendo así con un porcentaje de nuestra misión y con nuevas proyecciones hacia el futuro teniendo en cuenta nuestros objetivos y metas.
                </div>
              </div>
            </div>
              <center><a class="profile-btn" href="pdf/HELPPAWS.docx" download >Para más información descargar documento</a></center><br/>
          </div>
          <img src="img/wave.svg" alt="división" class="wave wave_bottom">  
        </section>
    
</body>
</html>



