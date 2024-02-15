<?php
include("c-seguridad_cliente.php");
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
    <header class="topheader">
        <?php
         include("c-menu.php");
        ?>    
    </header>
    <img class="logo-menu"
                height='130'
                width='130'
                src='img/logo.png' 
                alt='Help Paws'
            /> 
<?php
         class resistrocli {

                public function registrocli ($nombres_mascota, $raza, $tipo_mascota, $caracteristicas, $sexo, $estado, $correo_electronico, $codigo){
                    
                    
                    
                    include("z-conexion.php");
                        $existe="0";
                        $sql = "SELECT * FROM mascotas WHERE codigo='$codigo'";
                        if(!$result = $db->query($sql)){
                        die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                        }
                        while($row = $result->fetch_assoc())
                        {
                        $codigo=stripslashes($row["codigo"]);
                        $existe=$existe+1;  
                        }
                        echo $existe;
                        if ($existe=="0")
                        {               
                            
                        include ('2destinobitacoras.php');
                 

                            $imagen= $_FILES['foto_mascota']['name'];
                                        
                            $tipo_archivo = $_FILES['foto_mascota']['type'];
                            $tamano_archivo = $_FILES['foto_mascota']['size'];
                        //  $nomimag=$clave.'.png';
                        
                        //13:23:45
                        $num=date("GHs");
                        $imagenfinal=$num.$imagen;
                        //$imagenfinal=$imagen;
                        //echo "$imagenfinal";
                        include ("z-conexion.php"); 
                        
                        //$nombrearch=$imagenfinal;
                        if (move_uploaded_file($_FILES['foto_mascota']['tmp_name'],$destino.'/'.$imagenfinal))
                        {
                            include ("z-conexion.php");
                                mysqli_query($db,"INSERT INTO mascotas (id_mascota, nombres_mascota, raza, tipo_mascota, caracteristicas, sexo, estado, foto_mascota, correo_electronico, codigo) VALUES 
                    (NULL, '$nombres_mascota', '$raza', '$tipo_mascota', '$caracteristicas', '$sexo', '$estado','$imagenfinal','$correo_electronico', '$codigo')") or die(mysqli_error($db));
                    echo"";   

                    echo"    <div class='segundo-fondo'>";
                    echo"   <section class='profile1' >";
                    echo"        <div class='profile-info1'>";
                    echo"        <h2 class='profile-title1'> ¡Mascota registrada correctamente! </h2>"; 
                    echo"        </div>";
                    echo"        <img class='profile-img1'";
                    echo"                src='img/perro.png' ";
                    echo"                alt='perro'";
                    echo"            />";
                    echo"    </div>";  
                    echo"    </section>";        
                    echo"      </div>";
                    echo "";
                    echo "<br/>";
                    echo "<center><a href='c-vista_USUARIO.php'>Regresar al MENU</a>";

                    }//fin del if
                }
                     

                    if ($existe!="0")     
                    {  echo "<center> <br/>";
                    echo "<br/>";          
                    echo "¡La mascota ya existe!</center>";
                    }
    
            //}
            }
            }   

    $final=new resistrocli ();
    $final->registrocli( $_POST["nombres_mascota"], $_POST["raza"], $_POST["tipo_mascota"], $_POST["caracteristicas"], $_POST["sexo"],   
    $_POST["estado"], $_POST["correo_electronico"], $_POST["codigo"]);
?>
</body>
    <footer class="pie-pag">Copyright &copy; Help Paws </footer>
</html>