<?php 
  include_once "app/config.php";

?>
<!doctype html>
<html lang="en">
  <!-- [Head] start -->

  <head>
      <?php 

      include "views/layouts/head.php";

      ?>
  </head>
  <!-- [Head] end -->
  <!-- [Body] Start -->

  <body data-pc-preset="preset-4" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
      <div class="loader-track">
        <div class="loader-fill"></div>
      </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <div class="auth-main v1">
      <div class="auth-wrapper">
        <div class="auth-form">
          <div class="card my-5">
            <div class="card-body">
              <div class="text-center">
                <img src="<?= BASE_PATH ?>views/layouts/logo.png" alt="images" class="img-fluid mb-3" />
                <h4 class="f-w-500 mb-1">Inicia sesión con tu correo electrónico</h4>
                <p class="mb-3">¿No tienes cuenta? <a class="link-primary ms-1">Ni modo</a></p>
              </div>
  						<form class="mt-5" method="POST" action="<?= BASE_PATH ?>app/AuthController.php">
							  
							  <div class="mb-3">
							    <label for="exampleInputEmail1" class="form-label">
							    	Correo electrónico
							    </label>
							    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Correo electrónico" aria-describedby="emailHelp" required name="correo">
							    
							    <div id="emailHelp" class="form-text">
							    	Ingrese su correo electrónico registrado
							    </div>
							  </div>
							  
							  <div class="mb-3">
							    <label for="exampleInputPassword1" class="form-label">
							    	Contraseña
							    </label>
							    <input type="password" placeholder="* * * * * " class="form-control" id="exampleInputPassword1" required name="contrasenna">
							  </div>
							  	
						  	<div class="d-grid gap-2"> 
							  	<button type="submit" class="btn btn-primary">
							  		Acceder
							  	</button>
							  </div>

							 <input type="hidden" name="action" value="access">

						  </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>
  <!-- [Body] end -->
</html>
