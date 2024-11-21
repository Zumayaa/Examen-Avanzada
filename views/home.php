<?php 
  include_once "../app/config.php";

?>

<?php 
  include_once "../app/ProductController.php";

  $productController = new ProductController();
  $produc = $productController->get();


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
                <?php foreach($produc as $list): ?>
                    <div class="col-sm-6 col-xl-4">
                    <div class="card product-card">
                        <div class="card-img-top">
                          <a href="ecom_product-details.html">
                          </a>
                          <div class="card-body position-absolute end-0 top-0">
                          </div>
                        </div>
                        <div class="card-body">
                          <a href="ecom_product-details.html">
                            <h3 class="prod-content mb-0 text-muted"> <?php echo $list->name; ?></h3>
                          </a>
                          <div class="d-flex align-items-center justify-content-between mt-2 mb-3 flex-wrap gap-1">
                            <h4 class="mb-0 text-truncate"
                              ><b>$<?php echo isset($list->presentations[0]->price[0]->amount) ? $list->presentations[0]->price[0]->amount : 0; ?></b></h4
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php endforeach ?>
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
