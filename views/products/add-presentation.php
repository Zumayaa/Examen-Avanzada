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
                  <li class="breadcrumb-item" aria-current="page">Agregar presentación</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Agregar presentación</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <!-- [ Main Content ] start -->
        <form action="<?= BASE_PATH ?>contPresentation" method="post"  enctype="multipart/form-data">
          <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-xl-6">
              <div class="card">
                <div class="card-header">
                  <h5>Descripción de la presentación</h5>
                </div>
                <input type="hidden" name="action" value="create_presentation">
                <div class="card-body">
                  <div class="mb-3">
                    <label class="form-label">Nombre de la presentación</label>
                    <input type="text" class="form-control" placeholder="Ingresa el nombre" name="description"/>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Código</label>
                    <input 
                      type="text" 
                      class="form-control" 
                      placeholder="Ingrese el código" 
                      oninput="this.value = this.value.replace(/[^0-9]/g, '')" 
                      required 
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
                      oninput="this.value = this.value.replace(/[^0-9]/g, '')" 
                      name="weight"
                    />
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Estatus</label>
                    <select class="form-control" required name="status">
                      <option value="">Seleccione un estatus</option>
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
                      required 
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
                      required 
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
                      required 
                      name="stock_max"
                    />
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Producto</label>
                    <select class="form-control" required name="product_id">
                        <option value="">Seleccione un producto</option>
                        <?php foreach($products as $list): ?>
                            <option value="<?php echo $list->id; ?>"><?php echo $list->name; ?></option>
                        <?php endforeach; ?>
                    </select>
                  </div>

                  <!--
                  <div class="mb-3">
                    <label class="form-label">ID</label>
                    <input 
                      type="text" 
                      class="form-control" 
                      placeholder="Ingrese el ID" 
                      oninput="this.value = this.value.replace(/[^0-9]/g, '')" 
                    />
                  </div>
                        -->
                  <div class="mb-3">
                    <label class="form-label">precio</label>
                    <input 
                      type="number" 
                      class="form-control" 
                      placeholder="Ingrese la cantidad" 
                      min="0" 
                      required 
                      name="amount"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="card">
                <div class="card-header">
                  <h5>Imagen del producto</h5>
                </div>
                <div class="card-body">
                <div class="mb-0">
                    <p><span class="text-danger">*</span> Resolución recomendada de 645 x 645 para la imagen del producto</p>
                    <!-- Contenedor para la vista previa -->
                    <div id="image-preview" class="mt-3">
                      <img src="" alt="Vista previa" id="preview-img" style="max-width: 100%; display: none;" />
                    </div>
                    <label class="btn btn-outline-secondary my-2" for="flupld">
                      <i class="ti ti-upload me-2"></i> Click para subir
                    </label>
                    <input type="file" id="flupld" class="d-none" name="cover" require />
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
            </div>
            <div class="col-sm-12">
              <div class="card">
                <div class="card-body text-end btn-page">
                  <button type="submit"  class="btn btn-primary mb-0">Agregar presentación</button>
                  <button type="reset"  class="btn btn-outline-secondary mb-0">Resetear</button>
                </div>
              </div>
            </div>
            <!-- [ sample-page ] end -->
          </div>
        </form>
        <!-- [ Main Content ] end -->
      </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', () => {
      const fileInput = document.getElementById('flupld');
      const previewImage = document.getElementById('preview-img');
      const form = document.querySelector('form'); 

      fileInput.addEventListener('change', (event) => {
        const file = event.target.files[0];

        if (file) {
          const allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
          if (allowedTypes.includes(file.type)) {
            const reader = new FileReader();

            reader.onload = (e) => {
              previewImage.src = e.target.result;
              previewImage.style.display = 'block';
            };

            reader.readAsDataURL(file);
          } else {
            alert('Por favor, selecciona un archivo de imagen válido (JPG, PNG o GIF).');
            fileInput.value = ''; 
            previewImage.style.display = 'none';
          }
        } else {
          previewImage.style.display = 'none';
        }
      });

      form.addEventListener('reset', () => {
        previewImage.style.display = 'none'; 
        fileInput.value = ''; 
      });
    });
  </script>

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
