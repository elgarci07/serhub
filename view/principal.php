<?php

session_start();


  // echo $_SESSION['id_empleado'];
  

  include "../config/conexion.php";

  // Chequea si el usuario esta iniciado, en caso de que no vuelve a login ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
  if (empty($_SESSION['email_user'])) {
    // echo $_SESSION['nombre'];
    // echo "<script>location.href='../view/index.php'</script>";
    //  header('Location: ../view/index.php');
    
    header('Location: ../view/login.php');

  }// Ha entrado si no salta
  
  
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
            <li><a href="../view/principal.php">Inicio</a></li>
            <li><a href="../view/index.php">Peliculas</a></li>
            <li><a href="../Crud-Ajax/empleados.php">Empleados</a></li>
            <li><a href="#">Destacadas</a></li>
            <li><a href="#">Destacadas</a></li>
        </div>
        <ul class="navMenu_links">
            <button type="button" styles="color:black;" class="btn-login"><a href="../function/cerrarlogin.php">Cerrar sesión</a></button>
        </ul>
    </nav>
    <div class="desc-film">
        <img width="250px" src="../img/subscribe/logo-film.png" alt="">
        <p>Los mejores videos</p>
    </div>
    <div class="contenido">
        <div class="top-list">
            <h4>Tendencias en SerHub</h4>
            <div class="netflix-row">
                <ul class="netflix-row--inner">
                    <li class="netflix-row--item"><img width="100%" src="../img/top-list/pelicula1.jpg" alt=""></li>
                    <li class="netflix-row--item"><img width="100%" src="../img/top-list/pelicula2.png" alt=""></li>
                    <li class="netflix-row--item"><img width="100%" src="../img/top-list/pelicula3.png" alt=""></li>
                    <li class="netflix-row--item"><img width="100%" src="../img/top-list/pelicula4.png" alt=""></li>
                    <li class="netflix-row--item"><img width="100%" src="../img/top-list/pelicula5.png" alt=""></li>
                    <li class="netflix-row--item"><img width="100%" src="../img/top-list/pelicula1.jpg" alt=""></li>
                    <li class="netflix-row--item"><img width="100%" src="../img/top-list/pelicula2.png" alt=""></li>
                    <li class="netflix-row--item"><img width="100%" src="../img/top-list/pelicula3.png" alt=""></li>
                    <li class="netflix-row--item"><img width="100%" src="../img/top-list/pelicula4.png" alt=""></li>
                    <li class="netflix-row--item"><img width="100%" src="../img/top-list/pelicula5.png" alt=""></li>
                </ul>
            </div>
        </div>
        <div class="catalogo">
            <h4>Terrorificas</h4>
            <div class="four-column">
                <div class="container-catalogo">
                    <img src="../img/top-list/pelicula1.jpg" alt="Avatar" class="image" style="width:100%">
                    <p>Hola</p>
                    <div class="middle">
                        <div class="text">
                            <a href="#"><i class="fa-solid fa-thumbs-up"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="four-column">
                <div class="container-catalogo">
                    <img src="../img/top-list/pelicula1.jpg" alt="Avatar" class="image" style="width:100%">
                    <p>Hola</p>
                    <div class="middle">
                        <div class="text">
                            <a href="#"><i class="fa-solid fa-thumbs-up"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="four-column">
                <div class="container-catalogo">
                    <img src="../img/top-list/pelicula1.jpg" alt="Avatar" class="image" style="width:100%">
                    <p>Hola</p>
                    <div class="middle">
                        <div class="text">
                            <a href="#"><i class="fa-solid fa-thumbs-up"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="four-column">
                <div class="container-catalogo">
                    <img src="../img/top-list/pelicula1.jpg" alt="Avatar" class="image" style="width:100%">
                    <p>Hola</p>
                    <div class="middle">
                        <div class="text">
                            <a href="#"><i class="fa-solid fa-thumbs-up"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <h4>Comedia</h4>
            <div class="four-column">
                <div class="container-catalogo">
                    <img src="../img/top-list/pelicula1.jpg" alt="Avatar" class="image" style="width:100%">
                    <p>Hola</p>
                    <div class="middle">
                        <div class="text">
                            <a href="#"><i class="fa-solid fa-thumbs-up"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="four-column">
                <div class="container-catalogo">
                    <img src="../img/top-list/pelicula1.jpg" alt="Avatar" class="image" style="width:100%">
                    <p>Hola</p>
                    <div class="middle">
                        <div class="text">
                            <a href="#"><i class="fa-solid fa-thumbs-up"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="four-column">
                <div class="container-catalogo">
                    <img src="../img/top-list/pelicula1.jpg" alt="Avatar" class="image" style="width:100%">
                    <p>Hola</p>
                    <div class="middle">
                        <div class="text">
                            <a href="#"><i class="fa-solid fa-thumbs-up"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="four-column">
                <div class="container-catalogo">
                    <img src="../img/top-list/pelicula1.jpg" alt="Avatar" class="image" style="width:100%">
                    <p>Hola</p>
                    <div class="middle">
                        <div class="text">
                            <a href="#"><i class="fa-solid fa-thumbs-up"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <h4>Romanticas</h4>
            <div class="four-column">
                <div class="container-catalogo">
                    <img src="../img/top-list/pelicula1.jpg" alt="Avatar" class="image" style="width:100%">
                    <p>Hola</p>
                    <div class="middle">
                        <div class="text">
                            <a href="#"><i class="fa-solid fa-thumbs-up"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="four-column">
                <div class="container-catalogo">
                    <img src="../img/top-list/pelicula1.jpg" alt="Avatar" class="image" style="width:100%">
                    <p>Hola</p>
                    <div class="middle">
                        <div class="text">
                            <a href="#"><i class="fa-solid fa-thumbs-up"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="four-column">
                <div class="container-catalogo">
                    <img src="../img/top-list/pelicula1.jpg" alt="Avatar" class="image" style="width:100%">
                    <p>Hola</p>
                    <div class="middle">
                        <div class="text">
                            <a href="#"><i class="fa-solid fa-thumbs-up"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="four-column">
                <div class="container-catalogo">
                    <img src="../img/top-list/pelicula1.jpg" alt="Avatar" class="image" style="width:100%">
                    <p>Hola</p>
                    <div class="middle">
                        <div class="text">
                            <a href="#"><i class="fa-solid fa-thumbs-up"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="footer-follow">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
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