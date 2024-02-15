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
            
<section class="form-register">
<h2 class="titulo">Ingresar mascota</h2>
<form action="b-registrando_mascota.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
<input required class="controls" type="hidden" name="correo_electronico" value='<?php echo $_SESSION["correo"];?>'> 
<input required class="controls"  type="file" name="foto_mascota">
<input required class="controls"  type="text" name="codigo" placeholder="codigo de identificacion de la mascota:"> 
<input required  class="controls" type="text" name="nombres_mascota"  placeholder="Nombres de la mascota:">
<input required  class="controls" type="text" name="raza"  placeholder="Raza">
<input required class="controls" type="text" name="caracteristicas"  placeholder="Caracteristicas:"> 
<select name="tipo_mascota" id="tipo_mascota">
<option  class="controls" type="text" name="tipo_mascota"  placeholder="Especie:">Especie:</option>
<option required class="controls" type="text" name="tipo_mascota"  placeholder="Especie:">Perro</option>
<option required class="controls" type="text" name="tipo_mascota"  placeholder="Especie:">Gato</option>
</select>
<br/>
<select name="sexo" id="sexo">
<option  class="controls" type="text" name="sexo"  placeholder="Sexo:">Sexo:</option>
<option required class="controls" type="text" name="sexo"  placeholder="Sexo:">macho</option>
<option required class="controls" type="text" name="sexo"  placeholder="Sexo:">hembra</option>
</select>
<br/>
<select name="estado" id="estado">
<option  class="controls" type="text" name="estado"  placeholder="Estado:">Estado:</option>
<option required class="controls" type="text" name="estado"  placeholder="Estado:">Con hogar</option>
<option required class="controls" type="text" name="estado"  placeholder="Estado:">Sin hogar</option>
<option required class="controls" type="text" name="estado"  placeholder="Estado:">Fallecido</option> 
</select>
<br/>
<input class="botons" type="submit" value="Registrar mascota">   

</form>  
</section>
        <center><br/><a href="b-vista_usuario.php">Ir atras</a></center>
    </body>
    <footer class="pie-pag">Copyright &copy; Help Paws </footer>
</html>
