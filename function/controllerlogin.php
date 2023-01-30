<?php
session_start();

if (empty($_SESSION['email_user'])) {
    // echo $_SESSION['nombre'];
    // echo "<script>location.href='../view/index.php'</script>";
    //  header('Location: ../view/index.php');
    header('Location: ../view/login.php');

  }// Ha entrado si no salta

include "../config/conexion.php";

// Llamar a pagina
// $entrada_valida = true;
// require_once '../view/login.php';
// echo "holis";
// On submit ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
if (isset($_POST['boton'])) 
{

        $username = $_POST['nombre'];
        $password = $_POST['pwd'];

// echo $username;
// echo $password;


            $sentencia = $conexion->prepare("SELECT * FROM tbl_users WHERE email_user=? and pass_user=?");
            $sentencia->bindParam(1, $username);
            $sentencia->bindParam(2, $password);
            $sentencia->execute();


            $datos = $sentencia->fetch(PDO::FETCH_ASSOC);
            var_dump($datos); 
            // die();
      
        // echo $datos;
            

          

            if (empty($datos)) {
                header('Location: ../view/login.php');
                // echo "no chuuta";
            }elseif($datos['user_log'] == 0){
                header('Location: ../view/revision.php');
            }elseif($datos['user_log'] == 1){
                $_SESSION['email_user'] = $datos['email_user'];
                header('Location: ../view/principal.php');
                
            }else{
                // session_start();
                    header('Location: ../view/login.php');
            }
}




?>
