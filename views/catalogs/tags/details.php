<?php 
  include_once "../../../app/config.php";
  include_once "../../../app/TagController.php";

  $id = $_GET['id'];
  $tagController = new TagController();
  $tag = $tagController->getTag($id);
?>

<!doctype html>
<html lang="en">
  <!-- [Head] start -->
  <head>
    <?php include "../../../views/layouts/head.php"; ?>
  </head>
  <!-- [Head] end -->

  <!-- [Body] start -->
  <body data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">
    
    <?php 
      include "../../../views/layouts/sidebar.php";
      include "../../../views/layouts/nav.php";
    ?>

    <!-- [Main Content] start -->
    <div class="pc-container">
      <div class="pc-content">
        <!-- [breadcrumb] start -->
        <div class="page-header">
          <div class="page-block">
            <div class="row align-items-center">
              <div class="col-md-12">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= BASE_PATH ?>home">Inicio</a></li>
                  <li class="breadcrumb-item"><a href="<?= BASE_PATH ?>catalogs/categories">Categorías</a></li>
                  <li class="breadcrumb-item" aria-current="page">Detalles de categoría</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Detalles de Tag</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- [breadcrumb] end -->

        <!-- [Main Content] start -->
        <div class="row">
          <!-- [sample-page] start -->
          <div class="col-sm-12">
            <div class="row">
              <div class="col-lg-7 col-xxl-9">
                <div class="tab-content" id="user-set-tabContent">
                  <div class="tab-pane fade show active" id="user-set-profile" role="tabpanel" aria-labelledby="user-set-profile-tab">
                    <div class="card">
                      <div class="card-header">
                        <h5>Información del Tag</h5>
                      </div>
                      <div class="card-body">
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item px-0 pt-0">
                            <div class="row">
                              <div class="col-md-6">
                                <p class="mb-1 text-muted">Nombre</p>
                                <p class="mb-0"><?php echo $tag->name; ?></p>
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item px-0">
                            <div class="row">
                              <div class="col-md-6">
                                <p class="mb-1 text-muted">Descripción</p>
                                <p class="mb-0"><?php echo $tag->description; ?></p>
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item px-0">
                            <div class="row">
                              <div class="col-md-6">
                                <p class="mb-1 text-muted">Slug</p>
                                <p class="mb-0"><?php echo $tag->slug; ?></p>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- [sample-page] end -->
        </div>
        <!-- [Main Content] end -->
      </div>
    </div>

    <?php 
      include "../../../views/layouts/footer.php";
      include "../../../views/layouts/scripts.php";
    ?>

    <script>
      // scroll-block
      var tc = document.querySelectorAll('.scroll-block');
      for (var t = 0; t < tc.length; t++) {
        new SimpleBar(tc[t]);
      }
    </script>

    <?php include "../../../views/layouts/modals.php"; ?>
  </body>
  <!-- [Body] end -->
</html>
