<?php

require_once "../config/conexion.php";

$imagen = $_FILES['imagen']['name'];
$nombre = $_POST['titulo'];

 if(isset($imagen) && $imagen != ""){
    $tipo = $_FILES['imagen']['type'];
    $temp  = $_FILES['imagen']['tmp_name'];

   if( !((strpos($tipo,'jpg') || strpos($tipo,'jpeg') || strpos($tipo,'webp') || strpos($tipo,'png')))){
      $_SESSION['mensaje'] = 'solo se permite archivos jpeg, jpg, webp, png';
      $_SESSION['tipo'] = 'danger';
      header('location:../view/index.php');
    }else{

    $sentencia = $conexion->prepare("INSERT INTO tbl_videos(nom_video,foto_video) values(?,?);");
    $sentencia->bindParam(1, $nombre);
    $sentencia->bindParam(2, $imagen);
    $resultado = $sentencia->execute();

     if($resultado){
        move_uploaded_file($temp,'../img/peliculas/'.$imagen);   
        $_SESSION['mensaje'] = 'se ha subido correctamente';
        $_SESSION['tipo'] = 'success';
        header('location:../view/index.php');
     }else{
        $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
        $_SESSION['tipo'] = 'danger';
     }
   }
}