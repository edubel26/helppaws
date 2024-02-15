<?php

$correo_electronico=$_POST["correo_electronico"];
$fk_id_rol=$_POST["fk_id_rol"];

include ("z-conexion.php");

mysqli_query($db,"UPDATE permisos SET  fk_id_rol='$fk_id_rol' WHERE correo_electronico='$correo_electronico'");
header ("Location:b-lista_permisos.php");

?>