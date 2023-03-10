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

<!-- CONSULTA FOREACH FOTOS -->

<?php

include_once "../config/conexion.php";
        
//Sentencia todas las fotos
        $sentencia = $conexion->query("SELECT * FROM tbl_videos;");
        $videos = $sentencia->fetchAll(PDO::FETCH_OBJ);
        // echo var_dump($videos);

//Sentencia de las mas gustadas
$sentenciatop5 = $conexion->query("SELECT * FROM tbl_videos ORDER BY nom_video desc;");
$videostop5 = $sentenciatop5->fetchAll(PDO::FETCH_OBJ);


        ?>

        

    <video id="background-video" autoplay loop muted poster="../img/subscribe/black.jpg">
            <source src="../img/publicvideo.mp4" type="video/mp4">
          </video>
    <nav class="navMenu_navbar">
        <div class="navMenu_logo">
            <a href=""><img src="../img/logo_nobackground.png" width="200px" alt="ph"></a>
            <li><a href="#">Inicio</a></li>
            <li><a href="#top5">Las 5 mas vistas</a></li>

        </div>
        <ul class="navMenu_links">
            <button type="button" class="btn-login"><a href="../view/login.php">Iniciar sesión</a></button>
            <button type="button" class="btn-login"><a href="../view/registro.php">Registrate</a></button>
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
            <div class="netflix-row--item">
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
                    <!-- <div class="middle">
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
            </div> -->
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