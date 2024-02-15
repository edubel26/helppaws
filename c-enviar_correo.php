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
<header class="topheader">
    <?php
    include("c-menu.php");
    ?>
</header>
    <img class="logo-menu"
    height="130"
    width="130"
    src="img/logo.png"
    alt="Help Paws"
    />
    <div>
        <section class="contact" id="contact">
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
                    <a href="#youtube" class="social-link">
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
    <?php
if($_POST) {
    $visitor_name = "";
    $visitor_email = "";
    $email_title = "";
    $concerned_department = "";
    $visitor_message = "";
    
    if(isset($_POST['visitor_name'])) {
      $visitor_name = filter_var($_POST['visitor_name'], FILTER_SANITIZE_STRING);
    }
    
    if(isset($_POST['visitor_email'])) {
    	$visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
    	$visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
    }
    
    if(isset($_POST['email_title'])) {
    	$email_title = filter_var($_POST['email_title'], FILTER_SANITIZE_STRING);
    }
    
    if(isset($_POST['concerned_department'])) {
    	$concerned_department = filter_var($_POST['concerned_department'], FILTER_SANITIZE_STRING);
    }
    
    if(isset($_POST['visitor_message'])) {
    	$visitor_message = htmlspecialchars($_POST['visitor_message']);
    }
    
    if($concerned_department == "billing") {
    	$recipient = "heidiardilavargas47@gmail.com";
    }

    else if($concerned_department == "technical support") {
    	$recipient = "cliff.tique@gmail.com";
    }
    else {
    	$recipient = "beltran502@hotmail.com";
    }
    
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $visitor_email . "\r\n";
    
    if(mail($recipient, $email_title, $visitor_message, $headers)) {
    	echo "<p>Thank you for contacting us, $visitor_name. You will get a reply within 24 hours.</p>";
    } else {
    	echo '<p>We are sorry but the email did not go through.</p>';
    }
    
} else {
    echo '<p>Something went wrong</p>';
}
?>
    </body>
    <footer class="pie-pag">Copyright &copy; Help Paws </footer>
</html>
