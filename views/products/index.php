
<?php 
  include_once "../../app/config.php";
?>

<?php  
    include_once "../../app/ProductController.php";

    $productController = new ProductController();
    $products = $productController->get();

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
                  <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                  <li class="breadcrumb-item"><a href="javascript: void(0)">E-commerce</a></li>
                  <li class="breadcrumb-item" aria-current="page">Lista de productos</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Lista de productos</h2>
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
                  <a href="<?= BASE_PATH ?>products/add-product" class="btn btn-primary"> <i class="ti ti-plus f-18"></i> Agregar producto </a>
                </div>
                <div class="table-responsive">
                  <table class="table table-hover tbl-product" id="pc-dt-simple">
                    <thead>
                      <tr>
                        <th class="text-end">#</th>
                        <th>Detalles de producto</th>
                        <th>Categorias</th>
                        <th class="text-end">Precio</th>
                        <th class="text-end">Cant.</th>
                        <th class="text-center">Presentaciones</th>
                        <th class="text-center">Marca</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- [card body] start-->
                      <?php $con=0?>
                      <?php foreach ($products as $tarjeta): ?>
                        <?php $con++?>
                        <tr>
                          <td class="text-end"><?php echo $con ?></td>
                          <td>
                            <div class="row">
                              <div class="col-auto pe-0">
                                <img src="<?php echo $tarjeta->cover; ?>" alt="user-image" class="wid-40 rounded" />
                              </div>
                              <div class="col">
                                <h6 class="mb-1"><?php echo $tarjeta->name; ?></h6>
                                <p class="text-muted f-12 mb-0"> <?php echo $tarjeta->slug; ?>
                              </div>
                            </div>
                          </td>
                          <td><?php 
                                  if (!empty($tarjeta->categories)) {
                                      $categories = [];
                                      foreach ($tarjeta->categories as $category) {
                                          $categories[$category->slug] = true;
                                      }
                                      $categories = array_slice($categories, 0, 3);
                                      echo implode('/', array_keys($categories));
                                  } else {
                                      echo "Sin categorías";
                                  }
                              ?></td>
                          <td class="text-end">
                            $<?php echo isset($tarjeta->presentations[0]->price[0]->amount) ? $tarjeta->presentations[0]->price[0]->amount : 0; ?>
                          </td>
                          <td class="text-end"><?php echo isset($tarjeta->presentations[0]->stock) ? $tarjeta->presentations[0]->stock : 0; ?></td>
                          <td class="text-center">
                            <?php if (isset($tarjeta->presentations[0]) && $tarjeta->presentations[0] !== null && 
                                      in_array($tarjeta->presentations[0]->status, ['activo', 'active'])): ?>
                                <i class="ph-duotone ph-check-circle text-success f-24" data-bs-toggle="tooltip" data-bs-title="Activo"></i>
                            <?php else: ?>
                                <i class="ph-duotone ph-x-circle text-danger f-24" data-bs-toggle="tooltip" data-bs-title="inactivo"></i>
                            <?php endif; ?>
                          </td>
                          <td class="text-center">
                              <?php 
                              if (isset($tarjeta->brand->name)) {
                                echo $tarjeta->brand->name;
                              }else{
                                echo "Marca No Disponible";
                              }?>
                            <div class="prod-action-links">
                              <ul class="list-inline me-auto mb-0">
                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Detalles">
                                  <a href="<?= BASE_PATH ?>products/details?slug=<?= $tarjeta->slug ?>" class="avtar avtar-xs btn-link-success btn-pc-default">
                                    <i class="ti ti-eye f-18"></i>
                                  </a>
                                </li>
                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Editar">
                                  <a href="<?= BASE_PATH ?>products/edit-product?id=<?= $tarjeta->id ?>" class="avtar avtar-xs btn-link-success btn-pc-default">
                                    <i class="ti ti-edit-circle f-18"></i>
                                  </a>
                                </li>
                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Borrar">
                                <form action="<?= BASE_PATH ?>products" method="POST" style="display:inline;">
                                    <input type="hidden" name="action" value="delete_product">
                                    <input type="hidden" name="product_id" value="<?= $tarjeta->id ?>">
                                    <button type="submit" class="avtar avtar-xs btn-link-danger btn-pc-default">
                                        <i class="ti ti-trash f-18"></i>
                                    </button>
                                </form>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>
                      <?php endforeach ?>
                      <!-- [card body] end-->
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
