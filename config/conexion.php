<?php

// session_start();
$server = "localhost";
$username = "root";
$password = "";
$dbname = "bd_serhub";

// Crear conexión ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
try{
   $conexion = new PDO("mysql:host=$server;dbname=$dbname","$username","$password");
   $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
   die('Imposible conectar a la BD');
}


$sentencia = $conexion->prepare("SELECT * FROM tbl_users WHERE email_user=? and pass_user=?");
$sentencia->bindParam(1, $username);
$sentencia->bindParam(2, $password);
$sentencia->execute();

$datos = $sentencia->fetch(PDO::FETCH_ASSOC);
