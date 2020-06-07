<title>Ingreso</title>
<?php 
include('cabezalogin.inc');


?>



<section class="container-fluid">

<div class="row-12"> 
<nav class="navbar navbar-expand-lg navbar-dark text-light bg-dark mb-5">
  		<a class="navbar-brand" href="#">Navbar</a>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
 			 </button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Imprimir</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <ul class="navbar-nav my-2 my-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                '.$usuario.'  
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Perfil</a>
                <a class="dropdown-item" href="configuracion.php">Configuración</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="cerrarsesion.php">Cerrar Sesión</a>
              </div>
            </li>
          </ul>
        </div>
	</nav></div>
	<div class="row">


	
	
		<div class="col-sm-4"></div>
		<div class="col">
			<form class="mt-5 form-container"  method="POST" id="formLogin">
				<h3 class="naranja strong mb-4">Ingreso de usuario</h3>
				<div class="col">
					<article id="resultado" class="alert-warning text-danger"></article>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="txt" class="form-control" name="usuario" aria-describedby="emailHelp">
					<small id="emailHelp" class="form-text text-muted">

						  Olvidaste tu contraseña?
					</small>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" name="passuser">
				</div>
				
				<button type="button" onclick="loginUser()"  id=""  class="btn btn-primary verde">Ingresar</button>
			</form>
		</div>
		<div class="col-sm-4"></div>
	</div>
</section>