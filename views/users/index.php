<?php 
  include_once "../../app/config.php";
  // Incluir el controlador de usuarios
  include_once "../../app/UserController.php";

  // Instanciar el controlador de usuarios
  $userController = new UserController();

  // Obtener todos los usuarios
  $usersResponse = $userController->getAllUsers();
  $users = $usersResponse['data'] ?? []; // Asegurarse de que 'data' esté presente en la respuesta

  // Supongamos que tienes un ID del usuario en la URL
  $userId = $_GET['id'] ?? null;

  if ($userId) {
      // Carga los datos del usuario desde la base de datos
      $user = getUserById($userId); // Función ficticia para obtener datos
  } else {
      $user = null; // Si no hay ID, no hay usuario
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
                  <li class="breadcrumb-item"><a href="<?= BASE_PATH ?>users">Usuarios</a></li>
                  <li class="breadcrumb-item" aria-current="page">Todos los usuarios</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Usuarios</h2>
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
                        <form method="POST" action="<?= BASE_PATH ?>app/UserController.php" enctype="multipart/form-data">
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
                            <button type="submit" class="btn btn-light-primary">Agregar Usuario</button>
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
                                <h5 class="modal-title" id="tituloModal">
                                    <i data-feather="user" class="icon-svg-primary wid-20 me-2"></i>
                                    Editar usuario
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                            </div>
                            <form id="updateForm" action="<?= BASE_PATH ?>app/UserController.php" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="action" value="update_user">
                                <input type="hidden" id="userId" name="id">

                                <div class="modal-body">
                                    <small id="emailHelp" class="form-text text-muted mb-2 mt-0">
                                        Edita la información del usuario.
                                    </small>
                                    <div class="mb-3">
                                        <label class="form-label">Nombre</label>
                                        <input type="text" class="form-control" id="userName" name="name" placeholder="Ingresa el nombre" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Apellido</label>
                                        <input type="text" class="form-control" id="userLastname" name="lastname" placeholder="Ingresa el apellido" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Correo Electrónico</label>
                                        <input type="email" class="form-control" id="userEmail" name="email" placeholder="Ingresa el correo electrónico" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Número de Teléfono</label>
                                        <input type="text" class="form-control" id="userPhone" name="phone_number" placeholder="Ingresa el número de teléfono" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Rol</label>
                                        <select class="form-control" id="userRole" name="role" required>
                                            <option value="admin">Administrador</option>
                                            <option value="user">Usuario</option>
                                        </select>
                                    </div>
                                    <!-- <div class="mb-3">
                                        <label class="form-label">Contraseña</label>
                                        <input type="password" class="form-control" id="userPassword" name="password" placeholder="Ingresa la nueva contraseña">
                                    </div> -->
                                    <div class="mb-3">
                                        <label class="form-label">Creado por</label>
                                        <input type="text" class="form-control" id="userCreatedBy" name="created_by" placeholder="Creado por">
                                    </div>
                                    <!-- <div class="mb-3">
                                        <label class="form-label">Imagen de perfil</label>
                                        <input class="form-control" type="file" id="userProfilePhoto" name="profilePhotoPath">
                                    </div> -->
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
                                <th class="border-top-0">Email</th>
                                <th class="border-top-0">Cuenta</th>
                                <th class="border-top-0">Cumpleaños</th>
                                <th class="border-top-0">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($users)): ?>
                                <?php foreach ($users as $user): ?>
                                    <tr>
                                        <td><?= htmlspecialchars($user['name']) . ' ' . htmlspecialchars($user['lastname']) ?></td>
                                        <td><a href="mailto:<?= htmlspecialchars($user['email']) ?>" class="link-secondary"><?= htmlspecialchars($user['email']) ?></a></td>
                                        <td><?= htmlspecialchars($user['role'] ?? 'N/A') ?></td>
                                        <td><?= htmlspecialchars($user['birthday'] ?? 'No disponible') ?></td>
                                        <td>
                                            <a href="<?= BASE_PATH ?>users/details.php?id=<?= urlencode($user['id']) ?>" class="btn btn-sm btn-light-primary">
                                                <i class="feather icon-eye"></i>
                                            </a>
                                            <button 
                                                type="button" 
                                                class="btn btn-sm btn-light-success me-1 btn-edit-user" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#editModal"
                                                data-user-id="<?= htmlspecialchars($user['id']) ?>"
                                                data-user-name="<?= htmlspecialchars($user['name']) ?>"
                                                data-user-lastname="<?= htmlspecialchars($user['lastname']) ?>"
                                                data-user-email="<?= htmlspecialchars($user['email']) ?>"
                                                data-user-phone="<?= htmlspecialchars($user['phone_number']) ?>"
                                                data-user-role="<?= htmlspecialchars($user['role']) ?>"
                                                data-user-created-by="<?= htmlspecialchars($user['created_by']) ?>"
                                            >
                                                <i class="feather icon-edit"></i>
                                            </button>
                                            <form action="<?= BASE_PATH ?>app/UserController.php" method="POST" style="display: inline;">
                                                <input type="hidden" name="action" value="delete_user">
                                                <input type="hidden" name="id" value="<?= $user['id'] ?>">
                                                <button type="submit" class="btn btn-sm btn-light-danger">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="5" class="text-center">No se encontraron usuarios.</td>
                                </tr>
                            <?php endif; ?>
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

      function openEditModal(userId) {
          // Asignar el valor del ID al campo oculto
          document.querySelector('input[name="id"]').value = userId;
          
          // Abrir el modal (usa la función específica de tu framework o biblioteca)
          const modal = new bootstrap.Modal(document.getElementById('editUserModal'));
          modal.show();
      }

      document.addEventListener('DOMContentLoaded', () => {
          const editButtons = document.querySelectorAll('.btn-edit-user');

          editButtons.forEach(button => {
              button.addEventListener('click', () => {
                  const userId = button.getAttribute('data-user-id');
                  const userName = button.getAttribute('data-user-name');
                  const userLastname = button.getAttribute('data-user-lastname');
                  const userEmail = button.getAttribute('data-user-email');
                  const userPhone = button.getAttribute('data-user-phone');
                  const userRole = button.getAttribute('data-user-role');
                  const userCreatedBy = button.getAttribute('data-user-created-by');

                  // Asignar valores a los campos del formulario
                  document.getElementById('userId').value = userId;
                  document.getElementById('userName').value = userName;
                  document.getElementById('userLastname').value = userLastname;
                  document.getElementById('userEmail').value = userEmail;
                  document.getElementById('userPhone').value = userPhone;
                  document.getElementById('userRole').value = userRole;
                  document.getElementById('userCreatedBy').value = userCreatedBy;
              });
          });
      });


      // quantity end
    </script>
    
    <?php 

      include "../layouts/modals.php"


      ?>
  </body>
  <!-- [Body] end -->
</html>