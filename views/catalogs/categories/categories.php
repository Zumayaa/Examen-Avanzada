<?php 
  include_once "../../../app/config.php";

?>

<?php 
  include_once "../../../app/CategoryController.php";

  $categoryController = new CategoryController();
  $categorias = $categoryController->getAllCategories();
?>


<!doctype html>
<html lang="en">
  <!-- [Head] start -->

  <head>
  <?php 

    include "../../../views/layouts/head.php";

  ?>

  </head>
  <!-- [Head] end -->
  <!-- [Body] Start -->

  <body data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">

    <?php 

    include "../../../views/layouts/sidebar.php";

    ?>

    <?php 

    include "../../../views/layouts/nav.php";

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
                  <li class="breadcrumb-item"><a href="<?= BASE_PATH ?>catalogs/categories">Categorías</a></li>
                  <li class="breadcrumb-item" aria-current="page">Todos los categorías</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Categorías</h2>
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
                    Agregar categorías
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
                            ><i data-feather="user" class="icon-svg-primary wid-20 me-2"></i>Agregar categorías</h5
                          >
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                        </div>
                        <form>
                          <div class="modal-body">
                            <small id="emailHelp" class="form-text text-muted mb-2 mt-0"
                              >Agrega la información correspondiente al formulario.</small
                            >
                            <div class="mb-3">
                              <label class="form-label">Nombre de la categoría</label>
                              <input
                                type="text"
                                class="form-control"
                                id="fname"
                                aria-describedby="emailHelp"
                                placeholder="Ingresa el nombre"
                              />
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Descripción de la categoría</label>
                              <input
                                type="email"
                                class="form-control"
                                id="lname"
                                aria-describedby="emailHelp"
                                placeholder="Ingresa el apellido"
                              />
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Slug</label>
                              <input
                                type="email"
                                class="form-control"
                                id="lname"
                                aria-describedby="emailHelp"
                                placeholder="Slug"
                              />
                            </div>
                            <div class="mb-3">
                              <label class="form-label">ID de categoría</label>
                              <input
                                type="email"
                                class="form-control"
                                id="lname"
                                aria-describedby="emailHelp"
                                placeholder="Ingresa el ID de categoría"
                              />
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-light-danger" data-bs-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-light-primary">Agregar categoría</button>
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
                            ><i data-feather="user" class="icon-svg-primary wid-20 me-2"></i>Editar categoría</h5
                          >
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                        </div>
                        <form>
                          <div class="modal-body">
                            <small id="emailHelp" class="form-text text-muted mb-2 mt-0"
                              >Agrega la información correspondiente al formulario.</small
                            >
                            <div class="mb-3">
                              <label class="form-label">Nombre de la categoría</label>
                              <input
                                type="text"
                                class="form-control"
                                id="fname"
                                aria-describedby="emailHelp"
                                placeholder="Ingresa el nombre categoría"
                              />
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Descripción de la categoría</label>
                              <input
                                type="email"
                                class="form-control"
                                id="lname"
                                aria-describedby="emailHelp"
                                placeholder="Ingresa la descripción"
                              />
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Ingresa el slug</label>
                              <input
                                type="email"
                                class="form-control"
                                id="lname"
                                aria-describedby="emailHelp"
                                placeholder="Ingresa el slug"
                              />
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Ingresa el ID de la categoría</label>
                              <input
                                type="email"
                                class="form-control"
                                id="lname"
                                aria-describedby="emailHelp"
                                placeholder="Ingresa el ID de la categoría"
                              />
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-light-danger" data-bs-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-light-primary">Editar categoría</button>
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
                        <th class="border-top-0">Descripción</th>
                        <th class="border-top-0">Acción</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach($categorias as $lista): ?>
                      <tr>
                        <td><?php echo $lista->name; ?></td>
                        <td><?php echo $lista->description; ?></td> <!-- Corregí el cierre de esta etiqueta -->
                        <td>
                          <a href="<?= BASE_PATH ?>catalogs/categories/details" class="btn btn-sm btn-light-primary">
                            <i class="feather icon-eye"></i>
                          </a>
                          <button type="button" class="btn btn-sm btn-light-success me-1" data-bs-toggle="modal" data-bs-target="#editModal">
                            <i class="feather icon-edit"></i>
                          </button>
                          <form action="<?= BASE_PATH ?>contCategory" method="POST" style="display:inline;">
                            <input type="hidden" name="action" value="delete_category">
                            <input type="hidden" name="id" value="<?= $lista->id; ?>">
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

    <?php 

      include "../../../views/layouts/footer.php";

      ?>

    <?php 

      include "../../../views/layouts/scripts.php";

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

      include "../../../views/layouts/modals.php";


      ?>

  </body>
  <!-- [Body] end -->
</html>
