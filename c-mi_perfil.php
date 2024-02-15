<?php 
$correo_electronico=["correo"];
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
    <link rel="stylesheet" href="css/tbody.css">
    
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
    <div class="administrador">
    
    <?php
        class cliente
        {
            public function elistar($correo_electronico) 
            {
                $correo_electronico=$_SESSION["correo"];
                      
        
                include ("z-conexion.php");

 
                $sql = "SELECT * FROM mascotas WHERE correo_electronico='$correo_electronico'";  

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
                $ccodigo=stripslashes($row["codigo"]);
                $ccorreo_electronico=stripslashes($row["correo_electronico"]);
                include ("5ruta.php");

                $imagen=$folder.$ffoto_mascota; 
            
               
                echo"    <div class='container'>";
                echo"        <table>";
                echo"            <thead>";
                echo"                <tr>";
                echo"                    <th>Nombre</th>";
                echo"                    <th>Raza</th>";
                echo"                    <th>Tipo de mascota</th>";
                echo"                    <th>Sexo</th>";
                echo"                    <th>Caracteristicas</th>";
                echo"                    <th>Estado</th>";
                echo"                    <th></th>";
                echo"                </tr>";
                echo"            </thead>";
                echo"            <tbody>";
                echo"                <tr>";             
                echo"                    <td>$nnombres_mascota</td>";
                echo"                    <td>$rraza</td>";
                echo"                    <td>$ttipo_mascota</td>";
                echo"                    <td>$ccaracteristicas</td>";
                echo"                    <td>$ssexo</td>";
                echo"                    <td>$eestado</td>";
                echo "                   <img src='$imagen' width=150 height=150/>";
                echo"                </tr>";
                echo"            </tbody>";                
                echo"        </table>";
                echo "<form  name='etert' method='POST' action='c-formurario_de_actu_mascota.php' required>";
                echo "<input name='codigo' type='hidden' value='$ccodigo'>";
                echo "<input class='container-bot' type='submit' value='Actualizar'>";
                echo "</form>";

                echo "<form  name='etert' method='POST' action='c-eliminando_mascota.php' required>";
                echo "<input type='checkbox' required>";
                echo "<input name='codigo' type='hidden' value='$ccodigo'>";
                echo "<input class='container-bot' type='submit' value='Eliminar'>";
                echo "</form>";
                echo"    </div>";
                echo"<br/>";
                /////////////////////////////////////////////////
                }
                
        echo"<br/>";
        echo"<center>";
        echo"<a href='c-vista_usuario.php'>Ir a menu</a><br/><br/><br/>";
        echo"</center>";
                } 
                
                
       
            }
        
        $final=new cliente();
        $final->elistar($_SESSION["correo"]);

    ?> 
          
</div>        
</body>
    <footer class="pie-pag">Copyright &copy; Help Paws </footer>
</html>


        
