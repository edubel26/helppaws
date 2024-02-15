<?php
session_start();
if ($_SESSION["cliente"]!="1")
{
header("Location: salir.php");
}
?>