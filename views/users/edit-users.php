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
                  <li class="breadcrumb-item"><a href="../dashboard/index.html">Inicio</a></li>
                  <li class="breadcrumb-item"><a href="javascript: void(0)">Productos</a></li>
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
                  <input type="text" class="form-control" placeholder="Enter Product Name" />
                </div>
                <div class="mb-3">
                  <label class="form-label">Presentaciones</label>
                  <select class="form-select">
                    <option>Sneakers</option>
                    <option>Category 1</option>
                    <option>Category 2</option>
                    <option>Category 3</option>
                    <option>Category 4</option>
                  </select>
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
                  <label class="form-label">Tags  </label>
                  <select class="form-select">
                    <option>Sneakers</option>
                    <option>Category 1</option>
                    <option>Category 2</option>
                    <option>Category 3</option>
                    <option>Category 4</option>
                  </select>
                </div>
                <div class="mb-0">
                  <label class="form-label">Descripción del producto</label>
                  <textarea class="form-control" placeholder="Enter Product Description"></textarea>
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
          <div class="col-xl-6">
            <!-- 
            <div class="card">
              <div class="card-header">
                <h5>Select size</h5>
              </div>
              <div class="card-body">
                <div class="row g-2">
                  <div class="col-auto">
                    <input type="radio" class="btn-check" id="btnrdolite1" name="btn_radio2" checked="" />
                    <label class="btn btn-sm btn-light-primary" for="btnrdolite1">34</label>
                  </div>
                  <div class="col-auto">
                    <input type="radio" class="btn-check" id="btnrdolite2" name="btn_radio2" />
                    <label class="btn btn-sm btn-light-primary" for="btnrdolite2">36</label>
                  </div>
                  <div class="col-auto">
                    <input type="radio" class="btn-check" id="btnrdolite3" name="btn_radio2" />
                    <label class="btn btn-sm btn-light-primary" for="btnrdolite3">38</label>
                  </div>
                  <div class="col-auto">
                    <input type="radio" class="btn-check" id="btnrdolite4" name="btn_radio2" />
                    <label class="btn btn-sm btn-light-primary" for="btnrdolite4">40</label>
                  </div>
                  <div class="col-auto">
                    <input type="radio" class="btn-check" id="btnrdolite5" name="btn_radio2" />
                    <label class="btn btn-sm btn-light-primary" for="btnrdolite5">42</label>
                  </div>
                </div>
              </div>
            </div>
            -->
            <div class="card">
              <div class="card-header">
                <h5>Imagen del producto</h5>
              </div>
              <div class="card-body">
                <div class="mb-0">
                  <p><span class="text-danger">*</span> Resolución recomendada de 645 x 645 para la imagen del producto</p>
                  <label class="btn btn-outline-secondary" for="flupld"><i class="ti ti-upload me-2"></i> Click para subir</label>
                  <input type="file" id="flupld" class="d-none" />
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
