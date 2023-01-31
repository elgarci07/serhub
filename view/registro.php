<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="../css/style.css">
<link rel="shortcut icon" href="../img/logov.png" />
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>"../js/validarpasswords.js"</script>
</head>
<body>
<form action="../function/controllerregistro.php" method="post"  onsubmit="return rta();">


<h1 class="login__title">Ser un hubber</h1>
    <div class="mb-3">
        <input  type="text" class="login__group__input" name="nombre" aria-describedby="emailHelp" id="email" placeholder="Nombre">
    </div>

    <div class="mb-3">
        <input type="email" class="login__group__input" name="email" placeholder="Email" id="mail">
    </div>

    <div class="mb-3">
        <input type="password" class="login__group__input" name="pwd" placeholder="Password" id="p1">
    </div>


    <button  type="submit" class="login__sign-in" name="boton" >Registrate</button>
    <!-- <button onclick="return validaFormulario()" type="submit" class="btn btn-primary" name="boton" id="password">Iniciar sesión</button> -->
  <p id="emailp"></p>
  </form>

<script>"../js/validarpasswords.js"</script>

<!-- partial -->
  
</body>
</html>
