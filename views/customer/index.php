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
                  <li class="breadcrumb-item"><a href="<?= BASE_PATH ?>customer">Clientes</a></li>
                  <li class="breadcrumb-item" aria-current="page">Todos los clientes</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Clientes</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- [ breadcrumb ] end -->


        <!-- [ Main Content ] start -->
        <div class="row">
          <div class="col-lg-12">
            <div class="card shadow-none">
              <div class="card-header">
                <h5>Clientes</h5>
                <div class="card-header-right">
                  <button type="button" class="btn btn-light-warning m-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Agregar cliente
                  </button>
                  <div
                    class="modal fade"
                    id="exampleModal"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true"
                  >
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel"
                            ><i data-feather="user" class="icon-svg-primary wid-20 me-2"></i>Agregar cliente</h5
                          >
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                        </div>
                        <form>
                          <div class="modal-body">
                            <small id="emailHelp" class="form-text text-muted mb-2 mt-0"
                              >Agrega la información correspondiente al formulario.</small
                            >
                            <div class="mb-3">
                              <label class="form-label">Nombre</label>
                              <input
                                type="text"
                                class="form-control"
                                id="fname"
                                aria-describedby="emailHelp"
                                placeholder="Ingresa el nombre"
                              />
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Apellido</label>
                              <input
                                type="email"
                                class="form-control"
                                id="lname"
                                aria-describedby="emailHelp"
                                placeholder="Ingresa el apellido"
                              />
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Email</label>
                              <input type="email" class="form-control" id="emial" aria-describedby="emailHelp" placeholder="Ingresa el correo" />
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-light-danger" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-light-primary">Agregar cliente</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body shadow border-0">
                <div class="table-responsive">
                  <table id="report-table" class="table table-bordered table-striped mb-0">
                    <thead>
                      <tr>
                        <th class="border-top-0">Nombre</th>
                        <th class="border-top-0">Email</th>
                        <th class="border-top-0">Cuenta</th>
                        <th class="border-top-0">Cumpleaños (hay que cambiarlo)</th>
                        <th class="border-top-0">Acción</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Mark Jason</td>
                        <td><a href="#" class="link-secondary">mark@mark.com</a></td>
                        <td>N/A</td>
                        <td>January 01,2019 at 03:35 PM</td>
                        <td>
                          <a href="<?= BASE_PATH ?>customer/details" class="btn btn-sm btn-light-primary"><i class="feather icon-eye"></i></a>
                          <a href="<?= BASE_PATH ?>customer/edit-customer" class="btn btn-sm btn-light-success me-1"><i class="feather icon-edit"></i></a>
                          <a href="#" class="btn btn-sm btn-light-danger"><i class="feather icon-trash-2"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Alice Nicol</td>
                        <td><a href="#" class="link-secondary">mark@mark.com</a></td>
                        <td>N/A</td>
                        <td>January 01,2019 at 03:35 PM</td>
                        <td>
                          <a href="#" class="btn btn-sm btn-light-primary"><i class="feather icon-eye"></i></a>
                          <a href="#" class="btn btn-sm btn-light-success me-1"><i class="feather icon-edit"></i></a>
                          <a href="#" class="btn btn-sm btn-light-danger"><i class="feather icon-trash-2"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Harry Cook</td>
                        <td><a href="#" class="link-secondary">mark@mark.com</a></td>
                        <td>N/A</td>
                        <td>January 01,2019 at 03:35 PM</td>
                        <td>
                          <a href="#" class="btn btn-sm btn-light-primary"><i class="feather icon-eye"></i></a>
                          <a href="#" class="btn btn-sm btn-light-success me-1"><i class="feather icon-edit"></i></a>
                          <a href="#" class="btn btn-sm btn-light-danger"><i class="feather icon-trash-2"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Tom Hannry</td>
                        <td><a href="#" class="link-secondary">mark@mark.com</a></td>
                        <td>N/A</td>
                        <td>January 01,2019 at 03:35 PM</td>
                        <td>
                          <a href="#" class="btn btn-sm btn-light-success me-1"><i class="feather icon-edit"></i></a>
                          <a href="#" class="btn btn-sm btn-light-danger"><i class="feather icon-trash-2"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Martin Frank</td>
                        <td><a href="#" class="link-secondary">mark@mark.com</a></td>
                        <td>N/A</td>
                        <td>January 01,2019 at 03:35 PM</td>
                        <td>
                          <a href="#" class="btn btn-sm btn-light-success me-1"><i class="feather icon-edit"></i></a>
                          <a href="#" class="btn btn-sm btn-light-danger"><i class="feather icon-trash-2"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Endrew Khan</td>
                        <td><a href="#" class="link-secondary">mark@mark.com</a></td>
                        <td>N/A</td>
                        <td>January 01,2019 at 03:35 PM</td>
                        <td>
                          <a href="#" class="btn btn-sm btn-light-success me-1"><i class="feather icon-edit"></i></a>
                          <a href="#" class="btn btn-sm btn-light-danger"><i class="feather icon-trash-2"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Chritina Methewv</td>
                        <td><a href="#" class="link-secondary">mark@mark.com</a></td>
                        <td>N/A</td>
                        <td>January 01,2019 at 03:35 PM</td>
                        <td>
                          <a href="#" class="btn btn-sm btn-light-success me-1"><i class="feather icon-edit"></i></a>
                          <a href="#" class="btn btn-sm btn-light-danger"><i class="feather icon-trash-2"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Jakson Pit</td>
                        <td><a href="#" class="link-secondary">mark@mark.com</a></td>
                        <td>N/A</td>
                        <td>January 01,2019 at 03:35 PM</td>
                        <td>
                          <a href="#" class="btn btn-sm btn-light-success me-1"><i class="feather icon-edit"></i></a>
                          <a href="#" class="btn btn-sm btn-light-danger"><i class="feather icon-trash-2"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Nikolas Jons</td>
                        <td><a href="#" class="link-secondary">mark@mark.com</a></td>
                        <td>N/A</td>
                        <td>January 01,2019 at 03:35 PM</td>
                        <td>
                          <a href="#" class="btn btn-sm btn-light-success me-1"><i class="feather icon-edit"></i></a>
                          <a href="#" class="btn btn-sm btn-light-danger"><i class="feather icon-trash-2"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Nik Cage</td>
                        <td><a href="#" class="link-secondary">mark@mark.com</a></td>
                        <td>N/A</td>
                        <td>January 01,2019 at 03:35 PM</td>
                        <td>
                          <a href="#" class="btn btn-sm btn-light-success me-1"><i class="feather icon-edit"></i></a>
                          <a href="#" class="btn btn-sm btn-light-danger"><i class="feather icon-trash-2"></i></a>
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
