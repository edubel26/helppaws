<?php

$db = new mysqli('localhost', 'root', '', 'v1_helppaws');
$acentos = $db->query("SET NAMES 'utf8'");
if($db->connect_error > 0)
{
    die('No se puede conectar [' . $db->connect_error . ']');
	
}
?>