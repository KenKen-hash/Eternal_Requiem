<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Inventory - InApp Inventory Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="apple-touch-icon" sizes="180x180" href="{{  asset ('./assets/images/favicon_io/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset ('./assets/images/favicon_io/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset ('./assets/images/favicon_io/favicon-16x16.png') }}">
  <link rel="manifest" href="{{ asset ('./assets/images/favicon_io/site.webmanifest') }}">
</head>

<body>
  <div id="overlay" class="overlay"></div>
  <!-- TOPBAR -->
  <nav id="topbar" class="navbar bg-white border-bottom fixed-top topbar px-3">
    <button id="toggleBtn" class="d-none d-lg-inline-flex btn btn-light btn-icon btn-sm ">
      <i class="ti ti-layout-sidebar-left-expand"></i>
    </button>

    <!-- MOBILE -->
    <button id="mobileBtn" class="btn btn-light btn-icon btn-sm d-lg-none me-2">
      <i class="ti ti-layout-sidebar-left-expand"></i>
    </button>
    <div>
      <!-- Navbar nav -->
       <ul class="list-unstyled d-flex align-items-center mb-0 gap-1">
        <!-- Pages link -->

        <!-- Bell icon -->
        <li>
          <a class="position-relative btn-icon btn-sm btn-light btn rounded-circle" data-bs-toggle="dropdown"
            aria-expanded="false" href="#" role="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
              class="icon icon-tabler icons-tabler-outline icon-tabler-bell">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
              <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
            </svg>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger mt-2 ms-n2">
              2
              <span class="visually-hidden">unread messages</span>
            </span>
          </a>
          <div class="dropdown-menu dropdown-menu-end dropdown-menu-md p-0">
            <ul class="list-unstyled p-0 m-0">
              <li class="p-3 border-bottom ">
                <div class="d-flex gap-3">
                  <img src="{{ asset ('./assets/images/avatar/avatar-1.jpg') }}" alt="" class="avatar avatar-sm rounded-circle" />
                  <div class="flex-grow-1 small">
                    <p class="mb-0">New order received</p>
                    <p class="mb-1">Order #12345 has been placed</p>
                    <div class="text-secondary">5 minutes ago</div>
                  </div>
                </div>
              </li>
              <li class="p-3 border-bottom ">
                <div class="d-flex gap-3">
                  <img src="{{ asset ('./assets/images/avatar/avatar-4.jpg') }}" alt="" class="avatar avatar-sm rounded-circle" />
                  <div class="flex-grow-1 small">
                    <p class="mb-0">New user registered</p>
                    <p class="mb-1">User @john_doe has signed up</p>
                    <div class="text-secondary">30 minutes ago</div>
                  </div>
              </li>

              <li class="p-3 border-bottom">
                <div class="d-flex gap-3">
                  <img src="{{ asset ('./assets/images/avatar/avatar-2.jpg') }}" alt="" class="avatar avatar-sm rounded-circle" />
                  <div class="flex-grow-1 small">
                    <p class="mb-0">Payment confirmed</p>
                    <p class="mb-1">Payment of $299 has been received</p>
                    <div class="text-secondary">1 hour ago</div>
                  </div>
                </div>
              </li>
              <li class="px-4 py-3 text-center">
                <a href="#" class="text-primary ">View all notifications</a>
              </li>
            </ul>
          </div>
        </li>
        <!-- Dropdown -->
        
      </ul>
    </div>

  </nav>

  <!-- SIDEBAR -->
   <aside id="sidebar" class="sidebar">
    <div class="logo-area">
     <a href="index.html" class="d-inline-flex"><img src="{{ asset ('./assets/images/logo-icon.svg') }}" alt="" width="24">
        <span class="logo-text ms-2"> <img src="{{ asset ('./assets/images/logo.svg') }}" alt=""></span>
      </a>
    </div>
    
    <ul class="nav flex-column">
      <li class="px-4 py-2"><small class="nav-text">Main</small></li>
      <li><a class="nav-link active" href="{{ route ('dashboard') }}"><i class="ti ti-home"></i><span
            class="nav-text">Dashboard</span></a></li>
      <li><a class="nav-link" href="{{ route ('plot-management') }}"><i class="ti ti-box-seam"></i><span
            class="nav-text">Plot Management</span></a></li>
      <li><a class="nav-link" href="{{ route ('occupied-plot') }}"><i class="ti ti-plus"></i><span class="nav-text">
            Occupied Plot</span></a></li>
    <li><a class="nav-link" href="{{ route ('available-plot') }}"><i class="ti ti-receipt"></i><span class="nav-text">Available Plot</span></a>
      </li>
    <li><a class="nav-link" href="{{ route ('burial-records') }}"><i class="ti ti-alert-circle"></i><span class="nav-text">Burial Records</span></a>
      </li>
      <li><a class="nav-link" href="{{ route ('reports') }}"><i class="ti ti-file-text"></i><span class="nav-text">Reports</span></a></li>
      <li><a class="nav-link" href="{{ route ('settings') }}"><i class="ti ti-file-text"></i><span class="nav-text">Settings</span></a></li>


     
    </ul>

  </aside>
  <!-- MAIN CONTENT -->
 <main id="content" class="content py-10">
    <div class="container-fluid">

        <!-- Page Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="fw-bold mb-1">Plot Management</h2>
                <p class="text-secondary mb-0">
                    Manage cemetery plots, monitor availability, and assign owners.
                </p>
            </div>

            <button class="btn btn-success">
                <i class="ti ti-plus me-2"></i>
                Add Plot
            </button>
        </div>

        <!-- Statistics -->
        <div class="row g-3 mb-4">

            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body d-flex align-items-center">
                        <div class="icon-shape bg-primary text-white rounded-3 me-3">
                            <i class="ti ti-map-pin fs-3"></i>
                        </div>
                        <div>
                            <small class="text-secondary">Total Plots</small>
                            <h3 class="mb-0">1,250</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body d-flex align-items-center">
                        <div class="icon-shape bg-success text-white rounded-3 me-3">
                            <i class="ti ti-circle-check fs-3"></i>
                        </div>
                        <div>
                            <small class="text-secondary">Available</small>
                            <h3 class="mb-0 text-success">485</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body d-flex align-items-center">
                        <div class="icon-shape bg-danger text-white rounded-3 me-3">
                            <i class="ti ti-cross fs-3"></i>
                        </div>
                        <div>
                            <small class="text-secondary">Occupied</small>
                            <h3 class="mb-0 text-danger">720</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body d-flex align-items-center">
                        <div class="icon-shape bg-warning text-white rounded-3 me-3">
                            <i class="ti ti-bookmark fs-3"></i>
                        </div>
                        <div>
                            <small class="text-secondary">Reserved</small>
                            <h3 class="mb-0 text-warning">45</h3>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Search -->
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body">

                <div class="row g-3">

                    <div class="col-lg-5">
                        <input type="text"
                               class="form-control"
                               placeholder="Search Plot Number or Owner">
                    </div>

                    <div class="col-lg-2">
                        <select class="form-select">
                            <option>Section</option>
                            <option>A</option>
                            <option>B</option>
                            <option>C</option>
                        </select>
                    </div>

                    <div class="col-lg-2">
                        <select class="form-select">
                            <option>Status</option>
                            <option>Available</option>
                            <option>Occupied</option>
                            <option>Reserved</option>
                        </select>
                    </div>

                    <div class="col-lg-3 d-flex gap-2">
                        <button class="btn btn-primary w-100">
                            Search
                        </button>

                        <button class="btn btn-light border">
                            Reset
                        </button>
                    </div>

                </div>

            </div>
        </div>

        <!-- Plot Table -->
        <div class="card border-0 shadow-sm">

            <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">

                <div>
                    <h5 class="mb-0">Cemetery Plots</h5>
                    <small class="text-secondary">Showing all registered plots</small>
                </div>

                <button class="btn btn-outline-primary btn-sm">
                    <i class="ti ti-layout-grid me-1"></i>
                    Map View
                </button>

            </div>

            <div class="table-responsive">

                <table class="table align-middle mb-0">

                    <thead class="table-light">
                        <tr>
                            <th>Plot No.</th>
                            <th>Section</th>
                            <th>Type</th>
                            <th>Owner</th>
                            <th>Status</th>
                            <th>Burial Date</th>
                            <th width="120">Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td><strong>A-001</strong></td>
                            <td>Section A</td>
                            <td>Lawn Lot</td>
                            <td>-</td>
                            <td>
                                <span class="badge bg-success">
                                    Available
                                </span>
                            </td>
                            <td>-</td>
                            <td>
                                <button class="btn btn-sm btn-light">
                                    <i class="ti ti-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-light">
                                    <i class="ti ti-edit"></i>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td><strong>A-002</strong></td>
                            <td>Section A</td>
                            <td>Lawn Lot</td>
                            <td>Juan Dela Cruz</td>
                            <td>
                                <span class="badge bg-danger">
                                    Occupied
                                </span>
                            </td>
                            <td>March 18, 2023</td>
                            <td>
                                <button class="btn btn-sm btn-light">
                                    <i class="ti ti-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-light">
                                    <i class="ti ti-edit"></i>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td><strong>B-014</strong></td>
                            <td>Section B</td>
                            <td>Family Lot</td>
                            <td>Maria Santos</td>
                            <td>
                                <span class="badge bg-warning text-dark">
                                    Reserved
                                </span>
                            </td>
                            <td>-</td>
                            <td>
                                <button class="btn btn-sm btn-light">
                                    <i class="ti ti-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-light">
                                    <i class="ti ti-edit"></i>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td><strong>C-020</strong></td>
                            <td>Section C</td>
                            <td>Mausoleum</td>
                            <td>Pedro Reyes</td>
                            <td>
                                <span class="badge bg-danger">
                                    Occupied
                                </span>
                            </td>
                            <td>July 10, 2021</td>
                            <td>
                                <button class="btn btn-sm btn-light">
                                    <i class="ti ti-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-light">
                                    <i class="ti ti-edit"></i>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td><strong>D-006</strong></td>
                            <td>Section D</td>
                            <td>Apartment Type</td>
                            <td>-</td>
                            <td>
                                <span class="badge bg-success">
                                    Available
                                </span>
                            </td>
                            <td>-</td>
                            <td>
                                <button class="btn btn-sm btn-light">
                                    <i class="ti ti-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-light">
                                    <i class="ti ti-edit"></i>
                                </button>
                            </td>
                        </tr>

                    </tbody>

                </table>

            </div>

            <div class="card-footer bg-white d-flex justify-content-between align-items-center">

                <small class="text-secondary">
                    Showing 1–5 of 1,250 plots
                </small>

                <nav>
                    <ul class="pagination pagination-sm mb-0">
                        <li class="page-item disabled">
                            <a class="page-link">Previous</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link">Next</a>
                        </li>
                    </ul>
                </nav>

            </div>

        </div>

    </div>
</main>











  <!-- Bootstrap JS -->
  <script src="{{ asset ('./assets/js/main.js') }}" type="module"></script>
    @vite(['resources/js/app.js'])


</body>

</html>