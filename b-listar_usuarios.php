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
class administrador 
{
    public function elistar_usuarios () {
    include ("z-conexion.php");
    $sql = "SELECT * FROM permisos WHERE  fk_id_rol='3'";  
   if(!$result = $db->query($sql)){
   die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
   }
   while($row = $result->fetch_assoc())
   {                
   $ccorreo_electronico=stripslashes($row["correo_electronico"]);
   ///////////////////////////////////////////////
   $sql2 = "SELECT * FROM usuarios WHERE correo_electronico='$ccorreo_electronico'";
   if(!$result2 = $db->query($sql2)){
   die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
   }
   while($row2 = $result2->fetch_assoc())
   {
   $nnombres=stripslashes($row2["nombres"]);
   $aapellidos=stripslashes($row2["apellidos"]);
   $ccorreo_electronico=stripslashes($row2["correo_electronico"]);

   echo"    <div class='container'>";
   echo"        <table>";
   echo"            <thead>";
   echo"                <tr>";
   echo"                    <th>N°</th>";
   echo"                    <th>correo</th>";
   echo"                    <th>nombres</th>";
   echo"                    <th>apellidos</th>";
   echo"                </tr>";
   echo"            </thead>";
   echo"            <tbody>";
   echo"                <tr>";
   echo"                    <td></td>";
   echo"                    <td>$ccorreo_electronico</td>";
   echo"                    <td>$nnombres</td>";
   echo"                    <td>$aapellidos</td>";
   echo"                </tr>";
   echo"            </tbody>";
   echo"        </table>";
   echo"    </div>";


   /////////////////////////////////////////////////
   }

   } 

echo"<br/>";
echo"<center>";
echo"<a href='administrador.php'>Ir a la capa de ADMINISTRADOR</a><br/><br/><br/>";
echo"</center>";
}


}  

$final=new administrador();
$final->elistar_usuarios();
?>       
</div>        
</body>
    <footer class="pie-pag">Copyright &copy; Help Paws </footer>
</html>



