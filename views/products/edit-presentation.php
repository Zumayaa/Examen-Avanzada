<?php 
  include_once "../../app/config.php";

?>

<?php 
  include_once "../../app/PresentationController.php";

  $id = $_GET['presentation_id'];

  $presentationController = new PresentationController();
  $presentacion = $presentationController->getSpecificPresentation($id);

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
                  <li class="breadcrumb-item" aria-current="page">Editar presentación</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Editar presentación</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <!-- [ Main Content ] start -->
        <form action="<?= BASE_PATH ?>app/PresentationController.php" method="post">
          <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-xl-6">
                <div class="card">
                  <div class="card-header">
                    <h5>Descripción de la presentación</h5>
                  </div>
                  <input type="hidden" name="action" value="update_presentation">
                  <input type="hidden" name="presentation_id" value="<?= htmlspecialchars($presentacion->id ?? '') ?>">
                  <div class="card-body">
                    <div class="mb-3">
                      <label class="form-label">Nombre de la presentación</label>
                      <input type="text" class="form-control" placeholder="Ingresa el nombre" name="description" value="<?= htmlspecialchars($presentacion->description ?? '') ?>"/>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Código</label>
                      <input 
                        type="text" 
                        class="form-control" 
                        placeholder="Ingrese el código" 
                        value="<?= htmlspecialchars($presentacion->code ?? '') ?>"
                        oninput="this.value = this.value.replace(/[^0-9]/g, '')"  
                        name="code"
                      />
                      <small class="text-muted">El código debe contener solo números.</small>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Peso en gramos</label>
                      <input 
                        type="text" 
                        class="form-control" 
                        placeholder="gr" 
                        value="<?= htmlspecialchars($presentacion->weight_in_grams ?? '') ?>"
                        oninput="this.value = this.value.replace(/[^0-9]/g, '')" 
                        name="weight"
                      />
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Estatus</label>
                      <select class="form-control"  name="status">
                        <option value="activo">Activo</option>
                        <option value="inactivo">Inactivo</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Stock</label>
                      <input 
                        type="number" 
                        class="form-control" 
                        placeholder="Ingrese el stock actual" 
                        min="0" 
                        value="<?= htmlspecialchars($presentacion->stock ?? '') ?>" 
                        name="stock"
                      />
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Stock mínimo</label>
                      <input 
                        type="number" 
                        class="form-control" 
                        placeholder="Ingrese el stock mínimo" 
                        min="0"  
                        value="<?= htmlspecialchars($presentacion->stock_min ?? '') ?>"
                        name="stock_min"
                      />
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Stock máximo</label>
                      <input 
                        type="number" 
                        class="form-control" 
                        placeholder="Ingrese el stock máximo" 
                        min="0"  
                        value="<?= htmlspecialchars($presentacion->stock_max ?? '') ?>"
                        name="stock_max"
                      />
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Producto</label>
                      <select class="form-control"  name="product_id">
                        <option value="<?= htmlspecialchars($presentacion->product_id ?? '') ?>"> 
                          <?php echo htmlspecialchars($products[$presentacion->product_id]->name);?>
                        </option>
                        <?php foreach($products as $list): ?>
                            <option value="<?php echo $list->id; ?>"><?php echo $list->name; ?></option>
                        <?php endforeach; ?>
                    </select>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Precio</label>
                      <input 
                        type="number" 
                        class="form-control" 
                        placeholder="Ingrese la cantidad" 
                        value="<?= htmlspecialchars($presentacion->current_price->amount ?? '') ?>"
                        name="amount"
                      />
                    </div>
                  </div>
                </div>
              </div>
            <div class="col-sm-12">
              <div class="card">
                <div class="card-body text-end btn-page">
                  <button type="submit" class="btn btn-primary mb-0">Actualizar presentación</button>
                  <button class="btn btn-outline-secondary mb-0">Resetear</button>
                </div>
              </div>
            </div>
            <!-- [ sample-page ] end -->
          </div>

        </form>
        
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
