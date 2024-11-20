<?php 
  include_once "../../../app/config.php";
?>

<?php 
  include_once "../../../app/TagController.php";

  $tagController = new TagController();
  $tag = $tagController->getAllTags();
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
                  <li class="breadcrumb-item"><a href="<?= BASE_PATH ?>catalogs/tags">Tags</a></li>
                  <li class="breadcrumb-item" aria-current="page">Todos los tags</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Tags</h2>
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
                <h5>Tags</h5>
                <div class="card-header-right">
                  <button type="button" class="btn btn-light-warning m-0" data-bs-toggle="modal" data-bs-target="#addTagModal">
                    Agregar tag
                  </button>
                  <!-- Modal Agregar Tag -->
                  <div
                    class="modal fade"
                    id="addTagModal"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="addTagModalLabel"
                    aria-hidden="true"
                  >
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="addTagModalLabel">
                            <i data-feather="tag" class="icon-svg-primary wid-20 me-2"></i>Agregar tag
                          </h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                        </div>
                        <form action="<?= BASE_PATH ?>contTag" method="POST">
                          <div class="modal-body">
                            <small id="emailHelp" class="form-text text-muted mb-2 mt-0">Agrega la información correspondiente al formulario.</small>
                            <div class="mb-3">

                            <input type="hidden" name="action" value="create_tag">

                              <label class="form-label">Nombre del tag</label>
                              <input
                                type="text"
                                class="form-control"
                                name="name"
                                placeholder="Ingresa el nombre"
                              />
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Descripción del tag</label>
                              <input
                                type="text"
                                class="form-control"
                                name="description"
                                placeholder="Ingresa la descripción del tag"
                              />
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Slug</label>
                              <input
                                type="text"
                                class="form-control"
                                name="slug"
                                placeholder="Ingresa el slug"
                              />
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-light-danger" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-light-primary">Agregar tag</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Modal Editar Tag -->
                <div
                  class="modal fade"
                  id="editTagModal"
                  tabindex="-1"
                  role="dialog"
                  aria-labelledby="editTagModalLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="editTagModalLabel">
                          <i data-feather="tag" class="icon-svg-primary wid-20 me-2"></i>Editar tag
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                      </div>
                      <form action="<?= BASE_PATH ?>contTag" method="POST">
                        <div class="modal-body">
                          <small id="emailHelp" class="form-text text-muted mb-2 mt-0">Edita la información correspondiente al formulario.</small>
                          <input type="hidden" name="id" id="editId">
                          <input type="hidden" name="action" value="update_tag">
                          <div class="mb-3">
                            <label class="form-label">Nombre del tag</label>
                            <input
                              type="text"
                              class="form-control"
                              name="name"
                              id="editName"
                              placeholder="Ingresa el nombre"
                            />
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Descripción del tag</label>
                            <input
                              type="text"
                              class="form-control"
                              name="description"
                              id="editDescription"
                              placeholder="Ingresa la descripción"
                            />
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Slug</label>
                            <input
                              type="text"
                              class="form-control"
                              name="slug"
                              id="editSlug"
                              placeholder="Ingresa el slug"
                            />
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-light-danger" data-bs-dismiss="modal">Cerrar</button>
                          <button type="submit" class="btn btn-light-primary">Editar tag</button>
                        </div>
                      </form>
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
                        <th class="border-top-0">Slug</th>
                        <th class="border-top-0">Acción</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach($tag as $lista): ?>
                        <tr>
                          <td><?php echo $lista->name; ?></td>
                          <td><?php echo $lista->description; ?></td>
                          <td><?php echo $lista->slug; ?></td>
                          <td>
                            <a href="<?= BASE_PATH ?>catalogs/tags/details?id=<?= $lista->id; ?>" class="btn btn-sm btn-light-primary">
                              <i class="feather icon-eye"></i>
                            </a>
                            <button type="button" class="btn btn-sm btn-light-success me-1" data-bs-toggle="modal" data-bs-target="#editTagModal" data-id="<?= $lista->id ?>" data-name="<?= $lista->name ?>" data-description="<?= $lista->description ?>" data-slug="<?= $lista->slug ?>">
                              <i class="feather icon-edit"></i>
                            </button>
                            <form action="<?= BASE_PATH ?>contTag" method="POST" style="display:inline;">
                              <input type="hidden" name="action" value="delete_tag">
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
      // Script to load the edit modal with the existing data
      document.querySelectorAll('[data-bs-toggle="modal"]').forEach(button => {
        button.addEventListener('click', (event) => {
          if (event.target.closest('button').getAttribute('data-bs-target') === '#editTagModal') {
            const tagData = event.target.closest('button').dataset;
            document.getElementById('editId').value = tagData.id;
            document.getElementById('editName').value = tagData.name;
            document.getElementById('editDescription').value = tagData.description;
            document.getElementById('editSlug').value = tagData.slug;
          }
        });
      });
    </script>
    <!-- [Page Specific JS] end -->

  </body>
  <!-- [Body] end -->
</html>
