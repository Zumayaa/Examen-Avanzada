<?php 
  include_once "../../app/config.php";

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
    <!-- [ Pre-loader ] start -->
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
                  <li class="breadcrumb-item" aria-current="page">Editar producto</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Editar producto</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <!-- [ Main Content ] start -->
        <div class="row">
          <!-- [ sample-page ] start -->
          <div class="col-xl-6">
            <div class="card">
              <div class="card-header">
                <h5>Descripción del producto</h5>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <label class="form-label">Nombre de producto</label>
                  <input type="text" class="form-control" placeholder="Ingresa el nombre del producto" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Slug</label>
                    <input type="text" class="form-control" placeholder="Ingresa el slug del producto" name="slug" />
                </div>
                <div class="mb-3" style="display: none;">
                    <label class="form-label">ID del Producto</label>
                    <input type="hidden" class="form-control" placeholder="Ingresa el ID" name="slug" value="12345" />
                </div>
                <div class="mb-3">
                  <label class="form-label">Categorías</label>
                  <select class="form-select">
                    <option>Sneakers</option>
                    <option>Category 1</option>
                    <option>Category 2</option>
                    <option>Category 3</option>
                    <option>Category 4</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label class="form-label">Tags</label>
                  <select class="form-select">
                    <option>Sneakers</option>
                    <option>Category 1</option>
                    <option>Category 2</option>
                    <option>Category 3</option>
                    <option>Category 4</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label class="form-label">Marcas</label>
                  <select class="form-select">
                    <option>Sneakers</option>
                    <option>Category 1</option>
                    <option>Category 2</option>
                    <option>Category 3</option>
                    <option>Category 4</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label class="form-label">Descripción del producto</label>
                  <textarea class="form-control" placeholder="Ingresa la descripción del producto"></textarea>
                </div>
                <div class="mb-3">
                  <label class="form-label">Características del producto</label>
                  <textarea class="form-control" placeholder="Ingresa las características del producto"></textarea>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h5>Precio</h5>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="mb-0">
                      <label class="form-label d-flex align-items-center"
                        >Precio del producto <i class="ph-duotone ph-info ms-1" data-bs-toggle="tooltip" data-bs-title="Precio del producto general"></i
                      ></label>
                      <div class="input-group mb-0">
                        <span class="input-group-text">$</span>
                        <input type="text" class="form-control" placeholder="Cost per items" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="card">
              <div class="card-body text-end btn-page">
                <button class="btn btn-primary mb-0">Actualizar producto</button>
                <button class="btn btn-outline-secondary mb-0">Resetear</button>
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
    <!-- [ Main Content ] end -->
 <!-- Required Js -->
  </body>
  <!-- [Body] end -->
</html>
