<?php
session_start();

include_once "../../app/config.php";
include_once "../../app/UserController.php";
include_once "../../app/AuthController.php";

// Verificar si el usuario está logueado
if (isset($_SESSION['user_data'])) {
    // Verificar si hay un ID en la URL
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $userId = intval($_GET['id']); // Priorizar el ID de la URL
    } else {
        $userId = $_SESSION['user_data']->id; // Usar el ID del usuario logueado como respaldo
    }

    // Instanciar el controlador de usuario
    $userController = new UserController();

    // Obtener los datos del usuario por ID
    $userData = $userController->getUserById($userId);

    if ($userData && isset($userData['data'])) {
        // Extraer campos específicos
        $nameUser = $userData['data']['name'] ?? 'N/A';
        $lastnameUser = $userData['data']['lastname'] ?? 'N/A';
        $phone_numberUser = $userData['data']['phone_number'] ?? 'N/A';
        $emailUser = $userData['data']['email'] ?? 'N/A';
        $roleUser = $userData['data']['role'] ?? 'N/A';
        $profilePhotoPath = $userData['data']['profile_photo_file'] ?? 'default_avatar.png'; // Imagen predeterminada si no hay avatar
        $created_by = $userData['data']['created_by'] ?? 'default_avatar.png'; // Imagen predeterminada si no hay avatar
        $avatarUser = $userData['data']['avatar'] ?? 'assets/images/default_avatar.png';

    } else {
        echo "Error al obtener los datos del usuario.";
        exit;
    }
} else {
    echo "No hay usuario logueado.";
    exit;
}
?>




<!doctype html>
<html lang="en">
<head>
  <?php include "../layouts/head.php"; ?>
</head>
<body>
  <?php include "../layouts/sidebar.php"; ?>
  <?php include "../layouts/nav.php"; ?>

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
                        class=" img-fluid img-thumbnail"
                        src="<?= htmlspecialchars($avatarUser) ?>"
                        alt="User image"
                      />
                    </div>
                    <h5 class="mb-0"><?= htmlspecialchars($nameUser) . ' ' . htmlspecialchars($lastnameUser) ?></h5>
                    <small class="text-muted"><?= htmlspecialchars($roleUser) ?></small>
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
                    <p class="mb-0"><?= htmlspecialchars($emailUser) ?></p>
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
                      <p class="mb-0"><?= htmlspecialchars($nameUser) ?></p>
                    </li>
                    <li class="list-group-item">
                      <p class="mb-1 text-muted">Apellido</p>
                      <p class="mb-0"><?= htmlspecialchars($lastnameUser) ?></p>
                    </li>
                    <li class="list-group-item">
                      <p class="mb-1 text-muted">Email</p>
                      <p class="mb-0"><?= htmlspecialchars($emailUser) ?></p>
                    </li>
                    <li class="list-group-item">
                      <p class="mb-1 text-muted">Rol</p>
                      <p class="mb-0"><?= htmlspecialchars($roleUser) ?></p>
                    </li>
                    <li class="list-group-item">
                      <p class="mb-1 text-muted">Número de teléfono</p>
                      <p class="mb-0"><?= htmlspecialchars($phone_numberUser) ?></p>
                    </li>
                    <li class="list-group-item">
                      <p class="mb-1 text-muted">Creado Por</p>
                      <p class="mb-0"><?= htmlspecialchars($created_by) ?></p>
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

  <?php include "../layouts/footer.php"; ?>
  <?php include "../layouts/scripts.php"; ?>
</body>
</html>
