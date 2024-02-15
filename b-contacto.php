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
<header class="topheader">
    <?php
    include("z-menu-administrador.php");
    ?>
</header>
    <img class="logo-menu"
    height="130"
    width="130"
    src="img/logo.png"
    alt="Help Paws"
    />
    <div>
        <section class="contact" id="contact" action="c-enviar_.php" >
        <h2 class="contact-title">contactos</h2>
            <div class="contact-details">
                <div class="contact-details-group">
                    <p class="contact-label">Dirección:</p>
                    <p class="contact-text">Bogotá, colombia</p>
                </div>
                <div class="contact-details-group">
                    <p class="contact-label">Email:</p>
                    <p class="contact-text">helppaws@gmail.com</p>
                </div>
                <div class="contact-details-group">
                    <p class="contact-text">Deje su mensaje y con gusto le responderemos</p>
                </div>
            </div>
                <form  class="contact-form">
                    <div class="contact-form-group">
                    Tipo de mensaje <br/>
                    <select id="department-selection" name="concerned_department" required>
        <option value="">Selecionar</option>
        <option value="Publiciad<">Publiciad</option>
        <option value="Peticiones">Peticiones</option>
        <option value="Reclamos<">Reclamos</option>
        <option value="Donaciones">Donaciones</option>
        </select>
            </div>
                    <div class="contact-form-group">
                    <label for="name">Nombre:</label>
                    <input required type="text" name="name" id="name">
            </div>
            <div class="contact-form-group">
                <label for="email">Email:</label>
                <input required type="email" name="email" id="email">
            </div>
            <div class="contact-form-group">
                <label for="message">Mensaje:</label>
                <textarea  required name="message" id="message"  rows="6"></textarea>
            </div>
            <button type="submit" class="contact-form-submit" >Enviar</button>
        </form>
        <nav class="social">
            <ul class="social-list">
                <li>
                    <a href="#twitter">
                        <img src="img/social/twitter.svg" alt="twitter profile">
                    </a>
                </li>
                <li class="social-item">
                    <a href="https://www.youtube.com/watch?v=qeTL4ladsbg&t=17s" class="social-link">
                        <img src="img/social/youtube.svg" alt="youtube profile">
                    </a>
                </li>
                <li class="social-item">
                    <a href="#github" class="social-item">
                        <img src="img/social/github.svg" alt="github profile">
                    </a>
                </li>
                <li class="social-item">
                    <a href="#linkedin">
                        <img src="img/social/linkedin.svg" alt="linkedin profile">
                    </a>
                </li>
            </ul>
        </nav> 
        </section>
    </div>
    </body>
    <footer class="pie-pag">Copyright &copy; Help Paws </footer>
</html>
