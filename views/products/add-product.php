
<?php 
  include_once "../../app/config.php";

?>

<?php 
  include_once "../../app/CategoryController.php";

  $categoryController = new CategoryController();
  $categorias = $categoryController->getAllCategories();
?>

<?php 
 include_once "../../app/TagController.php";

 $tagController = new TagController();
 $tags = $tagController->getAllTags();

?>

<?php 
  include_once "../../app/BrandController.php";
  $brandController = new BrandController();
  $brans = $brandController->get();
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
                  <li class="breadcrumb-item" aria-current="page">Agregar producto</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Agregar producto</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <!-- [ Main Content ] start -->
         <form action="<?= BASE_PATH ?>products" method="post" enctype="multipart/form-data">
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
                    <input type="text" class="form-control" placeholder="Enter Product Name" name="nombre" />
                  </div>

                  <input type="hidden" name="action" value="create_product">

                  <div class="mb-3">
                    <label class="form-label">Slug</label>
                    <input type="text" class="form-control" placeholder="Enter Product Slug" name="slug" />
                  </div>

                  <div id="categories-section">
                    <div>
                      <label class="form-label my-2">Categorías</label>
                    </div>
                    <button type="button" id="add-category" class="btn btn-outline-primary my-2">Agregar</button>
                    <div class="category-item mb-3">
                      <select class="form-select d-inline w-75" name="categories[]">
                        <option></option>
                        <?php foreach($categorias as $presentar): ?>
                            <option value="<?php echo $presentar->id; ?>"><?php echo $presentar->name; ?></option>
                        <?php endforeach; ?>
                      </select>
                      <button type="button" class="btn btn-danger ms-2 remove-category">Eliminar</button>
                    </div>
                  </div>

                  <div id="tags-section">
                    <div>
                      <label class="form-label my-2">Tags</label>
                    </div>
                    <button type="button" id="add-tag" class="btn btn-outline-primary my-2">Agregar</button>
                    <div class="tag-item mb-3">
                      <select class="form-select d-inline w-75" name="tags[]">
                      <option></option>
                      <?php foreach($tags as $presentar): ?>
                          <option value="<?php echo $presentar->id; ?>"><?php echo $presentar->name; ?></option>
                      <?php endforeach; ?>
                      </select>
                      <button type="button" class="btn btn-danger ms-2 remove-tag">Eliminar</button>
                    </div>
                  </div>
                  
                  <div class="mb-3">
                    <label class="form-label">Marcas</label>
                    <select class="form-select" name="brand_id">
                      <option></option>
                      <?php foreach($brans as $presentar): ?>
                          <option value="<?php echo $presentar->id; ?>"><?php echo $presentar->name; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>

                  <div class="mb-0">
                    <label class="form-label">Descripción del producto</label>
                    <textarea class="form-control" placeholder="Enter Product Description" name="description"></textarea>
                  </div>

                  <div class="mb-0">
                    <label class="form-label">Caracteristicas del producto</label>
                    <textarea class="form-control" placeholder="Enter Product Description" name="features"></textarea>
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
                    <input type="file" id="flupld" class="d-none" name="cover" />
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="card">
                <div class="card-body text-end btn-page">
                  <button class="btn btn-primary mb-0" type="submit" >Crear producto</button>
                  <button class="btn btn-outline-secondary mb-0" type="reset"> Resetear</button>
                </div>
              </div>
            </div>
            <!-- [ sample-page ] end -->
          </div>
         </form>
        
        <!-- [ Main Content ] end -->
      </div>
    </div>

  <!-- [ Script para Caategorias]-->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
    const categoriesSection = document.getElementById('categories-section');
    const addCategoryButton = document.getElementById('add-category');

    addCategoryButton.addEventListener('click', () => {
      const newCategory = document.createElement('div');
      newCategory.classList.add('category-item', 'mb-3');
      newCategory.innerHTML = `
        <select class="form-select d-inline w-75" name="categories[]">
          <option></option>
          <?php foreach($categorias as $presentar): ?>
              <option value="<?php echo $presentar->id; ?>"><?php echo $presentar->name; ?></option>
          <?php endforeach; ?>
        </select>
        <button type="button" class="btn btn-danger ms-2 remove-category">Eliminar</button>
      `;
      categoriesSection.appendChild(newCategory);
    });

    categoriesSection.addEventListener('click', (event) => {
      if (event.target.classList.contains('remove-category')) {
        event.target.parentElement.remove();
      }
    });
  });
  </script>

  <!-- [ Script para etiquetas]-->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const tagsSection = document.getElementById('tags-section');
      const addTagButton = document.getElementById('add-tag');

      addTagButton.addEventListener('click', () => {
        const newTag = document.createElement('div');
        newTag.classList.add('tag-item', 'mb-3');
        newTag.innerHTML = `
          <select class="form-select d-inline w-75" name="tags[]">
            <option></option>
            <?php foreach($tags as $presentar): ?>
                <option value="<?php echo $presentar->id; ?>"><?php echo $presentar->name; ?></option>
            <?php endforeach; ?>
            </select>
          <button type="button" class="btn btn-danger ms-2 remove-tag">Eliminar</button>
        `;
        tagsSection.appendChild(newTag);
      });

      tagsSection.addEventListener('click', (event) => {
        if (event.target.classList.contains('remove-tag')) {
          event.target.parentElement.remove();
        }
      });
    });
  </script>

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
