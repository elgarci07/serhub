<?php
session_start();


  // echo $_SESSION['id_empleado'];
  

include "../config/conexion.php";

// Chequea si el usuario esta iniciado, en caso de que no vuelve a login ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
if (empty($_SESSION['email_user'])) {
  // echo $_SESSION['nombre'];
  // echo "<script>location.href='../view/index.php'</script>";
  //  header('Location: ../view/index.php');
  header('Location: ../view/public.php');
}// Ha entrado si no salta


?>