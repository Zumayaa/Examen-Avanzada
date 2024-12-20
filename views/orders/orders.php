<?php 
  include_once "../../app/config.php";

?>

<?php 
  include_once "../../app/OrderController.php";
  $orderController = new OrderController();
  $ordenes = $orderController->getAllOrders();

?>

<?php 
  include_once "../../app/ProductController.php";
  $productController = new ProductController();
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
                  <li class="breadcrumb-item"><a href="<?= BASE_PATH ?>orders">Ordenes</a></li>
                  <li class="breadcrumb-item" aria-current="page">Todos las ordenes</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Ordenes</h2>
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
                <h5>Ordenes</h5>
                <div class="card-header-right d-flex align-items-center">
                  <button type="button" class="btn btn-light-warning m-0 me-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Agregar cupones
                  </button>
                  <input type="date" class="form-control w-auto" />
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
                            ><i data-feather="user" class="icon-svg-primary wid-20 me-2"></i>Agregar ordenes</h5
                          >
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                        </div>
                        <form>
                          <div class="modal-body">
                            <small id="emailHelp" class="form-text text-muted mb-2 mt-0"
                              >Agrega la información correspondiente al formulario.</small
                            >
                            <div class="mb-3">
                              <label class="form-label">Nombre de la orden</label>
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
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-light-danger" data-bs-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-light-primary">Agregar orden</button>
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
                            ><i data-feather="user" class="icon-svg-primary wid-20 me-2"></i>Editar orden</h5
                          >
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                        </div>
                        <form>
                          <div class="modal-body">
                            <small id="emailHelp" class="form-text text-muted mb-2 mt-0"
                              >Agrega la información correspondiente al formulario.</small
                            >
                            <div class="mb-3">
                              <label class="form-label">Nombre del orden</label>
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
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-light-danger" data-bs-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-light-primary">Editar orden</button>
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
                        <th class="border-top-0">Folio</th>
                        <th class="border-top-0">Total</th>
                        <th class="border-top-0">Nombre</th>
                        <th class="border-top-0">Direcciones</th>
                        <th class="border-top-0">Correo</th>
                        <th class="border-top-0">Accion</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach($ordenes as $lista): ?>
                      <tr>
                        <td> <?php echo $lista->folio; ?> </td>
                        <td> $<?php echo $lista->total; ?> </td>
                        
                        <td> <?php 
                          if (isset($lista->client->name)) {
                            echo $lista->client->name; 
                          } else {
                              echo "Client name not available"; 
                          }
                          ?> 
                        </td>

                        <td> <?php echo $lista->address->street_and_use_number; ?> </td>

                        <td> <?php 
                          if (isset($lista->client->email)) {
                            echo $lista->client->email;
                          } else {
                              echo "Client gmail not available"; 
                          }
                          ?> 
                        </td>
                      
                        <td>
                          <a href="<?= BASE_PATH ?>orders/details" class="btn btn-sm btn-light-primary"><i class="feather icon-eye"></i></a>
                          <button type="button" class="btn btn-sm btn-light-success me-1" data-bs-toggle="modal" data-bs-target="#editModal">
                            <i class="feather icon-edit"></i>
                          </button>
                          <form action="<?= BASE_PATH ?>contOrders" method="POST" style="display:inline;">
                              <input type="hidden" name="action" value="delete_order">
                              <input type="hidden" name="id" value="<?= $lista->id; ?>">
                              <button type="submit" class="btn btn-sm btn-light-danger">
                                <i class="feather icon-trash-2"></i>
                              </button>
                          </form>
                        </td>
                      </tr>
                    <?php  endforeach ?>
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
