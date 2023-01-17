<?php
    //1. Conexion a la bd
    //2. Consulta SQL
    //3. Ejecutar consulta SQL
    //4. Transformar consulta SQL en Array assoc.
    //5. Montar tabla 
require_once "../config/conexion.php";
if(empty($_POST['filtro'])){



    $consulta = $conexion->prepare("SELECT * FROM tbl_videos");
    $consulta->execute();

}else{
    $filtro=$_POST['filtro'];


//PREPARAMOS FILTRO CON LOS CAMPOS :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::

    $consulta = $conexion->prepare("SELECT * FROM tbl_videos
     WHERE id_video LIKE '%".$filtro."%'
     OR nom_video LIKE '%".$filtro."%' 
     OR foto_video LIKE '%".$filtro."%'
    ");
     $consulta->execute();
}

    //4. Transformar consulta SQL en Array assoc.
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    foreach ($resultado as $data) {
        // echo"hola";
        echo "<tr>
                <td>" . $data['id_video'] . "</td>
                <td>" . $data['nom_video'] . "</td>
                <td>" . $data['foto_video'] . "</td>     
                
                <td>                    
                <button type='button' class='btn btn-success' onclick=editar('" . $data['id_video'] . "')>Editar</button>    
                <button type='button' class='btn btn-danger' onclick=Eliminar('" . $data['id_video'] . "')>Eliminar</button>
                </td>        
            </tr>";
    };
    

    // <button type='button' class='btn btn-success' onclick=editar('" . $data['id_registro'] . "')>Editar</button>
