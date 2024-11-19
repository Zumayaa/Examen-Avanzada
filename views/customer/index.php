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
                        <form enctype="multipart/form-data">
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
                              <label class="form-label">Apellido</label>
                              <input
                                type="text"
                                class="form-control"
                                name="lastname"
                                placeholder="Ingresa el apellido"
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
                              <label class="form-label">Creador</label>
                              <input
                                type="text"
                                class="form-control"
                                name="created_by"
                                placeholder="Ingresa el nombre del creador"
                                required
                              />
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Rol</label>
                              <select class="form-select" name="role" required>
                                <option value="Administrador">Administrador</option>
                                <option value="user">Usuario</option>
                                <!-- Agrega más opciones según sea necesario -->
                              </select>
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
                              <label class="form-label">Imagen de Perfil</label>
                              <input
                                type="file"
                                class="form-control"
                                name="profile_photo_file"
                                accept="image/*"
                                required
                              />
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-light-danger" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-light-primary">Agregar cliente</button>
                          </div>

                          <input type="hidden" name="action" value="create_user">
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
                            ><i data-feather="user" class="icon-svg-primary wid-20 me-2"></i>Editar cliente</h5
                          >
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                        </div>
                        <form>
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
                            <div class="mb-6">
                              <label for="phone_number" class="form-label">Número telefónico</label>
                              <input
                                type="text"
                                class="form-control"
                                id="phone_number"
                                name="phone_number"
                                placeholder="Ingresa el número telefónico"
                                required
                              />
                              
                            <div class="mb-3">
                              <label for="created_by" class="form-label">Creado por</label>
                              <input
                                type="text"
                                class="form-control"
                                id="created_by"
                                name="created_by"
                                placeholder="Nombre del creador"
                                required
                              />
                            </div>
                              
                            </div>
                            <div class="mb-3">
                              <label for="role" class="form-label">Rol</label>
                              <select
                                class="form-select"
                                id="role"
                                name="role"
                                required
                              >
                                <option value="admin">Admin</option>
                                <option value="user">Usuario</option>
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
                            <button type="button" class="btn btn-light-primary">Editar cliente</button>
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
