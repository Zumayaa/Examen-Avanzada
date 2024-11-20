<?php 
  include_once "../../app/config.php";

?>

<?php 

  include_once "../../app/CategoryController.php";

  $categoryController = new CategoryController();
  $categorias = $categoryController->getAllCategories();

?>

<?php 
 $curl = curl_init();

 curl_setopt_array($curl, array(
   CURLOPT_URL => 'https://crud.jonathansoto.mx/api/tags',
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_ENCODING => '',
   CURLOPT_MAXREDIRS => 10,
   CURLOPT_TIMEOUT => 0,
   CURLOPT_FOLLOWLOCATION => true,
   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
   CURLOPT_CUSTOMREQUEST => 'GET',
   CURLOPT_HTTPHEADER => array(
     'Authorization: Bearer 1686|APv2dOXjYU8O5Y8faoCQczgTWerj4CkDA9z1bOrY'
   ),
 ));
 
 $response = curl_exec($curl);
 
 curl_close($curl);
 $tags = json_decode($response);
?>

<?php 
 $curl = curl_init();
 
 curl_setopt_array($curl, array(
   CURLOPT_URL => 'https://crud.jonathansoto.mx/api/brands',
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_ENCODING => '',
   CURLOPT_MAXREDIRS => 10,
   CURLOPT_TIMEOUT => 0,
   CURLOPT_FOLLOWLOCATION => true,
   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
   CURLOPT_CUSTOMREQUEST => 'GET',
   CURLOPT_HTTPHEADER => array(
     'Authorization: Bearer 1686|APv2dOXjYU8O5Y8faoCQczgTWerj4CkDA9z1bOrY'
   ),
 ));
 
 $response = curl_exec($curl);
 
 curl_close($curl);
 $brands = json_decode($response);
?>

<?php 
  include_once "../../app/ProductController.php";
  
  $id = $_GET['id'];

  $productController = new ProductController();
  $product = $productController->getById($id);

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
          <form action="<?= BASE_PATH ?>products" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-xl-6">
                <div class="card">
                  <div class="card-header">
                    <h5>Descripción del producto</h5>
                  </div>
                  <div class="card-body">
                    <input type="hidden" name="product_id" value="<?= htmlspecialchars($product->id ?? '') ?>" />
                    <input type="hidden" name="action" value="update_product">
                    <div class="mb-3">
                      <label class="form-label">Nombre de producto</label>
                      <input type="text" class="form-control" name="nombre" placeholder="Ingresa el nombre del producto" value="<?= htmlspecialchars($product->name ?? '') ?>" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Slug</label>
                      <input type="text" class="form-control" name="slug" placeholder="Ingresa el slug del producto" value="<?= htmlspecialchars($product->slug ?? '') ?>" />
                    </div>
              
                    <div id="categories-section">
                      <div>
                        <label class="form-label my-2">Categorías</label>
                      </div>
                        <?php foreach ($product->categories as $category): ?>
                            <div class="category-item mb-3">
                                <select class="form-select d-inline w-75" name="categories[]">
                                    <option value=""></option>
                                    <?php foreach ($categorias as $presentar): ?>
                                        <option value="<?php echo $presentar->id; ?>" <?php echo $presentar->id == $category->id ? 'selected' : ''; ?>>
                                            <?php echo $presentar->name; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <button type="button" class="btn btn-danger ms-2 remove-category">Eliminar</button>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <button type="button" class="btn btn-primary" id="add-category">Agregar Categoría</button>

                    <div id="tags-section">
                      <div>
                        <label class="form-label my-2">Tags</label>
                      </div>
                        <?php foreach ($product->tags as $tag): ?>
                            <div class="tag-item mb-3">
                                <select class="form-select d-inline w-75" name="tags[]">
                                    <option value=""></option>
                                    <?php foreach ($tags->data as $presentar): ?>
                                        <option value="<?php echo $presentar->id; ?>" <?php echo $presentar->id == $tag->id ? 'selected' : ''; ?>>
                                            <?php echo $presentar->name; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <button type="button" class="btn btn-danger ms-2 remove-tag">Eliminar</button>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <button type="button" class="btn btn-primary" id="add-tag">Agregar Etiqueta</button>

                    <div class="mb-3">
                      <label class="form-label">Marcas</label>
                      <select class="form-select" name="brand_id">
                        <?php foreach ($brands->data as $brand): ?>
                          <option value="<?= $brand->id ?>" <?= isset($product->brand_id) && $product->brand_id == $brand->id ? 'selected' : '' ?>>
                            <?= htmlspecialchars($brand->name) ?>
                          </option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Descripción del producto</label>
                      <textarea class="form-control" name="description" placeholder="Ingresa la descripción del producto"><?= htmlspecialchars($product->description ?? '') ?></textarea>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Características del producto</label>
                      <textarea class="form-control" name="features" placeholder="Ingresa las características del producto"><?= htmlspecialchars($product->features ?? '') ?></textarea>
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
                          <label class="form-label d-flex align-items-center">
                            Precio del producto <i class="ph-duotone ph-info ms-1" data-bs-toggle="tooltip" data-bs-title="Precio del producto general"></i>
                          </label>
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
                    <button type="submit" class="btn btn-primary mb-0">Actualizar producto</button>
                    <button type="reset" class="btn btn-outline-secondary mb-0">Resetear</button>
                  </div>
                </div>
              </div>
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
                <option value=""></option>
                <?php foreach($categorias as $presentar): ?>
                    <option value="<?= $presentar->id; ?>"><?= $presentar->name; ?></option>
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const tagsSection = document.getElementById('tags-section');
    const addTagButton = document.getElementById('add-tag');

    addTagButton.addEventListener('click', () => {
        const newTag = document.createElement('div');
        newTag.classList.add('tag-item', 'mb-3');
        newTag.innerHTML = `
            <select class="form-select d-inline w-75" name="tags[]">
                <option value=""></option>
                <?php foreach($tags->data as $presentar): ?>
                    <option value="<?= $presentar->id; ?>"><?= $presentar->name; ?></option>
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
