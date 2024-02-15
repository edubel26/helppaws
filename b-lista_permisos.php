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
    <div class="administrador">
   <center> <?php
class administrador {
public function creaando_permisos () {

            include ("z-conexion.php");
        $sql = "SELECT * FROM permisos WHERE  fk_id_rol='2' or fk_id_rol='3'";
        if(!$result = $db->query($sql)){
        die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
        }
        while($row = $result->fetch_assoc())
        {
        $ccorreo_electronico=stripslashes($row["correo_electronico"]);
        /////////////SUBCONSULTA
        $sql2 = "SELECT * FROM usuarios WHERE correo_electronico='$ccorreo_electronico'";
        if(!$result2 = $db->query($sql2)){
        die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
        }
        while($row2 = $result2->fetch_assoc())
        {
        $nnombres=stripslashes($row2["nombres"]);
        $aapellidos=stripslashes($row2["apellidos"]);
        }

        /////////////SUBCONSULTA

        $ffk_id_rol=stripslashes($row["fk_id_rol"]);

        //////subconsulta
        $sql3 = "SELECT * FROM roles WHERE id_rol='$ffk_id_rol'";
        if(!$result3 = $db->query($sql3)){
        die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
        }
        while($row3 = $result3->fetch_assoc())
        {
        $rrol=stripslashes($row3["rol"]);
        }
        //////subconsulta

        echo "-------<br/>";
        echo "<strong> correo:</strong> $ccorreo_electronico"; echo "<br/>"; echo "Usuario: $aapellidos"; echo " ";echo $nnombres; echo "<br/>";   
        echo "Rol: $rrol";echo " ";
        //echo "$nnombres";  echo "<br/>";



        //echo "Eliminar<br/>";
        echo "<form name='etert' method='POST' action='b-actualizar_permiso.php' required>";
        echo "<input type='checkbox' required>";

        echo "<input name='correo_electronico' type='hidden' value='$ccorreo_electronico'>";
        echo "<input name='fk_id_rol' type='text' value='$ffk_id_rol'>";
        echo "<input type='submit' value='actuaizar permiso'>";
        echo "</form><br/>";
        echo "-------<br/>";



        echo "<br/>";

        //poner un abiso que diga echo "Usuario modificado correctamente<br/>";

        }

        echo "<a href='ADMINISTRADOR.php'>Regresar atras</a>";
    }
}
$final=new administrador();
$final->creaando_permisos();

?>
</center>
</div>        
        
</body>
    <footer class="pie-pag">Copyright &copy; Help Paws </footer>
</html>



