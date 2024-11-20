<?php 
  include_once "../app/config.php";

?>
<!doctype html>
<html lang="en">
  <!-- [Head] start -->

  <head>
  <?php 

    include "layouts/head.php";

    ?>
  </head>
  <!-- [Head] end -->
  <!-- [Body] Start -->

  <body data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">
    <?php 

      include "layouts/sidebar.php";

    ?>

    <?php 

    include "layouts/nav.php";

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
                  <li class="breadcrumb-item"><a href="<?= BASE_PATH ?>home">Inicio</a></li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Productos relacionados</h2>
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
            <div class="ecom-wrapper">
              <div class="ecom-content">
                <div class="row">
                  <div class="col-sm-6 col-xl-4">
                    <div class="card product-card">
                      <div class="card-img-top">
                        <a href="ecom_product-details.html">
                          <img src="../assets/images/application/img-prod-1.jpg" alt="image" class="img-prod img-fluid" />
                        </a>
                        <div class="card-body position-absolute end-0 top-0">
                        </div>
                      </div>
                      <div class="card-body">
                        <a href="ecom_product-details.html">
                          <p class="prod-content mb-0 text-muted">Apple watch -4</p>
                        </a>
                        <div class="d-flex align-items-center justify-content-between mt-2 mb-3 flex-wrap gap-1">
                          <h4 class="mb-0 text-truncate"
                            ><b>$299.00</b> <span class="text-sm text-muted f-w-400 text-decoration-line-through">$399.00</span></h4
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xl-4">
                    <div class="card product-card">
                      <div class="card-img-top">
                        <a href="ecom_product-details.html">
                          <img src="../assets/images/application/img-prod-1.jpg" alt="image" class="img-prod img-fluid" />
                        </a>
                        <div class="card-body position-absolute end-0 top-0">
                        </div>
                      </div>
                      <div class="card-body">
                        <a href="ecom_product-details.html">
                          <p class="prod-content mb-0 text-muted">Apple watch -4</p>
                        </a>
                        <div class="d-flex align-items-center justify-content-between mt-2 mb-3 flex-wrap gap-1">
                          <h4 class="mb-0 text-truncate"
                            ><b>$299.00</b> <span class="text-sm text-muted f-w-400 text-decoration-line-through">$399.00</span></h4
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xl-4">
                    <div class="card product-card">
                      <div class="card-img-top">
                        <a href="ecom_product-details.html">
                          <img src="../assets/images/application/img-prod-1.jpg" alt="image" class="img-prod img-fluid" />
                        </a>
                        <div class="card-body position-absolute end-0 top-0">
                        </div>
                      </div>
                      <div class="card-body">
                        <a href="ecom_product-details.html">
                          <p class="prod-content mb-0 text-muted">Apple watch -4</p>
                        </a>
                        <div class="d-flex align-items-center justify-content-between mt-2 mb-3 flex-wrap gap-1">
                          <h4 class="mb-0 text-truncate"
                            ><b>$299.00</b> <span class="text-sm text-muted f-w-400 text-decoration-line-through">$399.00</span></h4
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xl-4">
                    <div class="card product-card">
                      <div class="card-img-top">
                        <a href="ecom_product-details.html">
                          <img src="../assets/images/application/img-prod-1.jpg" alt="image" class="img-prod img-fluid" />
                        </a>
                        <div class="card-body position-absolute end-0 top-0">
                        </div>
                      </div>
                      <div class="card-body">
                        <a href="ecom_product-details.html">
                          <p class="prod-content mb-0 text-muted">Apple watch -4</p>
                        </a>
                        <div class="d-flex align-items-center justify-content-between mt-2 mb-3 flex-wrap gap-1">
                          <h4 class="mb-0 text-truncate"
                            ><b>$299.00</b> <span class="text-sm text-muted f-w-400 text-decoration-line-through">$399.00</span></h4
                          >
                        </div>
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

      include "layouts/footer.php";

      ?>
    <?php 

      include "layouts/scripts.php";

      ?>
    <script>
      // scroll-block
      var tc = document.querySelectorAll('.scroll-block');
      for (var t = 0; t < tc.length; t++) {
        new SimpleBar(tc[t]);
      }
    </script>
    <?php 

      include "layouts/modals.php";

      ?>

  </body>
  <!-- [Body] end -->
</html>
