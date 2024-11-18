<?php 
  include_once "../../app/config.php";

?>

<?php  
    include_once "../../app/ProductController.php";
   
    $slug = $_GET['slug'];

    $productController = new ProductController();
    $product = $productController->getBySlug($slug)
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
                  <li class="breadcrumb-item"><a href="javascript: void(0)">Productos</a></li>
                  <li class="breadcrumb-item" aria-current="page">Detalle de producto</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Detalle de producto</h2>
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
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="sticky-md-top product-sticky">
                      <div id="carouselExampleCaptions" class="carousel slide ecomm-prod-slider" data-bs-ride="carousel">
                        <div class="carousel-inner bg-light rounded position-relative">
                          <div class="card-body position-absolute end-0 top-0">
                            <div class="form-check prod-likes">
                              <input type="checkbox" class="form-check-input" />
                              <i data-feather="heart" class="prod-likes-icon"></i>
                            </div>
                          </div>
                          <div class="card-body position-absolute bottom-0 end-0">
                            <ul class="list-inline ms-auto mb-0 prod-likes">
                              <li class="list-inline-item m-0">
                                <a href="#" class="avtar avtar-xs text-white text-hover-primary">
                                  <i class="ti ti-zoom-in f-18"></i>
                                </a>
                              </li>
                              <li class="list-inline-item m-0">
                                <a href="#" class="avtar avtar-xs text-white text-hover-primary">
                                  <i class="ti ti-zoom-out f-18"></i>
                                </a>
                              </li>
                              <li class="list-inline-item m-0">
                                <a href="#" class="avtar avtar-xs text-white text-hover-primary">
                                  <i class="ti ti-rotate-clockwise f-18"></i>
                                </a>
                              </li>
                            </ul>
                          </div>
                          <div class="carousel-item active">
                            <img src="<?php echo $product->cover; ?>" class="d-block w-100" alt="Product images" />
                          </div>
                        </div>
                        <ol class="list-inline carousel-indicators position-relative product-carousel-indicators my-sm-3 mx-0">
                          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="list-inline-item w-25 h-auto active">
                            <img src="<?php echo $product->cover; ?>" class="d-block wid-50 rounded" alt="Product images" />
                          </li>
                        </ol>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <?php if (isset($product->presentations[0]) && $product->presentations[0] !== null && in_array($product->presentations[0]->status, ['activo', 'active'])): ?>
                        <span class="badge bg-success f-14">In stock</span>
                    <?php else: ?>
                      <span class="badge bg-danger f-14">Out of stock</span>
                    <?php endif; ?>
                    
                    <h1 class="my-3"><?php echo $product->name; ?></h1>
                    <?php if (!empty($product->presentations)): ?>
                      <div >
                          <ul class="text-muted offer-details">
                              <li>Código de Producto: <?php echo $product->presentations[0]->code; ?></li>
                              <li>Peso: <?php echo $product->presentations[0]->weight_in_grams; ?> g</li>
                              <li>Stock disponible: <?php echo $product->presentations[0]->stock; ?> unidades</li>
                          </ul>
                      </div>
                    <?php else: ?>
                        <p> No Disponible </p>
                    <?php endif; ?>

                    <h5 class="mt-4 mb-sm-3 mb-2 f-w-500">Descripción del producto</h5>
                    <p> <?php echo $product->description ?></p>

                    <h5 class="mt-4 mb-sm-3 mb-2 f-w-500">Caracteristicas del producto</h5>
                    <p> <?php echo $product->features ?></p>

                    <h5 class="mt-4 mb-sm-3 mb-2 f-w-500">Categorías</h5>
                    <ul>
                        <?php 
                            if (!empty($product->categories)) {
                                foreach ($product->categories as $category) {
                                    echo "<li>" . htmlspecialchars($category->name) . "</li>"; 
                                }
                            } else {
                                echo "<li>Sin categorías</li>";
                            }
                        ?>
                    </ul>

                    <h5 class="mt-4">Tags</h5>
                    <div class="mb-4">
                      <?php 
                        if (!empty($product->tags)) {
                          foreach ($product->tags as $tag) {
                            echo "<span class='badge bg-secondary me-2'>" . htmlspecialchars($tag->name) . "</span>";
                          }
                        } else {
                          echo "<span class='badge bg-light text-dark'>Sin tags</span>";
                        }
                      ?>
                    </div>

                    <div class="mb-3 row">
                      <label class="col-form-label col-lg-3 col-sm-12">Cantidad <span class="text-danger">*</span></label>
                      <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="btn-group btn-group-sm mb-2 border" role="group">
                          <button type="button" id="decrease" onclick="decreaseValue('number')" class="btn btn-link-secondary"
                            ><i class="ti ti-minus"></i
                          ></button>
                          <input
                            class="wid-35 text-center border-0 m-0 form-control rounded-0 shadow-none"
                            type="text"
                            id="number"
                            value="0"
                          />
                          <button type="button" id="increase" onclick="increaseValue('number')" class="btn btn-link-secondary"
                            ><i class="ti ti-plus"></i
                          ></button>
                        </div>
                      </div>
                    </div>
                    <h3 class="mb-4">
                      <b>$<?php echo isset($product->presentations[0]->price[0]->amount) ? $product->presentations[0]->price[0]->amount : 0; ?></b></h3>
                    <div class="row">
                      <div class="col-6">
                        <div class="d-grid">
                          <button type="button" class="btn btn-primary">Ordenar aquí</button>
                        </div>
                      </div>
                    </div>
                  </div>
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


    <!-- [Page Specific JS] start -->
    <script>
      // scroll-block
      var tc = document.querySelectorAll('.scroll-block');
      for (var t = 0; t < tc.length; t++) {
        new SimpleBar(tc[t]);
      }
      // quantity start
      function increaseValue(temp) {
        var value = parseInt(document.getElementById(temp).value, 10);
        value = isNaN(value) ? 0 : value;
        value++;
        document.getElementById(temp).value = value;
      }

      function decreaseValue(temp) {
        var value = parseInt(document.getElementById(temp).value, 10);
        value = isNaN(value) ? 0 : value;
        value < 1 ? (value = 1) : '';
        value--;
        document.getElementById(temp).value = value;
      }
      // quantity end
    </script>
    
    <?php 

      include "../layouts/modals.php";

      ?>

  </body>
  <!-- [Body] end -->
</html>
