<?php 
  include_once "app/config.php";

?>
<!doctype html>
<html lang="en">
  <!-- [Head] start -->

  <head>
    <title>Equipo Free Fire</title>
    <!-- [Meta] -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="description"
      content="Light Able admin and dashboard template offer a variety of UI elements and pages, ensuring your admin panel is both fast and effective."
    />
    <meta name="author" content="phoenixcoded" />

     <!-- [Favicon] icon -->
     <link rel="icon" href="<?= BASE_PATH ?>assets/images/favicon.svg" type="image/x-icon" />
      <!-- [Google Font : Public Sans] icon -->
      <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
      <!-- [phosphor Icons] https://phosphoricons.com/ -->
      <link rel="stylesheet" href="<?= BASE_PATH ?>assets/fonts/phosphor/duotone/style.css" />
      <!-- [Tabler Icons] https://tablericons.com -->
      <link rel="stylesheet" href="<?= BASE_PATH ?>assets/fonts/tabler-icons.min.css" />
      <!-- [Feather Icons] https://feathericons.com -->
      <link rel="stylesheet" href="<?= BASE_PATH ?>assets/fonts/feather.css" />
      <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
      <link rel="stylesheet" href="<?= BASE_PATH ?>assets/fonts/fontawesome.css" />
      <!-- [Material Icons] https://fonts.google.com/icons -->
      <link rel="stylesheet" href="<?= BASE_PATH ?>assets/fonts/material.css" />
      <!-- [Template CSS Files] -->
      <link rel="stylesheet" href="<?= BASE_PATH ?>assets/css/style.css" id="main-style-link" />
      <link rel="stylesheet" href="<?= BASE_PATH ?>assets/css/style-preset.css" />

  </head>
  <!-- [Head] end -->
  <!-- [Body] Start -->

  <body data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">
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
                <img src="../assets/images/authentication/img-auth-login.png" alt="images" class="img-fluid mb-3" />
                <h4 class="f-w-500 mb-1">Inicia sesión con tu correo electrónico</h4>
                <p class="mb-3">¿No tienes cuenta? <a class="link-primary ms-1">Ni modo</a></p>
              </div>
              <div class="mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="Correo electrónico" />
              </div>
              <div class="mb-3">
                <input type="password" class="form-control" id="floatingInput1" placeholder="Contraseña" />
              </div>
              <div class="d-grid mt-4">
                <button type="button" class="btn btn-primary">Inicia sesión</button>
              </div>
              <div class="saprator my-3">
                <span>No compartas tus accesos con nadie</span>
              </div> 
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>
  <!-- [Body] end -->
</html>
