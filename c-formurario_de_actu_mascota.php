
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
         include("c-menu.php");
        ?>
    </header> 
    <img class="logo-menu"
                height='130'
                width='130'
                src='img/logo.png' 
                alt='Help Paws'
            />     
           <?php 
           $ccodigo=$_POST["codigo"];  

            include ("z-conexion.php");
        $sql = "SELECT * FROM mascotas WHERE codigo='$ccodigo'";
        if(!$result = $db->query($sql)){
     die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                }
            while($row = $result->fetch_assoc())
            {
                
                $nnombres_mascota=stripslashes($row["nombres_mascota"]);
                $rraza=stripslashes($row["raza"]);
                $ttipo_mascota=stripslashes($row["tipo_mascota"]);
                $ccaracteristicas=stripslashes($row["caracteristicas"]);
                $ssexo=stripslashes($row["sexo"]);
                $eestado=stripslashes($row["estado"]);
                $ffoto_mascota=stripslashes($row["foto_mascota"]);
                $ccorreo_electronico=stripslashes($row["correo_electronico"]);
                $ccodigo=stripslashes($row["codigo"]); 
                
            } 
        

echo"<section class='form-register'>";
echo"<h2 class='titulo'>Actualizar mascota</h2>";
echo"<form action='c-actualizar_mascota.php' method='post' enctype='multipart/form-data' name='form1' id='form1'>";
echo"<input required class='controls' type='hidden' name='correo_electronico' value= '$ccorreo_electronico'>";
echo"<input required class='controls'  type='hidden' name='codigo'value= '$ccodigo'>";
echo"<input required class='controls'  type='file' name='foto_mascota'value='$ffoto_mascota' >";
echo"<input required  class='controls' type='text' name='nombres_mascota' value='$nnombres_mascota'>";
echo"<input required  class='controls' type='text' name='raza'  value='$rraza'>";
echo"<input required class='controls' type='text' name='caracteristicas'  value='$ccaracteristicas'>";
echo"<select name='tipo_mascota' id='tipo_mascota'>";
echo"<option  class='controls' type='text' name='tipo_mascota'  value='$ttipo_mascota'>$ttipo_mascota</option>";
echo"<option required class='controls' type='text' name='tipo_mascota'  placeholder='Especie:'>Perro</option>";
echo"<option required class='controls' type='text' name='tipo_mascota'  placeholder='Especie:'>Gato</option>";
echo"</select>";
echo"<br/>";
echo"<select name='sexo' id='sexo'>";
echo"<option  class='controls' type='text' name='sexo'  value='$ssexo'>$ssexo</option>";
echo"<option required class='controls' type='text' name='sexo'  placeholder='Sexo:'>macho</option>";
echo"<option required class='controls' type='text' name='sexo'  placeholder='Sexo:'>hembra</option>";
echo"</select>";
echo"<br/>";
echo"<select name='estado' id='estado'>";
echo"<option  class='controls' type='text' name='estado'  value='$eestado'>$eestado</option>";
echo"<option required class='controls' type='text' name='estado'  placeholder='Estado:'>Con hogar</option>";
echo"<option required class='controls' type='text' name='estado'  placeholder='Estado:'>Sin hogar</option>";
echo"<option required class='controls' type='text' name='estado'  placeholder='Estado:'>Fallecido</option> ";
echo"</select>";
echo"<br/>";
echo"<input class='botons' type='submit' value='Actualizar mascota'>";   
 ?>
</form>  
</section>
        <center><br/><a href="c-mi_perfil.php">Ir atras</a></center>
    </body>
    <footer class="pie-pag">Copyright &copy; Help Paws </footer>
</html>

