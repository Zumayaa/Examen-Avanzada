<?php
session_start();

include_once "../app/config.php";
include_once "../app/UserController.php";
include_once "../app/AuthController.php";

// Verificar si el usuario está logueado
if (isset($_SESSION['user_data'])) {
    // Acceder a los datos del usuario desde la sesión
    $userData = $_SESSION['user_data'];

    // Obtener campos específicos
    $name = $userData->name;     
    $lastname = $userData->lastname;  
    $email = $userData->email;    
    $role = $userData->role;      
    $avatar = $userData->avatar;  

} else {
    echo "No hay usuario logueado.";
}
?>

<!doctype html>
<html lang="en">
<head>
  <?php include "layouts/head.php"; ?>
</head>
<body>
  <?php include "layouts/sidebar.php"; ?>
  <?php include "layouts/nav.php"; ?>

  <div class="pc-container">
    <div class="pc-content">
      <!-- [ Main Content ] -->
      <div class="row">
        <div class="col-sm-12">
          <div class="row">
            <!-- Información personal -->
            <div class="col-lg-5 col-xxl-3">
              <div class="card overflow-hidden">
                <div class="card-body position-relative">
                  <div class="text-center mt-3">
                    <div class="chat-avtar d-inline-flex mx-auto">
                      <img
                        class="rounded-circle img-fluid wid-90 img-thumbnail"
                        src="<?= htmlspecialchars($avatar) ?>"
                        alt="User image"
                      />
                    </div>
                    <h5 class="mb-0"><?= htmlspecialchars($name) . ' ' . htmlspecialchars($lastname) ?></h5> <!-- Mostrar nombre y apellido -->
                    <small class="text-muted"><?= htmlspecialchars($role) ?></small> <!-- Mostrar rol -->
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header">
                  <h5>Información personal</h5>
                </div>
                <div class="card-body position-relative">
                  <div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
                    <p class="mb-0 text-muted me-1">Email</p>
                    <p class="mb-0"><?= htmlspecialchars($email) ?></p> <!-- Mostrar email -->
                  </div>
                </div>
              </div>
            </div>

            <!-- Más información -->
            <div class="col-lg-7 col-xxl-9">
              <div class="card">
                <div class="card-header">
                  <h5>Detalles del perfil</h5>
                </div>
                <div class="card-body">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <p class="mb-1 text-muted">Nombre</p>
                      <p class="mb-0"><?= htmlspecialchars($name) ?></p> <!-- Mostrar nombre -->
                    </li>
                    <li class="list-group-item">
                      <p class="mb-1 text-muted">Apellido</p>
                      <p class="mb-0"><?= htmlspecialchars($lastname) ?></p> <!-- Mostrar apellido -->
                    </li>
                    <li class="list-group-item">
                      <p class="mb-1 text-muted">Email</p>
                      <p class="mb-0"><?= htmlspecialchars($email) ?></p> <!-- Mostrar email -->
                    </li>
                    <li class="list-group-item">
                      <p class="mb-1 text-muted">Rol</p>
                      <p class="mb-0"><?= htmlspecialchars($role) ?></p> <!-- Mostrar rol -->
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- [ Main Content ] end -->
    </div>
  </div>

  <?php include "layouts/footer.php"; ?>
  <?php include "layouts/scripts.php"; ?>
</body>
</html>
