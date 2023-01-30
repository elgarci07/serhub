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


$email=$_POST['email'];
$password=$_POST['password'];
$nombre=$_POST['nombre'];

$query = $conexion->prepare("INSERT INTO `tbl_users`(`id_user`, `email_user`, `pass_user`, `nom_user`, `user_log`, `user_admin`) VALUES 
(NULL,?,?,?,?,?,?)");
$query->bindParam(1, $email);
$query->bindParam(2, $password);
$query->bindParam(3, $nombre);
$query->bindParam(4, 0);
$query->bindParam(5, 0);

header('Location: ../view/revision.php');
// $query->execute();

$result = $query->execute();

?>