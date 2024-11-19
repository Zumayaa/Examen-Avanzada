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
                  <li class="breadcrumb-item"><a href="<?= BASE_PATH ?>coupons">Cupones</a></li>
                  <li class="breadcrumb-item" aria-current="page">Todos los cupones</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Cupones</h2>
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
                <h5>Marcas</h5>
                <div class="card-header-right">
                  <button type="button" class="btn btn-light-warning m-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Agregar cupones
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
                            ><i data-feather="user" class="icon-svg-primary wid-20 me-2"></i>Agregar cupones</h5
                          >
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                        </div>
                        <form>
                         <div class="modal-body">
                            <small id="emailHelp" class="form-text text-muted mb-2 mt-0">
                              Completa la información para agregar un nuevo cupón.
                            </small>
                            <!-- Nombre del cupón -->
                            <div class="mb-3">
                              <label class="form-label">Nombre del cupón</label>
                              <input
                                type="text"
                                class="form-control"
                                id="name"
                                placeholder="Ingresa el nombre del cupón"
                              />
                            </div>
                            <!-- Código -->
                            <div class="mb-3">
                              <label class="form-label">Código</label>
                              <input
                                type="text"
                                class="form-control"
                                id="code"
                                placeholder="Ingresa el código del cupón"
                              />
                            </div>
                            <!-- Descuento porcentual -->
                            <div class="mb-3">
                              <label class="form-label">Descuento porcentual</label>
                              <input
                                type="number"
                                class="form-control"
                                id="percentage_discount"
                                placeholder="Ingresa el porcentaje de descuento"
                              />
                            </div>
                            <!-- Monto mínimo requerido -->
                            <div class="mb-3">
                              <label class="form-label">Monto mínimo requerido</label>
                              <input
                                type="number"
                                class="form-control"
                                id="min_amount_required"
                                placeholder="Ingresa el monto mínimo requerido"
                              />
                            </div>
                            <!-- Productos mínimos requeridos -->
                            <div class="mb-3">
                              <label class="form-label">Productos mínimos requeridos</label>
                              <input
                                type="number"
                                class="form-control"
                                id="min_product_required"
                                placeholder="Ingresa la cantidad mínima de productos requeridos"
                              />
                            </div>
                            <!-- Fecha de inicio -->
                            <div class="mb-3">
                              <label class="form-label">Fecha de inicio</label>
                              <input
                                type="date"
                                class="form-control"
                                id="start_date"
                              />
                            </div>
                            <!-- Fecha de finalización -->
                            <div class="mb-3">
                              <label class="form-label">Fecha de finalización</label>
                              <input
                                type="date"
                                class="form-control"
                                id="end_date"
                              />
                            </div>
                            <!-- Máximo de usos -->
                            <div class="mb-3">
                              <label class="form-label">Máximo de usos</label>
                              <input
                                type="number"
                                class="form-control"
                                id="max_uses"
                                placeholder="Ingresa el número máximo de usos"
                              />
                            </div>
                            <!-- Válido solo para primera compra -->
                            <div class="mb-3">
                              <label class="form-label">Válido solo para la primera compra</label>
                              <select class="form-control" id="valid_only_first_purchase">
                                <option value="1">Sí</option>
                                <option value="0">No</option>
                              </select>
                            </div>
                            <!-- Estado -->
                            <div class="mb-3">
                              <label class="form-label">Estado</label>
                              <select class="form-control" id="status">
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                              </select>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-light-danger" data-bs-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-light-primary">Agregar cupon</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-header-right">
                  <div
                    class="modal fade"
                    id="editModal"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="tituloModal"
                    aria-hidden="true"
                  >
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="tituloModal">
                            <i data-feather="user" class="icon-svg-primary wid-20 me-2"></i>Editar cupón
                          </h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form>
                          <div class="modal-body">
                            <small id="emailHelp" class="form-text text-muted mb-2 mt-0">
                              Agrega la información correspondiente al formulario.
                            </small>
                            <!-- Nombre del cupón -->
                            <div class="mb-3">
                              <label class="form-label">Nombre del cupón</label>
                              <input
                                type="text"
                                class="form-control"
                                id="name"
                                placeholder="Ingresa el nombre del cupón"
                              />
                            </div>
                            <!-- Código -->
                            <div class="mb-3">
                              <label class="form-label">Código</label>
                              <input
                                type="text"
                                class="form-control"
                                id="code"
                                placeholder="Ingresa el código del cupón"
                              />
                            </div>
                            <!-- Descuento porcentual -->
                            <div class="mb-3">
                              <label class="form-label">Descuento porcentual</label>
                              <input
                                type="number"
                                class="form-control"
                                id="percentage_discount"
                                placeholder="Ingresa el porcentaje de descuento"
                              />
                            </div>
                            <!-- Monto mínimo requerido -->
                            <div class="mb-3">
                              <label class="form-label">Monto mínimo requerido</label>
                              <input
                                type="number"
                                class="form-control"
                                id="min_amount_required"
                                placeholder="Ingresa el monto mínimo requerido"
                              />
                            </div>
                            <!-- Productos mínimos requeridos -->
                            <div class="mb-3">
                              <label class="form-label">Productos mínimos requeridos</label>
                              <input
                                type="number"
                                class="form-control"
                                id="min_product_required"
                                placeholder="Ingresa la cantidad mínima de productos requeridos"
                              />
                            </div>
                            <!-- Fecha de inicio -->
                            <div class="mb-3">
                              <label class="form-label">Fecha de inicio</label>
                              <input
                                type="date"
                                class="form-control"
                                id="start_date"
                              />
                            </div>
                            <!-- Fecha de finalización -->
                            <div class="mb-3">
                              <label class="form-label">Fecha de finalización</label>
                              <input
                                type="date"
                                class="form-control"
                                id="end_date"
                              />
                            </div>
                            <!-- Máximo de usos -->
                            <div class="mb-3">
                              <label class="form-label">Máximo de usos</label>
                              <input
                                type="number"
                                class="form-control"
                                id="max_uses"
                                placeholder="Ingresa el número máximo de usos"
                              />
                            </div>
                            <!-- Válido solo para primera compra -->
                            <div class="mb-3">
                              <label class="form-label">Válido solo para la primera compra</label>
                              <select class="form-control" id="valid_only_first_purchase">
                                <option value="1">Sí</option>
                                <option value="0">No</option>
                              </select>
                            </div>
                            <!-- Estado -->
                            <div class="mb-3">
                              <label class="form-label">Estado</label>
                              <select class="form-control" id="status">
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                              </select>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-light-danger" data-bs-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-light-primary">Editar cupón</button>
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
                          <a href="<?= BASE_PATH ?>coupons/details" class="btn btn-sm btn-light-primary"><i class="feather icon-eye"></i></a>
                          <button type="button" class="btn btn-sm btn-light-success me-1" data-bs-toggle="modal" data-bs-target="#editModal">
                            <i class="feather icon-edit"></i>
                          </button>
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

      include "../layouts/modals.php"


      ?>

  </body>
  <!-- [Body] end -->
</html>
