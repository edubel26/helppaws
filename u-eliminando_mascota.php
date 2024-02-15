<?php
$codigo=$_POST["codigo"];
include ("z-conexion.php");
mysqli_query($db,"DELETE FROM mascotas WHERE codigo='$codigo'  ");
header ("Location: u-mi_perfil.php");
?>    