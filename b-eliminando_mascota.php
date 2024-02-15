<?php
$codigo=$_POST["codigo"];
include ("z-conexion.php");
mysqli_query($db,"DELETE FROM mascotas WHERE codigo='$codigo'  ");
header ("Location: b-mi_perfil.php");
?>    