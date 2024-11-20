<?php 
  include_once "../../app/config.php";

?>

<?php  
    include_once "../../app/ProductController.php";

    $productController = new ProductController();
    $presentation = $productController->get();

?>

<!doctype html>
<html lang="en">
  <!-- [Head] start -->

  <head>
    <?php 

      include "../layouts/head.php";

    ?>
  </head>
  <!-- [Head] end -->
  <!-- [Body] Start -->

  <body data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">
  <?php 

    include "../layouts/sidebar.php";

  ?>

  <?php 

    include "../layouts/nav.php";

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
                  <li class="breadcrumb-item"><a href="<?= BASE_PATH ?>products">Productos</a></li>
                  <li class="breadcrumb-item" aria-current="page">Lista de presentaciones</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Lista de presentaciones</h2>
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
            <div class="card table-card">
              <div class="card-body">
                <div class="text-end p-sm-4 pb-sm-2">
                  <a href="<?= BASE_PATH ?>products/add-presentation" class="btn btn-primary"> <i class="ti ti-plus f-18"></i> Agregar presentación </a>
                </div>
                <div class="table-responsive">
                  <table class="table table-hover tbl-product" id="pc-dt-simple">
                    <thead>
                      <tr>
                        <th>Descripción de la presentación</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($presentation as $mostrar): ?>
                      <?php if (isset($mostrar->presentations[0]) && $mostrar->presentations[0] !== null && in_array($mostrar->presentations[0]->status, ['activo', 'active'])): ?>
                            <tr>
                            <td>
                              <div class="row">
                                <div class="col">
                                  <h6 class="mb-1"><?php echo $mostrar->presentations[0]->description; ?></h6>
                                  <p class="text-muted f-12 mb-0"><?php echo $mostrar->presentations[0]->code; ?></p>
                                </div>
                              </div>
                            </td>
                            <td></td>
                            <td class="text-end"></td>
                            <td class="text-end"></td>
                            <td class="text-center">
                              <i class="ph-duotone f-24"></i>
                            </td>
                            <td class="text-center">
                              <div class="prod-action-links">
                                <ul class="list-inline me-auto mb-0">
                                  <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="View">
                                    <a href="<?= BASE_PATH ?>products/details-presentation?presentation_id=<?= $mostrar->presentations[0]->id; ?>" class="avtar avtar-xs btn-link-success btn-pc-default">
                                      <i class="ti ti-eye f-18"></i>
                                    </a>
                                  </li>
                                  <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Edit">
                                    <a href="<?= BASE_PATH ?>products/edit-presentation?presentation_id=<?= $mostrar->presentations[0]->id; ?>" class="avtar avtar-xs btn-link-success btn-pc-default">
                                      <i class="ti ti-edit-circle f-18"></i>
                                    </a>
                                  </li>
                                  <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Delete">
                                    <form action="<?= BASE_PATH ?>contPresentation" method="POST" style="display:inline;">
                                      <input type="hidden" name="action" value="delete_presentation">
                                      <input type="hidden" name="presentation_id" value="<?= $mostrar->presentations[0]->id; ?>">
                                      <button type="submit" class="avtar avtar-xs btn-link-danger btn-pc-default">
                                          <i class="ti ti-trash f-18"></i>
                                      </button>
                                    </form>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                      <?php endif; ?>
                    <?php endforeach?>
    
                    </tbody>
                  </table>
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

      include "../layouts/footer.php";

      ?>
    <?php 

      include "../layouts/scripts.php";

      ?>
    <script>
      // scroll-block
      var tc = document.querySelectorAll('.scroll-block');
      for (var t = 0; t < tc.length; t++) {
        new SimpleBar(tc[t]);
      }
    </script>
    <?php 

      include "../layouts/modals.php";

      ?>
  </body>
  <!-- [Body] end -->
</html>
