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
                            <img src="../../assets/images/application/img-prod-1.jpg" class="d-block w-100" alt="Product images" />
                          </div>
                          <div class="carousel-item">
                            <img src="../../assets/images/application/img-prod-2.jpg" class="d-block w-100" alt="Product images" />
                          </div>
                        </div>
                        <ol class="list-inline carousel-indicators position-relative product-carousel-indicators my-sm-3 mx-0">
                          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="list-inline-item w-25 h-auto active">
                            <img src="../../assets/images/application/img-prod-1.jpg" class="d-block wid-50 rounded" alt="Product images" />
                          </li>
                          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" class="list-inline-item w-25 h-auto">
                            <img src="../../assets/images/application/img-prod-2.jpg" class="d-block wid-50 rounded" alt="Product images" />
                          </li>
                        </ol>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <span class="badge bg-success f-14">In stock</span>
                    <h5 class="my-3">Apple Watch SE Smartwatch (GPS, 40mm) (Heart Rate Monitoring)</h5>
                    <h5 class="mt-4 mb-sm-1 mb-0">Presentaciones</h5>
                    <div class="offer-check-block">
                      <div class="offer-check border rounded p-3">
                        <div class="form-check">
                          <input type="radio" name="radio1" class="form-check-input input-primary" id="customCheckdef1" checked="" />
                          <label class="form-check-label d-block" for="customCheckdef1">
                            <span class="h6 mb-0 d-block">No Cost EMI</span>
                            <span class="text-muted offer-details"
                              >Upto ₹2,322.51 EMI interest savings on select Credit CardsUpto ₹2,322.51 EMI interest savings on select
                              Credit Cards</span
                            >
                            <span class="h6 mb-0 text-primary">1 Offer <i class="ti ti-arrow-narrow-right"></i></span>
                          </label>
                        </div>
                      </div>
                      <div class="offer-check border rounded p-3">
                        <div class="form-check">
                          <input type="radio" name="radio1" class="form-check-input input-primary" id="customCheckdef2" />
                          <label class="form-check-label d-block" for="customCheckdef2">
                            <span class="h6 mb-0 d-block">Bank Offer</span>
                            <span class="text-muted offer-details"
                              >Upto ₹1,250.00 discount on select Credit CardsUpto ₹2,322.51 EMI interest savings on select Credit
                              Cards</span
                            >
                            <span class="h6 mb-0 text-primary">1 Offer <i class="ti ti-arrow-narrow-right"></i></span>
                          </label>
                        </div>
                      </div>
                      <div class="offer-check border rounded p-3">
                        <div class="form-check">
                          <input type="radio" name="radio1" class="form-check-input input-primary" id="customCheckdef3" />
                          <label class="form-check-label d-block" for="customCheckdef3">
                            <span class="h6 mb-0 d-block">No Cost EMI</span>
                            <span class="text-muted offer-details"
                              >Upto ₹2,322.51 EMI interest savings on select Credit CardsUpto ₹2,322.51 EMI interest savings on select
                              Credit Cards</span
                            >
                            <span class="h6 mb-0 text-primary">1 Offer <i class="ti ti-arrow-narrow-right"></i></span>
                          </label>
                        </div>
                      </div>
                      <div class="offer-check border rounded p-3">
                        <div class="form-check">
                          <input type="radio" name="radio1" class="form-check-input input-primary" id="customCheckdef4" />
                          <label class="form-check-label d-block" for="customCheckdef4">
                            <span class="h6 mb-0 d-block">Bank Offer</span>
                            <span class="text-muted offer-details"
                              >Upto ₹1,250.00 discount on select Credit CardsUpto ₹2,322.51 EMI interest savings on select Credit
                              Cards</span
                            >
                            <span class="h6 mb-0 text-primary">1 Offer <i class="ti ti-arrow-narrow-right"></i></span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <h5 class="mt-4 mb-sm-3 mb-2 f-w-500">Descripción del producto</h5>
                    <ul>
                      <li class="mb-2">Care Instructions: Hand Wash Only</li>
                      <li class="mb-2">Fit Type: Regular</li>
                      <li class="mb-2">Dark Blue Regular Women Jeans</li>
                      <li class="mb-2">Fabric : 100% Cotton</li>
                    </ul>
                    <div class="mb-3 row align-items-center">
                      <label class="col-form-label col-lg-3 col-sm-12">
                        <span class="d-block">Talla</span></label>
                      <div class="col-lg-9 col-md-12 col-sm-12">
                        <div class="row g-2">
                          <div class="col-auto">
                            <input type="radio" class="btn-check" id="btnrdolite1" name="btn_radio2" checked />
                            <label class="btn btn-sm btn-light-primary" for="btnrdolite1">Small</label>
                          </div>
                          <div class="col-auto">
                            <input type="radio" class="btn-check" id="btnrdolite2" name="btn_radio2" />
                            <label class="btn btn-sm btn-light-primary" for="btnrdolite2">Medium</label>
                          </div>
                          <div class="col-auto">
                            <input type="radio" class="btn-check" id="btnrdolite3" name="btn_radio2" />
                            <label class="btn btn-sm btn-light-primary" for="btnrdolite3">Large</label>
                          </div>
                        </div>
                      </div>
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
                    <h3 class="mb-4"
                      ><b>$299.00</b></h3>
                    <div class="row">
                      <div class="col-6">
                        <div class="d-grid">
                          <button type="button" class="btn btn-primary">Ordenar aquí</button>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="d-grid">
                          <button type="button" class="btn btn-outline-secondary">Este lo borramos?</button>
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
