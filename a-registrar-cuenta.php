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
            <h2 class="titulo">Crear cuenta</h2>
            <form action="a-registrar-cuenta.php" method="POST" name="fgdfghfg">
                <input required class="controls" type="text" name="nombres"  placeholder="Nombre:">
                <input required class="controls" type="text" name="apellidos"  placeholder="Apellido:">
                <input required class="controls" type="email" name="correo_electronico"  placeholder="Correo Electrónico">
                <input required class="controls" type="password" name="contrasenia"  placeholder="Contraseña"> 
                <p><input required type="checkbox" name="hm" value=""> Acepto que mi información se utilizára conferme a la politica de
                privacidad y politicas de <a href="#"> Help Paws.</a></p>
                <input  class="botons" type="submit" value="Crear Cuenta">   
            </form>  
            <p>Ya esta registrado <a href="a-inicio-sesion.php"> Iniciar sesion</a></p>
        </section>
        <div class="texto">
        <?php  
          
            class resistro {

            public function registro ($nombres, $apellidos, $correo_electronico, $contrasenia){

                include("z-conexion.php");
                $existe="0";
                $sql = "SELECT * FROM usuarios WHERE correo_electronico='$correo_electronico'";
                if(!$result = $db->query($sql)){
                die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                }
                 while($row = $result->fetch_assoc())
                {
                $ccorreo_electronico=stripslashes($row["correo_electronico"]);
                $existe=$existe+1;
                      
                }
                if ($existe=="0")
                {
                include ("z-conexion.php");
                mysqli_query($db,"INSERT INTO usuarios (id_usuario, nombres, apellidos, correo_electronico, contrasenia) VALUES 
                (NULL, '$nombres', '$apellidos', '$correo_electronico','$contrasenia')") or die(mysqli_error($db));

                $fk_id_rol="3";

                mysqli_query($db,"INSERT INTO permisos (id_permisos, correo_electronico, fk_id_rol) VALUES 
                      (NULL, '$correo_electronico', '$fk_id_rol')") or die(mysqli_error($db));



                    header("Location:a-inicio-sesion.php");

                }
                if ($existe!="0")
               
                {  echo "<center> <br/>";
                      echo "<br/>";          
                echo "¡El usuario ya existe!</center>";
                }
      
           echo "<center> <br/>";
            echo "<a href='a-inicio-sesion.php'>Iniciar sesion </a></center>";
          }
        }   
        $final=new resistro ();
        $final->registro($_POST["nombres"],$_POST["apellidos"],$_POST["correo_electronico"], $_POST["contrasenia"]);  
      ?>
      </div>  
</body>
    <footer class="pie-pag">Copyright &copy; Help Paws </footer>
</html>



