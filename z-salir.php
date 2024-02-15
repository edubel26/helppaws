<?php
session_start();
$_SESSION["administrador"]=0;
$_SESSION["cliente"]=0;
$_SESSION["usuario"]=0;
$_SESSION["correo"]=0;
header("Location:inicio.php");
?>