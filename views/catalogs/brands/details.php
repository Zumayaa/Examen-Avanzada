<?php 
  include_once "../../../app/config.php";

?>
<!doctype html>
<html lang="en">
  <!-- [Head] start -->

  <head>
  <?php 
    include "../../../views/layouts/head.php";
  ?>
  </head>
  <!-- [Head] end -->
  <!-- [Body] Start -->

  <body data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">
    <?php 

      include "../../../views/layouts/sidebar.php";

    ?>

    <?php 

      include "../../../views/layouts/nav.php";

    ?>
    <!-- [ Main Content ] start -->
    <div class="pc-container">
      <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
          <div class="page-block">
            <div class="row align-items-center">
              <div class="col-md-12">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="../dashboard/index.html">Incio</a></li>
                  <li class="breadcrumb-item"><a href="<?= BASE_PATH ?>users">Marcas</a></li>
                  <li class="breadcrumb-item" aria-current="page">Detalles de marca</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Detalles de marca</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <!-- [ Main Content ] start -->
        <div class="row">
          <!-- [ sample-page ] start -->
          <div class="col-sm-12">
            <div class="row">
              <div class="col-lg-5 col-xxl-3">
                <div class="card overflow-hidden">
                  <div class="card-body position-relative">
                    <div class="text-center mt-3">
                      <div class="chat-avtar d-inline-flex mx-auto">
                        <img
                          class="rounded-circle img-fluid wid-90 img-thumbnail"
                          src="../assets/images/user/avatar-1.jpg"
                          alt="User image"
                        />
                        <i class="chat-badge bg-success me-2 mb-2"></i>
                      </div>
                      <h5 class="mb-0">William Bond</h5>
                    </div>
                  </div>
                  <div
                    class="nav flex-column nav-pills list-group list-group-flush account-pills mb-0"
                    id="user-set-tab"
                    role="tablist"
                    aria-orientation="vertical"
                  >
                    <a
                      class="nav-link list-group-item list-group-item-action active"
                      id="user-set-profile-tab"
                      data-bs-toggle="pill"
                      href="#user-set-profile"
                      role="tab"
                      aria-controls="user-set-profile"
                      aria-selected="true"
                    >
                      <span class="f-w-500"><i class="ph-duotone ph-user-circle m-r-10"></i>Visualización de marca</span>
                    </a>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h5>Información personal</h5>
                  </div>
                  <div class="card-body position-relative">
                    <div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
                      <p class="mb-0 text-muted me-1">Email</p>
                      <p class="mb-0">anshan@gmail.com</p>
                    </div>
                    <div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
                      <p class="mb-0 text-muted me-1">Número télefonico</p>
                      <p class="mb-0">(+1-876) 8654 239 581</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-7 col-xxl-9">
                <div class="tab-content" id="user-set-tabContent">
                  <div class="tab-pane fade show active" id="user-set-profile" role="tabpanel" aria-labelledby="user-set-profile-tab">
                    <div class="card">
                      <div class="card-header">
                        <h5>Información personal</h5>
                      </div>
                      <div class="card-body">
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item px-0 pt-0">
                            <div class="row">
                              <div class="col-md-6">
                                <p class="mb-1 text-muted">Nombre</p>
                                <p class="mb-0">Anshan</p>
                              </div>
                              <div class="col-md-6">
                                <p class="mb-1 text-muted">Apellidos</p>
                                <p class="mb-0">Mr. Deepen Handgun</p>
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item px-0">
                            <div class="row">
                              <div class="col-md-6">
                                <p class="mb-1 text-muted">Número télefonico</p>
                                <p class="mb-0">(+1-876) 8654 239 581</p>
                              </div>
                              <div class="col-md-6">
                                <p class="mb-1 text-muted">Género</p>
                                <p class="mb-0">Kanye West</p>
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item px-0">
                            <div class="row">
                              <div class="col-md-6">
                                <p class="mb-1 text-muted">Email</p>
                                <p class="mb-0">anshan.dh81@gmail.com</p>
                              </div>
                              <div class="col-md-6">
                                <p class="mb-1 text-muted">Fecha de nacimiento</p>
                                <p class="mb-0">22/08/2003</p>
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item px-0 pb-0">
                            <p class="mb-1 text-muted">Fecha de ingreso a la empresa</p>
                            <p class="mb-0">22/08/2003</p>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- [ sample-page ] end -->
        </div>
        <!-- [ Main Content ] end -->
      </div>
    </div>

    <?php 

    include "../../../views/layouts/footer.php";

    ?>
    <?php 

    include "../../../views/layouts/scripts.php";

    ?>
    <script>
    // scroll-block
    var tc = document.querySelectorAll('.scroll-block');
    for (var t = 0; t < tc.length; t++) {
      new SimpleBar(tc[t]);
    }
    </script>
    <?php 

    include "../../../views/layouts/modals.php";

    ?>
  </body>

  </body>
  <!-- [Body] end -->
</html>
