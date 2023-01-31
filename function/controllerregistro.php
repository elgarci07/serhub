<?php
// session_start();


  // echo $_SESSION['id_empleado'];
  

include "../config/conexion.php";

// Chequea si el usuario esta iniciado, en caso de que no vuelve a login ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// if (empty($_SESSION['email_user'])) {
  // echo $_SESSION['nombre'];
  // echo "<script>location.href='../view/index.php'</script>";
  //  header('Location: ../view/index.php');

//   header('Location: ../view/public.php');
// }// Ha entrado si no salta


echo $email=$_POST['email'];
echo $password=$_POST['password'];
echo $nombre=$_POST['nombre'];

$sent = $conexion->query("SELECT count(email_user) as contador FROM `tbl_users` WHERE email_user = '" . $email . "'");
$usuarios = $sent->fetchAll(PDO::FETCH_OBJ);

var_dump($usuarios);


foreach ($usuarios as $usuario) {
  // $usuarioes=$usuario;
  // echo "$usuarioes";
  if($usuario->contador == '0'){


$password = hash('sha256', $password);
// die();

$query = $conexion->prepare("INSERT INTO `tbl_users`(`id_user`, `email_user`, `pass_user`, `nom_user`, `user_log`, `user_admin`) VALUES 
(NULL,?,?,?,0,0)");
$query->bindParam(1, $email);
$query->bindParam(2, $password);
$query->bindParam(3, $nombre);

$result = $query->execute();
echo $result;

header('Location: ../view/revision.php');
// $query->execute();

  }else{
    header('Location: ../view/registro.php');
  }

}

?>