<?php 
  // Verificar si el usuario está logueado
if (isset($_SESSION['user_data'])) {
  // Acceder a los datos del usuario desde la sesión
  $userData = $_SESSION['user_data'];

  // Obtener campos específicos
  $name = $userData->name;     
  $lastname = $userData->lastname;        
  $avatar = $userData->avatar;  
  $email = $userData->email;  

} else {
  echo "No hay usuario logueado.";
}

?>
<!-- [ Header Topbar ] start -->
<header class="pc-header">
  <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
  <div class="me-auto pc-mob-drp">
    <ul class="list-unstyled">
      <!-- ======= Menu collapse Icon ===== -->
      <li class="pc-h-item pc-sidebar-collapse">
        <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
          <i class="ti ti-menu-2"></i>
        </a>
      </li>
      <li class="pc-h-item pc-sidebar-popup">
        <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
          <i class="ti ti-menu-2"></i>
        </a>
      </li>
    </ul>
  </div>
<!-- [Mobile Media Block end] -->
<div class="ms-auto">
  <ul class="list-unstyled">
    <li class="dropdown pc-h-item d-none d-md-inline-flex">
      <a
        class="pc-head-link dropdown-toggle arrow-none me-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        aria-expanded="false"
      >
      </a>
    </li>
    <li class="dropdown pc-h-item">
      <a
        class="pc-head-link dropdown-toggle arrow-none me-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        aria-expanded="false"
      >
        <i class="ph-duotone ph-sun-dim"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
        <a href="#!" class="dropdown-item" onclick="layout_change('dark')">
          <i class="ph-duotone ph-moon"></i>
          <span>Dark</span>
        </a>
        <a href="#!" class="dropdown-item" onclick="layout_change('light')">
          <i class="ph-duotone ph-sun-dim"></i>
          <span>Light</span>
        </a>
        <a href="#!" class="dropdown-item" onclick="layout_change_default()">
          <i class="ph-duotone ph-cpu"></i>
          <span>Default</span>
        </a>
      </div>
    </li>
    <li class="pc-h-item">
      <a class="pc-head-link pct-c-btn" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_pc_layout">
        <i class="ph-duotone ph-gear-six"></i>
      </a>
    </li>
    <li class="dropdown pc-h-item header-user-profile">
      <a
        class="pc-head-link dropdown-toggle arrow-none me-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        data-bs-auto-close="outside"
        aria-expanded="false"
      >
      <img src="<?= htmlspecialchars($avatar) ?>" alt="user-image" class="rounded-circle" style="width: 35px; height: 35px; object-fit: cover;" />
      </a>
      <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
        <div class="dropdown-header d-flex align-items-center justify-content-between">
          <h5 class="m-0">Profile</h5>
        </div>
        <div class="dropdown-body">
          <div class="profile-notification-scroll position-relative" style="max-height: calc(100vh - 225px)">
            <ul class="list-group list-group-flush w-100">
              <li class="list-group-item">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                  <img src="<?= htmlspecialchars($avatar) ?>" alt="user-image" class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover;" />
                  </div>
                  <div class="flex-grow-1 mx-3">
                    <h5 class="mb-0"><?= htmlspecialchars($name)?></h5>
                    <a class="link-primary" href="mailto:carson.darrin@company.io"><?= htmlspecialchars($email) ?></a>
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <a href="<?= BASE_PATH ?>profile" class="dropdown-item">
                  <span class="d-flex align-items-center">
                    <i class="ph-duotone ph-user-square"></i>
                    <span>Mi perfil</span>
                  </span>
                </a>
              </li>
              <li class="list-group-item">
                <form action="<?= BASE_PATH ?>app/AuthController.php" method="POST">
                    <input type="hidden" name="action" value="logout">
                    <i class="ph-duotone ph-power"></i>
                    <button type="submit" style="background: none; border: none; color: inherit; padding: 0; font: inherit; cursor: pointer; text-decoration: none">
                        <span>Cerrar sesión</span>
                    </button>
                </form>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </li>
  </ul>
</div>
 </div>
</header>
<!-- [ Header ] end -->
