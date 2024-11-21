<?php 
  include_once "../../../app/config.php";
?>

<?php 
  include_once "../../../app/BrandController.php";

  $brandController = new BrandController();
  $brands = $brandController->get();
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
                  <li class="breadcrumb-item"><a href="<?= BASE_PATH ?>catalogs/brands">Marcas</a></li>
                  <li class="breadcrumb-item" aria-current="page">Todas las marcas</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Marcas</h2>
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
                    Agregar marca
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
                          <h5 class="modal-title" id="exampleModalLabel">
                            <i data-feather="user" class="icon-svg-primary wid-20 me-2"></i>Agregar marca
                          </h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                        </div>
                        <form method="post" action="<?= BASE_PATH ?>contBrand">
                          <div class="modal-body">
                            <small id="emailHelp" class="form-text text-muted mb-2 mt-0">
                              Agrega la información correspondiente al formulario.
                            </small>
                            <input type="hidden" name="action" value="create_brand">
                            <div class="mb-3">
                              <label class="form-label">Nombre de la marca</label>
                              <input
                                type="text"
                                class="form-control"
                                id="fname"
                                placeholder="Ingresa el nombre"
                                name="name"
                              />
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Descripción de la marca</label>
                              <input
                                type="text"
                                class="form-control"
                                id="lname"
                                placeholder="Ingresa la descripción"
                                name="description"
                              />
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Slug</label>
                              <input
                                type="text"
                                class="form-control"
                                id="slug"
                                placeholder="Slug"
                                name="slug"
                              />
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-light-danger" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-light-primary">Agregar marca</button>
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
                            <i data-feather="user" class="icon-svg-primary wid-20 me-2"></i>Editar marca
                          </h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                        </div>
                        <form method="post" action="<?= BASE_PATH ?>contBrand">
                          <div class="modal-body">
                            <small id="emailHelp" class="form-text text-muted mb-2 mt-0">
                              Agrega la información correspondiente al formulario.
                            </small>
                            <input type="hidden" name="action" value="update_brand">
                            <input type="hidden" name="id" id="id">

                            <div class="mb-3">
                              <label class="form-label">Nombre de la marca</label>
                              <input
                                type="text"
                                class="form-control"
                                id="editName"
                                name="name"
                              />
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Descripción de la marca</label>
                              <input
                                type="text"
                                class="form-control"
                                id="editDescription"
                                name="description"
                              />
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Slug</label>
                              <input
                                type="text"
                                class="form-control"
                                id="editSlug"
                                name="slug"
                              />
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-light-danger" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-light-primary">Editar marca</button>
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
                      <?php foreach($brands as $brand): ?>
                      <tr>
                        <td><?php echo $brand->name; ?></td>
                        <td><?php echo $brand->description; ?></td>
                        <td>
                          <a href="<?= BASE_PATH ?>catalogs/brands/details?id=<?= $brand->id; ?>" class="btn btn-sm btn-light-primary">
                            <i class="feather icon-eye"></i>
                          </a>

                          <button type="button" class="btn btn-sm btn-light-success me-1" data-bs-toggle="modal" data-bs-target="#editModal" data-id="<?= $brand->id ?>" data-name="<?= $brand->name ?>" data-description="<?= $brand->description ?>" data-slug="<?= $brand->slug ?>">
                              <i class="feather icon-edit"></i>
                          </button>

                          <form action="<?= BASE_PATH ?>contBrand" method="POST" style="display:inline;">
                            <input type="hidden" name="action" value="delete_brand">
                            <input type="hidden" name="id" value="<?= $brand->id; ?>">
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
      // Pre-cargar los datos en el modal de edición
      const editButtons = document.querySelectorAll('.btn-light-success');
      editButtons.forEach(button => {
        button.addEventListener('click', (e) => {
          const modal = new bootstrap.Modal(document.getElementById('editModal'));

          document.getElementById('id').value = e.target.dataset.id;
          document.getElementById('editName').value = e.target.dataset.name;
          document.getElementById('editDescription').value = e.target.dataset.description;
          document.getElementById('editSlug').value = e.target.dataset.slug;
        });
      });
    </script>
    <!-- [Page Specific JS] end -->
  </body>
</html>
