<?php 
  include_once "../../app/config.php";

  // Incluye el controlador y obtén los datos del cliente
  include "../../app/ClientController.php";
  
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
  $client = json_decode($response);

  // Verifica si la respuesta es válida
  if (!isset($client->data)) {
      echo "<p>Error al obtener los detalles del cliente.</p>";
      exit;
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
                      <h5 class="mb-0"><?= htmlspecialchars($client->data->name) ?></h5>
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
                      <p class="mb-0"><?= htmlspecialchars($client->data->email) ?></p>
                    </div>
                    <div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
                      <p class="mb-0 text-muted me-1">Número télefonico</p>
                      <p class="mb-0"><?= htmlspecialchars($client->data->phone_number) ?></p>
                    </div>
                  </div>
                </div>
                <div class="card statistics-card-1 overflow-hidden">
                <div class="card-body">
                <img src="<?= BASE_PATH ?>assets/images/widget/img-status-4.svg" alt="img" class="img-fluid img-bg" />
                <h5 class="mb-4">Widget total de compras</h5>
                <div class="d-flex align-items-center mt-3">
                  <h3 class="f-w-300 d-flex align-items-center m-b-0">$249.95</h3>
                  <span class="badge bg-light-success ms-2">36%</span>
                </div>
                <p class="text-muted mb-2 text-sm mt-3">Compraste 420,69 en este mes</p>
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
                                <p class="mb-0"><?= htmlspecialchars($client->data->name) ?></p>
                              </div>
                              <div class="col-md-6">
                                <p class="mb-1 text-muted">Email</p>
                                <p class="mb-0"><?= htmlspecialchars($client->data->email) ?></p>
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item px-0">
                            <div class="row">
                              <div class="col-md-6">
                                <p class="mb-1 text-muted">Número telefónico</p>
                                <p class="mb-0"><?= htmlspecialchars($client->data->phone_number) ?></p>
                              </div>
                              <div class="col-md-6">
                                <p class="mb-1 text-muted">Suscripción</p>
                                <p class="mb-0"><?= $client->data->is_suscribed ? 'Activo' : 'Inactivo' ?></p>
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item px-0">
                            <div class="row">
                              <div class="col-md-6">
                                <p class="mb-1 text-muted">Nivel</p>
                                <p class="mb-0"><?= htmlspecialchars($client->data->level->name) ?></p>
                              </div>
                              <div class="col-md-6">
                                <p class="mb-1 text-muted">Descuento</p>
                                <p class="mb-0"><?= htmlspecialchars($client->data->level->percentage_discount) ?>%</p>
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
                <h5>Marcas</h5>
                <div class="card-header-right">
                  <button type="button" class="btn btn-light-warning m-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Agregar usuarios
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
                            ><i data-feather="user" class="icon-svg-primary wid-20 me-2"></i>Agregar usuarios</h5
                          >
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                        </div>
                        <form>
                          <div class="modal-body">
                            <small id="emailHelp" class="form-text text-muted mb-2 mt-0"
                              >Agrega la información correspondiente al formulario.</small
                            >
                            <div class="mb-3">
                              <label class="form-label">Nombre de los usuarios</label>
                              <input
                                type="text"
                                class="form-control"
                                id="fname"
                                aria-describedby="emailHelp"
                                placeholder="Ingresa el nombre"
                              />
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Información extra</label>
                              <input
                                type="email"
                                class="form-control"
                                id="lname"
                                aria-describedby="emailHelp"
                                placeholder="Ingresa el apellido"
                              />
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Imagen del usuario</label>
                                <input class="form-control" type="file" />
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-light-danger" data-bs-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-light-primary">Agregar usuario</button>
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
                          <h5 class="modal-title" id="tituloModal"
                            ><i data-feather="user" class="icon-svg-primary wid-20 me-2"></i>Editar usuario</h5
                          >
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                        </div>
                        <form>
                          <div class="modal-body">
                            <small id="emailHelp" class="form-text text-muted mb-2 mt-0"
                              >Agrega la información correspondiente al formulario.</small
                            >
                            <div class="mb-3">
                              <label class="form-label">Nombre del usuario</label>
                              <input
                                type="text"
                                class="form-control"
                                id="fname"
                                aria-describedby="emailHelp"
                                placeholder="Ingresa el nombre"
                              />
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Información extra</label>
                              <input
                                type="email"
                                class="form-control"
                                id="lname"
                                aria-describedby="emailHelp"
                                placeholder="Ingresa el apellido"
                              />
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Imagen del usuario</label>
                                <input class="form-control" type="file" />
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-light-danger" data-bs-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-light-primary">Editar usuario</button>
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
                          <a href="<?= BASE_PATH ?>users/details" class="btn btn-sm btn-light-primary"><i class="feather icon-eye"></i></a>
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
