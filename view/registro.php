
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulario de Registro SCIII</title>
<link href="estilos.css" rel="stylesheet" type="text/css">
</head>
 
<body>
<div class="group">
  <form action="../function/controllerregistro.php" method="POST">
  <h2><em>Formulario de Registro</em></h2>  
     
      <label for="nombre">Nombre <span><em>(requerido)</em></span></label>
      <input type="text" name="nombre" class="form-input" required/>   
      
      <label for="apellido">Email <span><em>(requerido)</em></span></label>
      <input type="email" name="email" class="form-input" required/>         
      
      <label for="email">Password <span><em>(requerido)</em></span></label>
      <input type="password" name="password" class="form-input" />
     <center> <input class="form-btn" name="submit" type="submit" value="Suscribirse" /></center>
    </p>
  </form>
</div>
</body>
</html>