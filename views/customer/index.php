<?php 
  include_once "../../app/config.php";

  // Incluye el controlador y obtén los datos de los clientes
  include "../../app/ClientController.php";
  
  $clientController = new ClientController();
  $response = $clientController->getAllClients();

  // Decodifica la respuesta JSON
  $clients = json_decode($response);

  // Verifica si la respuesta es válida
  if (!isset($clients->data)) {
      echo "<p>Error al obtener los clientes.</p>";
      exit;
  }

  // Supongamos que tienes un ID del usuario en la URL
  $clientId = $_GET['id'] ?? null;

  if ($clientId) {
      // Carga los datos del usuario desde la base de datos
      $client = getUserById($clientId); // Función ficticia para obtener datos
  } else {
      $client = null; // Si no hay ID, no hay usuario
  }

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
                <h5>Marcas</h5>
                <div class="card-header-right">
                  <button type="button" class="btn btn-light-warning m-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Agregar clientes
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
                            ><i data-feather="user" class="icon-svg-primary wid-20 me-2"></i>Agregar clientes</h5
                          >
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                        </div>
                        <form action="<?= BASE_PATH ?>app/ClientController.php" method="POST" enctype="multipart/form-data">
                          <div class="modal-body">
                            <small id="emailHelp" class="form-text text-muted mb-2 mt-0">
                              Agrega la información correspondiente al formulario.
                            </small>
                            <div class="mb-3">
                              <label class="form-label">Nombre</label>
                              <input
                                type="text"
                                class="form-control"
                                name="name"
                                placeholder="Ingresa el nombre"
                                required
                              />
                            </div>

                            <div class="mb-3">
                              <label class="form-label">Correo Electrónico</label>
                              <input
                                type="email"
                                class="form-control"
                                name="email"
                                placeholder="Ingresa el correo"
                                required
                              />
                            </div>

                            <div class="mb-3">
                              <label class="form-label">Contraseña</label>
                              <input
                                type="password"
                                class="form-control"
                                name="password"
                                placeholder="Ingresa la contraseña"
                                required
                              />
                            </div>

                            <div class="mb-3">
                              <label class="form-label">Número de Teléfono</label>
                              <input
                                type="tel"
                                class="form-control"
                                name="phone_number"
                                placeholder="Ingresa el número de teléfono"
                                required
                              />
                            </div>

                            <div class="mb-3">
                              <label class="form-label">¿Está Suscrito?</label>
                              <select class="form-control" name="is_suscribed" required>
                                <option value="1">Sí</option>
                                <option value="0">No</option>
                              </select>
                            </div>

                            <div class="mb-3">
                              <label class="form-label">Nivel</label>
                              <select class="form-control" name="level_id" required>
                                <option value="1">Normal</option>
                                <option value="2">Premium</option>
                                <option value="3">VIP</option>
                              </select>
                            </div>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-light-danger" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-light-primary">Agregar cliente</button>
                          </div>

                          <input type="hidden" name="action" value="create_client">
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
                            <i data-feather="user" class="icon-svg-primary wid-20 me-2"></i>Editar cliente
                          </h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="ruta/a/tu/controller.php" method="POST">
                          <div class="modal-body">
                            <small id="emailHelp" class="form-text text-muted mb-2 mt-0">
                              Edita la información correspondiente al formulario.
                            </small>
                            <div class="mb-3">
                              <label for="name" class="form-label">Nombre</label>
                              <input
                                type="text"
                                class="form-control"
                                id="name"
                                name="name"
                                placeholder="Ingresa el nombre"
                                required
                              />
                            </div>
                            <div class="mb-3">
                              <label for="lastname" class="form-label">Apellido</label>
                              <input
                                type="text"
                                class="form-control"
                                id="lastname"
                                name="lastname"
                                placeholder="Ingresa el apellido"
                                required
                              />
                            </div>
                            <div class="mb-3">
                              <label for="email" class="form-label">Email</label>
                              <input
                                type="email"
                                class="form-control"
                                id="email"
                                name="email"
                                placeholder="Ingresa el email"
                                required
                              />
                            </div>
                            <div class="mb-3">
                              <label for="phone_number" class="form-label">Número telefónico</label>
                              <input
                                type="text"
                                class="form-control"
                                id="phone_number"
                                name="phone_number"
                                placeholder="Ingresa el número telefónico"
                                required
                              />
                            </div>
                            <div class="mb-3">
                              <label for="is_suscribed" class="form-label">Suscripción</label>
                              <select class="form-select" id="is_suscribed" name="is_suscribed" required>
                                <option value="1">Suscrito</option>
                                <option value="0">No suscrito</option>
                              </select>
                            </div>
                            <div class="mb-3">
                              <label for="level_id" class="form-label">Nivel</label>
                              <select class="form-select" id="level_id" name="level_id" required>
                                <option value="1">Normal</option>
                                <option value="2">Premium</option>
                                <option value="3">VIP</option>
                              </select>
                            </div>
                            <div class="mb-3">
                              <label for="password" class="form-label">Contraseña</label>
                              <input
                                type="password"
                                class="form-control"
                                id="password"
                                name="password"
                                placeholder="Ingresa una nueva contraseña (opcional)"
                              />
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-light-danger" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-light-primary">Agregar cliente</button>
                          </div>

                          <!-- Acción para identificar el tipo de solicitud -->
                          <input type="hidden" name="action" value="create_client">
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
                                <th class="border-top-0">Cumpleaños</th>
                                <th class="border-top-0">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($clients->data as $client): ?>
                                <tr>
                                    <td><?= htmlspecialchars($client->name) ?></td>
                                    <td><a href="#" class="link-secondary"><?= htmlspecialchars($client->email) ?></a></td>
                                    <td><?= htmlspecialchars($client->account ?? 'N/A') ?></td>
                                    <td><?= htmlspecialchars(date('F d, Y', strtotime($client->birthday ?? ''))) ?></td>
                                    <td>
                                        <a href="<?= BASE_PATH ?>customer/details.php?id=<?= $client->id ?>" class="btn btn-sm btn-light-primary">
                                            <i class="feather icon-eye"></i>
                                        </a>
                                        <button type="button" class="btn btn-sm btn-light-success me-1" data-bs-toggle="modal" data-bs-target="#editModal">
                                            <i class="feather icon-edit"></i>
                                        </button>
                                        <form action="<?= BASE_PATH ?>app/ClientController.php" method="POST" style="display: inline;">
                                            <input type="hidden" name="action" value="delete_client">
                                            <input type="hidden" name="clientId" value="<?= htmlspecialchars($client->id) ?>">
                                            <button type="submit" class="btn btn-sm btn-light-danger">
                                                <i class="feather icon-trash-2"></i>
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                            <?php endforeach; ?>
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