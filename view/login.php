<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="../css/style.css">
<link rel="shortcut icon" href="../img/logov.png" />

</head>
<body>
<!-- partial:index.partial.html -->
<!-- <a class="logo" href="../img/logo_nobackground.png" target="_blank"></a>
<form action="../function/controllerlogin.php" method="post">
<div class="login">
  <h1 class="login__title">Inicia Sesión</h1>
  <div class="login__group">
    <input class="login__group__input" type="text" required="true"/>
    <label class="login__group__label">Email</label>
  </div>
  <div class="login__group">
    <input class="login__group__input" type="password" required="true"/>
    <label class="login__group__label">Password</label>
  </div>
  <button class="login__sign-in" type="submit">Sign In</button> -->

  <!-- </div>  
</form> -->
 

<form onsubmit="return validarEmail()" method="post" action="../function/controllerlogin.php">
<h1 class="login__title">Inicia Sesión</h1>
    <div class="mb-3">
        
        <input  type="text" class="login__group__input" name="nombre" aria-describedby="emailHelp" id="email" placeholder="Email" required="true">
    </div>

    <div class="mb-3">
        
        <input type="password" class="login__group__input" name="pwd" placeholder="Password">
    </div>

    <button  type="submit" class="login__sign-in" name="boton" id="password">Iniciar sesión</button>
    <!-- <button onclick="return validaFormulario()" type="submit" class="btn btn-primary" name="boton" id="password">Iniciar sesión</button> -->
  <p id="emailp"></p>
</form>


<!-- partial -->
  
</body>
</html>
