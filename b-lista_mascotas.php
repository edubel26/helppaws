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
    <link rel="stylesheet" href="css/tbody.css">
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
    <div class="administrador">
    
    <?php
        class mascotas 
        {
            public function elistar() 
            {
                    
                include ("z-conexion.php");
                
                ///////////////////////////////////////////////
                $sql = "SELECT * FROM mascotas";  
                if(!$result = $db->query($sql)){
                die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                }
                while($row = $result->fetch_assoc())
                { 
                $sql= "SELECT COUNT(`raza`) as `cantraza`, COUNT(`estado`) as `yyu` FROM `mascotas` GROUP BY `raza`";

                $iid_mascota=stripslashes($row["id_mascota"]);
                $nnombres_mascota=stripslashes($row["nombres_mascota"]);
                $rraza=stripslashes($row["raza"]);
                $ttipo_mascota=stripslashes($row["tipo_mascota"]);
                $ccaracteristicas=stripslashes($row["caracteristicas"]);
                $ssexo=stripslashes($row["sexo"]);
                $eestado=stripslashes($row["estado"]);
                $ffoto_mascota=stripslashes($row["foto_mascota"]);

                echo"    <div class='container'>";
                echo"        <table>";
                echo"            <thead>";
                echo"                <tr>";
                echo"                    <th></th>";
                echo"                    <th>Raza</th>";
                echo"                    <th>Especie</th>";
                echo"                    <th>Sexo</th>";
                echo"                    <th>Estado</th>";
                echo"                </tr>";
                echo"            </thead>";
                echo"            <tbody>";
                echo"                <tr>";
                echo"                    <td></td>";
                echo"                    <td>$rraza </td>";
                echo"                    <td>$ttipo_mascota</td>";
                echo"                    <td>$ssexo</td>";
                echo"                    <td>$eestado </td>";
                echo"                </tr>";
                echo"                </tr>";
                echo"                </tr>";
                echo"                </tr>";
                echo"            </tbody>";
                echo"        </table>";
                echo"    </div>";


                /////////////////////////////////////////////////
                }

                } 
            }
        
        $final=new mascotas ();
        $final->elistar();
        echo"<br/>";
        echo"<center>";
        echo"<a href='b-vista_cliente.php'>Ir a la capa de cliente</a><br/><br/><br/>";
        echo"</center>";
    ?> 
          
</div>        
</body>
    <footer class="pie-pag">Copyright &copy; Help Paws </footer>
</html>

