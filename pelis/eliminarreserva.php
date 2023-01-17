<?php
require_once "../config/conexion.php";
$data = $_POST['id_video'];

//echo $data;


$query = $conexion->prepare("DELETE FROM tbl_videos WHERE id_video = ?");
$query->bindParam(1, $data);

// $query->execute();

$result = $query->execute();

	// if ($result) {
		echo "OK";
		// header('Location: index.php');
	// }else{
	// 	echo "Error";
	// }


