<?php
session_start();


  // echo $_SESSION['id_empleado'];
  

include "../config/conexion.php";

// Chequea si el usuario esta iniciado, en caso de que no vuelve a login ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
if (empty($_SESSION['email_user'])) {
  header('Location: ../view/public.php');
}// Ha entrado si no salta

// Chequea si el usuario es admin, en caso de que no vuelve a login ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
if ($_SESSION['user_admin']==0) {
    header('Location: ../view/principal.php'); 
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/2b5286e1aa.js" crossorigin="anonymous"></script>
    <title>Principal</title>
</head>

<body class="d-flex flex-column h-100">
    <header>
        <!--Navbar ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
        <nav class="d-flex bd-highlight mb-5 navbar bg-dark" style="padding: 0.5% 7.5%;">
        <div class="p-2 bd-highlight text-white" style="font-size:20px"><a style="text-decoration: none; color: white;" href="../view/principal.php">Inicio</a></div>
          <div class="p-2 bd-highlight text-white" style="font-size:20px"><a style="text-decoration: none; color: white;" href="../view/index.php">Gestor Peliculas</a></div>
            
          <div class="ms-auto p-2 bd-highlight text-white">
                <form method='post' action="../function/cerrarlogin.php">
                    <button class="btn btn-danger" type="submit" value="Salir" name="but_logout"><i
                            class="fa-solid fa-right-from-bracket"></i></button>
                </form>
            </div>  
        </nav>
    </header>
    <!--Body ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3><i class="fa-solid fa-user"></i> Usuarios</h3>
                <br>



                
                <form action="" method="post" id="frmbusqueda">
                    <div class="input-group mb-3">
                    <label for="buscar"></label>
                    <input type="text" name="buscar" id="buscar" placeholder="Buscar..." class="form-control">
                    </div>
                </form>


<!-- modal Editar :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->



<!-- modal Crear :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->

<!-- fin modal :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->


                <table class="table table-dark">
                    <thead>
                        <tr>
                          <th>ID</th>
                          <th>Email</th>
                          <th>Password</th>
                          <th>Nombre</th>
                          <th>Aceptado</th>
                          <th>Admin</th>
                          <th>Acciones</th>
                          <th></th>
                        </tr>
                    </thead>
                    <tbody id="resultado"></tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="script.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>