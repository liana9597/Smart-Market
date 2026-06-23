<!DOCTYPE html>
<html
  lang="id"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{ asset('assets') }}/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>@yield('title') - Smart Market</title>

    <meta name="description" content="Aplikasi pengelolaan stok Smart Market" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/logo.png') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon packs -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets/js/config.js') }}"></script>

    <style>
      :root {
        --primary-navy: #0c2340;
        --secondary-gold: #c5a059;
        --light-cream: #fcfaf2;
        --soft-cream: #f8f6f0;
      }
      
      body {
        background-color: var(--soft-cream) !important;
      }
      
      /* Primary buttons */
      .btn-primary {
        background-color: var(--primary-navy) !important;
        border-color: var(--primary-navy) !important;
        box-shadow: 0 0.125rem 0.25rem 0 rgba(12, 35, 64, 0.3) !important;
        color: #fff !important;
      }
      .btn-primary:hover, .btn-primary:focus, .btn-primary:active {
        background-color: #14355a !important;
        border-color: #14355a !important;
        color: #fff !important;
      }
      
      /* Outline Primary buttons */
      .btn-outline-primary {
        color: var(--primary-navy) !important;
        border-color: var(--primary-navy) !important;
      }
      .btn-outline-primary:hover, .btn-outline-primary:focus, .btn-outline-primary:active {
        background-color: var(--primary-navy) !important;
        border-color: var(--primary-navy) !important;
        color: #fff !important;
      }
      
      /* Text colors */
      .text-primary {
        color: var(--primary-navy) !important;
      }
      
      /* Active menu styles */
      .menu-vertical .menu-item.active > .menu-link:not(.menu-toggle) {
        background-color: rgba(12, 35, 64, 0.08) !important;
        color: var(--primary-navy) !important;
      }
      
      .menu-vertical .menu-item.active:not(.menu-header) > .menu-link {
        color: var(--primary-navy) !important;
      }
      
      .menu-vertical .menu-item.active > .menu-link::before {
        background-color: var(--secondary-gold) !important;
      }
      
      /* App brand area style */
      .app-brand-text {
        color: var(--primary-navy) !important;
      }
      
      /* Navbar highlights */
      .bg-navbar-theme {
        border-bottom: 2px solid var(--secondary-gold) !important;
      }
      
      /* Table headers & details */
      .table th {
        color: var(--primary-navy) !important;
        text-transform: uppercase;
        font-size: 0.75rem;
        letter-spacing: 1px;
      }
      
      /* Badges */
      .bg-label-primary {
        background-color: rgba(12, 35, 64, 0.08) !important;
        color: var(--primary-navy) !important;
      }
      
      .bg-label-info {
        background-color: rgba(12, 35, 64, 0.05) !important;
        color: var(--primary-navy) !important;
        border: 1px solid rgba(12, 35, 64, 0.15);
      }
    </style>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu (Sidebar) -->
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo" style="height: 84px;">
            <a href="{{ route('products.index') }}" class="app-brand-link">
              <span class="app-brand-logo demo">
                <!-- Custom Monogram SM Inspired Logo SVG -->
                <img src="{{ asset('assets/img/favicon/logo.png') }}" alt="Logo" width="38" height="26">
                  <!-- Monogram S -->
                  <path d="M 45 40 C 32 40, 29 48, 29 55 C 29 67, 55 63, 55 75 C 55 83, 44 88, 34 83" fill="none" stroke="#0c2340" stroke-width="10" stroke-linecap="round" />
                  <!-- Monogram M -->
                  <path d="M 52 82 L 52 42 L 68 64 L 84 42 L 84 82" fill="none" stroke="#0c2340" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" />
                  <!-- Gold Leaf wrapping on the right -->
                  <path d="M 87 75 C 89 62, 102 57, 104 43 C 96 53, 90 62, 87 75 Z" fill="#c5a059" />
                  <!-- Small Gold Stars -->
                  <path d="M 96 32 L 98 34 L 101 34 L 99 36 L 100 39 L 98 37 L 96 39 L 97 36 L 95 34 L 98 34 Z" fill="#c5a059" />
                  <path d="M 103 20 L 104 21 L 106 21 L 105 22 L 105 24 L 104 23 L 103 24 L 104 22 L 103 21 L 104 21 Z" fill="#c5a059" />
                  <path d="M 90 45 L 91 46 L 93 46 L 92 47 L 92 49 L 91 48 L 90 49 L 91 47 L 90 46 L 91 46 Z" fill="#c5a059" />
                </svg>
              </span>
              <div class="d-flex flex-column ms-2">
                <span class="app-brand-text demo menu-text fw-bold text-uppercase" style="font-size: 0.95rem; letter-spacing: 0.5px; color: #0c2340; line-height: 1.2;">Smart Market</span>
              </div>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Products Link -->
            <li class="menu-item {{ Request::routeIs('products.*') ? 'active' : '' }}">
              <a href="{{ route('products.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="Products">Produk</div>
              </a>
            </li>

            <!-- Categories Link -->
            <li class="menu-item {{ Request::routeIs('categories.*') ? 'active font-bold' : '' }}">
              <a href="{{ route('categories.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-category"></i>
                <div data-i18n="Categories">Kategori</div>
              </a>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Title Placeholder or Breadcrumb -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <span class="fw-semibold text-muted">Aplikasi Inventaris Smart Market</span>
                </div>
              </div>

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- User Profile -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="{{ asset('assets/img/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="{{ asset('assets/img/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">Admin Toko</span>
                            <small class="text-muted">Administrator</small>
                          </div>
                        </div>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User Profile -->
              </ul>
            </div>
          </nav>
          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              @yield('content')
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0 text-muted">
                  © {{ date('Y') }} <strong>Smart Market</strong>. Dibuat dengan template Sneat.
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
  </body>
</html>
