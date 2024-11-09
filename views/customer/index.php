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
                      <tr>
                        <td class="text-end">7</td>
                        <td>
                          <div class="row">
                            <div class="col-auto pe-0">
                              <img src="../assets/images/application/img-prod-1.jpg" alt="user-image" class="wid-40 rounded" />
                            </div>
                            <div class="col">
                              <h6 class="mb-1">Apple Series 4 GPS A38 MM Space</h6>
                              <p class="text-muted f-12 mb-0">Apple Watch SE Smartwatch </p>
                            </div>
                          </div>
                        </td>
                        <td>Electronics, Laptop</td>
                        <td class="text-end">$14.59</td>
                        <td class="text-end">70</td>
                        <td class="text-center">
                          <i class="ph-duotone ph-check-circle text-success f-24" data-bs-toggle="tooltip" data-bs-title="success"></i>
                        </td>
                        <td class="text-center">
                          <img src="../assets/images/application/img-prod-brand-1.png" alt="user-image" class="wid-40" />
                          <div class="prod-action-links">
                            <ul class="list-inline me-auto mb-0">
                              <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="View">
                                <a href="<?= BASE_PATH ?>products/details" class="avtar avtar-xs btn-link-success btn-pc-default">
                                  <i class="ti ti-eye f-18"></i>
                                </a>
                              </li>
                              <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Edit">
                                <a href="<?= BASE_PATH ?>products/edit-product" class="avtar avtar-xs btn-link-success btn-pc-default">
                                  <i class="ti ti-edit-circle f-18"></i>
                                </a>
                              </li>
                              <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Delete">
                                <a href="#" class="avtar avtar-xs btn-link-danger btn-pc-default">
                                  <i class="ti ti-trash f-18"></i>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-end">2</td>
                        <td>
                          <div class="row">
                            <div class="col-auto pe-0">
                              <img src="../assets/images/application/img-prod-2.jpg" alt="user-image" class="wid-40 rounded" />
                            </div>
                            <div class="col">
                              <h6 class="mb-1">Boat On-Ear Wireless</h6>
                              <p class="text-muted f-12 mb-0">Mic(Bluetooth 4.2, Rockerz 450R</p>
                            </div>
                          </div>
                        </td>
                        <td>Electronics, Headphones</td>
                        <td class="text-end">$81.99</td>
                        <td class="text-end">45</td>
                        <td class="text-center">
                          <i class="ph-duotone ph-clock-countdown text-warning f-24" data-bs-toggle="tooltip" data-bs-title="warning"></i>
                        </td>
                        <td class="text-center">
                          <img src="../assets/images/application/img-prod-brand-2.png" alt="user-image" class="wid-40" />
                          <div class="prod-action-links">
                            <ul class="list-inline me-auto mb-0">
                              <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="View">
                                <a
                                  href="#"
                                  class="avtar avtar-xs btn-link-secondary btn-pc-default"
                                  data-bs-toggle="offcanvas"
                                  data-bs-target="#productOffcanvas"
                                >
                                  <i class="ti ti-eye f-18"></i>
                                </a>
                              </li>
                              <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Edit">
                                <a href="ecom_product-add.html" class="avtar avtar-xs btn-link-success btn-pc-default">
                                  <i class="ti ti-edit-circle f-18"></i>
                                </a>
                              </li>
                              <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Delete">
                                <a href="#" class="avtar avtar-xs btn-link-danger btn-pc-default">
                                  <i class="ti ti-trash f-18"></i>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-end">5</td>
                        <td>
                          <div class="row">
                            <div class="col-auto pe-0">
                              <img src="../assets/images/application/img-prod-3.jpg" alt="user-image" class="wid-40 rounded" />
                            </div>
                            <div class="col">
                              <h6 class="mb-1">Fitbit MX30 Smart Watch</h6>
                              <p class="text-muted f-12 mb-0">(MX30- waterproof) watch</p>
                            </div>
                          </div>
                        </td>
                        <td>Fashion, Watch</td>
                        <td class="text-end">$49.9</td>
                        <td class="text-end">21</td>
                        <td class="text-center">
                          <i class="ph-duotone ph-x-circle text-danger f-24" data-bs-toggle="tooltip" data-bs-title="danger"></i>
                        </td>
                        <td class="text-center">
                          <img src="../assets/images/application/img-prod-brand-3.png" alt="user-image" class="wid-40" />
                          <div class="prod-action-links">
                            <ul class="list-inline me-auto mb-0">
                              <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="View">
                                <a
                                  href="#"
                                  class="avtar avtar-xs btn-link-secondary btn-pc-default"
                                  data-bs-toggle="offcanvas"
                                  data-bs-target="#productOffcanvas"
                                >
                                  <i class="ti ti-eye f-18"></i>
                                </a>
                              </li>
                              <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Edit">
                                <a href="ecom_product-add.html" class="avtar avtar-xs btn-link-success btn-pc-default">
                                  <i class="ti ti-edit-circle f-18"></i>
                                </a>
                              </li>
                              <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Delete">
                                <a href="#" class="avtar avtar-xs btn-link-danger btn-pc-default">
                                  <i class="ti ti-trash f-18"></i>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-end">7</td>
                        <td>
                          <div class="row">
                            <div class="col-auto pe-0">
                              <img src="../assets/images/application/img-prod-4.jpg" alt="user-image" class="wid-40 rounded" />
                            </div>
                            <div class="col">
                              <h6 class="mb-1">Apple Series 4 GPS A38 MM Space</h6>
                              <p class="text-muted f-12 mb-0">Apple Watch SE Smartwatch </p>
                            </div>
                          </div>
                        </td>
                        <td>Electronics, Laptop</td>
                        <td class="text-end">$14.59</td>
                        <td class="text-end">70</td>
                        <td class="text-center">
                          <i class="ph-duotone ph-check-circle text-success f-24" data-bs-toggle="tooltip" data-bs-title="success"></i>
                        </td>
                        <td class="text-center">
                          <img src="../assets/images/application/img-prod-brand-4.png" alt="user-image" class="wid-40" />
                          <div class="prod-action-links">
                            <ul class="list-inline me-auto mb-0">
                              <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="View">
                                <a
                                  href="#"
                                  class="avtar avtar-xs btn-link-secondary btn-pc-default"
                                  data-bs-toggle="offcanvas"
                                  data-bs-target="#productOffcanvas"
                                >
                                  <i class="ti ti-eye f-18"></i>
                                </a>
                              </li>
                              <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Edit">
                                <a href="ecom_product-add.html" class="avtar avtar-xs btn-link-success btn-pc-default">
                                  <i class="ti ti-edit-circle f-18"></i>
                                </a>
                              </li>
                              <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Delete">
                                <a href="#" class="avtar avtar-xs btn-link-danger btn-pc-default">
                                  <i class="ti ti-trash f-18"></i>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-end">2</td>
                        <td>
                          <div class="row">
                            <div class="col-auto pe-0">
                              <img src="../assets/images/application/img-prod-5.jpg" alt="user-image" class="wid-40 rounded" />
                            </div>
                            <div class="col">
                              <h6 class="mb-1">Boat On-Ear Wireless</h6>
                              <p class="text-muted f-12 mb-0">Mic(Bluetooth 4.2, Rockerz 450R</p>
                            </div>
                          </div>
                        </td>
                        <td>Electronics, Headphones</td>
                        <td class="text-end">$81.99</td>
                        <td class="text-end">45</td>
                        <td class="text-center">
                          <i class="ph-duotone ph-clock-countdown text-warning f-24" data-bs-toggle="tooltip" data-bs-title="warning"></i>
                        </td>
                        <td class="text-center">
                          <img src="../assets/images/application/img-prod-brand-5.png" alt="user-image" class="wid-40" />
                          <div class="prod-action-links">
                            <ul class="list-inline me-auto mb-0">
                              <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="View">
                                <a
                                  href="#"
                                  class="avtar avtar-xs btn-link-secondary btn-pc-default"
                                  data-bs-toggle="offcanvas"
                                  data-bs-target="#productOffcanvas"
                                >
                                  <i class="ti ti-eye f-18"></i>
                                </a>
                              </li>
                              <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Edit">
                                <a href="ecom_product-add.html" class="avtar avtar-xs btn-link-success btn-pc-default">
                                  <i class="ti ti-edit-circle f-18"></i>
                                </a>
                              </li>
                              <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Delete">
                                <a href="#" class="avtar avtar-xs btn-link-danger btn-pc-default">
                                  <i class="ti ti-trash f-18"></i>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-end">7</td>
                        <td>
                          <div class="row">
                            <div class="col-auto pe-0">
                              <img src="../assets/images/application/img-prod-4.jpg" alt="user-image" class="wid-40 rounded" />
                            </div>
                            <div class="col">
                              <h6 class="mb-1">Apple Series 4 GPS A38 MM Space</h6>
                              <p class="text-muted f-12 mb-0">Apple Watch SE Smartwatch </p>
                            </div>
                          </div>
                        </td>
                        <td>Electronics, Laptop</td>
                        <td class="text-end">$14.59</td>
                        <td class="text-end">70</td>
                        <td class="text-center">
                          <i class="ph-duotone ph-check-circle text-success f-24" data-bs-toggle="tooltip" data-bs-title="success"></i>
                        </td>
                        <td class="text-center">
                          <img src="../assets/images/application/img-prod-brand-4.png" alt="user-image" class="wid-40" />
                          <div class="prod-action-links">
                            <ul class="list-inline me-auto mb-0">
                              <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="View">
                                <a
                                  href="#"
                                  class="avtar avtar-xs btn-link-secondary btn-pc-default"
                                  data-bs-toggle="offcanvas"
                                  data-bs-target="#productOffcanvas"
                                >
                                  <i class="ti ti-eye f-18"></i>
                                </a>
                              </li>
                              <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Edit">
                                <a href="ecom_product-add.html" class="avtar avtar-xs btn-link-success btn-pc-default">
                                  <i class="ti ti-edit-circle f-18"></i>
                                </a>
                              </li>
                              <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Delete">
                                <a href="#" class="avtar avtar-xs btn-link-danger btn-pc-default">
                                  <i class="ti ti-trash f-18"></i>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </td>
                      </tr>
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
