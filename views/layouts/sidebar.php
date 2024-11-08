<!-- [ Pre-loader ] start -->
    <div class="loader-bg">
      <div class="loader-track">
        <div class="loader-fill"></div>
      </div>
    </div>
    <!-- [ Pre-loader ] End -->
     <!-- [ Sidebar Menu ] start -->
    <nav class="pc-sidebar">
      <div class="navbar-wrapper">
        <div class="m-header">
          <a href="index.html" class="b-brand text-primary">
            <!-- ========   Change your logo from here   ============ -->
            <img src="<?= BASE_PATH ?>assets/images/logo-dark.svg" alt="logo image" class="logo-lg" />
            <span class="badge bg-brand-color-2 rounded-pill ms-2 theme-version">v1.2.0</span>
          </a>
        </div>
        <div class="navbar-content">
          <ul class="pc-navbar">
            <li class="pc-item pc-caption">
              <label>Navigation</label>
              <i class="ph-duotone ph-gauge"></i>
            </li>
            <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link">
                <span class="pc-micon">
                  <i class="ph-duotone ph-gauge"></i>
                </span>
                <span class="pc-mtext">Dashboard</span>
                <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                <span class="pc-badge">2</span>
              </a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="index.html">Analytics</a></li>
                <li class="pc-item"><a class="pc-link" href="affiliate.html">Affiliate</a></li>
                <li class="pc-item"><a class="pc-link" href="finance.html">Finance</a></li>
                <li class="pc-item"><a class="pc-link" href="../admins/helpdesk-dashboard.html">Helpdesk</a></li>
                <li class="pc-item"><a class="pc-link" href="invoice.html">Invoice</a></li>
              </ul>
            </li>
            <li class="pc-item pc-caption">
              <label>Widget</label>
              <i class="ph-duotone ph-chart-pie"></i>
            </li>
            <li class="pc-item">
              <a href="../widget/w_user.html" class="pc-link">
                <span class="pc-micon">
                  <i class="ph-duotone ph-identification-card"></i>
                </span>
                <span class="pc-mtext">User</span>
              </a>
            </li>
            <li class="pc-item pc-caption">
              <label>Application</label>
              <i class="ph-duotone ph-buildings"></i>
            </li>
            <li class="pc-item">
              <a href="../application/calendar.html" class="pc-link">
                <span class="pc-micon">
                  <i class="ph-duotone ph-calendar-blank"></i>
                </span>
                <span class="pc-mtext">Calendar</span></a
              >
            </li>
            <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link">
                <span class="pc-micon">
                  <i class="ph-duotone ph-shopping-cart"></i>
                </span>
                <span class="pc-mtext">E-commerce</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
              ></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>products">Productos</a></li>
                <li class="pc-item"><a class="pc-link" href="../application/ecom_product-details.html">Product details</a></li>
                <li class="pc-item"><a class="pc-link" href="../application/ecom_product-list.html">Product List</a></li>
                <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>products/create">Agregar nuevo producto</a></li>
                <li class="pc-item"><a class="pc-link" href="../application/ecom_checkout.html">Checkout</a></li>
              </ul>
            </li>
            <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link">
                <span class="pc-micon">
                  <i class="ph-duotone ph-user-circle"></i>
                </span>
                <span class="pc-mtext">Users</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
              ></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="../application/account-profile.html">Account Profile</a></li>
                <li class="pc-item"><a class="pc-link" href="../application/social-media.html">Social media</a></li>
                <li class="pc-item"><a class="pc-link" href="../application/user-card.html">User Card</a></li>
                <li class="pc-item"><a class="pc-link" href="../application/user-list.html">User List</a></li>
                <li class="pc-item"><a class="pc-link" href="../application/team.html">Team</a></li>
              </ul>
            </li>

            <li class="pc-item pc-caption">
              <label>Pages</label>
              <i class="ph-duotone ph-devices"></i>
            </li>
            <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link">
                <span class="pc-micon">
                  <i class="ph-duotone ph-shield-checkered"></i>
                </span>
                <span class="pc-mtext">Authentication</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
              ></a>
              <ul class="pc-submenu">
                <li class="pc-item pc-hasmenu">
                  <a href="#!" class="pc-link"
                    >Authentication 1<span class="pc-arrow"><i data-feather="chevron-right"></i></span
                  ></a>
                  <ul class="pc-submenu">
                    <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/login-v1.html">Login</a></li>
                    <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/register-v1.html">Register</a></li>
                    <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/forgot-password-v1.html">Forgot Password</a></li>
                    <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/reset-password-v1.html">reset password</a> </li>
                    <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/code-verification-v1.html">code verification</a></li>
                  </ul>
                </li>
                <li class="pc-item pc-hasmenu">
                  <a href="#!" class="pc-link"
                    >Authentication 2<span class="pc-arrow"><i data-feather="chevron-right"></i></span
                  ></a>
                  <ul class="pc-submenu">
                    <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/login-v2.html">Login</a></li>
                    <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/register-v2.html">Register</a></li>
                    <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/forgot-password-v2.html">Forgot password</a> </li>
                    <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/reset-password-v2.html">reset password</a> </li>
                    <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/code-verification-v2.html">code verification</a></li>
                  </ul>
                </li>
                <li class="pc-item"><a class="pc-link" href="../pages/login-modal.html">Login Modal</a></li>
              </ul>
            </li>
        </div>
        <div class="card pc-user-card">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="flex-shrink-0">
                <img src="<?= BASE_PATH ?>assets/images/user/avatar-1.jpg" alt="user-image" class="user-avtar wid-45 rounded-circle" />
              </div>
              <div class="flex-grow-1 ms-3">
                <div class="dropdown">
                  <a href="#" class="arrow-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="0,20">
                    <div class="d-flex align-items-center">
                      <div class="flex-grow-1 me-2">
                        <h6 class="mb-0">Jonh Smith</h6>
                        <small>Administrator</small>
                      </div>
                      <div class="flex-shrink-0">
                        <div class="btn btn-icon btn-link-secondary avtar">
                          <i class="ph-duotone ph-windows-logo"></i>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="dropdown-menu">
                    <ul>
                      <li>
                        <a class="pc-user-links">
                          <i class="ph-duotone ph-user"></i>
                          <span>My Account</span>
                        </a>
                      </li>
                      <li>
                        <a class="pc-user-links">
                          <i class="ph-duotone ph-gear"></i>
                          <span>Settings</span>
                        </a>
                      </li>
                      <li>
                        <a class="pc-user-links">
                          <i class="ph-duotone ph-lock-key"></i>
                          <span>Lock Screen</span>
                        </a>
                      </li>
                      <li>
                        <a class="pc-user-links">
                          <i class="ph-duotone ph-power"></i>
                          <span>Logout</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- [ Sidebar Menu ] end -->