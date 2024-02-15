<?php
echo"<header class='topheader'>";
echo" <nav class='topnav'>";
echo"      <a class='logo'>";
echo"         <img   ";
echo"         height='30'";
echo"         width='130'";
echo"         src='img/nombre.png' ";
echo"         alt='Help Paws'  ";            
echo"      />";
echo"  </a>";
echo" <button class='open-menu' aria-label='Abrir menú'>";
echo"     <img src='img/hamburger-icon.svg' alt='abrir menú' />";
echo"  </button>";
echo" <ul class='menu'>";
echo"      <button class='close-menu' aria-label='Cerrar menú'>";
echo"         <img src='img/close-icon.svg' alt='cerrar menú' />";
echo"      </button>";
echo"     <li><a href='inicio.php' class='selcted'>Inicio</a></li>";
echo"     <li><a href='a-inicio-sesion.php'>Inicio de sesion </a></li>";
echo"    <li><a href='a-crear-cuenta.php'>Crear cuenta</a></li>";
echo"  </ul>";
echo"</nav>";
echo"</header>";
?>