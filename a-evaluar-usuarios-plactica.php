<?php
session_start(); 
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

    <?php
        class permiso {
            
            public function evaluar ($correo_electronico, $contrasenia, $suma)
            {
                    

                     if($suma=="3"){

                     $cont="0";
                      include("z-conexion.php");   
                    
                        
                        $sql="SELECT * FROM usuarios WHERE correo_electronico='$correo_electronico' AND contrasenia='$contrasenia'";
                        if(!$result = $db->query($sql)){
                        die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                        }
                        while($row = $result->fetch_assoc())
                        {
                        $nnombres=stripslashes($row["nombres"]);
                        $cont=$cont+1;			
                        }
                    //}//*d
                    if ($cont=="0" )
                    {
                    
                        include("Z-menu.php");
                    
                        echo "<br/>";
                        echo" <img class='logo-menu'";
                        echo"               height='130'";
                        echo"                width='130'";
                        echo"                src='img/logo.png'"; 
                        echo"                alt='Help Paws'";
                        echo"            /> ";
                        echo"    <div class='segundo-fondo'>";
                        echo"   <section class='profile1' >";
                        echo"        <div class='profile-info1'>";
                        echo"        <h2 class='profile-title1'> ¡Error en los datos! </h2>"; 
                        echo"        </div>";
                        echo"        <img class='profile-img1'";
                        echo"                src='img/perro.png' ";
                        echo"                alt='perro'";
                        echo"            />";
                        echo"    </div>";  
                        echo"    </section>";        
                        echo"      </div>";
                        echo "<br/>";
                        echo "<center> <a href='a-inicio-sesion.php'> Regresar al inicio de sesión </a>";      
                    }
                    if ($cont!="0" )
                    {//*ab
                    
        
                        $sql3 = "SELECT * FROM permisos WHERE correo_electronico='$correo_electronico'";
                        if(!$result3 = $db->query($sql3)) {
                        die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');   }
                        while($row3 = $result3->fetch_assoc())
                        {//*c
                            $ffk_id_rol=stripslashes($row3["fk_id_rol"]);
            
                        if ($ffk_id_rol=="1")
                        {
                        $_SESSION["correo"]=$correo_electronico;    
                        $_SESSION["administrador"]="1";
                        $_SESSION["cliente"]="0";
                        $_SESSION["usuario"]="0";
                        header("Location:administrador.php");
                        }

                        if ($ffk_id_rol=="2")
                        {
                            $_SESSION["correo"]=$correo_electronico;    
                            $_SESSION["administrador"]="0";
                            $_SESSION["cliente"]="1";
                            $_SESSION["usuario"]="0";
                        header("Location:cliente.php");
                        }
                            if    ($ffk_id_rol=="3")
                            {
                                $_SESSION["correo"]=$correo_electronico;    
                                $_SESSION["administrador"]="0";
                                $_SESSION["cliente"]="0";
                                $_SESSION["usuario"]="1";
                            header("Location:usuario.php");
                            }
                        
                        //////////////////////

                        
                        /////////////////////
                        }//*c
                    }//*ab

}
if($suma!=="3"){
    include("Z-menu.php");
                    
    echo "<br/>";
    echo" <img class='logo-menu'";
    echo"               height='130'";
    echo"                width='130'";
    echo"                src='img/logo.png'"; 
    echo"                alt='Help Paws'";
    echo"            /> ";
    echo"    <div class='segundo-fondo'>";
    echo"   <section class='profile1' >";
    echo"        <div class='profile-info1'>";
    echo"        <h2 class='profile-title1'> ¡Error en los datos! </h2>"; 
    echo"        </div>";
    echo"        <img class='profile-img1'";
    echo"                src='img/perro.png' ";
    echo"                alt='perro'";
    echo"            />";
    echo"    </div>";  
    echo"    </section>";        
    echo"      </div>";
    echo "<br/>";
    echo "<center> <a href='a-inicio-sesion.php'> Regresar al inicio de sesión </a>"; 
}
                    }//*metodo
                }//Clase
            

        
            $final=new permiso();
            $final->evaluar($_POST["correo_electronico"], $_POST["contrasenia"],$_POST["suma"]);
        ?> 
    </body>
    <footer class="pie-pag">Copyright &copy; Help Paws </footer>
</html>   



        
            
            