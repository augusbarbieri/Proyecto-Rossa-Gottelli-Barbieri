<?php 
	session_start();

	if(isset($_SESSION['user'])){
 ?>
 
<!doctype html>
<html lang="en">
  <head>
  <?php require_once "scripts.php"; ?>
    <meta charset="utf-8">
        <!-- Responsive -->
    
    <title> Meta Gaming | Acceder </title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/icon" href="Imagenes/icos/favicon_2.jpg">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="estilos.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

<!-- Menú -->



        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
          <div class="container">

            <a class="navbar-brand" href="index.html">Meta Gaming</a>
            <!-- Aqui se determina la caracteristica responsive del menu -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">

                    <!-- Primer elemento -->
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home <span class="sr-only"></span></a>
                </li>

              <!-- Segundo Elemento -->
                <li class="nav-item">
                  <a class="nav-link" href="productos.html">Productos</a>

                </li>



                          <!-- Tercer Elemento, Desplegable -->
                <li class="nav-item dropdown">
                  <a class="nav-link" href="armar.html">Armar</a>

                  <!-- Cuarto elemento -->
                <li class="nav-item dropdown">
                  <a class="nav-link" href="contacto.html">Contacto</a>
                   
                 <!-- Tercer Elemento, Desplegable -->
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ingresar</a>
                <!-- Elementos Desplegables -->
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="acceder.html">Login</a>
                        <a class="dropdown-item" href="crear_cuenta.html">Registrarse</a>
                </li>

                <!-- Cuarto elemento -->
                <li class="nav-item dropdown">
                  <a class="nav-link" href="">Nombre de Usuario</a>

                 
              </ul>
        </div>
      </div>
        </nav>


  <body class="text-center">
    <form class="form-signin">
      <img class="mb-4" src="libro_1.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Iniciar sesion</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Direccion de email" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Recordarme
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" href="libro.html" type="submit">Ingresar</button>
      <p class="mt-5 mb-3 text-muted">Copyright &copy; Meta Gaming 2018</p>
    </form>
  </body>
</html>
