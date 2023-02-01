<?php




  // echo $_SESSION['id_empleado'];
  

  include "../config/conexion.php";
//   include "../config/controllerlogin.php";
  session_start();
  // Chequea si el usuario esta iniciado, en caso de que no vuelve a login ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
  if (empty($_SESSION['email_user'])) {
    // echo $_SESSION['nombre'];
    // echo "<script>location.href='../view/index.php'</script>";
    //  header('Location: ../view/index.php');
    header('Location: ../view/login.php');

  }// Ha entrado si no salta
  $admin = $_SESSION['user_admin'];
//   echo $admin;

$sentencia = $conexion->query("SELECT * FROM tbl_videos;");
$videos = $sentencia->fetchAll(PDO::FETCH_OBJ);
// echo var_dump($videos);

//Sentencia de las mas gustadas
$sentenciatop5 = $conexion->query("SELECT * FROM tbl_videos ORDER BY nom_video ASC;");
$videostop5 = $sentenciatop5->fetchAll(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="shortcut icon" href="img/logo.png"> -->
    <title>SERHUB</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="shortcut icon" href="../img/logov.png" />
    <script src="https://kit.fontawesome.com/ddb7f94e9a.js" crossorigin="anonymous"></script>
</head>

<body>
    <video id="background-video" autoplay loop muted poster="../img/subscribe/black.jpg">
            <source src="../img/publicvideo.mp4" type="video/mp4">
          </video>
    <nav class="navMenu_navbar">
        <div class="navMenu_logo">
            <a href=""><img src="../img/logo_nobackground.png" width="200px" alt="ph"></a>
            
           
           <?php if ($_SESSION['user_admin']==1) { ?> 

            <li><a href="../view/principal.php">Inicio</a></li>
            <li><a href="../view/index.php">Peliculas</a></li>
            <li><a href="../Crud-Ajax/empleados.php">Usuarios</a></li>
            <li><a href="#catalogo">Catálogo</a></li>
            <?php }else{ ?>
                <li><a href="#catalogo">Catálogo</a></li>
            <?php  }?>
            
            


        </div>
        <ul class="navMenu_links">
            <button type="button" styles="color:black;" class="btn-login"><a href="../function/cerrarlogin.php">Cerrar sesión</a></button>
        </ul>
    </nav>
    <div class="desc-film">
        <img width="250px" src="../img/subscribe/logo-film.png" alt="">
        <!-- <p>Los mejores videos</p> -->
    </div>
    <div class="contenido">
        <div class="top-list">
            <h4 id=top5>Las 5 más gustadas</h4>
            <div class="netflix-row">
                <ul class="netflix-row--inner">
                    <!-- <li class="netflix-row--item"><img width="100%" src="../img/top-list/pelicula1.jpg" alt=""></li> -->
                    <?php 
            foreach ($videos as $filmacion) {?>
            <div id="catalogo" class="netflix-row--item">
                <img width="100%" src="../img/peliculas/<?php echo $filmacion->foto_video;?>" alt="no se veee">
                <p><?php echo $filmacion->nom_video;?></p>
            </div>
            <?php
            }
            ?>
                </ul>
            </div>
        </div>

<!-- FOREACH FOTOS -->

    <div class="catalogo">
        <div class="four-column">
            <div class="container-catalogo">
            <div class="catalogo">
            <h4>Películas disponibles (mas gustadas)</h4>
            <?php 
            foreach ($videos as $filmacion) {?>
            <div class="four-column">
                <img src="../img/peliculas/<?php echo $filmacion->foto_video;?>" alt="no se veee">
                <p><?php echo $filmacion->nom_video;?></p>
            </div>
            <?php
            }
            ?>
        </div>
             
        </div>
    </div>
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="footer-follow">
                        <li><a href="https://www.youtube.com/watch?v=pI-rXgCzPoo"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.youtube.com/watch?v=pI-rXgCzPoo"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.youtube.com/watch?v=pI-rXgCzPoo"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="https://www.youtube.com/watch?v=pI-rXgCzPoo"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://www.youtube.com/watch?v=pI-rXgCzPoo"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="https://www.youtube.com/watch?v=pI-rXgCzPoo"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                    <div class="footer-copyright">
                        <p>Copyright © 2022-2023. All Rights Reserved. <a href="index.html" target="_blank">SerHUB, your quality porn</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>