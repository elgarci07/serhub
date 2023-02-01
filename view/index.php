<?php
session_start();


  // echo $_SESSION['id_empleado'];
  

include "../config/conexion.php";

// Chequea si el usuario esta iniciado, en caso de que no vuelve a login ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
if (empty($_SESSION['email_user'])) {
  // echo $_SESSION['nombre'];
  // echo "<script>location.href='../view/index.php'</script>";
  //  header('Location: ../view/index.php');

  header('Location: ../view/public.php');
 
}// Ha entrado si no salta

// Chequea si el usuario es admin, en caso de que no vuelve a login ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
if ($_SESSION['user_admin']==0) {
    // echo $_SESSION['nombre'];
    // echo "<script>location.href='../view/index.php'</script>";
    //  header('Location: ../view/index.php');
  
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
    <link rel="shortcut icon" href="../img/logov.png" />
    <title>Principal</title>
</head>

<body class="d-flex flex-column h-100">
    <header>
        <!--Navbar ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
        <nav class="d-flex bd-highlight mb-5 navbar bg-dark" style="padding: 0.5% 7.5%;">

        <!-- LINKS MENU -->
        <?php
        //if (!isset($_SESSION['Admin'])){
          ?>
                    <div class="p-2 bd-highlight text-white" style="font-size:20px"><a style="text-decoration: none; color: white;" href="../view/principal.php">Inicio</a></div>
                    <div class="p-2 bd-highlight text-white" style="font-size:20px"><a style="text-decoration: none; color: white;" href="../Crud-Ajax/empleados.php">Usuarios</a></div>
                    

          <?php
        //}     
        ?>
        
        
        <!-- <div class="p-2 bd-highlight text-white" style="font-size:20px"><a style="text-decoration: none; color: white;" href="../view/index.php">Reservas</a></div>
        <div class="p-2 bd-highlight text-white" style="font-size:20px"><a style="text-decoration: none; color: white;" href="../Crud-Ajax/empleados.php">Empleados</a></div>
        <div class="p-2 bd-highlight text-white" style="font-size:20px"><a style="text-decoration: none; color: white;" href="../mesas/mesas.php">Mesas</a></div> -->

            <div class="ms-auto p-2 bd-highlight text-white">
                <form method='post' action="../function/cerrarlogin.php">
                    <button class="btn btn-danger" type="submit" value="Salir" name="but_logout"><i
                            class="fa-solid fa-right-from-bracket"></i></button>
                </form>
            </div>
        </nav>
    </header>

    <!-- JS DE RESERVA :::::::::::::::::::::::::::::::::::::::::::::: -->



    <!--Body ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
  
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3><i class="fa-solid fa-calendar"></i> Películas</h3>
                <br>


                
<!-- BUSCAR -->

  <form action="" method="post" id="frmbusqueda">
      <div class="input-group mb-3">
          <input type="text" name="buscar" id="buscar" placeholder="Buscar..." class="form-control">
      </div>
  </form>
  

  

              <!-- TABLA -->
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID Video</th>
                            <th scope="col">Nom Video</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Acciones</th>            
                        </tr>
                    </thead>
                    <tbody id="resultado"></tbody>
                </table>
            </div>
        </div>
    </div>

    <form action="../pelis/insertpelis.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="my-input">Seleccione una portada</label>
            <input id="my-input" type="file" name="imagen">
        </div>
        <div class="form-group">
            <label for="my-input">Nombre de la Serie</label>
            <input id="my-input" class="form-control" type="text" name="titulo">
        </div>
        <?php if (isset($_SESSION['mensaje'])) { ?>
            <div class="alert alert-<?php echo $_SESSION['tipo'] ?> alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['mensaje']; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php session_unset();
        } ?>
        <input type="submit" value="Guardar" class="btn btn-primary" name="Guardar">
    </form>



    
    <!-- <script src="../reserva/today.js"></script> -->
    <script src="../pelis/scriptreserva.js"></script> 
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- <script src="../static/js/vallog.js"></script>  -->




    
</body>

</html>
