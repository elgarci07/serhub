<?php

require_once "../config/conexion.php";
if(empty($_POST['filtro'])){

    $consulta = $conexion->prepare("SELECT * FROM tbl_users");
    $consulta->execute();


    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    foreach ($resultado as $data) {
        // echo"hola";
        echo "<tr>
                <td>" . $data['id_user'] . "</td>
                <td>" . $data['email_user'] . "</td>
                <td>" . $data['pass_user'] . "</td>
                <td>" . $data['nom_user'] . "</td>
                <td>" . $data['user_log'] . "</td>
                
                <td>
                <button type='button' class='btn btn-success' onclick=aceptar('" . $data['id_user'] . "')>Aceptar</button>
                    <button type='button' class='btn btn-success' onclick=editar('" . $data['id_user'] . "')>Editar</button>
                    <button type='button' class='btn btn-danger' onclick=Eliminar('" . $data['id_user'] . "')>Eliminar</button>
                </td>        
            </tr>";
    };


}else{
    $filtro=$_POST['filtro'];

//PREPARAMOS FILTRO CON LOS CAMPOS :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::

    $consulta = $conexion->prepare("SELECT * FROM tbl_users
     WHERE id_user LIKE '%".$filtro."%'
     OR email_user LIKE '%".$filtro."%' 
     OR nom_user LIKE '%".$filtro."%'
     OR user_log LIKE '%".$filtro."%'
    ");
     $consulta->execute();
    //  OR nom_cargo LIKE '%".$filtro."%'



    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    foreach ($resultado as $data) {
        // echo"hola";
        echo "<tr>
            <td>" . $data['id_user'] . "</td>
            <td>" . $data['email_user'] . "</td>
            <td>" . $data['pass_user'] . "</td>
            <td>" . $data['nom_user'] . "</td>
            <td>" . $data['user_log'] . "</td>
            <td>
                <button type='button' class='btn btn-success' onclick=editar('" . $data['id_user'] . "')>Editar</button>
                <button type='button' class='btn btn-danger' onclick=Eliminar('" . $data['id_user'] . "')>Eliminar</button>
            </td>        
            </tr>";
    };


}

    //4. Transformar consulta SQL en Array assoc.
