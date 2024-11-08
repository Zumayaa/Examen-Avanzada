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
                  <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                  <li class="breadcrumb-item"><a href="javascript: void(0)">E-commerce</a></li>
                  <li class="breadcrumb-item" aria-current="page">Add New Product</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Add New Product</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <!-- [ Main Content ] start -->
        <div class="row">
          <!-- [ sample-page ] start -->
          <div class="col-xl-6">
            <div class="card">
              <div class="card-header">
                <h5>Product description</h5>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <label class="form-label">Product Name</label>
                  <input type="text" class="form-control" placeholder="Enter Product Name" />
                </div>
                <div class="mb-3">
                  <label class="form-label">Category</label>
                  <select class="form-select">
                    <option>Sneakers</option>
                    <option>Category 1</option>
                    <option>Category 2</option>
                    <option>Category 3</option>
                    <option>Category 4</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label class="form-label">Brand</label>
                  <select class="form-select">
                    <option>Nike</option>
                    <option>Category 1</option>
                    <option>Category 2</option>
                    <option>Category 3</option>
                    <option>Category 4</option>
                  </select>
                </div>
                <div class="mb-0">
                  <label class="form-label">Product Description</label>
                  <textarea class="form-control" placeholder="Enter Product Description"></textarea>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h5>Pricing</h5>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="form-label d-flex align-items-center"
                        >Price <i class="ph-duotone ph-info ms-1" data-bs-toggle="tooltip" data-bs-title="Price"></i
                      ></label>
                      <div class="input-group mb-3">
                        <span class="input-group-text">$</span>
                        <input type="text" class="form-control" placeholder="Price" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="form-label d-flex align-items-center"
                        >Compare at price <i class="ph-duotone ph-info ms-1" data-bs-toggle="tooltip" data-bs-title="Compare at price"></i
                      ></label>
                      <div class="input-group mb-3">
                        <span class="input-group-text">$</span>
                        <input type="text" class="form-control" placeholder="Compare at price" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-check mb-3">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedtax" checked />
                      <label class="form-check-label" for="flexCheckCheckedtax"> Including all tax </label>
                    </div>
                    <div class="mb-0">
                      <label class="form-label d-flex align-items-center"
                        >Cost per items <i class="ph-duotone ph-info ms-1" data-bs-toggle="tooltip" data-bs-title="Cost per items"></i
                      ></label>
                      <div class="input-group mb-0">
                        <span class="input-group-text">$</span>
                        <input type="text" class="form-control" placeholder="Cost per items" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h5>Inventory</h5>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <label class="form-label">Quantity</label>
                  <input type="text" class="form-control" placeholder="Enter Quantity" />
                </div>
                <div class="mb-0">
                  <label class="form-label">SKU <span class="text-sm text-muted">(optional)</span></label>
                  <input type="text" class="form-control" placeholder="Enter SKU" />
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="card">
              <div class="card-header">
                <h5>Selling type</h5>
              </div>
              <div class="card-body">
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" id="Checkselling1" checked />
                  <label class="form-check-label" for="Checkselling1"> In-store selling only </label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" id="Checkselling2" />
                  <label class="form-check-label" for="Checkselling2"> Online Selling only </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="Checkselling3" />
                  <label class="form-check-label" for="Checkselling3"> Available both in-store and online </label>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h5>Variant</h5>
              </div>
              <div class="card-body">
                <input
                  class="form-control"
                  id="choices-text-remove-button"
                  type="text"
                  value="Product variants,variants 2"
                  placeholder="Enter something"
                />
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h5>Select size</h5>
              </div>
              <div class="card-body">
                <div class="row g-2">
                  <div class="col-auto">
                    <input type="radio" class="btn-check" id="btnrdolite1" name="btn_radio2" checked="" />
                    <label class="btn btn-sm btn-light-primary" for="btnrdolite1">34</label>
                  </div>
                  <div class="col-auto">
                    <input type="radio" class="btn-check" id="btnrdolite2" name="btn_radio2" />
                    <label class="btn btn-sm btn-light-primary" for="btnrdolite2">36</label>
                  </div>
                  <div class="col-auto">
                    <input type="radio" class="btn-check" id="btnrdolite3" name="btn_radio2" />
                    <label class="btn btn-sm btn-light-primary" for="btnrdolite3">38</label>
                  </div>
                  <div class="col-auto">
                    <input type="radio" class="btn-check" id="btnrdolite4" name="btn_radio2" />
                    <label class="btn btn-sm btn-light-primary" for="btnrdolite4">40</label>
                  </div>
                  <div class="col-auto">
                    <input type="radio" class="btn-check" id="btnrdolite5" name="btn_radio2" />
                    <label class="btn btn-sm btn-light-primary" for="btnrdolite5">42</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h5>Product image</h5>
              </div>
              <div class="card-body">
                <div class="mb-0">
                  <p><span class="text-danger">*</span> Recommended resolution is 640*640 with file size</p>
                  <label class="btn btn-outline-secondary" for="flupld"><i class="ti ti-upload me-2"></i> Click to Upload</label>
                  <input type="file" id="flupld" class="d-none" />
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h5>Shipping and Delivery</h5>
              </div>
              <div class="card-body">
                <div class="mb-0">
                  <label class="form-label">Items Weight</label>
                  <select class="form-select">
                    <option>12.00</option>
                    <option>Category 1</option>
                    <option>Category 2</option>
                    <option>Category 3</option>
                    <option>Category 4</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h5>Status</h5>
              </div>
              <div class="card-body">
                <div class="row g-2">
                  <div class="col-auto">
                    <input type="radio" class="btn-check" id="btnrdolite11" name="btn_radio12" checked="" />
                    <label class="btn btn-sm btn-light-success" for="btnrdolite11">Active</label>
                  </div>
                  <div class="col-auto">
                    <input type="radio" class="btn-check" id="btnrdolite12" name="btn_radio12" />
                    <label class="btn btn-sm btn-light-primary" for="btnrdolite12">Processing</label>
                  </div>
                  <div class="col-auto">
                    <input type="radio" class="btn-check" id="btnrdolite13" name="btn_radio12" />
                    <label class="btn btn-sm btn-light-danger" for="btnrdolite13">Close</label>
                  </div>
                  <div class="col-auto">
                    <input type="radio" class="btn-check" id="btnrdolite14" name="btn_radio12" />
                    <label class="btn btn-sm btn-light-warning" for="btnrdolite14">Pending</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="card">
              <div class="card-body text-end btn-page">
                <button class="btn btn-primary mb-0">Save product</button>
                <button class="btn btn-outline-secondary mb-0">Reset</button>
              </div>
            </div>
          </div>
          <!-- [ sample-page ] end -->
        </div>
        <!-- [ Main Content ] end -->
      </div>
    </div>
    <!-- [ Main Content ] end -->
    
    <?php 

      include "../layouts/footer.php";

    ?> 
<?php 

      include "../layouts/scripts.php";

    ?>

    <?php 

      include "../layouts/modals.php";

    ?>

  </body>
  <!-- [Body] end -->
</html>
