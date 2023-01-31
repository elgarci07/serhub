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

<nav class="navMenu_navbar">
        <div class="navMenu_logo">
            <a href=""><img src="../img/logo_nobackground.png" width="200px" alt="ph"></a>
            <li><a href="#">Inicio</a></li>
            <li><a href="#top5">Las 5 mas vistas</a></li>

        </div>
        <ul class="navMenu_links">
            <button type="button" class="btn-login"><a href="../view/login.php">Iniciar sesión</a></button>
            <button type="button" class="btn-login"><a href="../view/registro.php">Registrate</a></button>
        </ul>
    </nav>
<h1 class="login__title">Ser un serhubber</h1>
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
