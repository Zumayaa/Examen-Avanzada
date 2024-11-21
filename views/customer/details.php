<?php 
include_once "../../app/config.php";
include "../../app/ClientController.php";
include "../../app/AddressController.php";

$clientController = new ClientController();

// Obtener el ID del cliente desde la URL (si existe)
$clientId = isset($_GET['id']) ? $_GET['id'] : null;

// Si no se pasa un ID, mostrar un error o redirigir
if (!$clientId) {
    echo "<p>ID de cliente no proporcionado.</p>";
    exit;
}

// Llamar a la función getClientById
$response = $clientController->getClientById($clientId);

// Decodifica la respuesta JSON
$client = json_decode($response)->data;

// Verifica si la respuesta es válida
// if (!isset($client->data)) {
//     echo "<p>Error al obtener los detalles del cliente.</p>";
//     exit;
// }


$addressController = new AddressController();
$addresses = $client->addresses;



// Incluir el controlador
include_once "../../app/WidgetsController.php";

// Obtener el ID del cliente de la URL
$clientId = isset($_GET['id']) ? $_GET['id'] : null;

// Verificar si el ID del cliente es válido
if (!$clientId) {
    echo "<p>ID de cliente no proporcionado.</p>";
    exit;
}

// Crear una instancia de WidgetsController
$widgetsController = new WidgetsController();


// Obtener el total de compras del cliente
$totalPurchases = $widgetsController->getTotalPurchasesByClient($clientId);
$totalOrders = $widgetsController->getOrderCountByClient($clientId);

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
                  <li class="breadcrumb-item"><a href="<?= BASE_PATH ?>home">Incio</a></li>
                  <li class="breadcrumb-item"><a href="<?= BASE_PATH ?>customer">Cliente</a></li>
                  <li class="breadcrumb-item" aria-current="page">Detalles de cliente</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Detalles de cliente</h2>
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
            <div class="row">
              <div class="col-lg-5 col-xxl-3">
                <div class="card overflow-hidden">
                  <div class="card-body position-relative">
                    <div class="text-center mt-3">
                      <div class="chat-avtar d-inline-flex mx-auto">
                      <img
                        class=" img-fluid img-thumbnail"
                        src="<?= htmlspecialchars($avatar) ?>"
                        alt="User image"
                      />
                        <i class="chat-badge bg-success me-2 mb-2"></i>
                      </div>
                      <h5 class="mb-0"><?= htmlspecialchars($client->name) ?></h5>
                    </div>
                  </div>
                  <div
                    class="nav flex-column nav-pills list-group list-group-flush account-pills mb-0"
                    id="user-set-tab"
                    role="tablist"
                    aria-orientation="vertical"
                  >
                    <a
                      class="nav-link list-group-item list-group-item-action active"
                      id="user-set-profile-tab"
                      data-bs-toggle="pill"
                      href="#user-set-profile"
                      role="tab"
                      aria-controls="user-set-profile"
                      aria-selected="true"
                    >
                      <span class="f-w-500"><i class="ph-duotone ph-user-circle m-r-10"></i>Visualización del perfil</span>
                    </a>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h5>Información personal</h5>
                  </div>
                  <div class="card-body position-relative">
                    <div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
                      <p class="mb-0 text-muted me-1">Email</p>
                      <p class="mb-0"><?= htmlspecialchars($client->email) ?></p>
                    </div>
                    <div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
                      <p class="mb-0 text-muted me-1">Número télefonico</p>
                      <p class="mb-0"><?= htmlspecialchars($client->phone_number) ?></p>
                    </div>
                  </div>
                </div>
                <div class="card statistics-card-1 overflow-hidden">
                <div class="card-body">
                  <img src="<?= BASE_PATH ?>assets/images/widget/img-status-4.svg" alt="img" class="img-fluid img-bg" />
                  <h5 class="mb-4">Widget total de compras</h5>
                  <div class="d-flex align-items-center mt-3">
                      <h3 class="f-w-300 d-flex align-items-center m-b-0">
                          $<?= number_format($totalPurchases, 2) ?>
                      </h3>
                      <span class="badge bg-light-success ms-2">36%</span>
                  </div>
                  <p class="text-muted mb-2 text-sm mt-3">Compraste <?= number_format($totalOrders) ?> veces</p>
                  <div class="progress" style="height: 7px">
                      <div
                          class="progress-bar bg-brand-color-3"
                          role="progressbar"
                          style="width: <?= $totalPurchases ? (min($totalPurchases, 1000) / 1000) * 100 : 0 ?>%"
                          aria-valuenow="<?= $totalPurchases ? (min($totalPurchases, 1000) / 1000) * 100 : 0 ?>"
                          aria-valuemin="0"
                          aria-valuemax="100"
                      ></div>
                  </div>
              </div>
              </div>
            </div>
              <div class="col-lg-7 col-xxl-9">
                <div class="tab-content" id="user-set-tabContent">
                  <div class="tab-pane fade show active" id="user-set-profile" role="tabpanel" aria-labelledby="user-set-profile-tab">
                    <div class="card">
                      <div class="card-header">
                        <h5>Información personal</h5>
                      </div>
                      <div class="card-body">
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item px-0 pt-0">
                            <div class="row">
                              <div class="col-md-6">
                                <p class="mb-1 text-muted">Nombre</p>
                                <p class="mb-0"><?= htmlspecialchars($client->name) ?></p>
                              </div>
                              <div class="col-md-6">
                                <p class="mb-1 text-muted">Email</p>
                                <p class="mb-0"><?= htmlspecialchars($client->email) ?></p>
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item px-0">
                            <div class="row">
                              <div class="col-md-6">
                                <p class="mb-1 text-muted">Número telefónico</p>
                                <p class="mb-0"><?= htmlspecialchars($client->phone_number) ?></p>
                              </div>
                              <div class="col-md-6">
                                <p class="mb-1 text-muted">Suscripción</p>
                                <p class="mb-0"><?= $client->is_suscribed ? 'Activo' : 'Inactivo' ?></p>
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item px-0">
                            <div class="row">
                              <div class="col-md-6">
                                <p class="mb-1 text-muted">Nivel</p>
                                <p class="mb-0"><?= htmlspecialchars($client->level->name) ?></p>
                              </div>
                              <div class="col-md-6">
                                <p class="mb-1 text-muted">Descuento</p>
                                <p class="mb-0"><?= htmlspecialchars($client->level->percentage_discount) ?>%</p>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="card shadow-none">
              <div class="card-header">
              <h2>Direcciones</h2>
              <div class="card-body shadow border-0">
              <div class="table-responsive">
              <table id="report-table" class="table table-bordered table-striped mb-0">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Calle y Número</th>
                        <th>Código Postal</th>
                        <th>Ciudad</th>
                        <th>Provincia</th>
                        <th>Teléfono</th>
                        <th>¿Es Dirección de Facturación?</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                  <?php if (!empty($addresses)): ?>
                      <?php foreach ($addresses as $address): ?>
                          <tr>
                              <td><?= htmlspecialchars($address->first_name) ?></td>
                              <td><?= htmlspecialchars($address->last_name) ?></td>
                              <td><?= htmlspecialchars($address->street_and_use_number) ?></td>
                              <td><?= htmlspecialchars($address->postal_code) ?></td>
                              <td><?= htmlspecialchars($address->city) ?></td>
                              <td><?= htmlspecialchars($address->province) ?></td>
                              <td><?= htmlspecialchars($address->phone_number) ?></td>
                              <td><?= $address->is_billing_address ? 'Sí' : 'No' ?></td>
                              <td>
                                  <button type="button" class="btn btn-sm btn-light-success me-1" data-bs-toggle="modal" data-bs-target="#editModal" data-id="<?= $address->id ?>">
                                      <i class="feather icon-edit"></i>
                                  </button>
                                  <form action="<?= BASE_PATH ?>app/AddressController.php" method="POST" style="display: inline;">
                                      <input type="hidden" name="action" value="delete_address">
                                      <input type="hidden" name="address_id" value="<?= htmlspecialchars($address->id) ?>"> <!-- Cambié clientId por address_id -->
                                      <button type="submit" class="btn btn-sm btn-light-danger">
                                          <i class="feather icon-trash-2"></i>
                                      </button>
                                  </form>

                              </td>
                          </tr>
                      <?php endforeach; ?>
                  <?php else: ?>
                      <tr>
                          <td colspan="9" class="text-center">No se encontraron direcciones para este cliente.</td>
                      </tr>
                  <?php endif; ?>
              </tbody>
            </table>
          </div>
                  <!-- Botón para agregar dirección -->
                  <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#addAddressModal">
                      Agregar Dirección
                  </button>
        </div>

      <!-- Modal para agregar una nueva dirección -->
      <div class="modal fade" id="addAddressModal" tabindex="-1" aria-labelledby="addAddressModalLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="addAddressModalLabel">Agregar Nueva Dirección</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                  </div>
                  <div class="modal-body">
                  <form action="<?= BASE_PATH ?>app/AddressController.php" method="POST">
                    <input type="hidden" name="action" value="create_address">
                    <input type="hidden" name="client_id" value="<?= htmlspecialchars($clientId) ?>">
                    <div class="mb-3">
                        <label for="first_name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="street_and_use_number" class="form-label">Calle y Número</label>
                        <input type="text" class="form-control" id="street_and_use_number" name="street_and_use_number" required>
                    </div>
                    <div class="mb-3">
                        <label for="postal_code" class="form-label">Código Postal</label>
                        <input type="text" class="form-control" id="postal_code" name="postal_code" required>
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">Ciudad</label>
                        <input type="text" class="form-control" id="city" name="city" required>
                    </div>
                    <div class="mb-3">
                        <label for="province" class="form-label">Provincia</label>
                        <input type="text" class="form-control" id="province" name="province" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone_number" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                    </div>
                    <div class="mb-3">
                        <label for="is_billing_address" class="form-label">¿Es Dirección de Facturación?</label>
                        <select class="form-select" id="is_billing_address" name="is_billing_address" required>
                            <option value="1">Sí</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar Dirección</button>
                </form>

                  </div>
              </div>
          </div>
      </div>

      <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editAddressModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="editAddressModalLabel">Editar Dirección</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
              <form action="<?= BASE_PATH ?>app/AddressController.php" method="POST">
                <!-- Acción para actualizar dirección -->
                <input type="hidden" name="action" value="update_address">
                
                <!-- ID de la dirección a editar -->
                <input type="hidden" name="address_id" id="address_id" value="">

                <!-- ID del cliente relacionado con la dirección -->
                <input type="hidden" name="client_id" value="<?= htmlspecialchars($clientId) ?>">

                <!-- Primer nombre -->
                <div class="mb-3">
                  <label for="first_name" class="form-label">Primer Nombre</label>
                  <input type="text" class="form-control" id="first_name" name="first_name" required>
                </div>

                <!-- Apellido -->
                <div class="mb-3">
                  <label for="last_name" class="form-label">Apellido</label>
                  <input type="text" class="form-control" id="last_name" name="last_name" required>
                </div>

                <!-- Calle y número -->
                <div class="mb-3">
                  <label for="street_and_use_number" class="form-label">Calle y Número</label>
                  <input type="text" class="form-control" id="street_and_use_number" name="street_and_use_number" required>
                </div>

                <!-- Código postal -->
                <div class="mb-3">
                  <label for="postal_code" class="form-label">Código Postal</label>
                  <input type="text" class="form-control" id="postal_code" name="postal_code" required>
                </div>

                <!-- Ciudad -->
                <div class="mb-3">
                  <label for="city" class="form-label">Ciudad</label>
                  <input type="text" class="form-control" id="city" name="city" required>
                </div>

                <!-- Provincia -->
                <div class="mb-3">
                  <label for="province" class="form-label">Provincia</label>
                  <input type="text" class="form-control" id="province" name="province" required>
                </div>

                <!-- Teléfono -->
                <div class="mb-3">
                  <label for="phone_number" class="form-label">Teléfono</label>
                  <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                </div>

                <!-- Dirección de facturación -->
                <div class="mb-3">
                  <label for="is_billing_address" class="form-label">¿Es dirección de facturación?</label>
                  <select class="form-select" id="is_billing_address" name="is_billing_address" required>
                    <option value="1">Sí</option>
                    <option value="0">No</option>
                  </select>
                </div>

                <!-- Botón para guardar cambios -->
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <script>
          // Evento para abrir el modal y configurar los valores de los campos
          var editButtons = document.querySelectorAll('[data-bs-toggle="modal"]');
          editButtons.forEach(function(button) {
              button.addEventListener('click', function() {
                  var addressId = button.getAttribute('data-id');
                  // Aquí debes recuperar los datos de la dirección que quieres editar y asignarlos al modal
                  // Ejemplo de asignación de los datos (se asume que esos datos están disponibles en el contexto)
                  document.getElementById('address_id').value = addressId;
                  
                  // Si tienes más campos de la dirección, los debes asignar aquí (por ejemplo):
                  // document.getElementById('first_name').value = "Valor recuperado";
                  // document.getElementById('last_name').value = "Valor recuperado";
                  // Continúa con los demás campos de la misma forma...
              });
          });
      </script>

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

  </body>
  <!-- [Body] end -->
</html>
