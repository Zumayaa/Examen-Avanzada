<?php 
  include_once "../../app/config.php";

?>


<?php 
  include_once "../../app/CouponController.php";

  $couponController = new CouponController();
  $cupon = $couponController->getAllCoupons();

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
                        <form action="<?= BASE_PATH ?>contCupon" method="POST">
                          <div class="modal-body">
                            <small id="emailHelp" class="form-text text-muted mb-2 mt-0">
                              Completa la información para agregar un nuevo cupón.
                            </small>

                            <input type="hidden" name="action" value="create_coupon">

                            <!-- Nombre del cupón -->
                            <div class="mb-3">
                              <label class="form-label">Nombre del cupón</label>
                              <input
                                type="text"
                                class="form-control"
                                name="name"
                                id="name"
                                placeholder="Ingresa el nombre del cupón"
                                required
                              />
                            </div>

                            <!-- Código -->
                            <div class="mb-3">
                              <label class="form-label">Código</label>
                              <input
                                type="text"
                                class="form-control"
                                name="code"
                                id="code"
                                placeholder="Ingresa el código del cupón"
                                required
                              />
                            </div>

                            <!-- Descuento porcentual -->
                            <div class="mb-3">
                              <label class="form-label">Descuento porcentual</label>
                              <input
                                type="number"
                                class="form-control"
                                name="percentage_discount"
                                id="percentage_discount"
                                placeholder="Ingresa el porcentaje de descuento"
                                min="0"
                                max="100"
                                required
                              />
                            </div>

                            <!-- Monto mínimo requerido -->
                            <div class="mb-3">
                              <label class="form-label">Monto mínimo requerido</label>
                              <input
                                type="number"
                                class="form-control"
                                name="min_amount_required"
                                id="min_amount_required"
                                placeholder="Ingresa el monto mínimo requerido"
                                min="0"
                                required
                              />
                            </div>

                            <!-- Productos mínimos requeridos -->
                            <div class="mb-3">
                              <label class="form-label">Productos mínimos requeridos</label>
                              <input
                                type="number"
                                class="form-control"
                                name="min_product_required"
                                id="min_product_required"
                                placeholder="Ingresa la cantidad mínima de productos requeridos"
                                min="0"
                                required
                              />
                            </div>

                            <!-- Fecha de inicio -->
                            <div class="mb-3">
                              <label class="form-label">Fecha de inicio</label>
                              <input
                                type="date"
                                class="form-control"
                                name="start_date"
                                id="start_date"
                                required
                              />
                            </div>

                            <!-- Fecha de finalización -->
                            <div class="mb-3">
                              <label class="form-label">Fecha de finalización</label>
                              <input
                                type="date"
                                class="form-control"
                                name="end_date"
                                id="end_date"
                                required
                              />
                            </div>

                            <!-- Máximo de usos -->
                            <div class="mb-3">
                              <label class="form-label">Máximo de usos</label>
                              <input
                                type="number"
                                class="form-control"
                                name="max_uses"
                                id="max_uses"
                                placeholder="Ingresa el número máximo de usos"
                                min="1"
                                required
                              />
                            </div>

                            <!-- Válido solo para primera compra -->
                            <div class="mb-3">
                              <label class="form-label">Válido solo para la primera compra</label>
                              <select class="form-control" name="valid_only_first_purchase" id="valid_only_first_purchase" required>
                                <option value="1">Sí</option>
                                <option value="0">No</option>
                              </select>
                            </div>

                            <!-- Estado -->
                            <div class="mb-3">
                              <label class="form-label">Estado</label>
                              <select class="form-control" name="status" id="status" required>
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                              </select>
                            </div>
                          </div>

                          <div class="modal-footer">
                            <button type="button" class="btn btn-light-danger" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-light-primary">Agregar cupón</button>
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
                        <form action="<?= BASE_PATH ?>contCupon" method="POST">
                          <input type="hidden" name="action" value="update_coupon">
                          <input type="hidden" name="id" id="edit_id"> 
                          <div class="modal-body">
                            <small id="emailHelp" class="form-text text-muted mb-2 mt-0">
                              Edita la información del cupón.
                            </small>
                            <!-- Nombre del cupón -->
                            <div class="mb-3">
                              <label class="form-label">Nombre del cupón</label>
                              <input
                                type="text"
                                class="form-control"
                                name="name"
                                id="edit_name"
                                placeholder="Ingresa el nombre del cupón"
                                required
                              />
                            </div>

                            <!-- Código -->
                            <div class="mb-3">
                              <label class="form-label">Código</label>
                              <input
                                type="text"
                                class="form-control"
                                name="code"
                                id="edit_code"
                                placeholder="Ingresa el código del cupón"
                                required
                              />
                            </div>

                            <!-- Descuento porcentual -->
                            <div class="mb-3">
                              <label class="form-label">Descuento porcentual</label>
                              <input
                                type="number"
                                class="form-control"
                                name="percentage_discount"
                                id="edit_percentage_discount"
                                placeholder="Ingresa el porcentaje de descuento"
                                min="0"
                                max="100"
                                required
                              />
                            </div>

                            <!-- Monto mínimo requerido -->
                            <div class="mb-3">
                              <label class="form-label">Monto mínimo requerido</label>
                              <input
                                type="number"
                                class="form-control"
                                name="min_amount_required"
                                id="edit_min_amount_required"
                                placeholder="Ingresa el monto mínimo requerido"
                                min="0"
                                required
                              />
                            </div>

                            <!-- Productos mínimos requeridos -->
                            <div class="mb-3">
                              <label class="form-label">Productos mínimos requeridos</label>
                              <input
                                type="number"
                                class="form-control"
                                name="min_product_required"
                                id="edit_min_product_required"
                                placeholder="Ingresa la cantidad mínima de productos requeridos"
                                min="0"
                                required
                              />
                            </div>

                            <!-- Fecha de inicio -->
                            <div class="mb-3">
                              <label class="form-label">Fecha de inicio</label>
                              <input
                                type="date"
                                class="form-control"
                                name="start_date"
                                id="edit_start_date"
                                required
                              />
                            </div>

                            <!-- Fecha de finalización -->
                            <div class="mb-3">
                              <label class="form-label">Fecha de finalización</label>
                              <input
                                type="date"
                                class="form-control"
                                name="end_date"
                                id="edit_end_date"
                                required
                              />
                            </div>

                            <!-- Máximo de usos -->
                            <div class="mb-3">
                              <label class="form-label">Máximo de usos</label>
                              <input
                                type="number"
                                class="form-control"
                                name="max_uses"
                                id="edit_max_uses"
                                placeholder="Ingresa el número máximo de usos"
                                min="1"
                                required
                              />
                            </div>

                            <!-- Válido solo para primera compra -->
                            <div class="mb-3">
                              <label class="form-label">Válido solo para la primera compra</label>
                              <select class="form-control" name="valid_only_first_purchase" id="edit_valid_only_first_purchase" required>
                                <option value="1">Sí</option>
                                <option value="0">No</option>
                              </select>
                            </div>

                            <!-- Estado -->
                            <div class="mb-3">
                              <label class="form-label">Estado</label>
                              <select class="form-control" name="status" id="edit_status" required>
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                              </select>
                            </div>

                            <!-- Usos actuales -->
                          <div class="mb-3">
                            <label class="form-label">Usos actuales</label>
                            <input
                              type="number"
                              class="form-control"
                              name="count_uses"
                              id="edit_count_uses"
                              value="0"
                              placeholder="Ingresa el número actual de usos"
                              min="0"
                              required
                            />
                          </div>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-light-danger" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-light-primary">Guardar cambios</button>
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
                        <th class="border-top-0">Porcentaje</th>
                        <th class="border-top-0">Inicio</th>
                        <th class="border-top-0">Vencimiento</th>
                        <th class="border-top-0">Acción</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php  foreach($cupon as $lista): ?>
                        <tr>
                          <td><?php echo htmlspecialchars($lista->name); ?></td>
                          <td><?php echo htmlspecialchars($lista->percentage_discount); ?>%</td>
                          <td><?php echo htmlspecialchars($lista->start_date); ?></td>
                          <td><?php echo htmlspecialchars($lista->end_date); ?></td>
                          <td>
                          <a href="<?= BASE_PATH ?>coupons/details?id=<?= $lista->id; ?>" class="btn btn-sm btn-light-primary">
                            <i class="feather icon-eye"></i>
                          </a>

                          <button type="button" 
                                    class="btn btn-sm btn-light-success me-1" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#editModal"
                                    data-id="<?= htmlspecialchars($lista->id); ?>"
                                    data-name="<?= htmlspecialchars($lista->name); ?>"
                                    data-code="<?= htmlspecialchars($lista->code); ?>"
                                    data-percentage="<?= htmlspecialchars($lista->percentage_discount); ?>"
                                    data-min-amount="<?= htmlspecialchars($lista->min_amount_required); ?>"
                                    data-min-product="<?= htmlspecialchars($lista->min_product_required); ?>"
                                    data-start-date="<?= htmlspecialchars($lista->start_date); ?>"
                                    data-end-date="<?= htmlspecialchars($lista->end_date); ?>"
                                    data-max-uses="<?= htmlspecialchars($lista->max_uses); ?>"
                                    data-first-purchase="<?= htmlspecialchars($lista->valid_only_first_purchase); ?>"
                                    data-status="<?= htmlspecialchars($lista->status); ?>">
                              <i class="feather icon-edit"></i>
                            </button>

                            <form action="<?= BASE_PATH ?>contCupon" method="POST" style="display:inline;">
                              <input type="hidden" name="action" value="delete_coupon">
                              <input type="hidden" name="id" value="<?= htmlspecialchars($lista->id); ?>">
                              <button type="submit" class="btn btn-sm btn-light-danger">
                                <i class="feather icon-trash-2"></i>
                              </button>
                            </form>
                          </td>
                        </tr>
                      <?php endforeach ?>
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

    <script>
      const editModal = document.getElementById('editModal');
      editModal.addEventListener('show.bs.modal', (event) => {
        const button = event.relatedTarget;
        
        // Obtener datos desde los atributos data-*
        const id = button.getAttribute('data-id');
        const name = button.getAttribute('data-name');
        const code = button.getAttribute('data-code');
        const percentage = button.getAttribute('data-percentage');
        const minAmount = button.getAttribute('data-min-amount');
        const minProduct = button.getAttribute('data-min-product');
        const startDate = button.getAttribute('data-start-date');
        const endDate = button.getAttribute('data-end-date');
        const maxUses = button.getAttribute('data-max-uses');
        const firstPurchase = button.getAttribute('data-first-purchase');
        const status = button.getAttribute('data-status');
        
        // Llenar los campos del formulario
        editModal.querySelector('[name="id"]').value = id;
        editModal.querySelector('[name="name"]').value = name;
        editModal.querySelector('[name="code"]').value = code;
        editModal.querySelector('[name="percentage_discount"]').value = percentage;
        editModal.querySelector('[name="min_amount_required"]').value = minAmount;
        editModal.querySelector('[name="min_product_required"]').value = minProduct;
        editModal.querySelector('[name="start_date"]').value = startDate;
        editModal.querySelector('[name="end_date"]').value = endDate;
        editModal.querySelector('[name="max_uses"]').value = maxUses;
        editModal.querySelector('[name="valid_only_first_purchase"]').value = firstPurchase;
        editModal.querySelector('[name="status"]').value = status;
      });
    </script>


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
