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
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/experiences.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/formurario.css">
    <link rel="stylesheet" href="css/administrador.css">
    <script defer src="js/app.js"></script>
</head>
    <img class="logo-menu"
    height="130"
    width="130"
    src="img/logo.png"
    alt="Help Paws"
    />
<?php
echo"<center>";
include ("z-conexion.php");

$sql = "SELECT * FROM usuarios";
if(!$result = $db->query($sql)){
  die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
}
echo "<table border='1'>";
echo "<tr bgcolor='#E95A0C'>";
echo "<th>";
echo "Correo electronico";
echo "</th>";
echo "<th>";
echo "Usuario";
echo "</th>";
echo "<th>";
echo "Permiso";
echo "</th>";

echo "<tr>";

while($row = $result->fetch_assoc())
{
   
	$aapellidos=stripslashes($row["apellidos"]);
    $nnombres=stripslashes($row["nombres"]);
    $ccorreo_electronico=stripslashes($row["correo_electronico"]);
    echo "<tr>";
    echo "<td>";
    echo $ccorreo_electronico; 
    echo "</td>";
    
    echo "<td>";
    echo "$aapellidos"; echo " ";
    echo"$nnombres"; 
    echo "</td>";

    echo "<td>";
    //echo "permiso"; 
    $sql2 = "SELECT * FROM permisos WHERE correo_electronico='$ccorreo_electronico'";
if(!$result2 = $db->query($sql2)){
  die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
}
while($row2 = $result2->fetch_assoc())
{
   	$ffk_id_rol=stripslashes($row2["fk_id_rol"]);
    //echo $ffk_id_rol;

    ///////subconsulta
$sql3 = "SELECT * FROM roles WHERE id_rol='$ffk_id_rol'";
if(!$result3 = $db->query($sql3)){
  die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
}
while($row3 = $result3->fetch_assoc())
{
   	$rrol=stripslashes($row3["rol"]);
     echo $rrol; echo "<br/>";
}  
///////subconsulta  

}
 
    echo "</td>";
    echo "</tr>";
}
echo "</table>";
echo "<br/><a href='javascript:window.print(); void 0;' style='color:#006666'>Imprimir o Generar PDF</a>";
echo "<br/><br/><a href='administrador.php'>Ir a menu</a>";echo"</center>";
?>
    </body>
    <footer class="pie-pag">Copyright &copy; Help Paws </footer>
</html>