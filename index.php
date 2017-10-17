<?php
 
if(isset($_GET["error"]) && $_GET["error"] != "login") {
    header("Location: index.php");
  }
 
 ?>
 
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Prueba</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
</head>
  <body>

    <section class="container">
      <div class="box-login">
        <h1>Ingreso</h1>
        <?php    
          if(isset($_GET["error"])) {
            echo "<p class='error'>Usuario y / o Contrasea erroneos. Intentelo de nuevo.</p>";
          }    
        ?>
        <form action="login.php" method="post">
            <div class="form-group">
              <label value="usuario"> </label>
              <input name="usuario" type="text" class="form-control" placeholder="Nombre" >
            </div>
            <div class="form-group">
              <label value="user"> </label>
              <input name="password" type="password" class="form-control" placeholder="Contraseña" >
            </div>
            <button type="submit" name="enviar" class="btn btn-default">Entrar</button>
            <h4><a href="registro.php">Crear cuenta</a></h4>
        </form>
      </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>