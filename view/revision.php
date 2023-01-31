<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cuenta en revision</title>
  <link rel="stylesheet" href="../css/styles.css">
    <link rel="shortcut icon" href="../img/logov.png" />
    <script src="https://kit.fontawesome.com/ddb7f94e9a.js" crossorigin="anonymous"></script>
  <style>

*{
  background-color: black;  
}

h1{
  color: white;
}

h3{
  color: #FF9900;
}
.cont {
    display: flex;
    height: 100vh;
    width: 100%;
    align-items: center;
    flex-direction: column;
    align-content: center;
    text-align: center;
    justify-content: center;

}
  </style>

</head>
<body>

<nav class="navMenu_navbar">
        <div class="navMenu_logo">
            <a href=""><img src="../img/logo_nobackground.png" width="200px" alt="ph"></a>

        </div>
        <ul class="navMenu_links">
            <button type="button" class="btn-login"><a href="../view/login.php">Volver a inicio</a></button>
        </ul>
    </nav>

  <div class="cont">
  <h1>¡TU CUENTA DEBE SER ACEPTADA POR UN ADMINISTRADOR, IMPACIENTE!</h1>
  <h3>Para agílizar la gestión envía 100 euros al 636925502</h3>
  <form method="POST" action="../view/public.php">  
       <input type="submit"/> 
  </div>
</body>
</html>