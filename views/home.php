<?php 
  include_once "../app/config.php";

?>
<!doctype html>
<html lang="en">
  <!-- [Head] start -->

  <head>
     <?php 

      include "layouts/head.php";

    ?>

  </head>
  <!-- [Head] end -->
  <!-- [Body] Start -->

  <body data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">
    
    <?php 

      include "layouts/sidebar.php";

    ?>

    <?php 

      include "layouts/nav.php";

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
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
                  <li class="breadcrumb-item" aria-current="page">Home</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Home</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <!-- [ Main Content ] start -->
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="card statistics-card-1 overflow-hidden">
              <div class="card-body">
                <img src="<?= BASE_PATH ?>assets/images/widget/img-status-4.svg" alt="img" class="img-fluid img-bg" />
                <h5 class="mb-4">Daily Sales</h5>
                <div class="d-flex align-items-center mt-3">
                  <h3 class="f-w-300 d-flex align-items-center m-b-0">$249.95</h3>
                  <span class="badge bg-light-success ms-2">36%</span>
                </div>
                <p class="text-muted mb-2 text-sm mt-3">You made an extra 35,000 this daily</p>
                <div class="progress" style="height: 7px">
                  <div
                    class="progress-bar bg-brand-color-3"
                    role="progressbar"
                    style="width: 75%"
                    aria-valuenow="75"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="card statistics-card-1 overflow-hidden">
              <div class="card-body">
                <img src="<?= BASE_PATH ?>assets/images/widget/img-status-5.svg" alt="img" class="img-fluid img-bg" />
                <h5 class="mb-4">Monthly Sales</h5>
                <div class="d-flex align-items-center mt-3">
                  <h3 class="f-w-300 d-flex align-items-center m-b-0">$249.95</h3>
                  <span class="badge bg-light-primary ms-2">20%</span>
                </div>
                <p class="text-muted mb-2 text-sm mt-3">You made an extra 35,000 this Monthly</p>
                <div class="progress" style="height: 7px">
                  <div
                    class="progress-bar bg-brand-color-3"
                    role="progressbar"
                    style="width: 75%"
                    aria-valuenow="75"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
            <div class="card statistics-card-1 overflow-hidden bg-brand-color-3">
              <div class="card-body">
                <img src="<?= BASE_PATH ?>assets/images/widget/img-status-6.svg" alt="img" class="img-fluid img-bg" />
                <h5 class="mb-4 text-white">Yearly Sales</h5>
                <div class="d-flex align-items-center mt-3">
                  <h3 class="text-white f-w-300 d-flex align-items-center m-b-0">$249.95</h3>
                </div>
                <p class="text-white text-opacity-75 mb-2 text-sm mt-3">You made an extra 35,000 this Daily</p>
                <div class="progress bg-white bg-opacity-10" style="height: 7px">
                  <div
                    class="progress-bar bg-white"
                    role="progressbar"
                    style="width: 75%"
                    aria-valuenow="75"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-7">
            <div class="card">
              <div class="card-header">
                <h5>Users From United States</h5>
              </div>
              <div class="card-body">
                <div id="world-map-markers" class="set-map" style="height: 365px"></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-5">
            <div class="card">
              <div class="card-header d-flex align-items-center justify-content-between py-3">
                <h5>Users From United States</h5>
                <div class="dropdown">
                  <a
                    class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                    href="#"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                    ><i class="material-icons-two-tone f-18">more_vert</i></a
                  >
                  <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="#">View</a>
                    <a class="dropdown-item" href="#">Edit</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="avtar avtar-s bg-light-primary flex-shrink-0">
                    <i class="ph-duotone ph-money f-20"></i>
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <p class="mb-0 text-muted">Total Earnings</p>
                    <h5 class="mb-0">$249.95</h5>
                  </div>
                </div>
                <div id="earnings-users-chart"></div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-6">
                    <div class="d-flex align-items-center">
                      <div class="avtar avtar-s bg-light-warning flex-shrink-0">
                        <i class="ph-duotone ph-lightning f-20"></i>
                      </div>
                      <div class="flex-grow-1 ms-2">
                        <p class="mb-0 text-muted">Total ideas</p>
                        <h6 class="mb-0">235</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="d-flex align-items-center">
                      <div class="avtar avtar-s bg-light-danger flex-shrink-0">
                        <i class="ph-duotone ph-map-pin f-20"></i>
                      </div>
                      <div class="flex-grow-1 ms-2">
                        <p class="mb-0 text-muted">Total location</p>
                        <h6 class="mb-0">26</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-4">
            <div class="card statistics-card-1 overflow-hidden">
              <div class="card-body">
                <img src="<?= BASE_PATH ?>assets/images/widget/img-status-7.svg" alt="img" class="img-fluid img-bg" />
                <div class="d-flex align-items-center">
                  <img src="<?= BASE_PATH ?>assets/images/widget/img-facebook.svg" alt="img" class="img-fluid" />
                  <div class="flex-grow-1 ms-3">
                    <p class="mb-0 text-muted">Total Likes</p>
                    <div class="d-inline-flex align-items-center">
                      <h5 class="f-w-300 d-flex align-items-center m-b-0">12,281</h5>
                      <span class="badge bg-success ms-2">+7.2%</span>
                    </div>
                  </div>
                </div>
                <div class="row g-3 mt-5 text-center">
                  <div class="col-6">
                    <p class="mb-0 text-muted">Target</p>
                    <h5 class="mb-0">35,098</h5>
                  </div>
                  <div class="col-6 border-start">
                    <p class="mb-0 text-muted">Duration</p>
                    <h5 class="mb-0">3,539</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-4">
            <div class="card statistics-card-1 overflow-hidden">
              <div class="card-body">
                <img src="<?= BASE_PATH ?>assets/images/widget/img-status-8.svg" alt="img" class="img-fluid img-bg" />
                <div class="d-flex align-items-center">
                  <img src="<?= BASE_PATH ?>assets/images/widget/img-google.svg" alt="img" class="img-fluid" />
                  <div class="flex-grow-1 ms-3">
                    <p class="mb-0 text-muted">Total Likes</p>
                    <div class="d-inline-flex align-items-center">
                      <h5 class="f-w-300 d-flex align-items-center m-b-0">12,281</h5>
                      <span class="badge bg-success ms-2">+5.9%</span>
                    </div>
                  </div>
                </div>
                <div class="row g-3 mt-5 text-center">
                  <div class="col-6">
                    <p class="mb-0 text-muted">Target</p>
                    <h5 class="mb-0">35,098</h5>
                  </div>
                  <div class="col-6 border-start">
                    <p class="mb-0 text-muted">Duration</p>
                    <h5 class="mb-0">3,539</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-xl-4">
            <div class="card statistics-card-1 overflow-hidden">
              <div class="card-body">
                <img src="<?= BASE_PATH ?>assets/images/widget/img-status-9.svg" alt="img" class="img-fluid img-bg" />
                <div class="d-flex align-items-center">
                  <img src="<?= BASE_PATH ?>assets/images/widget/img-twitter.svg" alt="img" class="img-fluid" />
                  <div class="flex-grow-1 ms-3">
                    <p class="mb-0 text-muted">Total Likes</p>
                    <div class="d-inline-flex align-items-center">
                      <h5 class="f-w-300 d-flex align-items-center m-b-0">12,281</h5>
                      <span class="badge bg-success ms-2">+6.2%</span>
                    </div>
                  </div>
                </div>
                <div class="row g-3 mt-5 text-center">
                  <div class="col-6">
                    <p class="mb-0 text-muted">Target</p>
                    <h5 class="mb-0">35,098</h5>
                  </div>
                  <div class="col-6 border-start">
                    <p class="mb-0 text-muted">Duration</p>
                    <h5 class="mb-0">3,539</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-4">
            <div class="card">
              <div class="card-header d-flex align-items-center justify-content-between py-3">
                <h5>Recent Users</h5>
                <div class="dropdown">
                  <a
                    class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                    href="#"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                    ><i class="material-icons-two-tone f-18">more_vert</i></a
                  >
                  <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="#">View</a>
                    <a class="dropdown-item" href="#">Edit</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-2">
                  <h2 class="mb-3"
                    ><b>4.7<small class="text-muted f-18">/5</small></b></h2
                  >
                  <div class="star mb-3 f-20">
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star-half-alt text-warning"></i>
                  </div>
                </div>
                <div class="row align-items-center g-3 mb-2">
                  <div class="col-auto">
                    <h6 class="mb-0">5 <i class="fas fa-star text-warning"></i></h6>
                  </div>
                  <div class="col">
                    <div class="progress" style="height: 8px">
                      <div class="progress-bar bg-primary" style="width: 70%"></div>
                    </div>
                  </div>
                  <div class="col-auto">
                    <p class="mb-0 text-muted">384</p>
                  </div>
                </div>
                <div class="row align-items-center g-3 mb-2">
                  <div class="col-auto">
                    <h6 class="mb-0">4 <i class="fas fa-star text-warning"></i></h6>
                  </div>
                  <div class="col">
                    <div class="progress" style="height: 8px">
                      <div class="progress-bar bg-primary" style="width: 55%"></div>
                    </div>
                  </div>
                  <div class="col-auto">
                    <p class="mb-0 text-muted">145</p>
                  </div>
                </div>
                <div class="row align-items-center g-3 mb-2">
                  <div class="col-auto">
                    <h6 class="mb-0">3 <i class="fas fa-star text-warning"></i></h6>
                  </div>
                  <div class="col">
                    <div class="progress" style="height: 8px">
                      <div class="progress-bar bg-primary" style="width: 40%"></div>
                    </div>
                  </div>
                  <div class="col-auto">
                    <p class="mb-0 text-muted">24</p>
                  </div>
                </div>
                <div class="row align-items-center g-3 mb-2">
                  <div class="col-auto">
                    <h6 class="mb-0">2 <i class="fas fa-star text-warning"></i></h6>
                  </div>
                  <div class="col">
                    <div class="progress" style="height: 8px">
                      <div class="progress-bar bg-primary" style="width: 25%"></div>
                    </div>
                  </div>
                  <div class="col-auto">
                    <p class="mb-0 text-muted">1</p>
                  </div>
                </div>
                <div class="row align-items-center g-3">
                  <div class="col-auto">
                    <h6 class="mb-0">1 <i class="fas fa-star text-warning"></i></h6>
                  </div>
                  <div class="col">
                    <div class="progress" style="height: 8px">
                      <div class="progress-bar bg-primary" style="width: 10%"></div>
                    </div>
                  </div>
                  <div class="col-auto">
                    <p class="mb-0 text-muted">0</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-8">
            <div class="card table-card">
              <div class="card-header d-flex align-items-center justify-content-between py-3">
                <h5>Recent Users</h5>
                <div class="dropdown">
                  <a
                    class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                    href="#"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                    ><i class="material-icons-two-tone f-18">more_vert</i></a
                  >
                  <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="#">View</a>
                    <a class="dropdown-item" href="#">Edit</a>
                  </div>
                </div>
              </div>
              <div class="card-body py-2 px-0">
                <div class="table-responsive">
                  <table class="table table-hover table-borderless table-sm mb-0">
                    <tbody>
                      <tr>
                        <td>
                          <div class="d-inline-block align-middle">
                            <img
                              src="<?= BASE_PATH ?>assets/images/user/avatar-1.jpg"
                              alt="user image"
                              class="img-radius align-top m-r-15"
                              style="width: 40px"
                            />
                            <div class="d-inline-block">
                              <h6 class="m-b-0">Quinn Flynn</h6>
                              <p class="m-b-0">Android developer</p>
                            </div>
                          </div>
                        </td>
                        <td
                          ><p class="mb-0"><i class="ph-duotone ph-circle text-warning f-12"></i> 11 may 12:30</p></td
                        >
                        <td class="text-end">
                          <button class="btn avtar avtar-xs btn-light-danger"><i class="ti ti-x"></i></button>
                          <button class="btn avtar avtar-xs btn-light-success"><i class="ti ti-check"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-inline-block align-middle">
                            <img
                              src="<?= BASE_PATH ?>assets/images/user/avatar-2.jpg"
                              alt="user image"
                              class="img-radius align-top m-r-15"
                              style="width: 40px"
                            />
                            <div class="d-inline-block">
                              <h6 class="m-b-0">Garrett Winters</h6>
                              <p class="m-b-0">Android developer</p>
                            </div>
                          </div>
                        </td>
                        <td
                          ><p class="mb-0"><i class="ph-duotone ph-circle text-success f-12"></i> 11 may 12:30</p></td
                        >
                        <td class="text-end">
                          <button class="btn avtar avtar-xs btn-light-danger"><i class="ti ti-x"></i></button>
                          <button class="btn avtar avtar-xs btn-light-success"><i class="ti ti-check"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-inline-block align-middle">
                            <img
                              src="<?= BASE_PATH ?>assets/images/user/avatar-3.jpg"
                              alt="user image"
                              class="img-radius align-top m-r-15"
                              style="width: 40px"
                            />
                            <div class="d-inline-block">
                              <h6 class="m-b-0">Ashton Cox</h6>
                              <p class="m-b-0">Android developer</p>
                            </div>
                          </div>
                        </td>
                        <td
                          ><p class="mb-0"><i class="ph-duotone ph-circle text-primary f-12"></i> 11 may 12:30</p></td
                        >
                        <td class="text-end">
                          <button class="btn avtar avtar-xs btn-light-danger"><i class="ti ti-x"></i></button>
                          <button class="btn avtar avtar-xs btn-light-success"><i class="ti ti-check"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-inline-block align-middle">
                            <img
                              src="<?= BASE_PATH ?>assets/images/user/avatar-4.jpg"
                              alt="user image"
                              class="img-radius align-top m-r-15"
                              style="width: 40px"
                            />
                            <div class="d-inline-block">
                              <h6 class="m-b-0">Cedric Kelly</h6>
                              <p class="m-b-0">Android developer</p>
                            </div>
                          </div>
                        </td>
                        <td
                          ><p class="mb-0"><i class="ph-duotone ph-circle text-danger f-12"></i> 11 may 12:30</p></td
                        >
                        <td class="text-end">
                          <button class="btn avtar avtar-xs btn-light-danger"><i class="ti ti-x"></i></button>
                          <button class="btn avtar avtar-xs btn-light-success"><i class="ti ti-check"></i></button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- [ Main Content ] end -->
      </div>
    </div>
    
    <!-- [ Main Content ] end -->
    <?php 

      include "layouts/footer.php";

    ?>
    
    <?php 

      include "layouts/modals.php";

    ?>


    <!-- [Page Specific JS] start -->
    <script src="<?= BASE_PATH ?>assets/js/plugins/apexcharts.min.js"></script>
    <script src="<?= BASE_PATH ?>assets/js/plugins/jsvectormap.min.js"></script>
    <script src="<?= BASE_PATH ?>assets/js/plugins/world.js"></script>
    <script src="<?= BASE_PATH ?>assets/js/plugins/world-merc.js"></script>
    <script src="<?= BASE_PATH ?>assets/js/pages/dashboard-default.js"></script>
    <!-- [Page Specific JS] end -->
    
    <?php 

      include "layouts/scripts.php";

    ?>
    

  </body>
  <!-- [Body] end -->
</html>
