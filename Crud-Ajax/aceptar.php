<?php
require_once "../config/conexion.php";
$id = $_POST['id_user'];

//echo $data;


$query = $conexion->prepare("UPDATE tbl_users SET user_log= 1 WHERE id_user = ?");
// echo "<script>console.log('Console: " . $query . "' );</script>";
$query->bindParam(1, $id);
$query->execute();

$result = $query->execute();

	// if ($result) {
		echo "OK";
		// header('Location: index.php');
	// }else{
	// 	echo "Error";
	// }





