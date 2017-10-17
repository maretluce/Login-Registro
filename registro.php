<?php

	require("conexion.php"); 
	if(isset($_POST['registrar'])) {		
 
		$loginNombre = $_POST["usuario"];
		$loginPassword = $_POST["password"];

		$encriptar = password_hash($loginPassword, PASSWORD_BCRYPT, ["cost" => '11']);

		$mysqli->query("INSERT INTO usuarios (usuario, password) VALUES ('$usuario', '$password')");

		$_SESSION['logged'] = "Logged";
		$_SESSION['usuario'] = $loginNombre;
		$_SESSION['password'] = $encriptar;
		
		header("Location: finregistro.php");
	};

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
        <h1>Registro</h1>
        
        <form id="register-form" method="post">
            <div class="form-group">
              <label value="usuario"> </label>
              <input name="usuario" type="text" class="form-control" placeholder="Nombre" >
            </div>
            <div class="form-group">
              <label value="apellido"> </label>
              <input name="apellido" type="text" class="form-control" placeholder="Apellido" >
            </div>
            <div class="form-group">
              <label value="departamento"> </label>
              <input name="departamento" type="text" class="form-control" placeholder="Departamento" >
            </div>
            <div class="form-group">
              <label value="ciudad"> </label>
              <input name="ciudad" type="text" class="form-control" placeholder="Ciudad" >
            </div>
            <div class="form-group">
              <label value="telefono"> </label>
              <input name="telefono" type="text" class="form-control" placeholder="Teléfono" >
            </div>
            <div class="form-group">
              <label value="mail"> </label>
              <input name="mail" type="text" class="form-control" placeholder="Mail" >
            </div>
            <div class="form-group">
              <label value="user"> </label>
              <input name="password" type="password" class="form-control" placeholder="Contraseña" >
            </div>
            <button type="submit" name="registrar" class="btn btn-default">Registrarse</button>
            <h4><a href="login.php">Ya tengo cuenta</a></h4>
        </form>
      </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>