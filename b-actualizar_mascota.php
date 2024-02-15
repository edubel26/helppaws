
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
                        
        <?php

                include ('2destinobitacoras.php');
                
                $nombres_mascota=$_POST["nombres_mascota"];
                $raza=$_POST["raza"];
                $tipo_mascota=$_POST["tipo_mascota"];
                $caracteristicas=$_POST["caracteristicas"];
                $sexo=$_POST["sexo"];
                $estado=$_POST["estado"];                            
                $correo_electronico=$_POST["correo_electronico"]; 
                $codigo=$_POST["codigo"];     
                 
                $imagen= $_FILES['foto_mascota']['name'];
            
                $tipo_archivo = $_FILES['foto_mascota']['type'];
                $tamano_archivo = $_FILES['foto_mascota']['size'];
                //  $nomimag=$clave.'.png';

                //13:23:45
                $num=date("GHs");
                $imagenfinal=$num.$imagen;
                //$imagenfinal=$imagen;
                //echo "$imagenfinal";
                include ("z-conexion.php");

                //$nombrearch=$imagenfinal;
                if (move_uploaded_file($_FILES['foto_mascota']['tmp_name'],$destino.'/'.$imagenfinal))
                
                {
                    
                mysqli_query($db,"INSERT INTO mascotas (foto_mascota) VALUES ('$imagenfinal')");
                mysqli_query($db,"UPDATE mascotas SET nombres_mascota = '$nombres_mascota' WHERE codigo='$codigo'");     
                mysqli_query($db,"UPDATE mascotas SET raza = '$raza' WHERE codigo='$codigo'");
                mysqli_query($db,"UPDATE mascotas SET tipo_mascota = '$tipo_mascota' WHERE codigo='$codigo'");
                mysqli_query($db,"UPDATE mascotas SET caracteristicas = '$caracteristicas' WHERE codigo='$codigo'");
                mysqli_query($db,"UPDATE mascotas SET sexo = '$sexo' WHERE codigo='$codigo'");
                mysqli_query($db,"UPDATE mascotas SET estado = '$estado' WHERE codigo='$codigo'");
                mysqli_query($db,"UPDATE mascotas SET foto_mascota = '$imagenfinal' WHERE codigo='$codigo'");


                echo"    <div class='segundo-fondo'>";
                echo"   <section class='profile1' >";
                echo"        <div class='profile-info1'>";
                echo"        <h2 class='profile-title1'> ¡Mascota modificada correctamente! </h2>"; 
                echo"        </div>";
                echo"        <img class='profile-img1'";
                echo"                src='img/perro.png' ";
                echo"                alt='perro'";
                echo"            />";
                echo"    </div>";  
                echo"    </section>";        
                echo"      </div>";
                echo "";
                echo "<br/>";
                echo "<center><a href='b-mi_perfil.php'>Ir a mi perfil </a>";

           }  
           
      

        ?>
 
</form>  
</section>

    </body>
    <footer class="pie-pag">Copyright &copy; Help Paws </footer>
</html>

