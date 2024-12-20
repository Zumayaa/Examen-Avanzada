<?php 
  // Verificar si el usuario está logueado
if (isset($_SESSION['user_data'])) {
  // Acceder a los datos del usuario desde la sesión
  $userData = $_SESSION['user_data'];

  // Obtener campos específicos
  $name = $userData->name;     
  $lastname = $userData->lastname;        
  $avatar = $userData->avatar;  

} else {
  echo "No hay usuario logueado.";
}

?>

<!-- [ Pre-loader ] start -->
    <div class="loader-bg">
      <div class="loader-track">
        <div class="loader-fill"></div>
      </div>
    </div>
    <!-- [ Pre-loader ] End -->
     <!-- [ Sidebar Menu ] start -->
    <nav class="pc-sidebar">
      <div class="navbar-wrapper">
        <div class="m-header">
          <a href="<?= BASE_PATH ?>home" class="b-brand text-primary">
            <!-- ========   Change your logo from here   ============ -->
            <img src="<?= BASE_PATH ?>views/layouts/logo.png" alt="logo image" />
            <span class="badge bg-brand-color-2 rounded-pill ms-2 theme-version"><?= htmlspecialchars($name)?> was here</span>
          </a>
        </div>
        <div class="navbar-content">
          <ul class="pc-navbar">
            <li class="pc-item pc-caption">
              <label>Administración de usuarios</label>
              <i class="ph-duotone ph-chart-pie"></i>
            </li>
            <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link">
                <span class="pc-micon">
                  <i class="ph-duotone ph-identification-card"></i>
                </span>
                <span class="pc-mtext">Usuarios</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
              ></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>users">Lista de usuario usuarios</a></li>
              </ul>
            </li>
            <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link">
                <span class="pc-micon">
                  <i class="ph-duotone ph-user-circle"></i>
                </span>
                <span class="pc-mtext">Clientes</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
              ></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>customer">Lista de clientes</a></li>
              </ul>
            </li>
            <li class="pc-item pc-caption">
              <label>Administración de productos</label>
              <i class="ph-duotone ph-buildings"></i>
            </li>
            <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link">
                <span class="pc-micon">
                  <i class="ph-duotone ph-shopping-cart"></i>
                </span>
                <span class="pc-mtext">Productos</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
              ></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>products/add-product">Alta de producto</a></li>
                <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>products/presentation">Presentaciones</a></li>
                <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>products">Todos los productos</a></li>
              </ul>
            </li>
             <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link">
                <span class="pc-micon">
                  <i class="ph-duotone ph-books"></i>
                </span>
                <span class="pc-mtext">Cátalogos</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
              ></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>catalogs/categories">CRUD de Categorías</a></li>
                <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>catalogs/brands">CRUD de Marcas</a></li>
                <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>catalogs/tags">CRUD de Tags</a></li>
              </ul>
            </li>
            </li>
             <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link">
                <span class="pc-micon">
                  <i class="ph-duotone ph-tag"></i>
                </span>
                <span class="pc-mtext">Cupones</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
              ></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>coupons">Todos los cupones</a></li>
              </ul>
            </li>
            </li>
             <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link">
                <span class="pc-micon">
                  <i class="ph-duotone ph-basket  "></i>
                </span>
                <span class="pc-mtext">Ordenes</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
              ></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>orders">Todas las ordenes</a></li>
              </ul>
            </li>
        </div>
        <div class="card pc-user-card">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="flex-shrink-0">
              <div class="chat-avtar d-inline-flex mx-auto" style="width: 50px; height: 50px;">
                <img class="user-avtar rounded-circle" src="<?= htmlspecialchars($avatar) ?>" alt="User image" style="object-fit: cover; width: 100%; height: 100%;" />
              </div>
              <!-- <img src="<?= BASE_PATH ?>assets/images/user/avatar-1.jpg" alt="user-image" class="user-avtar wid-45 rounded-circle" /> -->
              </div>
              <div class="flex-grow-1 ms-3">
                <div class="dropdown">
                  <a href="#" class="arrow-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="0,20">
                    <div class="d-flex align-items-center">
                      <div class="flex-grow-1 me-2">
                        <h6 class="mb-0"><?= htmlspecialchars($name)?></h6>
                        <small>Administrator</small>
                      </div>
                      <div class="flex-shrink-0">
                        <div class="btn btn-icon btn-link-secondary avtar">
                          <i class="ph-duotone ph-windows-logo"></i>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="dropdown-menu">
                    <ul>
                      <li>
                        <a class="pc-user-links" href="<?= BASE_PATH ?>profile">
                          <i class="ph-duotone ph-user"></i>
                          <span>Mi cuenta</span>
                        </a>
                      </li>
                      <li>
                        <form action="<?= BASE_PATH ?>app/AuthController.php" method="POST">
                            <input type="hidden" name="action" value="logout">
                            <i class="ph-duotone ph-power"></i>
                            <button type="submit" style="background: none; border: none; color: inherit; padding: 0; font: inherit; cursor: pointer; text-decoration: none;">
                                <span>Cerrar sesión</span>
                            </button>
                        </form>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- [ Sidebar Menu ] end -->