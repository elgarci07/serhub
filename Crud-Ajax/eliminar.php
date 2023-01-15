<?php
require_once "../config/conexion.php";
$data = $_POST['id_user'];

//echo $data;


$query = $conexion->prepare("DELETE FROM tbl_users WHERE id_user = ?");
$query->bindParam(1, $data);

// $query->execute();

$result = $query->execute();

	// if ($result) {
		echo "OK";
		// header('Location: index.php');
	// }else{
	// 	echo "Error";
	// }


