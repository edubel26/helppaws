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
    <?php
class administrador {
public function creaando_permisos ($correo_electronico, $fk_id_rol) {
                
    include("z-conexion.php");           
    $existe="0";
   $sql = "SELECT * FROM permisos WHERE correo_electronico='$correo_electronico' AND fk_id_rol='$fk_id_rol'";
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
                mysqli_query($db,"INSERT INTO permisos (id_permisos, correo_electronico, fk_id_rol) VALUES 
(NULL, '$correo_electronico', '$fk_id_rol')") or die(mysqli_error($db));
echo "Permiso registrado correctamente";
}
if ($existe!="0")
{
            
echo "¡El permiso ya existe!";
}

echo "<br/>";
echo "<a href='b-asignar_permisos.php'>Regresar atras</a>";
}
}
$final=new administrador();
$final->creaando_permisos($_POST["correo_electronico"], $_POST["rol"]);
                ?>
</br>
<a href='ADMINISTRADOR.php'>Ir atras</a> 
 </div>       
</body>
    <footer class="pie-pag">Copyright &copy; Help Paws </footer>
</html>



