<?php

require "../config/conexion.php";
$id=$_POST['id_registro'];
//$fecha=$POST['fecha'];

$fecha_actual = date("Y-m-d");
$hora_actual = date("H:i", time());

//----------------------------------------------------------------

$query = $conexion->prepare("SELECT * FROM tbl_registro WHERE id_registro = $id");
// var_dump($id);

// $query->bindParam(1, $id);
$query->execute();
$resultado = $query->fetch(PDO::FETCH_ASSOC);

//Recoger la fecha del array y asignarle la variable $fecha , una vez hecho eso, hacer un if en el ajax que si da nook no haga nada. 

// foreach ($resultado as $hola) {
//     $fecha = $hola['fecha'];
// }
 //  echo "NOOK";

//} else {

    // if ($fecha < $fecha_actual) {
    //     echo "NOOK";
    // } else {
    

echo json_encode($resultado);


//}