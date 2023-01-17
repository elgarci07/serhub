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
                session_start();

                if (empty($datos)) {
                    header('Location: ../view/login.php');
                    // echo "no chuuta";
                    
    
                }
                
                else{
                    // echo "no va";
                    $_SESSION['email_user'] = $datos['email_user'];
                    // echo $_SESSION['nombre'];
                    // $_SESSION['id_empleado'] = $username;
                    $_SESSION['id_user'] = $datos['id_user'];
                    
                    // print_r($_SESSION['id_empleado']);
                    // die();
                    // print_r($username);
                    // echo "hola";
                    
                    header('Location: ../view/index.php');
                }
                
                header('Location: ../view/principal.php');
            }
}




?>
