<?php
include "../config/conexion.php";

// Llamar a pagina
$entrada_valida = true;
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
        //var_dump($datos);
        // echo $datos;
            session_start();

            if (empty($datos)) {
                header('Location: ../view/login.php');
                // echo "no chuuta";
            }elseif($datos['user_log'] == 0){
                header('Location: ../view/revision.php');
            }
            
            else{
                // echo "no va";
                // $_SESSION['nombre'] = $datos['email'];
                // // echo $_SESSION['nombre'];
                // // $_SESSION['id_empleado'] = $username;
                // $_SESSION['id_empleado'] = $datos['id_empleado'];
                // $_SESSION['cargo'] = $datos['fk_cargo_empleado'];
                // print_r($_SESSION['id_empleado']);
                // die();
                // print_r($username);
                // echo "hola";
                
                header('Location: ../view/principal.php');
            }
}




?>
